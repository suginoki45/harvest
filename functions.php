<?php
/**
 * _yourthemename functions and definitions.
 *
 * @package _yourthemename
 * @author  Glatch
 */

/**
 *  Include files.
 */
$includes = array(
	'/inc',
);
foreach ( $includes as $include ) {
	foreach ( glob( __DIR__ . $include . '/*.php' ) as $file ) {
		$template_name = str_replace( array( trailingslashit( __DIR__ ), '.php' ), '', $file );
		get_template_part( $template_name );
	}
}

/**
 * Uses composer autoloader.
 */
require_once get_template_directory() . '/vendor/autoload.php';

/**
 *  Theme definitions.
 */
define( '_YOURTHEMENAME_VER', '0.0.0' );

/**
 *  Initialize Timber.
 */
$timber = new Timber\Timber();

/**
 * This is where you add some context
 *
 * @param string $context context['this'] Being the Twig's {{ this }}.
 */
function add_to_context( $context ) {
	$context['menu'] = new \Timber\Menu( 'menu_primary' );

	return $context;
}
add_filter( 'timber/context', 'add_to_context' );
