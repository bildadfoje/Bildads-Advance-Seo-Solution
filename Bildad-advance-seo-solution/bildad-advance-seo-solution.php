<?php
/**
 * Plugin Name: Bildads Advance SEO Solution
 * Description: Standalone on-page SEO, social metadata, XML sitemaps, and JSON-LD schema for WordPress.
 * Version: 1.0.0
 * Requires at least: 6.0
 * Requires PHP: 7.4
 * Author: Bildad Foje
 * License: GPL-2.0-or-later
 * Text Domain: bildad-advance-seo-solution
 * Domain Path: /languages
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'BASS_VERSION', '1.0.0' );
define( 'BASS_FILE', __FILE__ );
define( 'BASS_DIR', plugin_dir_path( __FILE__ ) );
define( 'BASS_URL', plugin_dir_url( __FILE__ ) );

require_once BASS_DIR . 'includes/class-plugin.php';

function bass_boot() {
	return BASS_Plugin::instance();
}
add_action( 'plugins_loaded', 'bass_boot' );
