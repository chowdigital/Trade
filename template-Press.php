<?php /* Template Name: Template - Trade Press */ get_header(); ?>

	
	<main role="main">
		<!-- section -->


			<section class="grid fullScreen">
				<div class="headline">
						<h1><?php the_title(); ?></h1>				
				</div>
				<div class="scroll-downs">
  					<div class="mousey">
    					<a class="scrollTo"><div class="scroller"><img src="<?php echo get_template_directory_uri(); ?>/img/down-arrow.svg" alt=""></div></a>
  					</div>
				</div>
		
			</section>

	


			
				

<section class="grid scrollToMe">
				
				<div class="span8 indent2">
				<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article class="pressContent" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

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
			
				
			
			</section>

	
		<!-- /section -->
	</main>



<?php get_footer(); ?>
