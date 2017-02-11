<?php
/**
 * Theme initialization
 *
 * @package     KnowTheCode\GenStarter
 * @since       1.0.0
 * @author      hellofromTonya
 * @link        https://github.com/KnowTheCode/genstarter-dev-edition
 * @license     GNU-2.0+
 */
namespace KnowTheCode\GenStarter;

/**
 * Initialize the theme's constants.
 *
 * @since 1.0.0
 *
 * @return void
 */
function init_constants() {
	$child_theme = wp_get_theme();

	define( 'CHILD_THEME_NAME', $child_theme->get( 'Name' ) );
	define( 'CHILD_THEME_URL', $child_theme->get( 'ThemeURI' ) );
	define( 'CHILD_THEME_VERSION', $child_theme->get( 'Version' ) );
	define( 'CHILD_TEXT_DOMAIN', $child_theme->get( 'TextDomain' ) );
	define( 'CHILD_THEME_DIR', get_stylesheet_directory() );
	define( 'CHILD_CONFIG_DIR', CHILD_THEME_DIR . '/config/' );

	define( 'CHILD_THEME_IN_DEV_MODE', defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG );
}

/**
 * Initialize the filenames to be loaded.
 *
 * @since 1.4.9
 *
 * @return void
 */
function init_files() {
	$filenames = array(
		'support/config-helpers.php',
		'support/assets.php',

		'components/author-box.php',

		'structure/archive.php',
		'structure/comments.php',
		'structure/footer.php',
		'structure/header.php',
		'structure/menu.php',
		'structure/post.php',
		'structure/sidebar.php',

		'setup.php',
	);
	load_specified_files( $filenames );
}

/**
 * Load each of the specified files.
 *
 * @since 1.3.0
 *
 * @param array $filenames Array of filenames to load
 * @param string $folder_root
 *
 * @return void
 */
function load_specified_files( array $filenames, $folder_root = '' ) {
	$folder_root = $folder_root ?: CHILD_THEME_DIR . '/lib/';

	foreach ( $filenames as $filename ) {
		require_once( $folder_root . $filename );
	}
}

add_action( 'genesis_init', __NAMESPACE__ . '\init_child_theme' );
/**
 * Initialize the theme.
 *
 * @since 1.0.0
 *
 * @return void
 */
function init_child_theme() {
	init_constants();

	init_files();
}
