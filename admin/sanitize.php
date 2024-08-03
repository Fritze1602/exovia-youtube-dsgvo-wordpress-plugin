<?php
/**
 * Sanitize input for Exovia YouTube DSGVO Plugin.
 *
 * @package Exovia_YouTube_DSGVO
 */

// Prevent direct access to the file.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Sanitize input values.
 *
 * @param array $input The input values to be sanitized.
 * @return array The sanitized values.
 */
function exovid_sanitize( $input ) {
	$sanitary_values = array();
	if ( isset( $input['exovid_youtube_iframe'] ) ) {
        // Erlaubt nur das iframe-Tag mit bestimmten Attributen
        $allowed_tags = array(
            'iframe' => array(
                'width' => array(),
                'height' => array(),
                'src' => array(),
                'title' => array(),
                'frameborder' => array(),
                'allow' => array(),
                'allowfullscreen' => array(),
            ),
        );
        $sanitary_values['exovid_youtube_iframe'] = wp_kses( $input['exovid_youtube_iframe'], $allowed_tags );
    }
	if ( isset( $input['exovid_wrapper_title'] ) ) {
		$sanitary_values['exovid_wrapper_title'] = sanitize_text_field( $input['exovid_wrapper_title'] );
	}
	if ( isset( $input['exovid_layer_text'] ) ) {
		$sanitary_values['exovid_layer_text'] = esc_textarea( $input['exovid_layer_text'] );
	}
	if ( isset( $input['exovid_anchor_text'] ) ) {
		$sanitary_values['exovid_anchor_text'] = sanitize_text_field( $input['exovid_anchor_text'] );
	}
	if ( isset( $input['exovid_button_title'] ) ) {
		$sanitary_values['exovid_button_title'] = sanitize_text_field( $input['exovid_button_title'] );
	}
	if ( isset( $input['exovid_button_title_all'] ) ) {
		$sanitary_values['exovid_button_title_all'] = sanitize_text_field( $input['exovid_button_title_all'] );
	}
	if ( isset( $input['exovid_show_load_all_button'] ) ) {
		$sanitary_values['exovid_show_load_all_button'] = sanitize_text_field( $input['exovid_show_load_all_button'] );
	}
	if ( isset( $input['exovid_layer_background_color'] ) ) {
		$sanitary_values['exovid_layer_background_color'] = sanitize_hex_color( $input['exovid_layer_background_color'] );
	}
	if ( isset( $input['exovid_button_background_color'] ) ) {
		$sanitary_values['exovid_button_background_color'] = sanitize_hex_color( $input['exovid_button_background_color'] );
	}
	if ( isset( $input['exovid_layer_font_color'] ) ) {
		$sanitary_values['exovid_layer_font_color'] = sanitize_hex_color( $input['exovid_layer_font_color'] );
	}
	if ( isset( $input['exovid_enable_info_box'] ) ) {
		$sanitary_values['exovid_enable_info_box'] = sanitize_text_field( $input['exovid_enable_info_box'] );
	}
	if ( isset( $input['exovid_info_box_text'] ) ) {
		$sanitary_values['exovid_info_box_text'] = sanitize_text_field( $input['exovid_info_box_text'] );
	}
	if ( isset( $input['exovid_embed_link_id'] ) ) {
		$sanitary_values['exovid_embed_link_id'] = sanitize_text_field( $input['exovid_embed_link_id'] );
	}

	return $sanitary_values;
}
