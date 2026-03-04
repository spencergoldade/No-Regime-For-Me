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
		<div class="wrap nrfm-settings-wrap">
			<h1><?php echo esc_html( get_admin_page_title() ); ?></h1>

			<div class="nrfm-settings-intro" role="region" aria-label="<?php esc_attr_e( 'About this plugin', 'no-regime-for-me' ); ?>">
				<p><?php esc_html_e( 'No Regime For Me is a small WordPress plugin that surfaces quotes and tips about vigilance and democracy.', 'no-regime-for-me' ); ?></p>
				<p><?php esc_html_e( 'It shows a short quote or tip in the admin bar, and can show longer content in an optional dashboard widget and on any page or post via a shortcode.', 'no-regime-for-me' ); ?></p>
				<p><?php esc_html_e( 'Staying informed and active against authoritarianism and fascism helps protect civil liberties and democratic norms.', 'no-regime-for-me' ); ?></p>
			</div>

			<div class="nrfm-settings-content">
				<div class="nrfm-settings-main">
					<section class="nrfm-settings-shortcode-box" aria-labelledby="nrfm-shortcode-heading">
						<h2 id="nrfm-shortcode-heading" class="nrfm-settings-section-title"><?php esc_html_e( 'Show content on your site', 'no-regime-for-me' ); ?></h2>
						<p><?php esc_html_e( 'Add this shortcode to any post or page to display one random quote, tip, or insight. Choose "Shortcode only" or "Both" below for the shortcode to output content.', 'no-regime-for-me' ); ?></p>
						<code class="nrfm-settings-shortcode-value" aria-label="<?php esc_attr_e( 'Shortcode to copy', 'no-regime-for-me' ); ?>">[no_regime_content]</code>
					</section>

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
									<p class="description"><?php esc_html_e( 'Choose where longer content appears.', 'no-regime-for-me' ); ?></p>
								</td>
							</tr>
						</table>
						<?php submit_button( __( 'Save settings', 'no-regime-for-me' ) ); ?>
					</form>
				</div>

				<aside class="nrfm-settings-sidebar" role="complementary" aria-label="<?php esc_attr_e( 'About and credits', 'no-regime-for-me' ); ?>">
					<div class="nrfm-settings-sidebar-box nrfm-settings-about">
						<h3 class="nrfm-settings-sidebar-title"><?php esc_html_e( 'About', 'no-regime-for-me' ); ?></h3>
						<p><?php echo wp_kses( __( 'No Regime For Me was created by <a href="https://spencergoldade.ca">Spencer Goldade</a>.', 'no-regime-for-me' ), array( 'a' => array( 'href' => array() ) ) ); ?></p>
						<p><?php esc_html_e( 'If you find it useful, consider voting, organizing, and donating to civil liberties organizations.', 'no-regime-for-me' ); ?></p>
					</div>
					<div class="nrfm-settings-sidebar-box nrfm-settings-credits">
						<h3 class="nrfm-settings-sidebar-title"><?php esc_html_e( 'References', 'no-regime-for-me' ); ?></h3>
						<p><?php esc_html_e( 'Quotes and ideas are drawn from six works (all in the public domain or otherwise credited). Fascism and authoritarianism are not new problems—these texts have long warned us.', 'no-regime-for-me' ); ?></p>
						<ul class="nrfm-settings-refs-list">
							<li><em><?php esc_html_e( 'The Federalist Papers', 'no-regime-for-me' ); ?></em> (Hamilton, Madison, Jay)</li>
							<li><em><?php esc_html_e( 'Readings on Fascism and National Socialism', 'no-regime-for-me' ); ?></em> (<?php esc_html_e( 'anthology', 'no-regime-for-me' ); ?>)</li>
							<li><em><?php esc_html_e( 'Secret Armies', 'no-regime-for-me' ); ?></em> (<?php esc_html_e( 'Project Gutenberg', 'no-regime-for-me' ); ?>)</li>
							<li><em><?php esc_html_e( 'The Pedigree of Fascism', 'no-regime-for-me' ); ?></em> (<?php esc_html_e( 'Project Gutenberg', 'no-regime-for-me' ); ?>)</li>
							<li><em><?php esc_html_e( "It Can't Happen Here", 'no-regime-for-me' ); ?></em> – Sinclair Lewis</li>
							<li><em><?php esc_html_e( 'They Thought They Were Free', 'no-regime-for-me' ); ?></em> – Milton Mayer</li>
						</ul>
					</div>
				</aside>
			</div>
		</div>
		<?php
	}
}
