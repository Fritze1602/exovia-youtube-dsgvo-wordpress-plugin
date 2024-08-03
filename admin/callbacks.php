<?php
/**
 * Callbacks for the Exovia YouTube DSGVO Plugin.
 *
 * @package Exovia_YouTube_DSGVO
 */

// Prevent direct access to the file.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Callback function for YouTube Fallback Iframe.
 *
 * @return void
 */
/**
 * Callback function for YouTube Fallback Iframe.
 *
 * @return void
 */
function exovid_youtube_iframe_callback() {
	$options = get_option( 'exovid_option' );
	printf(
		'<textarea class="large-text" rows="2" name="exovid_option[exovid_youtube_iframe]" id="exovid_youtube_iframe">%s</textarea>',
		isset( $options['exovid_youtube_iframe'] ) && ! empty( $options['exovid_youtube_iframe'] ) ? esc_textarea( $options['exovid_youtube_iframe'] ) : esc_textarea('<iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/FQnEL7pqo40" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>')
	);
	echo '<span>' . esc_html__( 'Replace this code with your iframe (embed code) from YouTube. You can find this under share and then embed.', 'exovia-youtube-dsgvo' ) . '</span>';
}


/**
 * Callback function for Wrapper Title.
 *
 * @return void
 */
function exovid_wrapper_title_callback() {
	$options = get_option( 'exovid_option' );
	printf(
		'<input class="regular-text" type="text" name="exovid_option[exovid_wrapper_title]" id="exovid_wrapper_title" value="%s">',
		isset( $options['exovid_wrapper_title'] ) ? esc_attr( $options['exovid_wrapper_title'] ) : ''
	);
	echo '<br><span>' . esc_html__( 'Default Value:', 'exovia-youtube-dsgvo' ) . ' Allow Youtube<span/>';
}

/**
 * Callback function for Button Title.
 *
 * @return void
 */
function exovid_button_title_callback() {
	$options = get_option( 'exovid_option' );
	printf(
		'<input class="regular-text" type="text" name="exovid_option[exovid_button_title]" id="exovid_button_title" value="%s">',
		isset( $options['exovid_button_title'] ) ? esc_attr( $options['exovid_button_title'] ) : ''
	);
	echo '<br><span>' . esc_html__( 'Default Value:', 'exovia-youtube-dsgvo' ) . ' ' . esc_html__( 'Only this video', 'exovia-youtube-dsgvo' ) . '<span/>';
}

/**
 * Callback function for Button Title Allow All.
 *
 * @return void
 */
function exovid_button_title_all_callback() {
	$options = get_option( 'exovid_option' );
	printf(
		'<input class="regular-text" type="text" name="exovid_option[exovid_button_title_all]" id="exovid_button_title_all" value="%s">',
		isset( $options['exovid_button_title_all'] ) ? esc_attr( $options['exovid_button_title_all'] ) : ''
	);
	echo '<br><span>' . esc_html__( 'Default Value:', 'exovia-youtube-dsgvo' ) . ' ' . esc_html__( 'All on the page', 'exovia-youtube-dsgvo' ) . '<span/>';
}

/**
 * Callback function for Show Load All Button.
 *
 * @return void
 */
function exovid_show_load_all_button_callback() {
	$options = get_option( 'exovid_option' );
	printf(
		'<input type="checkbox" name="exovid_option[exovid_show_load_all_button]" id="exovid_show_load_all_button" value="exovid_show_load_all_button" %s>',
		( isset( $options['exovid_show_load_all_button'] ) && 'exovid_show_load_all_button' === $options['exovid_show_load_all_button'] ) ? 'checked' : ''
	);
}

/**
 * Callback function for Anchor Text.
 *
 * @return void
 */
function exovid_anchor_text_callback() {
	$options = get_option( 'exovid_option' );
	printf(
		'<input class="regular-text" type="text" name="exovid_option[exovid_anchor_text]" id="exovid_anchor_text" value="%s">',
		isset( $options['exovid_anchor_text'] ) ? esc_attr( $options['exovid_anchor_text'] ) : ''
	);
	echo '<br><span>' . esc_html__( 'Default Value:', 'exovia-youtube-dsgvo' ) . ' ' . esc_html__( 'Learn More', 'exovia-youtube-dsgvo' ) . '<span/>';
}

/**
 * Callback function for Layer Text.
 *
 * @return void
 */
function exovid_layer_text_callback() {
	$options = get_option( 'exovid_option' );
	printf(
		'<textarea class="large-text" rows="2" name="exovid_option[exovid_layer_text]" id="exovid_layer_text">%s</textarea>',
		isset( $options['exovid_layer_text'] ) ? esc_textarea( $options['exovid_layer_text'] ) : ''
	);
	echo '<br><span>' . esc_html__( 'Default Value:', 'exovia-youtube-dsgvo' ) . ' ' . esc_html__( 'By pressing the button you accept the privacy policy of YouTube.', 'exovia-youtube-dsgvo' ) . '<span/>';
}

/**
 * Callback function for Layer Background Color.
 *
 * @return void
 */
function exovid_layer_background_color_callback() {
	$options = get_option( 'exovid_option' );
	printf(
		'<input class="color-picker-field" type="text" name="exovid_option[exovid_layer_background_color]" id="exovid_layer_background_color" value="%s">',
		isset( $options['exovid_layer_background_color'] ) ? esc_attr( $options['exovid_layer_background_color'] ) : ''
	);
	echo '<br><span>' . esc_html__( 'Default Value:', 'exovia-youtube-dsgvo' ) . ' #000000<span/>';
}

