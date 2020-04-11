<?php

namespace Prevencia;

const VERSION = '040420';

/**
 * Setup theme features.
 *
 * @return void
 */
function setup_theme() {
	add_theme_support( 'post-thumbnails' );

	// Set post thumbnail size.
	set_post_thumbnail_size( 910, 9999 );

	add_theme_support( 'title-tag' );

	add_theme_support(
		'html5',
		[
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'script',
			'style',
		]
	);
}
add_action( 'after_setup_theme', __NAMESPACE__ . '\\setup_theme' );

/**
 * Register and enqueue assets.
 *
 * @return void
 */
function enqueue_assets() {
	$in_footer = true;

	wp_dequeue_style( 'wp-block-library' );

	wp_register_style(
		'prevencia-bootstrap-css',
		'https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css',
		[],
		'4.4.1'
	);

	wp_enqueue_style(
		'prevencia-slick-slider-css',
		'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css',
		[],
		'1.8.1'
	);

	wp_enqueue_style(
		'prevencia-slick-slider-theme-css',
		'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css',
		[],
		'1.9.0'
	);

	wp_enqueue_style(
		'prevencia-style',
		get_template_directory_uri() . '/assets/css/main.min.css',
		[ 'prevencia-bootstrap-css' ],
		VERSION
	);

	wp_register_script(
		'prevencia-bootstrap-js',
		'https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js',
		[ 'jquery' ],
		'4.4.1',
		$in_footer
	);

	wp_enqueue_script(
		'prevencia-slick-slider-js',
		'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js',
		[ 'jquery' ],
		'1.8.1',
		$in_footer
	);

	wp_enqueue_script(
		'prevencia-script',
		get_template_directory_uri() . '/assets/js/scripts.min.js',
		[ 'jquery', 'jquery-ui-accordion', 'prevencia-bootstrap-js' ],
		VERSION,
		$in_footer
	);
}
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\\enqueue_assets' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Load custom queries and their filters.
 */
require get_template_directory() . '/inc/queries.php';

/**
 * Adds tracking code to the site.
 *
 * @return void
 */
function inject_tracking_codes() {
	get_template_part( 'partials/traking' );
}
add_action( 'wp_head', __NAMESPACE__ . '\\inject_tracking_codes' );

/**
 * Adjust the excerpt length.
 *
 * @param int $length
 * @return int
 */
function excerpt_length( $length ) {
	return 5;
}
add_filter( 'excerpt_length', __NAMESPACE__ . '\\excerpt_length' );

/**
 * Replace excerpt more value with "..."
 *
 * @param string $more
 * @return string
 */
function excerpt_more( $more ) {
	return '&hellip;';
}
add_filter( 'excerpt_more', __NAMESPACE__ . '\\excerpt_more' );

/**
 * Apply Bootstrap class to FaceWP dropdown.
 *
 * @param string $output
 * @param array $params
 */
add_filter( 'facetwp_facet_html', function( $output, $params ) {
	if ( 'dropdown' == $params['facet']['type'] ) {
		// $output = str_replace( 'facetwp-dropdown', 'facetwp-dropdown form-control', $output );
	}
	return $output;
}, 10, 2 );

/**
 * Get random services when no facet is selected.
 *
 * @param array $post_ids
 * @param \FacetWP_Renderer $renderer
 * @return array $post_ids
 */
add_filter( 'facetwp_filtered_post_ids', function( $post_ids, $renderer ) {
	// Bail, if facet is selected.
	if ( ! empty( $renderer->facets ) ) {
		return $post_ids;
	}

	// Bail if not 'service' template.
	if ( $renderer->template['name'] !== 'services' ) {
		return $post_ids;
	}

	$per_page = isset( $renderer->template['query_obj']['posts_per_page'] )
		? (int) $renderer->template['query_obj']['posts_per_page']
		: 20;

	shuffle( $post_ids );
	$post_ids = array_slice( $post_ids, 0, $per_page );

	return $post_ids;
}, 10, 2 );

/**
 * Helper function for getting asset URLs.
 *
 * @param string $path Eg. '/img/angle.png'.
 * @return string
 */
function the_asset( $path ) {
	return get_template_directory_uri() . '/assets' . $path;
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
