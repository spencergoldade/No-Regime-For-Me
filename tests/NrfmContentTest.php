<?php
/**
 * Tests for NRFM_Content (library loading and random pickers).
 *
 * @package No_Regime_For_Me
 */

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class NrfmContentTest extends TestCase {

	/** @var array<string, array<int, array<string, string>>> */
	private static $empty_library = [
		'short_quotes'   => [],
		'admin_bar_tips' => [],
		'long_quotes'    => [],
		'tips'           => [],
		'insights'       => [],
	];

	public function setUp(): void {
		parent::setUp();
		$this->reset_library_cache();
	}

	public function tearDown(): void {
		$this->reset_library_cache();
		parent::tearDown();
	}

	private function reset_library_cache(): void {
		$ref  = new ReflectionClass(NRFM_Content::class);
		$prop = $ref->getProperty('library');
		if (version_compare(PHP_VERSION, '8.5.0', '<')) {
			$prop->setAccessible(true);
		}
		$prop->setValue(null, null);
	}

	public function test_get_library_returns_expected_keys(): void {
		$library = NRFM_Content::get_library();
		$this->assertIsArray($library);
		$this->assertArrayHasKey('short_quotes', $library);
		$this->assertArrayHasKey('admin_bar_tips', $library);
		$this->assertArrayHasKey('long_quotes', $library);
		$this->assertArrayHasKey('tips', $library);
		$this->assertArrayHasKey('insights', $library);
		$this->assertIsArray($library['short_quotes']);
		$this->assertIsArray($library['admin_bar_tips']);
		$this->assertIsArray($library['long_quotes']);
		$this->assertIsArray($library['tips']);
		$this->assertIsArray($library['insights']);
	}

	public function test_get_random_admin_bar_item_returns_null_or_item_with_text_and_type(): void {
		$item = NRFM_Content::get_random_admin_bar_item();
		if ($item === null) {
			$this->assertNull($item);
			return;
		}
		$this->assertIsArray($item);
		$this->assertArrayHasKey('text', $item);
		$this->assertNotEmpty($item['text']);
		$this->assertArrayHasKey('type', $item);
		$this->assertContains($item['type'], ['short_quote', 'admin_bar_tip']);
	}

	public function test_get_random_long_item_returns_null_or_item_with_text_and_type(): void {
		$item = NRFM_Content::get_random_long_item();
		if ($item === null) {
			$this->assertNull($item);
			return;
		}
		$this->assertIsArray($item);
		$this->assertArrayHasKey('text', $item);
		$this->assertNotEmpty($item['text']);
		$this->assertArrayHasKey('type', $item);
		$this->assertContains($item['type'], ['long_quote', 'tip', 'insight']);
	}

	public function test_get_random_admin_bar_item_returns_null_when_pool_empty(): void {
		$ref  = new ReflectionClass(NRFM_Content::class);
		$prop = $ref->getProperty('library');
		if (version_compare(PHP_VERSION, '8.5.0', '<')) {
			$prop->setAccessible(true);
		}
		$prop->setValue(null, self::$empty_library);
		$this->assertNull(NRFM_Content::get_random_admin_bar_item());
	}

	public function test_get_random_long_item_returns_null_when_pool_empty(): void {
		$ref  = new ReflectionClass(NRFM_Content::class);
		$prop = $ref->getProperty('library');
		if (version_compare(PHP_VERSION, '8.5.0', '<')) {
			$prop->setAccessible(true);
		}
		$prop->setValue(null, self::$empty_library);
		$this->assertNull(NRFM_Content::get_random_long_item());
	}
}
