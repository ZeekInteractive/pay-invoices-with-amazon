# Use

Plugin description and use can be found in [readme.txt](readme.txt).

A thorough description of how to install and use the plugin can be found [here](https://zeekinteractive.github.io/pay-invoices-with-amazon-internal/).

Packaged releases can be found on [releases](https://github.com/ZeekInteractive/pay-invoices-with-amazon/releases).

The latest release can be installed from WP CLI with:

```bash
wp plugin install https://github.com/ZeekInteractive/pay-invoices-with-amazon/releases/latest/download/piwa.zip --activate --force
```

## Use as a Function

`piwa()` can be called with an array of arguments in [plugins](https://developer.wordpress.org/plugins/plugin-basics/header-requirements/), [mu-plugins](https://wordpress.org/documentation/article/must-use-plugins/), [templates](https://developer.wordpress.org/themes/basics/template-hierarchy/), or a theme's [functions.php](https://developer.wordpress.org/themes/basics/theme-functions/).

The below example adds payment buttons of various types at the end of Post content if various Categories are assigned.

The existance of `Plugin Name:` makes it possible to place it in `wp-content/plugins/` or a folder within `wp-content/plugins` to activate or deactivate within `WP Admin > Plugins`. If placing within a theme's `functions.php` or another file that already opens with `<?php`, the first line `<?php` should be removed to avoid errors.

```php
<?php
/**
 * Plugin Name: Pay Based on Category
 * Description: Display a message with payment buttons on Posts depending on assigned Category. If all the categories are assigned, all the buttons and messages will be added.
 * Version: 1.0
 *
 * @see https://developer.wordpress.org/reference/hooks/the_content/
 * @see https://developer.wordpress.org/reference/functions/is_singular/
 * @see https://developer.wordpress.org/reference/functions/has_category/
 * @see https://www.php.net/manual/en/function.function-exists.php
 */
add_filter(
	'the_content',
	function( $content ) {
		// If the PIWA plugin is not active or this is not a singular template of the "post" post type, do not modify the content.
		if (
			! function_exists( 'piwa' )
			|| ! is_singular( [ 'post' ] )
		) {
			return $content;
		}

		// If the post is in category Uncategorized, append a pay button where the user specifies the amount.
		if ( has_category( 'Uncategorized' ) ) {
			$content .= '<p>Thanks for reading!<br/>If you feel inclined to contribute, please use the form below.</p>' . piwa();
		}
		// If the post is in category Pay it Forward, append a pay button for $7.00 labeled "Pay it Forward".
		if ( has_category( 'Pay it Forward' ) ) {
			$content .= '<p>Thanks for reading!<br/>If you enjoyed this post, please pay it forward with a small donation:</p>' . piwa([
				'amount' => 7.00,
				'title'  => 'Pay it Forward',
			]);
		}
		// If the post is in category Invoice, append a pay button where the customer inputs an Invoice Number and amount.
		if ( has_category( 'Invoice' ) ) {
			$content .= '<p>Thank you for your business!<br/>To make a payment, please input an amount and the associated invoice number:</p>' . piwa([
				'show_customer_invoice_input' => true,
			]);
		}

		return $content;
	},
	10 // Default priority is 10. The latest possible priority is PHP_INT_MAX. Attaching to a priority lower than 10 may cause other filters, such as wpautop, to add paragraph tags incorrectly.
);
```

# Development

### Download & install dependencies

```bash
git clone git@github.com:ZeekInteractive/piwa.git
cd piwa
./bin/install
```

### Payment Details (Debug Information)

Detailed information on checkout session status and technical responses from the API can be viewed by adding `&details` to the end of the Payment Listing admin screen URL.

For example: `/wp-admin/edit.php?post_type=amazon-payment&details`

## Commands in [bin](bin):

### [Install](bin/install)

Updates and installs the Amazon SDK using composer for PHP minimum `5.6.20`.

```bash
./bin/install
```

### [phpcs](bin/phpcs)

- Installs and configures [PHP Code Sniffer](https://github.com/squizlabs/PHP_CodeSniffer/wiki) and `PHP Code Beautifier` with [WordPress-Extra](https://github.com/WordPress/WordPress-Coding-Standards/blob/develop/WordPress-Extra/ruleset.xml) and [ruleset.xml](ruleset.xml).
- Runs `phpcbf` to fix minor errors before generating reports.
- Runs `phpcs` with code context, specific rule names, highlighted lines, and icons indicating line, errors, warnings, rule names, and file names.
- Runs `phpcs` summary count by rule type.
- Outputs or runs commands which, if executed, will add `// phpcs:ignore Rule.Name` comments to lines which still have warnings.

Report:
```bash
./bin/phpcs
```

Patch:
- Adds comments to ignore all remaining warnings & re-runs the report.
```bash
./bin/phpcs --add-all-ignores && ./bin/phpcs
```

Report, including all warnings even if annotated with a comment to ignore:
```bash
./bin/phpcs --ignore-annotations
```

### [Tag](bin/tag)

Tags the current commit on `main` with a release number and comment and pushes to origin.
Deletes the old tag of the same name locally and on origin if it existed.

```bash
version=1.0.example
title='Title of the release'
./bin/tag "$version" "$title"
```

### [Package](bin/package)

Builds a .zip for installation or release with `vendor` included and development file patterns listed in [bin/package-exclude.txt](bin/package-exclude.txt) excluded. Outputs the zip to `piwa.zip`. Deletes an the old zip of that name if it existed. Runs `./bin/install`.

```bash
./bin/package
```

### [Release](bin/release)

Edits a release on GitHub so the title is the tag title, the description is a link to the changelog, and uploads the zipped package. "1.0" is the tag to release. The .zip in the current directory will be uploaded.

```bash
version=1.0.example
./bin/release $version
```

### Tag & Package & Release

```bash
version=1.0.example
title='Title of the release'
./bin/tag $version "$title" && ./bin/package && ./bin/release $version
```

## Localization

### Generate a new master [piwa.pot](languages/piwa.pot)

From the plugin root directory:

```bash
wp i18n make-pot . --no-location
```

This will overwrite the `.pot`. New strings can also be added by editing manually. All translatable strings are stored in [src/i18n.php](src/i18n.php).

### Compile `.mo` files when `.po` files have been edited.

Requires `brew install msgfmt` or similar.

From [languages/](languages):
```bash
for file in `find . -name "*.po"` ; do msgfmt -o ${file/.po/.mo} $file ; done
```

Also see [developer.wordpress.org:localization](https://developer.wordpress.org/plugins/internationalization/localization/).


### Plugin Settings

Settings can be reset with:

```bash
wp option delete piwa
```

Settings can be hard-coded with the follow script, preferably placed in `wp-content/mu-plugins/`:

```php
<?php
/**
 * Where to find keys & IDs:
 * @see https://pay.amazon.com/help/202022560
 */
foreach(
	[
		'sandbox_mode'       => 1,
		'merchant_id'        => '',
		'client_id_store_id' => '',
		'public_key_id'      => '',
	] as $key => $value
) {
	putenv( sprintf( 'piwa_%s=%s', $key, $value ) );
}
```
