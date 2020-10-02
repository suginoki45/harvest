<?php
/**
 * Function to set up content of the head element
 *
 * @package harvest
 * @author  Glatch
 */

namespace Harvest;

if ( ! function_exists( 'render_tag_in_head' ) ) {
	/**
	 * Sets up content of the head element.
	 */
	function render_tag_in_head() {
		?>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="format-detection" content="telephone=no, email=no, address=no">
		<link rel="profile" href="http://gmpg.org/xfn/11">
			<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
			<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<?php endif; ?>
		<?php
	}
}

add_action( 'wp_head', 'Harvest\\render_tag_in_head', 1 );
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
