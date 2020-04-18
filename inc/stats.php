<?php

namespace Prevencia;

function get_stats_raw_data() {
	$r = wp_remote_get( 'https://pomber.github.io/covid19/timeseries.json' );

	if ( is_wp_error( $r ) || 200 !== wp_remote_retrieve_response_code( $r ) ) {
		return [];
	}

	$json = json_decode( wp_remote_retrieve_body( $r ), true );

	return $json['Georgia'];
}

function get_the_stats_data() {
	$data = get_transient( 'covid_stats' );

	if ( ! empty( $data ) ) {
		return $data;
	}

	$raw = get_stats_raw_data();

	if ( empty( $raw ) ) {
		return [];
	}

	// Get records after Feb 25, 2020.
	$raw    = array_slice( $raw, 35 );
	$latest = get_latest_data();

	$data = [
		'date' => [],
		'confirmed' => [],
		'deaths' => [],
		'recovered' => [],
	];

	foreach ( $raw as $d ) {
		$data['date'][]      = normalize_date( $d['date'] );
		$data['confirmed'][] = $d['confirmed'];
		$data['deaths'][]    = $d['deaths'];
		$data['recovered'][] = $d['recovered'];
	}

	// Manually push latest data, since API returns data from Yesterday.
	$data['date'][]      = $latest['date'];
	$data['confirmed'][] = $latest['confirmed'];
	$data['deaths'][]    = $latest['deaths'];
	$data['recovered'][] = $latest['recovered'];

	set_transient( 'covid_stats', $data, 6 * HOUR_IN_SECONDS );

	return $data;
}

/**
 * Get latest data from our DB.
 *
 * @return array $latest
 */
function get_latest_data() {
	$post_id = (int) get_option( 'page_on_front' );

	$latest = [
		'date'      => normalize_date( 'now' ),
		'confirmed' => get_post_meta( $post_id, 'dadasturebuli', true ),
		'deaths'    => get_post_meta( $post_id, 'gardaicvlili', true ),
		'recovered' => get_post_meta( $post_id, 'gamojanmrtelebuli', true ),
	];

	return $latest;
}

/**
 * Convert dates for our needs.
 *
 * There is probably a better way to do this,
 * but hey it works :)
 *
 * @param string $date
 * @return string
 */
function normalize_date( $date ) {
	return ( new \DateTime( $date ) )->format( 'Y-m-d' );
}

/**
 * Purge cache when homepage is updated.
 *
 * @return void
 */
function purge_cache( $post_id, $post, $updated ) {
	if ( ! $updated ) {
		return $post_id;
	}

	if ( $post_id === (int) get_option( 'page_on_front' ) ) {
		delete_transient( 'covid_stats' );
	}
}
add_action( 'save_post_page', __NAMESPACE__ . '\\purge_cache', 100, 3 );
