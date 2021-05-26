<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( $listing->get_destination() ) :
	?>
	<div class="hp-listing__destination">
		<i class="hp-icon fas fa-map-marker-alt"></i>
		<a href="<?php echo esc_url( hivepress()->router->get_url( 'destination_view_page', [ 'latitude2' => $listing->get_latitude2(), 'longitude2' => $listing->get_longitude2() ] ) ); ?>" target="_blank"><?php echo esc_html( $listing->get_destination() ); ?></a>
	</div>
	<?php
endif;
