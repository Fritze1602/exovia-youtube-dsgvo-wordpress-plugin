<?php
/**
 * Load plugin textdomain.
 *
 * @package Exovia_YouTube_DSGVO
 */

/**
 * Load plugin textdomain for translations.
 */
function exggmap_load_textdomain() {
	load_plugin_textdomain( 'exovia-youtube-dsgvo', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
}
add_action( 'init', 'exggmap_load_textdomain' );
