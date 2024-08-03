<?php
/**
 * Enqueue backend scripts and styles for Exovia YouTube DSGVO Plugin.
 *
 * @package Exovia_YouTube_DSGVO
 */

// Prevent direct access to the file.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Enqueue backend scripts and styles.
 */
function exovid_enqueue_backend_styles_and_scripts() {
	$screen = get_current_screen();
	if ( 'settings_page_exovid_options_page' !== $screen->id ) {
		return;
	}

	wp_enqueue_style( 'wp-color-picker' );
	wp_enqueue_script(
		'my-backend-script-handle',
		plugins_url( '../dist/js/backend.js', __FILE__ ),
		array( 'wp-color-picker' ),
		EXOVID_PLUGIN_VERSION,
		true
	);

	wp_enqueue_style( 'exovid-admin-styles', plugin_dir_url( __FILE__ ) . '../dist/css/backend.css', array(), EXOVID_PLUGIN_VERSION );
}
add_action( 'admin_enqueue_scripts', 'exovid_enqueue_backend_styles_and_scripts' );
