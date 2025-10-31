<?php
/**
 *  Exit if accessed directly
 *
 * @package Exovia_YouTube_DSGVO
 */
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Shortcode for loading YouTube video with GDPR compliance.
 *
 * @package Exovia_YouTube_DSGVO
 */

/**
 * Load default options.
 */
require_once 'exovid-defaults.php';

/**
 * Enqueue the function to load shortcode assets.
 */
require_once EXOVID_PLUGIN_DIR . '/public/exovid-public.php';

/**
 * Register shortcode.
 */
add_shortcode( 'exovia-dsgvo-youtube-video', 'exovid_youtube_video_gdpr_code' );

/**
 * Shortcode handler for YouTube video with GDPR compliance.
 *
 * @param array $atts Shortcode attributes.
 * @return string HTML output of the shortcode.
 */
function exovid_youtube_video_gdpr_code( $atts ) {
	// Enqueue assets only when the shortcode is actually used.
	wp_enqueue_style( 'exovid-shortcode-style' );
	wp_enqueue_script( 'exovid-shortcode-script' );

	$default = exovid_get_options();
	$a       = shortcode_atts( $default, $atts );

	$iframe  = $a['iframe'];
	$src_att = preg_match( '/src="([^"]+)"/', $iframe, $match_src );

	$width_att  = preg_match( '/width="([^"]+)"/', $iframe, $match_width );
	$height_att = preg_match( '/height="([^"]+)"/', $iframe, $match_height );

	$src          = $match_src[1];
	$width        = ! empty( $width_att ) ? $match_width[1] : 560;
	$height       = ! empty( $height_att ) ? $match_height[1] : 375;
	$aspect_ratio = 'aspect-ratio:' . esc_attr( $width ) . ' / ' . esc_attr( $height );

	$title                = $a['title'];
	$button_title         = $a['button_title'];
	$button_title_all     = $a['button_title_all'];
	$show_load_all_button = $a['show_load_all_button'];
	$layer_bg_color       = $a['layer_bg_color'];
	$anchor_text          = $a['anchor_text'];
	$layer_text           = $a['layer_text'];
	$button_bg_color      = $a['button_bg_color'];
	$font_color           = $a['font_color'];
	$enable_info_box      = $a['enable_info_box'];
	$info_box_text        = $a['info_box_text'];
	$embed_link_id        = $default['embed_link_id'];
	$background_image_id  = $a['layer_bg_image_id'];

	$embed_link_texts = array( 'Website Agentur', 'Webdesign Agentur', 'Webdesign made in Germany', 'Webdesign', 'Web
	agentur' );
	$embed_link       = $embed_link_texts[ $embed_link_id ];

	// -1 is the default value
	if ($background_image_id != -1) {
		$background_image_url = wp_get_attachment_image_url($background_image_id, 'full');
	} else {
		$background_image_url = false;
	}
	
	// $background_image_url could still be false when the image id was invalid
	if ($background_image_url) {
		$background_style = esc_attr( $layer_bg_color ) . "; background-image: url('" . esc_url($background_image_url) . "'); background-size:cover";
	} else {
		$background_style = esc_attr( $layer_bg_color );
	}

	ob_start();
	?>
	<div class="exovid-wrapper is-style-wide" style="<?php echo esc_attr( $aspect_ratio ); ?>">
		<div class="exovid-mask" style="background-color: <?php echo $background_style; ?>; color: <?php echo esc_attr( $font_color ); ?>">

		<div class="exovid-mask-content">
			<p class="exovid-caption"><?php echo esc_html( $title ); ?></p>
			<button class="exovid-btn exovid-load-one" style="color: <?php echo esc_attr( $font_color ); ?>; background-color: <?php echo esc_attr( $button_bg_color ); ?>; border-color: <?php echo esc_attr( $font_color ); ?>">
				<?php echo esc_html( $button_title ); ?> *
			</button>
			<?php if ( $show_load_all_button && 'false' !== $show_load_all_button ) { ?>
				<button class="exovid-btn exovid-load-all" style="color: <?php echo esc_attr( $font_color ); ?>; background-color: <?php echo esc_attr( $button_bg_color ); ?>; border-color: <?php echo esc_attr( $font_color ); ?>">
					<?php echo esc_html( $button_title_all ); ?> *
				</button>
			<?php } ?>
		</div>
		<?php if ( $enable_info_box && 'false' !== $enable_info_box ) { ?>
			<span role="button" class="exovid-info-circle exovid-info-opener" style="color: <?php echo esc_attr( $font_color ); ?>; border-color: <?php echo esc_attr( $font_color ); ?>">
				info
			</span>
			<div class="exovid-info-box" style="background-color:<?php echo esc_attr( $button_bg_color ); ?>">
				<div class="exovid-modal-content">
					<p class="exovid-modal-header"><span role="button" class="exovid-info-circle exovid-info-closer">&#x2715;</span></p>
					<p><?php echo esc_html( $info_box_text ); ?></p>
					<p class="exovid-developed small">
						<?php echo esc_html__( 'gdpr solution by', 'exovia-youtube-dsgvo' ); ?> exovia <br><a target="_blank" rel="noopener noreferrer" href="https://www.exovia.de" style="color:<?php echo esc_attr( $font_color ); ?>"><?php echo esc_html( $embed_link ); ?></a>
					</p>
				</div>
			</div>
		<?php } ?>
		</div>
		<iframe
			data-src="<?php echo esc_url( $src ); ?>"
			frameborder="0"
			allowfullscreen=""
			aria-hidden="false"
			tabindex="0">
		</iframe>
	</div>
	<p class="exovid-hints">
		* <?php echo esc_html( $layer_text ); ?>
		<a target="_blank" rel="noopener noreferrer" href="<?php echo esc_html__( 'https://policies.google.com/privacy?hl=en', 'exovia-youtube-dsgvo' ); ?>"><?php echo esc_html( $anchor_text ); ?></a>
	</p>
	<?php
	$var = ob_get_clean();
	return $var;
}