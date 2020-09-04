<?php
/**
 * List View Single Event
 * This file contains one event in the list view
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/list/single-event.php
 *
 * @version 4.6.19
 *
 */
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

// Setup an array of venue details for use later in the template
$venue_details = tribe_get_venue_details();

// The address string via tribe_get_venue_details will often be populated even when there's
// no address, so let's get the address string on its own for a couple of checks below.
$venue_address = tribe_get_address();

// Venue
$has_venue_address = ( ! empty( $venue_details['address'] ) ) ? ' location' : '';

// Organizer
$organizer = tribe_get_organizer();

?>


<div class="grid">
	<div class="storyImage span4" style="background-image:url('<?php the_post_thumbnail_url(); ?>')";>



	</div>
	<div class="span8">

		
			<h2><a href="<?php echo esc_url( tribe_get_event_link() ); ?>" title="<?php the_title() ?>"><?php the_title() ?></a></h2>

			
			

		<div class="tribe-event-schedule-details">
			<h3><?php echo tribe_events_event_schedule_details() ?>	<?php if ( tribe_get_cost() ) : ?>
			<span class="tribe-events-cost"><?php echo tribe_get_cost( null, true ) ?></span>
		<?php endif; ?></h3>
			
		</div>

<!-- Event Content -->
<?php do_action( 'tribe_events_before_the_content' ); ?>
<div class="tribe-events-list-event-description tribe-events-content description entry-summary">
	<p><?php echo tribe_events_get_the_excerpt( null, wp_kses_allowed_html( 'post' ) ); ?></p>
	<a href="<?php echo esc_url( tribe_get_event_link() ); ?>" class="tribe-events-read-more" rel="bookmark"><?php esc_html_e( 'Find out more', 'the-events-calendar' ) ?> &raquo;</a>
</div>

	</div>

<div class="span12"><hr></div>

</div>



<?php
do_action( 'tribe_events_after_the_content' );