<?php
/**
 * Settings configuration.
 *
 * @package HivePress\Configs
 */

use HivePress\Helpers as hp;

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

return [
	'listings'     => [
		'sections' => [
			'geolocation2' => [
				'title'  => esc_html__( 'Geolocation2', 'hivepress-geolocation2' ),
				'_order' => 100,

				'fields' => [
					'geolocation2_countries' => [
						'label'    => esc_html__( 'Countries', 'hivepress-geolocation2' ),
						'type'     => 'select',
						'options'  => 'countries',
						'multiple' => true,
						'_order'   => 10,
					],

					'geolocation2_radius'    => [
						'label'     => esc_html__( 'Radius', 'hivepress-geolocation2' ),
						'statuses'  => [ esc_html__( 'km', 'hivepress-geolocation2' ) ],
						'type'      => 'number',
						'min_value' => 1,
						'default'   => 15,
						'required'  => true,
						'_order'    => 20,
					],
				],
			],
		],
	],

	'integrations' => [
		'sections' => [
			'gmaps2' => [
				'title'  => 'Google Maps',
				'_order' => 30,

				'fields' => [
					'gmaps2_api_key' => [
						'label'      => hivepress()->translator->get_string( 'api_key' ),
						'type'       => 'text',
						'max_length' => 256,
						'_order'     => 10,
					],
				],
			],
		],
	],
];
