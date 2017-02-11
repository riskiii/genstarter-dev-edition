<?php
/**
 * Enqueue styles runtime configuration parameters.
 *
 * @package     KnowTheCode\GenStarter\Support
 * @since       1.0.0
 * @author      hellofromTonya
 * @link        https://KnowTheCode.io
 * @license     GNU-2.0+
 */
namespace KnowTheCode\GenStarter\Support;

return array(

	/*=============================================================
	 * Google Fonts
	 *============================================================/
	/**
	 * If you want to use something else, such as TypeKit,
	 * then set this parameter to false.  For TypeKit,
	 * you copy the JavaScript from the kit and then
	 * store it in the Genesis > Theme Settings > Header Scripts meta box.
	 */
	'use_google_fonts' => true,
	/**
	 * List all the fonts you want in your theme here.
	 * Each font should take up one element in the array.
	 */
	'google_fonts'     => array(
		'Source+Sans+Pro:400,600,700',
		//'Lato:300,400,700,900',
	),

	/*=============================================================
	 * Font Icons
	 *============================================================/
	/**
	 * You can set whether you want to use Dashicons or Font Awesome.
	 * Setting either or both to true will tell the theme to
	 * enqueue it.
	 */
	'use_dashicons'    => true,
	'use_fontawesome'  => false,
);
