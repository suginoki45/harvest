<?php
/**
 * Register navigation menus
 *
 * @package _yourthemename
 * @author  Glatch
 */

namespace Harvest;

register_nav_menus(
	array(
		'menu_primary' => __( 'Global Navigation', '_yourthemename' ),
		'menu_footer'  => __( 'Footer Navigation', '_yourthemename' ),
	)
);
