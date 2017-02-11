<?php
/**
 * Author Box Structures - the builders of the HTML that goes out to the browser.
 *
 * @package     KnowTheCode\GenStarter\Structure
 * @since       1.0.0
 * @author      hellofromTonya
 * @link        https://github.com/KnowTheCode/genstarter-dev-edition
 * @license     GNU-2.0+
 */
namespace KnowTheCode\GenStarter\Structure;

add_filter( 'genesis_author_box_gravatar_size', __NAMESPACE__ . '\change_author_box_gravatar_size' );
/**
 * Change the author box's gravatar size.
 *
 * @since 1.0.0
 *
 * @return integer
 */
function change_author_box_gravatar_size() {
	return 90;
}
