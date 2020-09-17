<?php
/**
 * The single page template
 *
 * @package _yourthemename
 * @author  Glatch
 */

$context                      = Timber::context();
$context['post']              = Timber::get_post();
$context['breadcrumbs']       = new Inc2734\WP_Breadcrumbs\Breadcrumbs();
$context['breadcrumbs_items'] = $context['breadcrumbs']->get();

Timber::render( 'single.twig', $context );
