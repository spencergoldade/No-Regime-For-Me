<?php
/**
 * PHPUnit bootstrap for No regime for me plugin tests.
 * Loads plugin classes without WordPress. Tests run from plugin root.
 */

declare(strict_types=1);

$plugin_root = dirname( __DIR__ ) . '/no-regime-for-me';

if (!defined('ABSPATH')) {
	define('ABSPATH', $plugin_root . '/');
}
if (!defined('NRFM_PLUGIN_DIR')) {
	define('NRFM_PLUGIN_DIR', $plugin_root . '/');
}
if (!defined('NRFM_OPTION_DISPLAY_LOCATION')) {
	define('NRFM_OPTION_DISPLAY_LOCATION', 'nrfm_display_location');
}

require_once $plugin_root . '/includes/class-nrfm-content.php';
require_once $plugin_root . '/admin/class-nrfm-settings.php';
