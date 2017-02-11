<?php
/**
 * Theme Supports Runtime Configuration
 *
 * These supports are loaded into add_theme_support in the `lib/setup.php` file.
 *
 * @package     KnowTheCode\GenStarter
 * @since       1.0.0
 * @author      hellofromTonya
 * @link        https://github.com/KnowTheCode/genstarter-dev-edition
 * @license     GNU-2.0+
 */
namespace KnowTheCode\GenStarter;

return array(
	'html5'                           => array(
		'caption',
		'comment-form',
		'comment-list',
		'gallery',
		'search-form',
	),
	'genesis-accessibility'           => array(
		'404-page',
		'drop-down-menu',
		'headings',
		'rems',
		'search-form',
		'skip-links',
	),
	'genesis-responsive-viewport'     => null,
	'custom-header'                   => array(
		'width'           => 600,
		'height'          => 160,
		'header-selector' => '.site-title a',
		'header-text'     => false,
		'flex-height'     => true,
	),
	'custom-background'               => null,
	'genesis-after-entry-widget-area' => null,
	'genesis-footer-widgets'          => 3,
	'genesis-menus'                   => array(
		'primary'   => __( 'After Header Menu', CHILD_TEXT_DOMAIN ),
		'secondary' => __( 'Footer Menu', CHILD_TEXT_DOMAIN ),
	),
);