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

/**
 * Set entry number for Service archive.
 *
 * @param \WP_Query $query
 * @return void
 */
function services_per_page( $query ) {
	if ( ! is_admin() && $query->is_main_query() && is_post_type_archive( 'service' ) ) {
		$query->set( 'posts_per_page', 8 );
		return;
	}
}
add_action( 'pre_get_posts', __NAMESPACE__ . '\\services_per_page' );
