<?php

namespace Prevencia;

/**
 * Return random posts if 'shuffle_and_pick' query argument is provided.
 *
 * @param array $posts
 * @param \WP_Query $query
 * @return array $posts
 */
function maybe_shuffle_and_pick( $posts, \WP_Query $query ) {
	if ( $pick = $query->get( 'shuffle_and_pick' ) ) {
		shuffle( $posts );
		$posts = array_slice( $posts, 0, (int) $pick );
	}

	return $posts;
}
add_filter( 'the_posts', __NAMESPACE__ . '\\maybe_shuffle_and_pick', 10, 2 );
