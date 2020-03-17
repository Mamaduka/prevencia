<?php

namespace Prevencia;

use HTML_Forms\Form;

const VERSION = '180320';

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

	wp_register_style(
		'prevencia-bootstrap-css',
		'https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css',
		[],
		'4.4.1'
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
		'prevencia-script',
		get_template_directory_uri() . '/assets/js/scripts.min.js',
		[ 'jquery', 'jquery-ui-accordion', 'prevencia-bootstrap-js' ],
		VERSION,
		$in_footer
	);
}
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\\enqueue_assets' );

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
	if ( get_post_type() !== 'fake-news' ) {
		return 'სიახლეები';
	}

	return 'ყალბი ამბები';
}

/**
 * @param int $form_id
 * @return Form
 * @throws Exception
 */
function get_form( $form_id_or_slug ) {
	if ( is_numeric( $form_id_or_slug ) || $form_id_or_slug instanceof \WP_Post ) {
		$post = get_post( $form_id_or_slug );

		if ( ! $post instanceof \WP_Post || $post->post_type !== 'html-form' ) {
			throw new \Exception( 'Invalid form ID' );
		}
	} else {

		$query = new \WP_Query;
		$posts = $query->query(
			array(
				'post_type'           => 'html-form',
				'name'                => $form_id_or_slug,
				'post_status'         => 'publish',
				'posts_per_page'      => 1,
				'ignore_sticky_posts' => true,
				'no_found_rows'       => true,
			)
		);
		if ( empty( $posts ) ) {
			throw new \Exception( 'Invalid form slug' );
		}
		$post = $posts[0];
	}

	$default_settings = [
		'save_submissions'   => 1,
		'hide_after_success' => 0,
		'redirect_url'       => '',
		'required_fields'    => '',
		'email_fields'       => '',
	];
	$default_settings = apply_filters( 'hf_form_default_settings', $default_settings );

	$default_messages = [
		'success'                => 'თქვენი განაცხადი წარმატებით გაიგზავნა',
		'invalid_email'          => 'თქვენი ელ. ფოსტა არასწორია',
		'required_field_missing' => 'გთხოვთ შეავსოთ ყველა სავალდებულო ველი',
		'error'                  => 'დაფიქსირდა შეცდომა',
	];
	$default_messages = apply_filters( 'hf_form_default_messages', $default_messages );

	$markup = '';
	ob_start();
	get_template_part( 'partials/form', 'markup' );
	$markup = ob_get_clean();

	// finally, create form instance
	$form           = new Form( $post->ID );
	$form->title    = $post->post_title;
	$form->slug     = $post->post_name;
	$form->markup   = $markup;
	$form->settings = $default_settings;
	$form->messages = $default_messages;

	return $form;
}
