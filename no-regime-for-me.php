<?php
/**
 * Plugin Name: No Regime For Me
 * Plugin URI: https://github.com/your_username/no-regime-for-me
 * Description: Displays short quotes in the admin bar and longer quotes, tips, and insights in a dashboard widget or via shortcode.
 * Version: 1.0.0
 * Requires at least: 5.9
 * Requires PHP: 7.4
 * Author: Spencer Goldade
 * Author URI: https://spencergoldade.ca
 * License: GPL v3 or later
 * License URI: https://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain: no-regime-for-me
 * Domain Path: /languages
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'NRFM_VERSION', '1.0.0' );
define( 'NRFM_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'NRFM_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'NRFM_PLUGIN_BASENAME', plugin_basename( __FILE__ ) );

/**
 * Option key for where to show longer content: 'dashboard', 'shortcode', or 'both'.
 */
define( 'NRFM_OPTION_DISPLAY_LOCATION', 'nrfm_display_location' );

require_once NRFM_PLUGIN_DIR . 'includes/class-nrfm-content.php';
require_once NRFM_PLUGIN_DIR . 'includes/class-nrfm-display.php';

if ( is_admin() ) {
	require_once NRFM_PLUGIN_DIR . 'admin/class-nrfm-admin.php';
	require_once NRFM_PLUGIN_DIR . 'admin/class-nrfm-settings.php';
}

add_action( 'init', 'nrfm_load_textdomain' );
add_action( 'init', 'nrfm_register_shortcode' );
add_action( 'admin_bar_menu', 'nrfm_admin_bar_quote', 100 );
add_action( 'wp_dashboard_setup', 'nrfm_dashboard_widget' );

if ( is_admin() ) {
	add_action( 'plugins_loaded', array( 'NRFM_Admin', 'init' ) );
	add_action( 'plugins_loaded', array( 'NRFM_Settings', 'init' ) );
}

/**
 * Load plugin text domain for translations.
 */
function nrfm_load_textdomain(): void {
	load_plugin_textdomain(
		'no-regime-for-me',
		false,
		dirname( NRFM_PLUGIN_BASENAME ) . '/languages'
	);
}

/**
 * Register the shortcode for displaying long content on the front end.
 */
function nrfm_register_shortcode(): void {
	add_shortcode( 'no_regime_content', 'nrfm_shortcode_output' );
}

/**
 * Add a random short quote or one-liner tip to the admin bar (Hello Dolly style).
 *
 * @param \WP_Admin_Bar $wp_admin_bar Admin bar instance.
 */
function nrfm_admin_bar_quote( \WP_Admin_Bar $wp_admin_bar ): void {
	$item = NRFM_Content::get_random_admin_bar_item();
	if ( empty( $item ) ) {
		return;
	}
	$is_quote = isset( $item['type'] ) && $item['type'] === 'short_quote';
	$label   = ( $is_quote && ! empty( $item['author'] ) )
		? sprintf( '%1$s — %2$s', $item['text'], $item['author'] )
		: $item['text'];
	$wp_admin_bar->add_node(
		array(
			'id'    => 'nrfm-quote',
			'title' => esc_html( $label ),
			'meta'  => array( 'title' => esc_attr__( 'No Regime For Me', 'no-regime-for-me' ) ),
		)
	);
}

/**
 * Register the dashboard widget for long content (when setting allows).
 */
function nrfm_dashboard_widget(): void {
	$location = get_option( NRFM_OPTION_DISPLAY_LOCATION, 'dashboard' );
	if ( $location !== 'dashboard' && $location !== 'both' ) {
		return;
	}
	wp_add_dashboard_widget(
		'nrfm_content',
		__( 'No Regime For Me', 'no-regime-for-me' ),
		'nrfm_dashboard_widget_render',
		null,
		null,
		'normal'
	);
}

/**
 * Render the dashboard widget with one random long quote, tip, or insight.
 */
function nrfm_dashboard_widget_render(): void {
	$item = NRFM_Content::get_random_long_item();
	if ( empty( $item ) ) {
		echo '<p>' . esc_html__( 'No content available.', 'no-regime-for-me' ) . '</p>';
		return;
	}
	echo NRFM_Display::render_item( $item, 'admin' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- escaped inside
}

/**
 * Shortcode callback: output one random long quote, tip, or insight.
 *
 * @return string HTML output.
 */
function nrfm_shortcode_output(): string {
	$location = get_option( NRFM_OPTION_DISPLAY_LOCATION, 'dashboard' );
	if ( $location !== 'shortcode' && $location !== 'both' ) {
		return '';
	}
	$item = NRFM_Content::get_random_long_item();
	if ( empty( $item ) ) {
		return '';
	}
	wp_enqueue_style(
		'nrfm-base',
		NRFM_PLUGIN_URL . 'assets/css/nrfm-base.css',
		array(),
		NRFM_VERSION
	);
	wp_enqueue_style(
		'nrfm-shortcode',
		NRFM_PLUGIN_URL . 'assets/css/shortcode.css',
		array( 'nrfm-base' ),
		NRFM_VERSION
	);
	return NRFM_Display::render_item( $item, 'shortcode' );
}
