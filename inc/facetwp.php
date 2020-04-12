<?php

namespace Prevencia;

/**
 * Filter sort options.
 *
 * @param array $options
 * @return array $options
 */
add_filter( 'facetwp_sort_options', function( $options ) {
	$options = array(
		'default' => array(
			'label' => __( 'Sort by', 'fwp' ),
			'query_args' => array()
		),
		'title_asc' => array(
			'label' => __( 'Title (A-Z)', 'fwp' ),
			'query_args' => array(
				'orderby' => 'title',
				'order' => 'ASC',
			)
		),
		'title_desc' => array(
			'label' => __( 'Title (Z-A)', 'fwp' ),
			'query_args' => array(
				'orderby' => 'title',
				'order' => 'DESC',
			)
		),
		'date_desc' => array(
			'label' => __( 'Date (Newest)', 'fwp' ),
			'query_args' => array(
				'orderby' => 'date',
				'order' => 'DESC',
			)
		),
		'date_asc' => array(
			'label' => __( 'Date (Oldest)', 'fwp' ),
			'query_args' => array(
				'orderby' => 'date',
				'order' => 'ASC',
			)
		)
	);

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