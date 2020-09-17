<?php
/**
 * Register widget area
 *
 * @package _yourthemename
 * @author  Glatch
 */

namespace Harvest;

if ( ! function_exists( '_yourthemename_widgets_init' ) ) {
	/**
	 * Register widget area.
	 *
	 * @package _yourthemename
	 * @author  Glatch
	 */
	function _yourthemename_widgets_init() {
		$config = array(
			'description'   => esc_html__( 'Add widgets here.', '_yourthemename' ),
			'before_widget' => '<section class="widget %1$s %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		);
		register_sidebar(
			array(
				'name' => esc_html__( 'Sidebar', '_yourthemename' ),
				'id'   => 'wp-widgets-sidebar',
			) + $config
		);
		register_sidebar(
			array(
				'name' => esc_html__( 'Footer', '_yourthemename' ),
				'id'   => 'wp-widgets-footer',
			) + $config
		);
	}
}
add_action( 'widgets_init', '_yourthemename_widgets_init' );
