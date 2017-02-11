<?php
/**
 * Assets handlers
 *
 * @package     KnowTheCode\GenStarter\Support
 * @since       1.0.0
 * @author      hellofromTonya
 * @link        https://KnowTheCode.io
 * @license     GNU-2.0+
 */
namespace KnowTheCode\GenStarter\Support;

add_filter( 'stylesheet_uri', __NAMESPACE__ . '\change_stylesheet_uri_to_min' );
/**
 * If the website is not in local development mode, then change the theme's stylesheet
 * to the minified version instead of the full version.
 *
 * @since 1.0.0
 *
 * @param string $stylesheet_uri URI to the theme's stylesheet
 *
 * @return string
 */
function change_stylesheet_uri_to_min( $stylesheet_uri ) {
	return CHILD_THEME_IN_DEV_MODE
		? $stylesheet_uri
		: CHILD_URL . '/style.min.css';
}

add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_assets' );
/**
 * Enqueue the theme's assets,i.e. styles and scripts.
 *
 * @since 1.0.0
 *
 * @return void
 */
function enqueue_assets() {
	enqueue_styles();
	enqueue_scripts();
}

/**
 * Enqueue styles.
 *
 * @since 1.0.0
 *
 * @return void
 */
function enqueue_styles() {
	$config = get_runtime_configuration( 'styles' );

	if ( $config['use_google_fonts'] ) {
		wp_enqueue_style(
			CHILD_TEXT_DOMAIN . '-fonts',
			get_google_fonts_url( $config['google_fonts'] ),
			array(),
			CHILD_THEME_VERSION
		);
	}

	if ( $config['use_dashicons'] ) {
		wp_enqueue_style( 'dashicons' );
	}
}

/**
 * Enqueue scripts.
 *
 * @since 1.0.0
 *
 * @return void
 */
function enqueue_scripts() {
	$suffix   = CHILD_THEME_IN_DEV_MODE ? '' : '.min';
	$key_name = CHILD_TEXT_DOMAIN . '-responsive-menu';

	wp_enqueue_script(
		$key_name,
		CHILD_URL . "/assets/js/responsive-menu{$suffix}.js",
		array( 'jquery' ),
		CHILD_THEME_VERSION,
		true
	);

	wp_localize_script(
		$key_name,
		'ktcGenStarterMenuSettings',
		get_runtime_configuration( 'responsive-menu-settings' )
	);
}

/**
 * Build Google fonts URL.
 *
 * This function enqueues Google fonts in such a way that translators can easily turn on/off
 * the fonts if they do not contain the necessary character sets. Hat tip to Frank Klein for
 * the tutorial.
 *
 * @link http://themeshaper.com/2014/08/13/how-to-add-google-fonts-to-wordpress-themes/
 *
 * @since  1.0.0
 *
 * @param array $font_families Array of font families to assemble.
 *
 * @return string
 */
function get_google_fonts_url( array $font_families ) {
	$query_args = array(
		'family' => urlencode( implode( '|', $font_families ) ),
		'subset' => urlencode( 'latin,latin-ext' ),
	);

	return add_query_arg( $query_args, '//fonts.googleapis.com/css' );
}
