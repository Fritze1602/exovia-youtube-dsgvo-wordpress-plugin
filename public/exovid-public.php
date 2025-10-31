<?php

/**
 *  Exit if accessed directly
 *
 * @package Exovia_YouTube_DSGVO
 */
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Enqueue Scripts and Styles for the Shortcode
 *
 * @package Exovia_YouTube_DSGVO
 */

add_action( 'wp_enqueue_scripts', 'exovid_enqueue_shortcode_assets', 20 );

/**
 * Enqueue assets if the specific shortcode is present.
 */
function exovid_enqueue_shortcode_assets() {
	global $post;

	if ( ! $post ) {
		return;
	}

	// Check post content for the specific shortcode (classic editor and Gutenberg).
	$shortcode_present = has_shortcode( $post->post_content, 'exovia-dsgvo-youtube-video' );

	// Check ACF fields for the specific shortcode.
	$acf_check = has_acf_shortcode( 'exovia-dsgvo-youtube-video' );

	if ( $shortcode_present || $acf_check ) {
		wp_enqueue_style( 'exovid-shortcode-style', plugin_dir_url( __FILE__ ) . '../dist/css/frontend.css', array(), EXOVID_PLUGIN_VERSION, 'all' );
		wp_enqueue_script( 'exovid-shortcode-script', plugin_dir_url( __FILE__ ) . '../dist/js/frontend.js', array( 'jquery' ), EXOVID_PLUGIN_VERSION, true );
	}
}

/**
 * Check if a specific shortcode is present in ACF fields.
 *
 * @param string $shortcode The shortcode to check for.
 * @return bool True if the shortcode is found, false otherwise.
 */
function has_acf_shortcode( $shortcode ) {
	global $post;

	if ( ! $post ) {
		return false;
	}

	// Get all custom fields of the post.
	$custom_fields = get_post_custom( $post->ID );

	// Iterate through each custom field and check if the specific shortcode exists.
	foreach ( $custom_fields as $key => $values ) {
		foreach ( $values as $value ) {
			if ( has_shortcode( $value, $shortcode ) ) {
				return true;
			}
		}
	}

	return false;
}
