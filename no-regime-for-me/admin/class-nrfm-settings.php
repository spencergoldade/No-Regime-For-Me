<?php
/**
 * Settings screen: where to show longer content (dashboard, shortcode, or both).
 *
 * @package No_Regime_For_Me
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Class NRFM_Settings
 */
class NRFM_Settings {

	/**
	 * Register menu and settings.
	 */
	public static function init(): void {
		add_action( 'admin_menu', array( __CLASS__, 'add_menu' ) );
		add_action( 'admin_init', array( __CLASS__, 'register_setting' ) );
	}

	/**
	 * Add plugin menu and settings page.
	 */
	public static function add_menu(): void {
		add_menu_page(
			__( 'No Regime For Me', 'no-regime-for-me' ),
			__( 'No Regime For Me', 'no-regime-for-me' ),
			'manage_options',
			'no-regime-for-me',
			array( __CLASS__, 'render_page' ),
			'dashicons-format-quote',
			30
		);
	}

	/**
	 * Register the display location option.
	 * Form security: options.php uses settings_fields( 'nrfm_settings' ), which outputs a nonce; WordPress verifies it on save.
	 */
	public static function register_setting(): void {
		register_setting(
			'nrfm_settings',
			NRFM_OPTION_DISPLAY_LOCATION,
			array(
				'type'              => 'string',
				'default'           => 'dashboard',
				'sanitize_callback' => array( __CLASS__, 'sanitize_display_location' ),
			)
		);
	}

	/**
	 * Sanitize display location: must be dashboard, shortcode, or both.
	 *
	 * @param mixed $value Raw value from form.
	 * @return string Sanitized value.
	 */
	public static function sanitize_display_location( $value ): string {
		$value  = is_string( $value ) ? $value : '';
		$allowed = array( 'dashboard', 'shortcode', 'both' );
		return in_array( $value, $allowed, true ) ? $value : 'dashboard';
	}

	/**
	 * Render the settings page.
	 * Secured by capability check: only users with manage_options see the form. settings_fields() provides the nonce for the POST.
	 */
	public static function render_page(): void {
		if ( ! current_user_can( 'manage_options' ) ) {
			return;
		}
		$current = get_option( NRFM_OPTION_DISPLAY_LOCATION, 'dashboard' );
		?>
		<div class="wrap">
			<h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
			<form action="options.php" method="post">
				<?php settings_fields( 'nrfm_settings' ); ?>
				<table class="form-table" role="presentation">
					<tr>
						<th scope="row"><?php esc_html_e( 'Where to show longer content', 'no-regime-for-me' ); ?></th>
						<td>
							<fieldset>
								<legend class="screen-reader-text"><?php esc_html_e( 'Where to show longer content', 'no-regime-for-me' ); ?></legend>
								<label><input type="radio" name="<?php echo esc_attr( NRFM_OPTION_DISPLAY_LOCATION ); ?>" value="dashboard" <?php checked( $current, 'dashboard' ); ?> /> <?php esc_html_e( 'Dashboard widget', 'no-regime-for-me' ); ?></label><br />
								<label><input type="radio" name="<?php echo esc_attr( NRFM_OPTION_DISPLAY_LOCATION ); ?>" value="shortcode" <?php checked( $current, 'shortcode' ); ?> /> <?php esc_html_e( 'Shortcode only', 'no-regime-for-me' ); ?></label><br />
								<label><input type="radio" name="<?php echo esc_attr( NRFM_OPTION_DISPLAY_LOCATION ); ?>" value="both" <?php checked( $current, 'both' ); ?> /> <?php esc_html_e( 'Both', 'no-regime-for-me' ); ?></label>
							</fieldset>
							<p class="description"><?php esc_html_e( 'Long quotes, tips, and insights appear in the dashboard widget and/or where you use the shortcode [no_regime_content].', 'no-regime-for-me' ); ?></p>
						</td>
					</tr>
				</table>
				<?php submit_button( __( 'Save settings', 'no-regime-for-me' ) ); ?>
			</form>
		</div>
		<?php
	}
}
