<?php
/**
 * Tests for NRFM_Settings (sanitize_display_location).
 *
 * @package No_Regime_For_Me
 */

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class NrfmSettingsTest extends TestCase {

	public function test_sanitize_display_location_allows_dashboard(): void {
		$this->assertSame('dashboard', NRFM_Settings::sanitize_display_location('dashboard'));
	}

	public function test_sanitize_display_location_allows_shortcode(): void {
		$this->assertSame('shortcode', NRFM_Settings::sanitize_display_location('shortcode'));
	}

	public function test_sanitize_display_location_allows_both(): void {
		$this->assertSame('both', NRFM_Settings::sanitize_display_location('both'));
	}

	public function test_sanitize_display_location_rejects_invalid_returns_dashboard(): void {
		$this->assertSame('dashboard', NRFM_Settings::sanitize_display_location('invalid'));
		$this->assertSame('dashboard', NRFM_Settings::sanitize_display_location(''));
		$this->assertSame('dashboard', NRFM_Settings::sanitize_display_location('dashboard_only'));
	}

	public function test_sanitize_display_location_accepts_non_string_returns_dashboard(): void {
		$this->assertSame('dashboard', NRFM_Settings::sanitize_display_location(123));
		$this->assertSame('dashboard', NRFM_Settings::sanitize_display_location(null));
		$this->assertSame('dashboard', NRFM_Settings::sanitize_display_location([]));
	}
}
