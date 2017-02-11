<?php
/**
 * Responsive menu settings runtime configuration parameters.
 *
 * @package     KnowTheCode\GenStarter
 * @since       1.0.0
 * @author      hellofromTonya
 * @link        https://github.com/KnowTheCode/genstarter-dev-edition
 * @license     GNU-2.0+
 */
namespace KnowTheCode\GenStarter;

return array(
	'mainMenu'          => __( 'Menu', CHILD_TEXT_DOMAIN ),
	'menuIconClass'     => 'dashicons-before dashicons-menu',
	'subMenu'           => __( 'Submenu', CHILD_TEXT_DOMAIN ),
	'subMenuIconsClass' => 'dashicons-before dashicons-arrow-down-alt2',
	'menuClasses'       => array(
		'combine' => array(
			'.nav-primary',
			'.nav-header',
		),
		'others'  => array(),
	),
);