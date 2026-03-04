<?php
/**
 * Content loader and random picker for the No regime for me library.
 *
 * @package No_Regime_For_Me
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Class NRFM_Content
 */
class NRFM_Content {

	/**
	 * Cached library data (short_quotes, admin_bar_tips, long_quotes, tips, insights).
	 *
	 * @var array<string, array<int, array<string, string>>>
	 */
	private static $library = null;

	/**
	 * Get the full library array from content/library.php.
	 *
	 * @return array<string, array<int, array<string, string>>> Keys: short_quotes, admin_bar_tips, long_quotes, tips, insights.
	 */
	public static function get_library(): array {
		if ( self::$library !== null ) {
			return self::$library;
		}
		$path = NRFM_PLUGIN_DIR . 'content/library.php';
		if ( ! is_readable( $path ) ) {
			self::$library = array(
				'short_quotes'    => array(),
				'admin_bar_tips'  => array(),
				'long_quotes'     => array(),
				'tips'            => array(),
				'insights'        => array(),
			);
			return self::$library;
		}
		$data = require $path;
		if ( ! is_array( $data ) ) {
			self::$library = array(
				'short_quotes'    => array(),
				'admin_bar_tips'  => array(),
				'long_quotes'     => array(),
				'tips'            => array(),
				'insights'        => array(),
			);
			return self::$library;
		}
		self::$library = array(
			'short_quotes'   => isset( $data['short_quotes'] ) && is_array( $data['short_quotes'] ) ? $data['short_quotes'] : array(),
			'admin_bar_tips' => isset( $data['admin_bar_tips'] ) && is_array( $data['admin_bar_tips'] ) ? $data['admin_bar_tips'] : array(),
			'long_quotes'    => isset( $data['long_quotes'] ) && is_array( $data['long_quotes'] ) ? $data['long_quotes'] : array(),
			'tips'            => isset( $data['tips'] ) && is_array( $data['tips'] ) ? $data['tips'] : array(),
			'insights'        => isset( $data['insights'] ) && is_array( $data['insights'] ) ? $data['insights'] : array(),
		);
		return self::$library;
	}

	/**
	 * Get one random item for the admin bar (short quote or admin_bar_tip).
	 * Short quotes are shown with attribution; admin_bar_tips are shown as plain text.
	 *
	 * @return array{text: string, author?: string, source?: string, type: string}|null
	 */
	public static function get_random_admin_bar_item(): ?array {
		$library = self::get_library();
		$pool    = array();
		foreach ( $library['short_quotes'] as $item ) {
			if ( is_array( $item ) && ! empty( $item['text'] ) ) {
				$item['type'] = 'short_quote';
				$pool[]       = $item;
			}
		}
		foreach ( $library['admin_bar_tips'] as $item ) {
			if ( is_array( $item ) && ! empty( $item['text'] ) ) {
				$item['type'] = 'admin_bar_tip';
				$pool[]       = $item;
			}
		}
		if ( empty( $pool ) ) {
			return null;
		}
		return $pool[ array_rand( $pool ) ];
	}

	/**
	 * Get one random short quote for the admin bar (legacy; prefer get_random_admin_bar_item).
	 *
	 * @deprecated Use get_random_admin_bar_item() instead. This method is a wrapper and will be removed in a future version.
	 * @return array{text: string, author?: string, source?: string, type: string}|null
	 */
	public static function get_random_short_quote(): ?array {
		return self::get_random_admin_bar_item();
	}

	/**
	 * Get one random long item (long quote, tip, or insight) for widget/shortcode.
	 *
	 * @return array{text: string, author?: string, source?: string, type: string}|null
	 */
	public static function get_random_long_item(): ?array {
		$library = self::get_library();
		$pool    = array();
		foreach ( $library['long_quotes'] as $item ) {
			if ( is_array( $item ) && ! empty( $item['text'] ) ) {
				$item['type'] = 'long_quote';
				$pool[]       = $item;
			}
		}
		foreach ( $library['tips'] as $item ) {
			if ( is_array( $item ) && ! empty( $item['text'] ) ) {
				$item['type'] = 'tip';
				$pool[]       = $item;
			}
		}
		foreach ( $library['insights'] as $item ) {
			if ( is_array( $item ) && ! empty( $item['text'] ) ) {
				$item['type'] = 'insight';
				$pool[]       = $item;
			}
		}
		if ( empty( $pool ) ) {
			return null;
		}
		return $pool[ array_rand( $pool ) ];
	}
}
