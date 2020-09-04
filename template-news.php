<?php /* Template Name: Template - News */ get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="grid">

		<div class="span12">
			<h1><?php the_title(); ?></h1>

			<div class="span8 indent2 grid">

					<!-- article -->
				<?php
						// The Query
						$the_query = new WP_Query( 'category_name=News' );
						 
						// The Loop
						if ( $the_query->have_posts() ) {
						    while ( $the_query->have_posts() ) {
						        $the_query->the_post();
						      ?>
									<div class="storyImage span4" style="background-image:url('<?php the_post_thumbnail_url(); ?>')";>



										<!--<img src="<?php the_post_thumbnail_url(); ?>"/>-->
											
										</div>
									<div class="span8">

										<h2>
											<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
										</h2>
									
						      <?php


						        
						the_content();
								

				?>	
			</div> 
			<div class="span12"><hr></div> 
				<?php

						    }
						} else {
						    // no posts found
						}
						/* Restore original Post Data */
						wp_reset_postdata();


	 
			?>
		</div>	
		

		</section>
		<!-- /section -->
	</main>



<?php get_footer(); ?>


