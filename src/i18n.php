<?php

return [
	'admin_page_title'                    => __( 'Pay Invoices With Amazon', 'piwa' ),
	'admin_menu_title'                    => __( 'Pay Invoices With Amazon', 'piwa' ),
	'admin_submenu_title'                 => __( 'Settings', 'piwa' ),
	'where_to_find_keys_and_ids'          => __( 'Where to find keys and IDs', 'piwa' ),
	'where_to_find_keys_and_ids_url'      => __( 'https://pay.amazon.com/help/202022560', 'piwa' ),
	'block_title_customer_price'          => __( ' Pay Invoices With Amazon: Adjustable Price', 'piwa' ),
	'block_title_merchant_price'          => __( 'Pay Invoices With Amazon: Fixed Price', 'piwa' ),
	'show_block_configuration'            => __( 'Show block configuration', 'piwa' ),
	'show_customer_invoice_input_label'   => __( 'Show customer invoice input', 'piwa' ),
	'customer_input_help_text'            => __( 'Customers will input the payment amount.', 'piwa' ),
	'plugin_is_active'                    => __( 'PIWA is active!', 'piwa' ),
	'please_connect_account'              => __( 'Please connect your Amazon Pay account in settings.' ),
	'configure_manually'                  => __( 'Configure Manually', 'piwa' ),
	'connect_amazon_account'              => __( 'Connect Amazon Pay Account', 'piwa' ),
	'manage_payments'                     => __( 'Manage Payments', 'piwa' ),
	'review_payments'                     => __( 'Review Payments', 'piwa' ),
	'review_payments_tooltip'             => __( 'View payments processed by this site.', 'piwa' ),
	'accept_payments'                     => __( 'Accept Payments', 'piwa' ),
	'accept_payments_tooltip'             => __( 'Log in to Seller Central, then click "Manage Transactions" in the footer links.', 'piwa' ),
	'piwa_help_page'                      => __( 'Amazon Pay Help Page', 'piwa' ),
	'piwa_help_page_tooltip'              => __( 'Configuration instructions from pay.amazon.com.', 'piwa' ),
	'technical_documentation'             => __( 'Technical Documentation', 'piwa' ),
	'technical_documentation_tooltip'     => __( 'Details on how to use features available in this plugin.', 'piwa' ),
	'additional_resources'                => __( 'Additional Resources', 'piwa' ),
	'set_by_dot_env'                      => __( 'Set by .env', 'piwa' ),
	'tab_connect_automatic'               => __( 'Connect Automatically', 'piwa' ),
	'tab_send_public_key'                 => __( 'Send Public Key', 'piwa' ),
	'tab_receive_public_private_key'      => __( 'Receive Private Key & Public ID', 'piwa' ),
	'auto_connect_incomplete_credentials' => __( 'Credentials sent by Amazon seem to be incomplete.', 'piwa' ),
	/* translators: %s is a technical error message returned from a thrown PHP Error or Exception object. */
	'auto_connect_could_not_decode'       => __( 'Credentials received from Amazon were not able to be decoded. Error message: <code>%s</code>', 'piwa' ),
	'auto_connect_success'                => __( 'Account connected successfully.', 'piwa' ),
	'save_settings'                       => __( 'Save Settings', 'piwa' ),
	/* Translators: %s is either Production View or Sandbox View. */
	'if_link_not_found'                   => __( 'If the linked order reports "Not Found", be sure to switch to Integration Central <mark>%s</mark>.', 'piwa' ),
	'production_view'                     => __( 'Production View', 'piwa' ),
	'sandbox_view'                        => __( 'Sandbox View', 'piwa' ),
	'sandbox_mode_active'                 => __( 'Sandbox mode is active.', 'piwa' ),
	'production_mode_active'              => __( 'Production mode is active.', 'piwa' ),
	'real_payments_will_not_be_processed' => __( 'Real payments will not be processed.', 'piwa' ),
	'real_payments_will_be_processed'     => __( 'Real payments will be processed.', 'piwa' ),
	'enable_sandbox_mode'                 => __( 'Enable Sandbox Mode?', 'piwa' ),
	'merchant_id'                         => __( 'Merchant ID', 'piwa' ),
	'client_id_store_id'                  => __( 'Client ID / Store ID', 'piwa' ),
	'show_public_key'                     => __( 'Show Public Key', 'piwa' ),
	'where_to_find_merchant_id'           => __( 'Found under <a href="https://sellercentral.amazon.com/gp/pyop/seller/integrationcentral/ref=xx_pyopicnt_foot_xx" target="_blank">Integration Central</a> > <code>API access</code>.', 'piwa' ),
	'where_to_find_client_id_store_id'    => __( 'Found under <a href="https://sellercentral.amazon.com/gp/pyop/seller/integrationcentral/ref=xx_pyopicnt_foot_xx" target="_blank">Integration Central</a> > <code>View client ID/store ID(s)</code>.', 'piwa' ),
	'how_to_create_key'                   => __( '<li>Click <code>Create Keys</code> under <a href="https://sellercentral.amazon.com/gp/pyop/seller/integrationcentral/ref=xx_pyopicnt_foot_xx" target="_blank">Integration Central</a> > <code>API access</code>.</li><li>Select <code>Use an existing public key to create API credentials</code>.</li><li>Copy &amp; paste the value below into the provided field, assign the key a name, then click <code>Create keys</code>.</li><li>Save the key and copy &amp; paste the new value for <code>Public Key ID</code> to the field below.</li>', 'piwa' ),
	'how_to_receive_key'                  => __( '<li>Click <code>Create Keys</code> under <a href="https://sellercentral.amazon.com/gp/pyop/seller/integrationcentral/ref=xx_pyopicnt_foot_xx" target="_blank">Integration Central</a> > <code>API access</code>.</li><li>Select <code>Generate API credentials</code>, which is the default, input any name, and click <code>Create Keys</code>.</li><li>A file with extension <code>.pem</code> will be downloaded. Drag &amp; drop the the file below, or paste its contents by opening it with a text editor.</li><li>Copy &amp; paste the <code>Public Key ID</code> for the newly generated key into the field below.</li>', 'piwa' ),
	'public_key'                          => __( 'Public Key', 'piwa' ),
	'private_key'                         => __( 'Private Key', 'piwa' ),
	'private_key_source'                  => __( 'Drag-and-drop the .pem file downloaded from Amazon Integration Central here, or paste its contents by opening it with a text editor.', 'piwa' ),
	'public_key_id'                       => __( 'Public Key ID', 'piwa' ),
	'key_copied'                          => __(
		'Public Key copied to clipboard.
Please paste into Integration Central when adding a new key.',
		'piwa'
	),
	'prod_key_in_sandbox'                 => __( 'Amazon Pay is configured with a Production-only key, but the plugin is in Sandbox mode. To accept payments, please either disable Sandbox mode, or disconnect / reset the key and reconfigure a new key from Integration Central Sandbox View to use the connection for both Test and Live payments.', 'piwa' ),
	'sandbox_mode_tooltip'                => __( 'Checking the Sandbox Mode box will process simulated payments with test accounts created in Integration Central. Unchecking the box will process live payments.', 'piwa' ),
	'store_name_tooltip'                  => __( 'Store Name will display on customer receipts in their Amazon order history.', 'piwa' ),
	'note_to_buyer_tooltip'               => __( 'Note to Buyer will display on customer receipts in their Amazon order history and on the thank you page when a payment completes.', 'piwa' ),
	'min_max_tooltip'                     => __( 'The allowed payment range will only enable the payment button if a payment amount entered by a customer is within the valid range. If the checkbox is checked, a message will display indicating the allowed amount.', 'piwa' ),
	'block_type_tooltip'                  => __( 'Configures blocks available in the WordPress block editor: Customer enters a flexible price or Merchant enters a set price.', 'piwa' ),
	'technical_details'                   => __( 'Technical Details', 'piwa' ),
	'invoice'                             => __( 'Invoice', 'piwa' ),
	'invoice_id'                          => __( 'Invoice ID', 'piwa' ),
	'invoice_details'                     => __( 'Set up Invoice Details', 'piwa' ),
	'store_name'                          => __( 'Store Name', 'piwa' ),
	'note_to_buyer_label'                 => __( 'Note to Buyer', 'piwa' ),
	'note_to_buyer_default'               => __( 'Thank you for your business.', 'piwa' ),
	'canceled_or_declined'                => __( 'Payment was canceled or declined. Please try again.', 'piwa' ),
	'none'                                => __( 'None.', 'piwa' ),
	'allowed_payment_range'               => __( 'Allowed Payment Range', 'piwa' ),
	'to'                                  => __( 'to', 'piwa' ),
	'set_amount_limits'                   => __( 'Set minimum and maximum amount limits', 'piwa' ),
	'min_label'                           => __( 'Minimum amount', 'piwa' ),
	'max_label'                           => __( 'Maximum amount', 'piwa' ),
	'pay_merchant_label'                  => __( 'Pay', 'piwa' ),
	'pay'                                 => __( 'Payment Amount', 'piwa' ),
	'reference_id'                        => __( 'Reference ID', 'piwa' ),
	'invoice_number'                      => __( 'Invoice Number', 'piwa' ),
	'enter_invoice_number'                => __( 'Enter invoice number', 'piwa' ),
	'continue'                            => __( 'Continue', 'piwa' ),
	'payment'                             => __( 'Payment', 'piwa' ),
	'for'                                 => __( 'for', 'piwa' ),
	'payment_paid'                        => [
		'title'              => __( 'Payment Success', 'piwa' ),
		/* translators: @amount@ is the payment amount. @currency_symbol@ is the symbol for the payment currency. */
		'message'            => __( '@currency_symbol@@amount@ payment was successful.', 'piwa' ),
		/* translators: @title@ is the title from the payment block if one was set. @amount@ is the payment amount. @currency_symbol@ is the symbol for the payment currency. */
		'message_with_title' => __( '@currency_symbol@@amount@ payment for "@title@" was successful.', 'piwa' ),
		/* translators: @invoice_number@ is the user-inputted invoice number if it exists. It might contain letters. */
		'invoice_message'    => 'Invoice Number: @invoice_number@',
		/* Check mark in a circle. */
		'icon'               => '<svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"><path d="M12 0c6.623 0 12 5.377 12 12s-5.377 12-12 12-12-5.377-12-12 5.377-12 12-12zm0 1c6.071 0 11 4.929 11 11s-4.929 11-11 11-11-4.929-11-11 4.929-11 11-11zm7 7.457l-9.005 9.565-4.995-5.865.761-.649 4.271 5.016 8.24-8.752.728.685z"/></svg>',
	],
	'payment_pending_authorization'       => [
		'title'              => __( 'Payment Initiated', 'piwa' ),
		/* translators: @amount@ is the payment amount. @currency_symbol@ is the symbol for the payment currency. */
		'message'            => __( '@currency_symbol@@amount@ payment initiated successfully.', 'piwa' ),
		/* translators: @title@ is the title from the payment block if one was set. @amount@ is the payment amount. @currency_symbol@ is the symbol for the payment currency. */
		'message_with_title' => __( '@currency_symbol@@amount@ payment for "@title@" initiated successfully.', 'piwa' ),
		/* translators: @invoice_number@ is the user-inputted invoice number if it exists. It might contain letters. */
		'invoice_message'    => 'Invoice Number: @invoice_number@',
		/* Check mark in a circle. */
		'icon'               => '<svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"><path d="M12 0c6.623 0 12 5.377 12 12s-5.377 12-12 12-12-5.377-12-12 5.377-12 12-12zm0 1c6.071 0 11 4.929 11 11s-4.929 11-11 11-11-4.929-11-11 4.929-11 11-11zm7 7.457l-9.005 9.565-4.995-5.865.761-.649 4.271 5.016 8.24-8.752.728.685z"/></svg>',
	],
	'payment_declined'                    => [
		'title'              => __( 'Payment Declined', 'piwa' ),
		'message'            => __( 'We were unable to process your payment.', 'piwa' ),
		/* translators: @title@ is the title from the payment block if one was set. */
		'message_with_title' => __( 'We were unable to process your payment for "@title@".', 'piwa' ),
		'invoice_message'    => __( 'Please choose another payment method if available.', 'piwa' ),
		/* "X" in a hexagonal stop-sign shape. */
		'icon'               => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24"><path d="M16.142 2l5.858 5.858v8.284l-5.858 5.858h-8.284l-5.858-5.858v-8.284l5.858-5.858h8.284zm.829-2h-9.942l-7.029 7.029v9.941l7.029 7.03h9.941l7.03-7.029v-9.942l-7.029-7.029zm-8.482 16.992l3.518-3.568 3.554 3.521 1.431-1.43-3.566-3.523 3.535-3.568-1.431-1.432-3.539 3.583-3.581-3.457-1.418 1.418 3.585 3.473-3.507 3.566 1.419 1.417z"/></svg>',
	],
	'payment_error'                       => [
		'title'              => __( 'Payment Error', 'piwa' ),
		'message'            => __( 'We were unable to process your payment.', 'piwa' ),
		/* translators: @title@ is the title from the payment block if one was set. */
		'message_with_title' => __( 'We were unable to process your payment for "@title@".', 'piwa' ),
		'invoice_message'    => __( 'Please choose another payment method if available.', 'piwa' ),
		/* "X" in a hexagonal stop-sign shape. */
		'icon'               => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24"><path d="M16.142 2l5.858 5.858v8.284l-5.858 5.858h-8.284l-5.858-5.858v-8.284l5.858-5.858h8.284zm.829-2h-9.942l-7.029 7.029v9.941l7.029 7.03h9.941l7.03-7.029v-9.942l-7.029-7.029zm-8.482 16.992l3.518-3.568 3.554 3.521 1.431-1.43-3.566-3.523 3.535-3.568-1.431-1.432-3.539 3.583-3.581-3.457-1.418 1.418 3.585 3.473-3.507 3.566 1.419 1.417z"/></svg>',
	],
	'id'                                  => __( 'ID', 'piwa' ),
	'copy_shortcode_to_clipboard'         => __( 'Copy shortcode to clipboard.', 'piwa' ),
	'shortcode_copied_to_clipboard'       => __( 'Shortcode copied to clipboard.', 'piwa' ),
	'date'                                => __( 'Date', 'piwa' ),
	'amount'                              => __( 'Amount', 'piwa' ),
	'details'                             => __( 'Details', 'piwa' ),
	'price'                               => __( 'Price', 'piwa' ),
	/* translators: %s is the name of the connection method. */
	'method_connected'                    => __( '%s method connected.', 'piwa' ),
	/* translators: %s is the name of the connection method. */
	'method_not_connected'                => __( '%s method not connected.', 'piwa' ),
	'save_to_use_method'                  => __( '<a href="#" class="save-proxy">Save Settings</a> to use this method.', 'piwa' ),
	'reset_key'                           => __( 'Disconnect / Reset', 'piwa' ),
	'reset_key_verification'              => __( 'This will delete the keys for this connection. New keys will need to be set up in Integration Central.', 'piwa' ),
	'yes_delete'                          => __( 'Yes, delete and reset this key', 'piwa' ),
	'this_is_active_method'               => __( 'This is the active connection method.', 'piwa' ),
	'amazon_account_connected'            => __( 'Amazon Pay Account Connected', 'piwa' ),
	'amazon_account_connected_tooltip'    => __( 'Account connected successfully. Clicking the button again will start a new profile.', 'piwa' ),
	'amazon_account_credentials_invalid'  => __( 'Credentials were entered, but they don\'t seem to be correct. Please verify the values and try again.', 'piwa' ),
	'api_merchant_failure'                => __( 'The merchant account connection service reported a technical error: ', 'piwa' ),
	'api_failure'                         => __( 'Something went wrong contacting the payment processor. Please try again later or contact the site administrator.', 'piwa' ),
	'enter_amount'                        => __( 'Enter amount', 'piwa' ),
	/* translators: @currency_symbol@ is the currency symbol. @min_amount@ is the minimum payment amount. For frontend user feedback when entering a flexible price. */
	'enter_above_amount'                  => __( 'Please enter an amount greater than @currency_symbol@@min_amount@.', 'piwa' ),
	/* translators: @currency_symbol@ is the currency symbol. @max_amount@ is the maximum payment amount. For frontend user feedback when entering a flexible price. */
	'enter_below_amount'                  => __( 'Please enter an amount less than than @currency_symbol@@max_amount@.', 'piwa' ),
	/* translators: %s is the title of the created service. */
	'created_please_enter_amount'         => __( '%s created. Please enter an amount.', 'piwa' ),
	'please_enter_an_amount'              => __( 'Please enter an amount.', 'piwa' ),
	'created_by_piwa'                     => __( 'Created by Amazon Pay.', 'piwa' ),
	'customer'                            => __( 'Customer', 'piwa' ),
	'region_label'                        => __( 'Region', 'piwa' ),
	'default_region'                      => __( 'US', 'piwa' ),
	'regions'                             => [
		'US' => __( '🇺🇸 United States', 'piwa' ),
		'EU' => __( '🇪🇺 European Union', 'piwa' ),
		'UK' => __( '🇬🇧 United Kingdom', 'piwa' ),
		'JP' => __( '🇯🇵 日本', 'piwa' ),
	],
	'ledger_currency_label'               => __( 'Ledger Currency', 'piwa' ),
	'default_ledger_currency'             => __( 'USD', 'piwa' ),
	'ledger_currency_symbols'             => [
		'USD' => __( '🇺🇸 $', 'piwa' ),
		'EUR' => __( '🇪🇺 €', 'piwa' ),
		'GBP' => __( '🇬🇧 £', 'piwa' ),
		'JPY' => __( '🇯🇵 ¥', 'piwa' ),
	],
	'payment_currency_label'              => __( 'Payment Currency', 'piwa' ),
	'default_payment_currency'            => __( 'USD', 'piwa' ),
	'currency_symbols'                    => [
		'USD' => __( '🇺🇸 $', 'piwa' ),
		'EUR' => __( '🇪🇺 €', 'piwa' ),
		'GBP' => __( '🇬🇧 £', 'piwa' ),
		'AUD' => __( '🇦🇺 A$', 'piwa' ),
		'CHF' => __( '🇨🇭 CHF', 'piwa' ),
		'DKK' => __( '🇩🇰 kr', 'piwa' ),
		'HKD' => __( '🇭🇰 HK$', 'piwa' ),
		'JPY' => __( '🇯🇵 ¥', 'piwa' ),
		'NOK' => __( '🇳🇴 kr', 'piwa' ),
		'NZD' => __( '🇳🇿 NZ$', 'piwa' ),
		'SEK' => __( '🇸🇪 kr', 'piwa' ),
		'ZAR' => __( '🇿🇦 R', 'piwa' ),
	],
	'currency_symbols_plain'              => [
		'USD' => __( '$', 'piwa' ),
		'EUR' => __( '€', 'piwa' ),
		'GBP' => __( '£', 'piwa' ),
		'AUD' => __( 'A$', 'piwa' ),
		'CHF' => __( 'CHF', 'piwa' ),
		'DKK' => __( 'kr', 'piwa' ),
		'HKD' => __( 'HK$', 'piwa' ),
		'JPY' => __( '¥', 'piwa' ),
		'NOK' => __( 'kr', 'piwa' ),
		'NZD' => __( 'NZ$', 'piwa' ),
		'SEK' => __( 'kr', 'piwa' ),
		'ZAR' => __( 'R', 'piwa' ),
	],
	'language_label'                      => __( 'Language', 'piwa' ),
	'default_language'                    => __( 'en_US', 'piwa' ),
	'languages'                           => [
		'en_US' => __( '🇺🇸 English (US)', 'piwa' ),
		'en_GB' => __( '🇬🇧 English (UK)', 'piwa' ),
		'de_DE' => __( '🇩🇪 Deutsch', 'piwa' ),
		'fr_FR' => __( '🇫🇷 Français', 'piwa' ),
		'it_IT' => __( '🇮🇹 Italiano', 'piwa' ),
		'es_ES' => __( '🇪🇸 Español', 'piwa' ),
		'ja_JP' => __( '🇯🇵 日本語', 'piwa' ),
	],
	'from'                                => __( 'from', 'piwa' ),
	'block_input_placeholder'             => __( 'Service Name...', 'piwa' ),
	'creating_invoice_before'             => __( 'Creating "', 'piwa' ),
	'creating_invoice_after'              => __( '"...', 'piwa' ),
	'title'                               => __( 'Title', 'piwa' ),
	'source'                              => __( 'Source', 'piwa' ),
	'capture_notice'                      => __( 'Payments should authorize within 24 hours. After authorization, please click the linked Reference ID to go to Seller Central and click "Collect Payment" to receive funds.', 'piwa' ),
	/* translators: %s is the date the invoice was paid. */
	'paid_at'                             => __( 'Paid: %s', 'piwa' ),
	'received'                            => __( 'Received', 'piwa' ),
	/* translators: %1$s is the date the invoice was processed; %2$s is the time. */
	'date_at_time'                        => __( '%1$s at %2$s', 'piwa' ),
	'paid_now'                            => __( 'Paid <b>now</b>', 'piwa' ),
	'payment_failed'                      => __( 'Declined', 'piwa' ),
	'add_description'                     => __( 'Add description', 'piwa' ),
	'description'                         => __( 'Description', 'piwa' ),
	'billing_address'                     => __( 'Billing Address', 'piwa' ),
	'shipping_address'                    => __( 'Shipping Address', 'piwa' ),
	'name'                                => __( 'Name', 'piwa' ),
	'address1'                            => __( 'Address', 'piwa' ),
	'city'                                => __( 'City', 'piwa' ),
	'stateorregion'                       => __( 'State or Region', 'piwa' ),
	'postalcode'                          => __( 'Postal Code', 'piwa' ),
	'countrycode'                         => __( 'Country Code', 'piwa' ),
	'phone'                               => __( 'Phone', 'piwa' ),
	'manage_invoices'                     => __( 'Manage Invoices', 'piwa' ),
	'manage_invoices_tooltip'             => __( 'View and edit invoices referenced by the "Merchant Sets Price" block.', 'piwa' ),
	'amazon-payment_labels'               => [
		'name'                  => _x( 'Payments', 'Post type general name', 'piwa' ),
		'singular_name'         => _x( 'Payment', 'Post type singular name', 'piwa' ),
		'menu_name'             => _x( 'Payments', 'Admin Menu text', 'piwa' ),
		'name_admin_bar'        => _x( 'Payment', 'Add New on Toolbar', 'piwa' ),
		'attributes'            => __( 'Parent & Order', 'piwa' ),
		'add_new'               => __( 'Add New Payment', 'piwa' ),
		'add_new_item'          => __( 'Add New Payment', 'piwa' ),
		'item_updated'          => __( 'Payment updated', 'piwa' ), // @see https://core.trac.wordpress.org/ticket/50438
		'new_item'              => __( 'New Payment', 'piwa' ),
		'edit_item'             => __( 'Edit Payment', 'piwa' ),
		'view_item'             => __( 'View Payment', 'piwa' ),
		'all_items'             => __( 'All Payments', 'piwa' ),
		'search_items'          => __( 'Search Payments', 'piwa' ),
		'parent_item_colon'     => __( 'Parent Payments:', 'piwa' ),
		'not_found'             => __( 'No payments found.', 'piwa' ),
		'not_found_in_trash'    => __( 'No payments found in Trash.', 'piwa' ),
		'featured_image'        => _x( 'Payment Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'piwa' ),
		'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'piwa' ),
		'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'piwa' ),
		'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'piwa' ),
		'archives'              => _x( 'Payment archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'piwa' ),
		'insert_into_item'      => _x( 'Insert into payment', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'piwa' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this payment', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'piwa' ),
		'filter_items_list'     => _x( 'Filter payments list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'piwa' ),
		'items_list_navigation' => _x( 'Payments list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'piwa' ),
		'items_list'            => _x( 'Payments list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'piwa' ),
	],
];