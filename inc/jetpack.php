<?php
/**
 * Jetpack Compatibility File.
 *
 * @link https://jetpack.me/
 *
 * @package wpstartertheme
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function wpstartertheme_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'wpstartertheme_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function wpstartertheme_jetpack_setup
add_action( 'after_setup_theme', 'wpstartertheme_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function wpstartertheme_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function wpstartertheme_infinite_scroll_render
