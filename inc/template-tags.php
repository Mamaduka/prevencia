<?php
/**
 * Custom template tags for this theme.
 */
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

/**
 * Get service category dropdown.
 *
 * @return string
 */
function service_category_dropdown() {
	$args = [
		'show_option_none'  => 'აირჩიეთ კატეგორია',
		'orderby'           => 'id',
		'order'             => 'ASC',
		'show_count'        => false,
		'echo'              => false,
		'hierarchical'      => false,
		'name'              => 'fwp_service_category',
		'class'             => 'facetwp-dropdown',
		'taxonomy'          => 'service_category',
		'hide_if_empty'     => false,
		'value_field'       => 'slug',
		'required'          => false,
	];

	return \wp_dropdown_categories( $args );
}

/**
 * Helper function for getting asset URLs.
 *
 * @param string $path Eg. '/img/angle.png'.
 * @return string
 */
function the_asset( $path ) {
	return \get_template_directory_uri() . '/assets' . $path;
}

/**
 * Display article source if exists.
 *
 * @return string
 */
function display_source() {
	$url = get_field( 'source' );

	if ( ! $url ) {
		return '';
	}

	$host = parse_url( $url, PHP_URL_HOST );

	return sprintf(
		'<a href="%1$s" target="_blank" rel="noopener noreferrer">წყარო: %2$s</a>',
		esc_url( $url ),
		$host
	);
}

/**
 * ადამიანური დრო.
 *
 * @return string
 */
function human_diff_time() {
	printf(
		/* translators: time */
		'%s წინ',
		human_time_diff( get_the_modified_time( 'U' ), strtotime( wp_date( 'Y-m-d H:i:s' ) ) )
	);
}

/**
 * Get conditional archive title.
 *
 * @return string
 */
function get_archive_title() {
	$post_type = get_post_type();
	$titles = [
		'fake-news' => 'ყალბი ამბები',
		'service'   => 'დისტანციური სერვისები',
	];

	return isset( $titles[ $post_type ] ) ? $titles[ $post_type ] : 'სიახლეები';
}

/**
 * Get the statistics
 *
 * @param string $key
 * @param int $post_id
 * @return int
 */
function get_stat( $key = null, $post_id = null ) {
	$post = get_post( $post_id );

	return (int) get_post_meta( $post->ID, $key, true );
}

/**
 * Display pagination with Bootstrap styling.
 *
 * @return string
 */
function get_the_pagination() {
	$pagination = '';

	// Don't print empty markup if there's only one page.
	if ( $GLOBALS['wp_query']->max_num_pages > 1 ) {
		$pages = paginate_links( [
			'type'               => 'array',
			'mid_size'           => 1,
			'prev_text'          => _x( 'Previous', 'previous set of posts' ),
			'next_text'          => _x( 'Next', 'next set of posts' )
		] );
	}

	if ( ! isset( $pages ) ) {
		return '';
	}

	$template = '
	<nav class="navigation" role="navigation" aria-label="%2$s">
		<ul class="pagination pagination-lg justify-content-center">%1$s</ul>
	</nav>';

	foreach ( $pages as $page ) {
		$disabled = ( strpos( $page, 'current' ) !== false ) ? 'disabled' : '';

		$pagination .= sprintf(
			'<li class="page-item %2$s">%1$s</li>',
			str_replace( 'page-numbers', 'page-link', $page ),
			$disabled
		);
	}

	return sprintf( $template, $pagination, 'Navigation' );
}
