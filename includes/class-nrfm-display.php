<?php
/**
 * Display helpers: render quote with attribution or plain text for tips/insights.
 *
 * @package No_Regime_For_Me
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Class NRFM_Display
 */
class NRFM_Display {

	/**
	 * Render one item (long quote, tip, or insight) as HTML.
	 *
	 * Quotes with author get a blockquote and styled attribution; tips and insights get a plain paragraph.
	 * When type is long_quote but author is empty, output is also a plain paragraph (not a blockquote).
	 *
	 * @param array{text: string, author?: string, source?: string, type: string} $item   Item from content library.
	 * @param string                                                              $context 'admin' (dashboard) or 'shortcode' (front end).
	 * @return string Escaped HTML.
	 */
	public static function render_item( array $item, string $context = 'admin' ): string {
		$text = isset( $item['text'] ) ? $item['text'] : '';
		if ( $text === '' ) {
			return '';
		}
		$is_quote = isset( $item['type'] ) && $item['type'] === 'long_quote';
		$escaped  = esc_html( $text );
		$css_class = 'nrfm-content nrfm-content--' . esc_attr( $context );
		if ( $is_quote && ! empty( $item['author'] ) ) {
			$attribution = self::build_attribution( $item );
			return sprintf(
				'<div class="%1$s"><blockquote class="nrfm-quote">%2$s</blockquote>%3$s</div>',
				$css_class,
				$escaped,
				$attribution
			);
		}
		return sprintf( '<div class="%1$s"><p class="nrfm-text">%2$s</p></div>', $css_class, $escaped );
	}

	/**
	 * Build attribution HTML for a quote (— Author, Source).
	 *
	 * @param array{author?: string, source?: string} $item Item with optional author and source.
	 * @return string Escaped HTML for the attribution line.
	 */
	private static function build_attribution( array $item ): string {
		$parts = array();
		if ( ! empty( $item['author'] ) ) {
			$parts[] = esc_html( $item['author'] );
		}
		if ( ! empty( $item['source'] ) ) {
			$parts[] = esc_html( $item['source'] );
		}
		if ( empty( $parts ) ) {
			return '';
		}
		$line = trim( implode( ', ', $parts ) );
		return '<p class="nrfm-attribution">— ' . $line . '</p>';
	}
}
