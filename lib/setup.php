<?php
/**
 * Theme Setup - Setting it up for runtime.
 *
 * @package     KnowTheCode\GenStarter
 * @since       1.0.0
 * @author      hellofromTonya
 * @link        https://github.com/KnowTheCode/genstarter-dev-edition
 * @license     GNU-2.0+
 */
namespace KnowTheCode\GenStarter;

use function KnowTheCode\GenStarter\Support\get_runtime_configuration;

add_action( 'genesis_setup', __NAMESPACE__ . '\setup_child_theme', 15 );
/**
 * Setup the child theme to get it ready to run.
 *
 * @since 1.0.0
 *
 * @return void
 */
function setup_child_theme() {
	load_child_theme_textdomain(
		CHILD_TEXT_DOMAIN,
		CHILD_THEME_DIR . '/languages'
	);

	add_the_child_theme_supports(
		get_runtime_configuration( 'theme-supports' )
	);

	add_child_theme_image_sizes(
		get_runtime_configuration( 'image-sizes' )
	);

	Structure\setup_the_sidebars(
		get_runtime_configuration( 'sidebars' )
	);
}

/**
 * Adds theme supports to the site.
 *
 * @since 1.0.0
 *
 * @param array $config Array of theme supports
 *
 * @return void
 */
function add_the_child_theme_supports( array $config ) {

	foreach ( $config as $feature => $args ) {
		add_theme_support( $feature, $args );
	}
}

/**
 * Adds new image sizes.
 *
 * @since 1.0.0
 *
 * @param array $config Array of new image sizes
 *
 * @return void
 */
function add_child_theme_image_sizes( array $config ) {

	foreach( $config as $image_size_name => $config_parameters ) {
		$crop = array_key_exists( 'crop', $config_parameters ) ? $config_parameters['crop'] : false;

		add_image_size(
			$image_size_name,
			$config_parameters['width'],
			$config_parameters['height'],
			$crop
		);
	}
}

add_filter( 'genesis_theme_settings_defaults', __NAMESPACE__ . '\set_child_theme_settings_defaults' );
/**
 * Updates theme settings on reset.
 *
 * @since 1.0.0
 *
 * @param array $defaults
 *
 * @return array
 */
function set_child_theme_settings_defaults( array $defaults ) {
	$config = Support\get_runtime_configuration( 'theme-settings-defaults', true );

	$defaults = wp_parse_args( $config, $defaults );

	return $defaults;
}

add_action( 'after_switch_theme', __NAMESPACE__ . '\update_child_theme_settings_defaults' );
/**
 * Updates theme settings on activation.
 *
 * @since 1.0.0
 *
 * @return void
 */
function update_child_theme_settings_defaults() {
	$config = Support\get_runtime_configuration( 'theme-settings-defaults', true );

	if ( function_exists( 'genesis_update_settings' ) ) {
		genesis_update_settings( $config );
	}

	update_option( 'posts_per_page', $config['blog_cat_num'] );
}
