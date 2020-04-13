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
			'label' => '',
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

add_filter( 'facetwp_pager_html', function( $output, $params ) {
	$output = '';
	$template = '
	<nav class="navigation" role="navigation" aria-label="ნავიგაცია">
		<ul class="pagination pagination-lg justify-content-center">%s</ul>
	</nav>';

	$page = $params['page'];
	$i = 1;
	$total_pages = $params['total_pages'];
	$limit = ( $total_pages >= 5 ) ? 3 : $total_pages;
	$prev_disabled = ( $params['page'] <= 1 ) ? 'disabled' : '';
	$output .= '<li class="page-item ' . $prev_disabled . '"><a class="facetwp-page page-link" data-page="' . ( $page - 1 ) . '">წინა</a></li>';

	$loop = ($limit) ? $limit : $total_pages;
	while($i <= $loop) {
		$active = ($i == $page) ? 'active' : '';
		$output .= '<li class="page-item ' . $active . '"><a class="facetwp-page page-link" data-page="' . $i . '">' . $i . '</a></li>';
		$i++;
	}

	if($limit && $total_pages > '3') {
		$output .= ($page > $limit && $page != ($total_pages - 1) && $page <= ($limit + 1)) ? '<li class="page-item active"><a class="facetwp-page page-link" data-page="' . $page . '">' . $page . '</a></li>' : '';
		$output .= '<li class="page-item disabled"><a class="facetwp-page page-link">...</a></li>';
		$output .= ($page > $limit && $page != ($total_pages - 1) && $page > ($limit + 1)) ? '<li class="page-item active"><a class="facetwp-page page-link" data-page="' . $page . '">' . $page . '</a></li>' : '';
		$output .= ($page > $limit && $page != ($total_pages - 1) && $page != ($total_pages - 2) && $page > ($limit + 1)) ? '<li class="page-item disabled"><a class="facetwp-page page-link">...</a></li>' : '';
		$active = ($page == ($total_pages - 1)) ? 'active' : '';
		$output .= '<li class="page-item ' . $active . '"><a class="facetwp-page page-link" data-page="' . ($total_pages - 1) .'">' . ($total_pages - 1) .'</a></li>';
	}

	$next_disabled = ($page >= $total_pages) ? 'disabled' : '';
	$output .= '<li class="page-item ' . $next_disabled . '"><a class="facetwp-page page-link" data-page="' . ($page + 1) . '">შემდეგი</a></li>';

	return sprintf( $template, $output );
}, 10, 2 );

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
