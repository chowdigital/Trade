<?php /* Template Name: Template - Trade Home */ get_header(); ?>

	
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




		
		<!-- /section -->

			
	</main>


<?php get_footer(); ?>
