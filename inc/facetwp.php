<?php

namespace Prevencia;

/**
 * Filter sort options.
 *
 * @param array $options
 * @return array $options
 */
add_filter( 'facetwp_sort_options', function( $options ) {
	$options = [
		'default' => [
			'label' => 'სხვა',
			'query_args' => []
		],
		'title_asc' => [
			'label' => 'ანბანი (ა-ჰ)',
			'query_args' => [
				'orderby' => 'title',
				'order' => 'ASC',
			]
		],
		'title_desc' => [
			'label' => 'ანბანი (ჰ-ა)',
			'query_args' => [
				'orderby' => 'title',
				'order' => 'DESC',
			]
		],
	];

	return $options;
} );

/**
 * Return term URL for using with facets.
 *
 * @param string $slug Term slug.
 * @return string $url
 */
function get_facet_term_url( $slug ) {
	$archive_url = get_post_type_archive_link( 'service' );
	$url = add_query_arg( [
		'fwp_service_categories' => $slug,
	], $archive_url );

	return esc_url( $url );
}
