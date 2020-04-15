<?php
/**
 * Load theme assets.
 */

namespace Prevencia;

const VERSION = '150420';

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
		'slickjs',
		'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js',
		[ 'jquery' ],
		'1.8.1',
		$in_footer
	);

	wp_enqueue_script(
		'prevencia-script',
		get_template_directory_uri() . '/assets/js/scripts.min.js',
		[ 'jquery', 'jquery-ui-accordion', 'prevencia-bootstrap-js', 'slickjs', ],
		VERSION,
		$in_footer
	);
}
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\\enqueue_assets' );

/**
 * Enqueue Chart.js assets.
 *
 * @return void
 */
function enqueue_stat_assets() {
	$in_footer = true;

	wp_register_script(
		'cdn-moment',
		'https://cdn.jsdelivr.net/npm/moment@2.24.0/moment.min.js',
		[],
		'2.24.0',
		$in_footer
	);

	wp_register_script(
		'cdn-moment-ka',
		'https://cdn.jsdelivr.net/npm/moment@2.24.0/locale/ka.js',
		[],
		'2.24.0',
		$in_footer
	);

	wp_register_script(
		'chartjs',
		'https://cdn.jsdelivr.net/npm/chart.js@2.9.3',
		[ 'cdn-moment', 'cdn-moment-ka' ],
		'2.9.3',
		$in_footer
	);

	wp_register_script(
		'prevencia-stats',
		get_template_directory_uri() . '/assets/js/stats.min.js',
		[ 'chartjs' ],
		'2.9.3',
		$in_footer
	);

	// Only load statistics chart on front-page.
	if ( is_front_page() ) {
		wp_enqueue_script( 'prevencia-stats' );
		wp_localize_script( 'prevencia-stats', 'covidData', get_the_stats_data() );
	}
}
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\\enqueue_stat_assets' );

/**
 * Add SVG definitions to footer.
 *
 * Generated via https://svgsprit.es/.
 *
 * @return void
 */
function include_svg_icons() {

	// Define SVG sprite file.
	$svg_icons = get_template_directory() . '/assets/img/svg-icons.svg';

	// If it exists, include it.
	if ( file_exists( $svg_icons ) ) {
		require_once $svg_icons;
	}
}
add_action( 'wp_footer', __NAMESPACE__ . '\\include_svg_icons', 9999 );
