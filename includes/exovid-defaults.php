<?php
/**
 * Provides options set or default value if field-value is empty.
 *
 * @package Exovia_YouTube_DSGVO
 */

/**
 * Get plugin options with default values.
 *
 * @return array The options with default values.
 */
function exovid_get_options() {

	$exovid_settings = ! empty( get_option( 'exovid_option' ) ) ? get_option( 'exovid_option' ) : array();

	/* Define the array of defaults for database fields */
	$defaults = array(
		'exovid_wrapper_title'           => 'Allow Youtube',
		'exovid_youtube_iframe'          => '<iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/FQnEL7pqo40" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>',
		'exovid_button_title'            => __( 'Only this video', 'exovia-youtube-dsgvo' ),
		'exovid_button_title_all'        => __( 'All on this page', 'exovia-youtube-dsgvo' ),
		'exovid_layer_text'              => __( 'By pressing the button you accept the privacy policy of YouTube.', 'exovia-youtube-dsgvo' ),
		'exovid_anchor_text'             => __( 'learn more', 'exovia-youtube-dsgvo' ),
		'exovid_layer_background_color'  => '#000000',
		'exovid_button_background_color' => '#693e91',
		'exovid_layer_font_color'        => '#fff',
		'exovid_show_load_all_button'    => 'false',
		'exovid_enable_info_box'         => 'false',
		'exovid_info_box_text'           => __( 'Your data protection is close to our hearts. Before we connect you to external servers, we get your permission.', 'exovia-youtube-dsgvo' ),
		'exovid_embed_link_id'           => 1,
	);

	// Parse the settings with defaults.
	$exovid_options = wp_parse_args( array_filter( $exovid_settings ), $defaults );

	// Map the options to a more readable array.
	$transformed_shortcode_names = array(
		'title'                => $exovid_options['exovid_wrapper_title'],
		'iframe'               => $exovid_options['exovid_youtube_iframe'],
		'button_title'         => $exovid_options['exovid_button_title'],
		'button_title_all'     => $exovid_options['exovid_button_title_all'],
		'layer_text'           => $exovid_options['exovid_layer_text'],
		'anchor_text'          => $exovid_options['exovid_anchor_text'],
		'layer_bg_color'       => $exovid_options['exovid_layer_background_color'],
		'button_bg_color'      => $exovid_options['exovid_button_background_color'],
		'font_color'           => $exovid_options['exovid_layer_font_color'],
		'enable_info_box'      => $exovid_options['exovid_enable_info_box'],
		'show_load_all_button' => $exovid_options['exovid_show_load_all_button'],
		'info_box_text'        => $exovid_options['exovid_info_box_text'],
		'embed_link_id'        => $exovid_options['exovid_embed_link_id'],
	);
	return $transformed_shortcode_names;
}
