<?php
/**
 * Widget areas (sidebar) runtime configuration parameters.
 *
 * @package     KnowTheCode\GenStarter
 * @since       1.0.0
 * @author      hellofromTonya
 * @link        https://github.com/KnowTheCode/genstarter-dev-edition
 * @license     GNU-2.0+
 */
namespace KnowTheCode\GenStarter;

return array(

	/*=============================================================
	 * Sidebars to be unregistered at runtime
	 *============================================================/
	/**
	 * Uncomment the sidebars that you want unregistered for this
	 * child theme.  If there are sidebars being added by plugins,
	 * you can add those here too.
	 */

	'unregister_sidebar' => array(
//		'sidebar',
		'sidebar-alt',
//		'header-right',
	),

	/*=============================================================
	 * Sidebars to be registered at runtime
	 *============================================================/
	/**
	 * Copy the example configuration for each sidebar that you want to
	 * register for your project.  Then customize each for your needs.
	 */
	'register_sidebar'   => array(

//		array(
//			'id'          => 'example_sidebar',
//			'name'        => __( 'Example Sidebar', CHILD_TEXT_DOMAIN ),
//			'description' => __( 'This is the description for the example sidebar.', CHILD_TEXT_DOMAIN ),
//		),
	),
);