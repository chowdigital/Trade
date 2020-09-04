<?php /* Template Name: Template - perks */ get_header(); ?>

<main role="main">
	<!-- section -->
	<section class="grid">

		<div class="span12">
			<h1><?php the_title(); ?></h1>

			<div class="span8 indent2 grid">

				<!-- article -->
				<?php
						// The Query
				$the_query = new WP_Query( 'category_name=perks' );

						// The Loop
				if ( $the_query->have_posts() ) {
					while ( $the_query->have_posts() ) {
						$the_query->the_post();
						?>
						<a class="span4" href="<?php the_permalink(); ?>">
							<div class="hoverEffect">
						<div class="storyImage" style="background-image:url('<?php the_post_thumbnail_url(); ?>')";>

								

							<!--<img src="<?php the_post_thumbnail_url(); ?>"/>-->

						</div>
						<div class="card2Text">
							<h4><?php the_title(); ?></h4></div>

</div>
</a>
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


