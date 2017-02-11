<?php
/**
 * Sidebar structures
 *
 * @package     KnowTheCode\GenStarter\Structure
 * @since       1.0.0
 * @author      hellofromTonya
 * @link        https://github.com/KnowTheCode/genstarter-dev-edition
 * @license     GNU-2.0+
 */
namespace KnowTheCode\GenStarter\Structure;

add_filter( 'widget_text', 'do_shortcode' );

/**
 * Initialize the sidebars (widget areas)
 *
 * @since 1.0.0
 *
 * @param array $config Runtime configuration parameters
 *
 * @return void
 */
function setup_the_sidebars( array $config ) {

	unregister_the_sidebars( $config['unregister_sidebar'] );

	register_the_sidebars( $config['register_sidebar'] );
}

/**
 * Unregister each of the sidebars per the runtime configuration.
 *
 * @since  1.0.0
 *
 * @return void
 */
function unregister_the_sidebars( array $config ) {
	foreach ( $config as $sidebar_name ) {
		unregister_sidebar( $sidebar_name );
	}
}

/**
 * Register each of the sidebars per the runtime configuration.
 *
 * @since  1.0.0
 *
 * @return void
 */
function register_the_sidebars( array $config ) {
	foreach ( $config as $sidebar ) {
		genesis_register_sidebar( $sidebar );
	}
}
