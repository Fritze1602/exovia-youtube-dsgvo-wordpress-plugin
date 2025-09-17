<?php
/**
 * Register Scripts and Styles for the Shortcode
 *
 * @package Exovia_YouTube_DSGVO
 */

add_action( 'wp_enqueue_scripts', 'exovid_register_shortcode_assets', 20 );

/**
 * Register assets for the shortcode.
 *
 * By registering the assets on every page load, we make them available for enqueuing
 * later, specifically when the shortcode is rendered. This is a very lightweight operation.
 */
function exovid_register_shortcode_assets() {
	wp_register_style(
		'exovid-shortcode-style',
		plugin_dir_url( __FILE__ ) . '../dist/css/frontend.css',
		array(),
		EXOVID_PLUGIN_VERSION,
		'all'
	);
	wp_register_script(
		'exovid-shortcode-script',
		plugin_dir_url( __FILE__ ) . '../dist/js/frontend.js',
		array( 'jquery' ),
		EXOVID_PLUGIN_VERSION,
		true
	);
}