<?php
/**
 * Admin hooks: enqueue styles for dashboard widget and shortcode.
 *
 * @package No_Regime_For_Me
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Class NRFM_Admin
 */
class NRFM_Admin {

	/**
	 * Hook into admin enqueue.
	 */
	public static function init(): void {
		add_action( 'admin_enqueue_scripts', array( __CLASS__, 'enqueue_admin_styles' ) );
	}

	/**
	 * Enqueue admin CSS for dashboard widget (design tokens: colors, typography, spacing).
	 *
	 * @param string $hook_suffix Current admin page hook.
	 */
	public static function enqueue_admin_styles( string $hook_suffix ): void {
		if ( $hook_suffix !== 'index.php' && $hook_suffix !== 'toplevel_page_no-regime-for-me' ) {
			return;
		}
		wp_enqueue_style(
			'nrfm-base',
			NRFM_PLUGIN_URL . 'assets/css/nrfm-base.css',
			array(),
			NRFM_VERSION
		);
		wp_enqueue_style(
			'nrfm-admin',
			NRFM_PLUGIN_URL . 'admin/css/admin.css',
			array( 'nrfm-base' ),
			NRFM_VERSION
		);
	}
}
