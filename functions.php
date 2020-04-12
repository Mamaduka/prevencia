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
		'chartjs-css',
		'https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css',
		[],
		'2.9.3'
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

	wp_register_script(
		'slick-js',
		'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js',
		[ 'jquery' ],
		'1.8.1',
		$in_footer
	);

	wp_enqueue_script(
		'chartjs-js',
		'https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js',
		[ ],
		'2.9.3',
		$in_footer
	);

	wp_enqueue_script(
		'prevencia-script',
		get_template_directory_uri() . '/assets/js/scripts.min.js',
		[ 'jquery', 'jquery-ui-accordion', 'prevencia-bootstrap-js', 'slick-js' ],
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
 * Load FacetWP modifications.
 */
require get_template_directory() . '/inc/facetwp.php';

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
