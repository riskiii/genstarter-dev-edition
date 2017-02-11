<?php
/**
 * Comments Structures - the builders of the HTML that goes out to the browser.
 *
 * @package     KnowTheCode\GenStarter\Structure
 * @since       1.0.0
 * @author      hellofromTonya
 * @link        https://github.com/KnowTheCode/genstarter-dev-edition
 * @license     GNU-2.0+
 */
namespace KnowTheCode\GenStarter\Structure;

use function KnowTheCode\GenStarter\Support\get_runtime_configuration;

add_filter( 'genesis_comment_list_args', __NAMESPACE__ . '\change_comments_gravatar_size' );
/**
 * Change the Comments Gravatar size.
 *
 * @since 1.0.0
 *
 * @param array $args
 *
 * @return array
 */
function change_comments_gravatar_size( array $args ) {
	$config = get_runtime_configuration( 'comments', true );

	$args['avatar_size'] = $config['avatar_size'];

	return $args;
}

add_filter( 'comment_form_defaults', __NAMESPACE__ . '\customize_comments_form_defaults', 50 );
/**
 * Modify the comment form default arguments.
 *
 * @since 1.0.0
 *
 * @param array $defaults Array of comment form default arguments.
 *
 * @return mixed
 */
function customize_comments_form_defaults( array $defaults ) {
	$config = get_runtime_configuration( 'comments', true );

	return wp_parse_args( $config['form_defaults'], $defaults );
}
