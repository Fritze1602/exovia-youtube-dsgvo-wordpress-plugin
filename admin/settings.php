<?php
/**
 * Settings for the Exovia YouTube DSGVO Plugin.
 *
 * @package Exovia_YouTube_DSGVO
 */

// Prevent direct access to the file.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'admin_init', 'register_exovid_settings' );

/**
 * Register Exovia settings.
 */
function register_exovid_settings() {
	register_setting( 'exovid_option_group', 'exovid_option', 'exovid_sanitize' );

	add_settings_section( 'exovid_section', __( 'Settings', 'exovia-youtube-dsgvo' ), 'exovid_section_heading_callback', 'exovid_options_page' );

	add_settings_field( 'exovid_youtube_iframe', __( 'YouTube Fallback Iframe', 'exovia-youtube-dsgvo' ), 'exovid_youtube_iframe_callback', 'exovid_options_page', 'exovid_section' );
	add_settings_field( 'exovid_wrapper_title', __( 'Wrapper Title', 'exovia-youtube-dsgvo' ), 'exovid_wrapper_title_callback', 'exovid_options_page', 'exovid_section' );
	add_settings_field( 'exovid_layer_text', __( 'Layer Text', 'exovia-youtube-dsgvo' ), 'exovid_layer_text_callback', 'exovid_options_page', 'exovid_section' );
	add_settings_field( 'exovid_anchor_text', __( 'Anchor Text', 'exovia-youtube-dsgvo' ), 'exovid_anchor_text_callback', 'exovid_options_page', 'exovid_section' );
	add_settings_field( 'exovid_button_title', __( 'Button Title', 'exovia-youtube-dsgvo' ), 'exovid_button_title_callback', 'exovid_options_page', 'exovid_section' );
	add_settings_field( 'exovid_button_title_all', __( 'Button Title Allow All', 'exovia-youtube-dsgvo' ), 'exovid_button_title_all_callback', 'exovid_options_page', 'exovid_section' );
	add_settings_field( 'exovid_show_load_all_button', __( 'Show load all button', 'exovia-youtube-dsgvo' ), 'exovid_show_load_all_button_callback', 'exovid_options_page', 'exovid_section' );
	add_settings_field( 'exovid_layer_background_color', __( 'Background Color', 'exovia-youtube-dsgvo' ), 'exovid_layer_background_color_callback', 'exovid_options_page', 'exovid_section' );
	add_settings_field( 'exovid_button_background_color', __( 'Button Background Color', 'exovia-youtube-dsgvo' ), 'exovid_button_background_color_callback', 'exovid_options_page', 'exovid_section' );
	add_settings_field( 'exovid_layer_font_color', __( 'Font Color', 'exovia-youtube-dsgvo' ), 'exovid_layer_font_color_callback', 'exovid_options_page', 'exovid_section' );
	add_settings_field( 'exovid_enable_info_box', __( 'Activate the info-box and powered by link', 'exovia-youtube-dsgvo' ), 'exovid_enable_info_box_callback', 'exovid_options_page', 'exovid_section' );
	add_settings_field( 'exovid_info_box_text', __( 'Info Box Text', 'exovia-youtube-dsgvo' ), 'exovid_info_box_text_callback', 'exovid_options_page', 'exovid_section', array( 'class' => 'exovid-info-box-dependant' ) );
	add_settings_field( 'exovid_embed_link_id', __( 'Embed Link id', 'exovia-youtube-dsgvo' ), 'exovid_embed_link_id_callback', 'exovid_options_page', 'exovid_section', array( 'class' => 'exovid-hidden' ) );
}

add_action( 'admin_menu', 'exovid_plugin_menu' );

/**
 * Add Exovia settings page to the menu.
 */
function exovid_plugin_menu() {
	add_options_page( 'exovia GDPR Consent for YouTube', __( 'YouTube GDPR', 'exovia-youtube-dsgvo' ), 'manage_options', 'exovid_options_page', 'exovid_add_options' );
}

/**
 * Render Exovia settings page.
 */
function exovid_add_options() {
	?>
	<div class="exovid-settings-page">
		<h1 class="exovid-title"><?php echo esc_html__( 'exovia YouTube DSGVO Plugin (GDPR)', 'exovia-youtube-dsgvo' ); ?></h1>
		<form method="post" action="options.php">
			<?php
			settings_fields( 'exovid_option_group' );
			do_settings_sections( 'exovid_options_page' );
			submit_button();
			?>
		</form>
		<h2 class="exovid-shortcode-title"><?php echo esc_html__( 'Shortcode Examples', 'exovia-youtube-dsgvo' ); ?></h2>
		<p>
			[exovia-dsgvo-youtube-video]
		</p>
		<p><?php echo esc_html__( "Please refer to the plugin's readme file for all the parameters you can use.", 'exovia-youtube-dsgvo' ); ?></p>

	</div>
	<?php
}
?>
