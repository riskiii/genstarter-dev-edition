<?php
/**
 * Configuration Helpers
 *
 * @package     KnowTheCode\GenStarter\Support
 * @since       1.0.0
 * @author      hellofromTonya
 * @link        https://github.com/KnowTheCode/genstarter-dev-edition
 * @license     GNU-2.0+
 */
namespace KnowTheCode\GenStarter\Support;

/**
 * Get the runtime configuration parameters.
 *
 * @since 1.0.0
 *
 * @param string $config_name Configuration file and key name
 * @param bool $store_in_cache When true, stores in the cache after loading.
 *              Default is false.
 *
 * @return array
 */
function get_runtime_configuration( $config_name, $store_in_cache = false ) {
	static $config_cache = array();

	if ( isset( $config_cache[ $config_name ] ) ) {
		return $config_cache[ $config_name ];
	}

	$runtime_config = get_config_file( $config_name );

	if ( $store_in_cache ) {
		$config_cache[ $config_name ] = $runtime_config;
	}

	return $runtime_config;
}

/**
 * Get the configuration file.
 *
 * @since 1.0.0
 *
 * @param string $config_file Name of the configuration file to retrieve (minus the file extension)
 *
 * @return array
 */
function get_config_file( $config_file ) {
	$config_file = CHILD_CONFIG_DIR . $config_file . '.php';

	return include( $config_file );
}
