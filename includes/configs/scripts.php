<?php
/**
 * Scripts configuration.
 *
 * @package HivePress\Configs
 */

use HivePress\Helpers as hp;

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

return [
	'geocomplete'         => [
		'handle'  => 'geocomplete',
		'src'     => hivepress()->get_url( 'geolocation2' ) . '/assets/js/jquery.geocomplete.min.js',
		'version' => hivepress()->get_version( 'geolocation2' ),
		'scope'   => [ 'frontend', 'backend' ],
	],

	'markerclustererplus' => [
		'handle'  => 'markerclustererplus',
		'src'     => hivepress()->get_url( 'geolocation2' ) . '/assets/js/markerclustererplus.min.js',
		'version' => hivepress()->get_version( 'geolocation2' ),
		'scope'   => [ 'frontend', 'backend' ],
	],

	'geolocation2'         => [
		'handle'  => 'hivepress-geolocation2',
		'src'     => hivepress()->get_url( 'geolocation2' ) . '/assets/js/common.min.js',
		'version' => hivepress()->get_version( 'geolocation2' ),
		'deps'    => [ 'hivepress-core', 'geocomplete', 'markerclustererplus' ],
		'scope'   => [ 'frontend', 'backend' ],

		'data'    => [
			'assetURL' => hivepress()->get_url( 'geolocation2' ) . '/assets',
		],
	],
];
