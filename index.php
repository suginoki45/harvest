<?php
/**
 * The index page context
 *
 * @package _yourthemename
 * @author  Glatch
 */

$context          = Timber::context();
$context['posts'] = Timber::get_posts();

if ( is_home() ) {
	$context['identifier'] = 'home';
}

Timber::render( 'index.twig', $context );
