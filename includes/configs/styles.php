<?php
/**
 * Styles configuration.
 *
 * @package HivePress\Configs
 */

use HivePress\Helpers as hp;

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

return [
	'geolocation2_backend'  => [
		'handle'  => 'hivepress-geolocation2-backend',
		'src'     => hivepress()->get_url( 'geolocation2' ) . '/assets/css/backend.min.css',
		'version' => hivepress()->get_version( 'geolocation2' ),
		'scope'   => 'backend',
	],

	'geolocation2_frontend' => [
		'handle'  => 'hivepress-geolocation2-frontend',
		'src'     => hivepress()->get_url( 'geolocation2' ) . '/assets/css/frontend.min.css',
		'version' => hivepress()->get_version( 'geolocation2' ),
		'scope'   => [ 'frontend', 'editor' ],
	],
];
