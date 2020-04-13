<?php

namespace Prevencia;

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
	return 10;
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
