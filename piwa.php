<?php

if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Plugin Name: Pay Invoices With Amazon
 * Description: Enables a smooth Amazon Pay integration using the WordPress block editor. Accept payments using Amazon Pay, providing a seamless experience for your customers.
 * Author: Zeek
 * Author URI: https://zeek.com/
 * Plugin URI: https://wordpress.org/plugins/pay-invoices-with-amazon/
 * Contributors: zengy, aaronholbrook, ivande, pdclark
 * Version: 1.3.0
 * Text Domain: pay-invoices-with-amazon
 * Domain Path: /languages
 * Requires at least: 5.6
 * Tested up to: 6.4.1
 * Requires PHP: 5.6.20
 * License: GPLv3
 * License URI: https://www.gnu.org/licenses/gpl-3.0.html
 */

use PIWA\PIWA;

if ( ! class_exists( 'PIWA\PIWA' ) ) {
	require __DIR__ . '/src/trait-singleton.php';
	require __DIR__ . '/src/class-piwa.php';
}

function piwa( $atts = [], $content = '', $block_or_tagname = '' ) {
	return PIWA::get_instance( $atts, $content, $block_or_tagname );
}

add_action( 'plugins_loaded', 'piwa' );
