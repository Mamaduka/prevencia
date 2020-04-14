<?php

namespace Prevencia;

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
 * Load FacetWP modifications.
 */
require get_template_directory() . '/inc/facetwp.php';

/**
 * Theme assets.
 */
require get_template_directory() . '/inc/assets.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Load custom queries and their filters.
 */
require get_template_directory() . '/inc/queries.php';

/**
 * Load extras.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Load stat helpers.
 */
require get_template_directory() . '/inc/stats.php';
