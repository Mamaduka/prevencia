<?php

namespace Prevencia;

const VERSION = '1.0.0';

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


function enqueue_assets() {
	wp_enqueue_style( 'prevencia-style', get_template_directory_uri() . '/main.css', [], VERSION );
}
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\\enqueue_assets' );

/**
 * Adjust the excerpt length.
 *
 * @param int $length
 * @return int
 */
function excerpt_length( $length ) {
	return 15;
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
	if ( get_post_type() !== 'fake-news' ) {
		return 'სიახლეები';
	}

	return 'ყალბი სიახლეები';
}
