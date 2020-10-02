<?php
/**
 * Function to set up content width
 *
 * @package harvest
 * @author  Glatch
 */

namespace Harvest;

if ( ! function_exists( 'content_width' ) ) {
	/**
	 * Set the content width in pixels, based on the theme's design and stylesheet.
	 *
	 * @global int $content_width
	 */
	function content_width() {
		$GLOBALS['content_width'] = apply_filters( 'content_width', 730 );
	}
}
add_action( 'after_setup_theme', 'Harvest\\content_width', 0 );
