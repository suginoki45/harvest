<?php
/**
 * Register widget area
 *
 * @package harvest
 * @author  Glatch
 */

namespace Harvest;

if ( ! function_exists( 'widgets_init' ) ) {
	/**
	 * Register widget area.
	 *
	 * @package harvest
	 * @author  Glatch
	 */
	function widgets_init() {
		$config = array(
			'description'   => esc_html__( 'Add widgets here.', 'harvest' ),
			'before_widget' => '<section class="widget %1$s %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		);
		register_sidebar(
			array(
				'name' => esc_html__( 'Sidebar', 'harvest' ),
				'id'   => 'wp-widgets-sidebar',
			) + $config
		);
		register_sidebar(
			array(
				'name' => esc_html__( 'Footer', 'harvest' ),
				'id'   => 'wp-widgets-footer',
			) + $config
		);
	}
}
add_action( 'widgets_init', 'Harvest\\widgets_init' );
