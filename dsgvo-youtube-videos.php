<?php
/**
 * Plugin Name:       exovia YouTube DSGVO
 * Plugin URI:        https://wordpress.org/plugins/exovia-youtube-dsgvo/
 * Description:       Easily embed DSGVO compliant Youtube videos
 * Version:           1.0.0
 * Requires at least: 5.8
 * Requires PHP:      8.0
 * Author:            exovia
 * Author URI:        https://www.exovia.de/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       exovia-youtube-dsgvo
 *
 * This program is free software; you can redistribute it and/or modify it under the terms of the GNU
 * General Public License version 2, as published by the Free Software Foundation. You may NOT assume
 * that you can use any other version of the GPL.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without
 * even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @package Exovia_YouTube_DSGVO
 */

/**
 * Definitions
 */
define( 'EXOVID_PLUGIN_VERSION', '1.0.0' );
define( 'EXOVID_PLUGIN', __FILE__ );
define( 'EXOVID_PLUGIN_BASENAME', plugin_basename( EXOVID_PLUGIN ) );
define( 'EXOVID_PLUGIN_NAME', trim( dirname( EXOVID_PLUGIN_BASENAME ), '/' ) );
define( 'EXOVID_PLUGIN_DIR', untrailingslashit( dirname( EXOVID_PLUGIN ) ) );

/**
 * Load plugin textdomain.
 */
require EXOVID_PLUGIN_DIR . '/includes/exovid-i18n.php';

/**
 * Enqueue public styles and scripts.
 */
require EXOVID_PLUGIN_DIR . '/public/exovid-public.php';

/**
 * Adds Settingpage with options.
 */
require EXOVID_PLUGIN_DIR . '/admin/exovid-admin.php';
require EXOVID_PLUGIN_DIR . '/admin/settings.php';
require EXOVID_PLUGIN_DIR . '/admin/callbacks.php';
require EXOVID_PLUGIN_DIR . '/admin/sanitize.php';

/**
 * Adds the Shortcode and Frontend Output.
 */
require EXOVID_PLUGIN_DIR . '/includes/exovid-shortcode.php';
