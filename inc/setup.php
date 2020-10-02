<?php
/**
 * Function to set up after set up theme
 *
 * @package harvest
 * @author  Glatch
 */

namespace Harvest;

if ( ! function_exists( 'setup' ) ) {
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 */
	function setup() {
		/**
		 * Loading language file.
		 */
		load_theme_textdomain( 'harvest', get_template_directory() . '/languages' );

		/**
		 * Support automatic-feed-links.
		 */
		add_theme_support( 'automatic-feed-links' );

		/**
		 * Support editor-style.
		 */
		add_theme_support( 'editor-styles' );
		add_editor_style( 'dist/css/editor-style.css' );

		/**
		 * Support custom-header.
		 */
		add_theme_support( 'custom-header' );

		/**
		 * Support custom-background.
		 */
		$custom_background_defaults = array();
		add_theme_support( 'custom-background', apply_filters( 'harvest_custom_background_defaults', $custom_background_defaults ) );

		/**
		 * Support title-tag.
		 */
		add_theme_support( 'title-tag' );

		/**
		 * Support custom-logo.
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 160,
				'width'       => 320,
				'flex-height' => true,
				'flex-width'  => true,
			)
		);

		/**
		 * Support post-thumbnails.
		 */
		add_theme_support( 'post-thumbnails' );

		/**
		 * Switch default core markup for search form, comment form, and galleries
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
			)
		);
	}
}
add_action( 'after_setup_theme', 'Harvest\\setup' );
