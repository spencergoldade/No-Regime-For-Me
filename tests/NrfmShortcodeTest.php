<?php
/**
 * Tests for the shortcode output path: random long item rendered for shortcode context.
 * The shortcode callback uses get_random_long_item() and NRFM_Display::render_item( $item, 'shortcode' ).
 *
 * @package No_Regime_For_Me
 */

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

// Stub WordPress escaping functions used by NRFM_Display::render_item().
if ( ! function_exists( 'esc_html' ) ) {
	function esc_html( $text ) {
		return htmlspecialchars( (string) $text, ENT_QUOTES, 'UTF-8' );
	}
}
if ( ! function_exists( 'esc_attr' ) ) {
	function esc_attr( $text ) {
		return htmlspecialchars( (string) $text, ENT_QUOTES, 'UTF-8' );
	}
}

require_once dirname( __DIR__ ) . '/no-regime-for-me/includes/class-nrfm-display.php';

class NrfmShortcodeTest extends TestCase {

	public function test_shortcode_output_path_produces_non_empty_html(): void {
		$item = NRFM_Content::get_random_long_item();
		$this->assertNotNull( $item, 'Library should provide at least one long item for shortcode.' );
		$output = NRFM_Display::render_item( $item, 'shortcode' );
		$this->assertIsString( $output );
		$this->assertNotEmpty( $output );
	}

	public function test_shortcode_output_path_contains_expected_markup(): void {
		$item = NRFM_Content::get_random_long_item();
		$this->assertNotNull( $item );
		$output = NRFM_Display::render_item( $item, 'shortcode' );
		$this->assertStringContainsString( 'nrfm-content', $output );
		$this->assertStringContainsString( 'nrfm-content--shortcode', $output );
	}
}
