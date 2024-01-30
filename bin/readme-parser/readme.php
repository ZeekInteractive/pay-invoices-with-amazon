<?php

use Michelf\MarkdownExtra;

require __DIR__ . '/MarkdownExtra.inc.php';

libxml_use_internal_errors( true );

/**
 * readme.txt: General documentation.
 */
$readme_txt = file_get_contents( dirname( __DIR__, 2 ) . '/readme.txt' );

// Textile headings.
$patterns = [
	'/=== PIWA ===/m',
	'/^=== ([^\n]+) ===\s*/m',    // Matches '=== Heading ===' (excluding newline characters)
	'/^== ([^\n]+) ==\s*/m',      // Matches '== Heading ==' (excluding newline characters)
	'/^= ([^\n]+) =\s*/m',        // Matches '= Heading =' (excluding newline characters)
];

$replacements = [
	'<h1>Pay Invoices with Amazon</h1>',
	'<h1>$1</h1>' . PHP_EOL,
	'<h2>$1</h2>' . PHP_EOL,
	'<h3>$1</h3>' . PHP_EOL,
];

$readme_txt = preg_replace( $patterns, $replacements, $readme_txt );

$readme_txt = MarkdownExtra::defaultTransform( $readme_txt );

// Format header containing "Plugin Name:" etc.
$dom = new DOMDocument();
$dom->loadHTML( sprintf( '<?xml encoding="utf-8" ?><article>%s</article>', $readme_txt ) );

$xpath  = new DOMXPath( $dom );
$p_tags = $xpath->query( '//p' );

foreach ( $p_tags as $paragraph ) {
	if ( false !== strpos( $paragraph->nodeValue, 'Plugin Name:' ) ) {
		modify_paragraph( $dom, $paragraph );
	}
	if ( strpos( $paragraph->nodeValue, 'The plugin includes:' ) !== false ) {
		$lines = explode( "\n", $paragraph->nodeValue );
		$ul    = $dom->createElement( 'ul' );

		foreach ( $lines as $line ) {
			if ( strpos( $line, '- ' ) === 0 ) {
				$li = $dom->createElement( 'li', trim( substr( $line, 2 ) ) );
				$ul->appendChild( $li );
			} else {
				$p = $dom->createElement( 'p', trim( $line ) );
				$paragraph->parentNode->insertBefore( $p, $paragraph );
			}
		}

		$paragraph->parentNode->replaceChild( $ul, $paragraph );
	}
}

inject_screenshots( $dom );
remove_changelog_and_after( $dom );

ob_start();
echo $dom->saveHTML();

/**
 * readme.md: Developer notes.
 */
?>
<h1>Developer Notes</h1>
<?php
echo MarkdownExtra::defaultTransform( file_get_contents( dirname( __DIR__, 2 ) . '/readme.md' ) );

echo str_replace(
	'</article></body></html>',
	'</article>',
	prepend_url_to_hrefs( ob_get_clean(), 'https://github.com/ZeekInteractive/piwa/blob/main/' )
);

echo get_css();
echo '</body></html>';

function prepend_url_to_hrefs( $html, $url ) {
	return preg_replace_callback(
		'/href="([^"]*)"/i',
		function ( $matches ) use ( $url ) {
			if ( substr( $matches[1], 0, 4 ) !== 'http' && substr( $matches[1], 0, 1 ) !== '/' ) {
				return 'target="_blank" href="' . $url . $matches[1] . '"';
			} else {
				return $matches[0];
			}
		},
		$html
	);
}

function modify_paragraph( $dom, $node ) {
	// Get the modified content from the format_plugin_meta function
	$formatted_content = format_plugin_meta( $node->nodeValue );

	// Load the modified content into a new DOMDocument
	$new_dom = new DOMDocument();
	$new_dom->loadHTML( $formatted_content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD );

	// Import the modified content into the original DOMDocument
	$imported_node = $dom->importNode( $new_dom->documentElement, true );

	// Find the <h1> node that to insert new content after.
	$h1 = $node->previousSibling;

	// Insert the new content immediately after the <h1> node.
	$node->parentNode->insertBefore( $imported_node, $h1->nextSibling );

	// Remove the original <p> node.
	$node->parentNode->removeChild( $node );
}

