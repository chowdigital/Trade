<?php /* Template Name: Template - Trade Home */ get_header('video'); ?>

	
	<main class="grid">

		<!-- section -->

	<section class="grid fullScreen">
		<div class="headline">
			<h1><?php the_title(); ?></h1>	

							<div>
  					<?php if (have_posts()): while (have_posts()) : the_post(); ?>

  						<!-- article -->
  						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  							<?php the_content(); ?>

  							<?php comments_template( '', true ); // Remove if you don't want comments ?>

  							<br class="clear">

  							<?php edit_post_link(); ?>

  						</article>
  						<!-- /article -->

  					<?php endwhile; ?>

  					<?php else: ?>

  						<!-- article -->
  						<article>

  							<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

  						</article>
  						<!-- /article -->

  					<?php endif; ?>
  					
  				</div>
					
  			</div>

  		</section>


			<!-- section -->
<section class="grid">
	
	<a href="<?php the_field('promo_block_link'); ?>" class="span12 textureBackground">
		<h2><?php the_field('promo_block_title'); ?></h2>
		<h3><?php the_field('promo_block_info'); ?></h3>


	</a>
</section>
	<!-- /section -->




			<section class="grid">
				<div class="subheading">
						<h2>EVENTS AT TRADE</h2>				
				</div>

	<?php $events = tribe_get_events( array( 'posts_per_page' => 3,   'start_date'     => date( 'Y-m-d H:i:s' )
) );

// Loop through the events, displaying the title and content for each
foreach ( $events as $event ) {

	$event_link = tribe_get_event_link( $event );

	$event_img = get_the_post_thumbnail( $event );

	echo '<div class="container span4">';
	echo '<a href="' . $event_link . '">'  ;				
	echo $event_img;
   echo '<div class="overlay"><div class="text"><h3>' . $event->post_title . '</h3></div></div>';
   echo '</a></div>';
}
 ?>
			</section>


		
		<!-- /section -->

				<!-- section -->


			<section class="grid">

				<div class="homepageEvents span6" >
					
					<?php the_field('events'); ?>
					<div class="btnBox"><a href="events"><button class="btn bottomButton">SEE ALL EVENTS</button></a>	</div>
				</div>
				<div class="homepageEvents span6" >
					
					<?php the_field('parties'); ?>
					<div class="btnBox"><a href="private-parties"><button class="btn bottomButton">FIND OUT MORE</button></a>	</div>
				</div>
			</section>

		<!-- /section -->
	</main>


<?php get_footer(); ?>
