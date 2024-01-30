<?php

$phpcs = json_decode( file_get_contents( 'php://stdin' ), true );

$commands_by_source = [];
$sources_by_line    = [];
$commentary         = ! in_array( '--execute', $argv, true );

// Multiple source messages on a single line must be separated by commas.
foreach ( $phpcs['files'] as $file => $info ) {
	foreach ( $info['messages'] as $message ) {
		$sources_by_line[ $file . ':' . $message['line'] ][] = $message['source'];
	}
}

foreach ( $sources_by_line as $file_and_line => $sources ) {
	$source          = implode( ',', array_unique( $sources ) );
	[ $file, $line ] = explode( ':', $file_and_line );
	// Comment on comments must not be preceeded by an additional "//".
	$maybe_a_comment = ( 'Squiz.PHP.CommentedOutCode.Found' === $source ) ? '' : '// ';

	$commands_by_source[ $source ][] = sprintf(
		'sed -i \'\' \'%ss|$| %sphpcs:ignore %s|\' "%s"' . PHP_EOL,
		(int) $line,
		$maybe_a_comment,
		$source,
		str_replace( dirname( __DIR__ ), '.', $file )
	);
}

if ( empty( $commands_by_source ) && $commentary ) {
	echo "✅ All errors resolved.\n\n";
	return;
}

if ( $commentary ) {
	echo "\nCommands to add ignore comments.\n";
	echo "\033[38;5;208mPlease check & use with discretion; only use for lines which cannot be revised.\033[0m\n";
}

foreach ( $commands_by_source as $source => $commands ) {
	if ( $commentary ) {
		// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		echo "\n\033[38;5;208m# $source\033[0m\n";
	}
	foreach ( $commands as $command ) {
		// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		echo $command;
	}
}