function format_plugin_meta( $text ) {
	$lines = preg_split( '/(?=\s(?:Plugin Name|Author|Author URI|Plugin URI|Contributors|Tags|Stable tag|Requires at least|Tested up to|Requires PHP|Text Domain|Domain Path|License|License URI))/', $text );

	$list_items = '';

	foreach ( $lines as $line ) {
		// Plugin Name.
		$line = str_replace( 'Plugin Name: PIWA', 'Plugin Name: Pay Invoices with Amazon', $line );
		// Link URLs.
		$line = preg_replace( '/\bhttps?:\/\/\S+/', '<a href="$0">$0</a>', $line );
		// Link languages directory.
		$line = str_replace( '/languages', '<a href="languages">/languages</a>', $line );

		// Link profiles.
		if ( false !== strpos( $line, 'Contributors' ) ) {
			$contributors = explode( ', ', explode( ': ', $line )[1] );
			foreach ( $contributors as $key => $contributor ) {
				$contributors[ $key ] = sprintf(
					'<a href="https://profiles.wordpress.org/%s" target="_blank">%s</a>',
					$contributor,
					$contributor
				);
			}
			$line = sprintf(
				'Contributors: %s',
				implode( ', ', $contributors )
			);
		}
		// Bold names before colons.
		$line = preg_replace( '/^([^:]+):/', '<strong>$1:</strong>', $line );

		$list_items .= sprintf( '<li>%s</li>', $line );
	}

	return sprintf( '<ul>%s</ul>', $list_items );
}

function inject_screenshots( $dom ) {
	$xpath   = new DOMXPath( $dom );
	$h2_tags = $xpath->query( '//h2' );

	foreach ( $h2_tags as $h2 ) {
		if ( $h2->nodeValue == 'Screenshots' ) {
			$ol = $xpath->query( 'following-sibling::ol[1]', $h2 )->item( 0 );
			if ( ! $ol ) {
				return;
			}

			$ol->setAttribute( 'class', 'screenshots' );

			$li_tags = $xpath->query( 'li', $ol );
			$index   = 1;
			foreach ( $li_tags as $li ) {
				$img = $dom->createElement( 'img' );
				$img->setAttribute(
					'src',
					sprintf(
						'data:image/png;base64,%s',
						base64_encode(
							file_get_contents(
								sprintf(
									'%s/assets/screenshot-%s.png',
									dirname( __DIR__, 2 ),
									$index
								)
							)
						)
					)
				);
				$li->appendChild( $img );
				++$index;
			}
			break;
		}
	}
}

function remove_changelog_and_after( $dom ) {
	$xpath   = new DOMXPath( $dom );
	$h2_tags = $xpath->query( '//h2' );

	foreach ( $h2_tags as $h2 ) {
		if ( $h2->nodeValue == 'Changelog' ) {
			while ( $h2->nextSibling ) {
				$h2->parentNode->removeChild( $h2->nextSibling );
			}
			$h2->parentNode->removeChild( $h2 );
			break;
		}
	}
}

function get_css() {
	$readme_css = __DIR__ . '/readme.css';
	if ( file_exists( $readme_css ) ) {
		$readme_css_contents = file_get_contents( $readme_css );
	} else {
		$readme_css_contents = file_get_contents( 'https://cdn.jsdelivr.net/npm/water.css@2/out/light.css' );
		file_put_contents( $readme_css, $readme_css_contents );
	}
	ob_start();
	?>
ol.screenshots {
	list-style-type:none !important;
	font-weight: 700;
}
ol.screenshots li {
	text-align: left;
}
ol.screenshots img {
	max-height: 40vh;
	width: auto;
	margin-bottom: 30px;
	margin-top: 5px;
	margin-left: 0;
	text-align:left;
	display:block;
}

pre {
	padding: 30px;
	background-color: rgba( 0,0,0, .2);
	white-space: pre-wrap;
}
	<?php
	$readme_css_contents .= ob_get_clean();

	return sprintf(
		'<style>%s</style>',
		$readme_css_contents
	);
}
