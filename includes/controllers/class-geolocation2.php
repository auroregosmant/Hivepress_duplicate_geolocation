<?php
/**
 * Geolocation controller.
 *
 * @package HivePress\Controllers
 */

namespace HivePress\Controllers;

use HivePress\Helpers as hp;

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/**
 * Geolocation controller class.
 *
 * @class Geolocation
 */
final class Geolocation2 extends Controller {

	/**
	 * Class constructor.
	 *
	 * @param array $args Controller arguments.
	 */
	public function __construct( $args = [] ) {
		$args = hp\merge_arrays(
			[
				'routes' => [
					'destination_view_page' => [
						'url' => [ $this, 'get_destination_view_url' ],
					],
				],
			],
			$args
		);

		parent::__construct( $args );
	}

	/**
	 * Gets location view URL.
	 *
	 * @param array $params URL parameters.
	 * @return string
	 */
	public function get_destination_view_url( $params ) {
		return add_query_arg(
			[
				'api'   => 1,
				'query' => hp\get_array_value( $params, 'latitude2' ) . ',' . hp\get_array_value( $params, 'longitude2' ),
			],
			'https://www.google.com/maps/search/'
		);
	}
}
