<?php
/**
 * Navigation Menu Structures - the builders of the HTML that goes out to the browser.
 *
 * @package     KnowTheCode\GenStarter\Structure
 * @since       1.0.0
 * @author      hellofromTonya
 * @link        https://github.com/KnowTheCode/genstarter-dev-edition
 * @license     GNU-2.0+
 */
namespace KnowTheCode\GenStarter\Structure;

add_filter( 'wp_nav_menu_args', __NAMESPACE__ . '\reduce_secondary_nav_to_one_level' );
/**
 * Let's reduce the secondary navigation menu to just one level of depth.
 *
 * @since 1.0.0
 *
 * @param array $args Array of wp_nav_menu() arguments.
 *
 * @return array
 */
function reduce_secondary_nav_to_one_level( array $args ) {
	if ( 'secondary' == $args['theme_location'] ) {
		$args['depth'] = 1;
	}

	return $args;
}
