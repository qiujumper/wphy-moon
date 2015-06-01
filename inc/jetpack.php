<?php
/**
 * Jetpack Compatibility File
 * See: https://jetpack.me/
 *
 * @package wphy-sun
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function wphy_sun_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'wphy_sun_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function wphy_sun_jetpack_setup
add_action( 'after_setup_theme', 'wphy_sun_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function wphy_sun_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function wphy_sun_infinite_scroll_render
