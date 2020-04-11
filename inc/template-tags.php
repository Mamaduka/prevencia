<?php

namespace Prevencia;

/**
 * Get the service category.
 *
 * @param int $id
 * @return string Category name
 */
function get_service_category( $id = false ) {
	$categories = get_the_terms( $id, 'service_category' );
	if ( ! $categories || is_wp_error( $categories ) ) {
		$categories = [];
	}

	$category = reset( $categories );

	if ( empty( $category ) ) {
		return '';
	}

	return esc_html( $category->name );
}