/**
 * Callback function for Button Background Color.
 *
 * @return void
 */
function exovid_button_background_color_callback() {
	$options = get_option( 'exovid_option' );
	printf(
		'<input class="color-picker-field" type="text" name="exovid_option[exovid_button_background_color]" id="exovid_button_background_color" value="%s">',
		isset( $options['exovid_button_background_color'] ) ? esc_attr( $options['exovid_button_background_color'] ) : ''
	);
	echo '<br><span>' . esc_html__( 'Default Value:', 'exovia-youtube-dsgvo' ) . ' #693e91<span/>';
}

/**
 * Callback function for Layer Font Color.
 *
 * @return void
 */
function exovid_layer_font_color_callback() {
	$options = get_option( 'exovid_option' );
	printf(
		'<input class="color-picker-field" type="text" name="exovid_option[exovid_layer_font_color]" id="exovid_layer_font_color" value="%s">',
		isset( $options['exovid_layer_font_color'] ) ? esc_attr( $options['exovid_layer_font_color'] ) : ''
	);
	echo '<br><span>' . esc_html__( 'Default Value:', 'exovia-youtube-dsgvo' ) . ' #ffffff<span/>';
}

/**
 * Callback function for Enable Info Box.
 *
 * @return void
 */
function exovid_enable_info_box_callback() {
	$options = get_option( 'exovid_option' );
	printf(
		'<input type="checkbox" name="exovid_option[exovid_enable_info_box]" id="exovid_enable_info_box" value="exovid_enable_info_box" %s>',
		( isset( $options['exovid_enable_info_box'] ) && 'exovid_enable_info_box' === $options['exovid_enable_info_box'] ) ? 'checked' : ''
	);
	echo '<label for="exovid_enable_info_box">' . esc_html__( 'recommended', 'exovia-youtube-dsgvo' ) . '</label>';
	echo '<br><span class="exovid-marker" style="display:none; color:#cc2e58; font-size: 1.15rem">' . esc_html__( 'You disabled credits and info-box. Please consider to include an appropriate credit with a backlink to https://www.exovia.de/ in your legal notice or privacy policy.', 'exovia-youtube-dsgvo' ) . '</span>';
	echo '<span class="exovid-marker" style="display:none; color:#cc2e58;">' . esc_html__( 'You could copy the following HTML', 'exovia-youtube-dsgvo' ) . '</span>';
	echo '<br>
	<span class="exovid-marker" style="display:none; background-color:#000; color:white; font-size: 1rem; padding: 2rem; max-width:95%">
		<span class="exovid-lang">
			&lt;h3&gt;YouTube Videos&lt;/h3&gt;&lt;br&gt;&lt;p&gt;To ensure protection against unwanted connections with external services from YouTube, we use the GDPR YouTube Tool from the Hamburg-based &lt;a href=&quot;https://www.exovia.de&quot;&gt;web design agency exovia&lt;/a&gt;.&lt;/p&gt;
		</span>
		<span class="exovid-lang" style="display:none;">
			&lt;h3&gt;YouTube Videos&lt;/h3&gt;&lt;br&gt;&lt;p&gt;Um Sie vor unerw&uuml;nschten Verbindungen mit externen Diensten von YouTube zu sch&uuml;tzen, nutzen wir das GDPR YouTube Tool der &lt;a href=&quot;https://www.exovia.de&quot;&gt;Webdesign-Agentur exovia&lt;/a&gt; aus Hamburg.&lt;/p&gt;
		</span>
	</span>';
	echo '<br><span class="exovid-marker"><span id="exovid-language-switch" role="button" style="display:inline; border: 1px solid purple; padding: 2px 5px; cursor: pointer;">' . esc_html__( 'Switch Language', 'exovia-youtube-dsgvo' ) . '</span></span>';
}

/**
 * Callback function for Info Box Text.
 *
 * @return void
 */
function exovid_info_box_text_callback() {
	$options = get_option( 'exovid_option' );
	printf(
		'<textarea class="large-text" rows="2" name="exovid_option[exovid_info_box_text]" id="exovid_info_box_text">%s</textarea>',
		isset( $options['exovid_info_box_text'] ) ? esc_textarea( $options['exovid_info_box_text'] ) : ''
	);
	echo '<br><span>' . esc_html__( 'Default Value:', 'exovia-youtube-dsgvo' ) . ' ' . esc_html__( 'Your data protection is close to our hearts. Before we connect you to external servers, we get your permission.', 'exovia-youtube-dsgvo' ) . '<span/>';
}

/**
 * Callback function for Embed Link ID.
 *
 * @return void
 */
function exovid_embed_link_id_callback() {
	$options = get_option( 'exovid_option' );
	printf(
		'<input class="regular-text" type="text" name="exovid_option[exovid_embed_link_id]" id="exovid_embed_link_id" value="%s">',
		isset( $options['exovid_embed_link_id'] ) ? esc_attr( $options['exovid_embed_link_id'] ) : ''
	);
}

/**
 * Section heading callback.
 */
function exovid_section_heading_callback() {}

/**
 * Add a settings link to the plugin page.
 *
 * @param array $links The existing plugin action links.
 * @return array The modified plugin action links with the settings link added.
 */
function exovid_add_plugin_page_settings_link( $links ) {
	$links[] = '<a href="' . admin_url( 'options-general.php?page=exovid_options_page' ) . '">' . esc_html__( 'Settings', 'exovia-youtube-dsgvo' ) . '</a>';
	return $links;
}

add_filter( 'plugin_action_links_' . EXOVID_PLUGIN_BASENAME, 'exovid_add_plugin_page_settings_link' );
