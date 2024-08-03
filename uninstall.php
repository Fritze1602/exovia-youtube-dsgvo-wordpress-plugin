<?php
/**
 * Uninstall procedure for Exovia YouTube DSGVO Plugin.
 *
 * @package Exovia_YouTube_DSGVO
 */

// Prevent direct access.
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	die;
}

// Option names used by the plugin.
$option_names = array(
	'exovid_option', // This is the main option array that includes all  settings.
	// If there are individual options not included in the main option array, list them here.
	'exovid_youtube_iframe',
	'exovid_wrapper_title',
	'exovid_layer_text',
	'exovid_anchor_text',
	'exovid_button_title',
	'exovid_button_title_all',
	'exovid_show_load_all_button',
	'exovid_layer_background_color',
	'exovid_button_background_color',
	'exovid_layer_font_color',
	'exovid_enable_info_box',
	'exovid_info_box_text',
	'exovid_embed_link_id',
);

// Delete options.
foreach ( $option_names as $option_name ) {
	delete_option( $option_name );
	delete_site_option( $option_name ); // For multisite.
}
