<?php /* Template Name: Template - Food & Drink */ get_header(); ?>

	
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
			
				</section>
			
			<section class="grid">
				
				<div class="container span8">
					<a href="<?php the_field('main_menu'); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/img/all/WH1_6209.jpg"  alt="Avatar">
					<div class="overlay">
						<div class="text">
							<h3><?php the_field('main_heading'); ?></h3>
								<p><?php the_field('main_sub_heading'); ?></p>
								</div>
					</div>
				  </a>
				</div>
				<div class="container span4">
					<a href="<?php the_field('tasting_menu'); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/img/all/WH1_6323.jpg"  alt="Avatar">
					<div class="overlay">
						<div class="text">
							<h3><?php the_field('tasting_heading'); ?></h3>
								<p><?php the_field('tasting_sub_heading'); ?></p>
						</div>
					</div>
				</a>
				</div>
				

		
				<div class="container span4">
					<a href="<?php the_field('cocktail_menu'); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/img/all/CD1_9584.jpg"  alt="Avatar">
					<div class="overlay">
						<div class="text">
							<h3><?php the_field('cocktail_heading'); ?></h3>
								<p><?php the_field('cocktail_sub_heading'); ?></p>
						</div>
					</div>
				</a>
				</div>

					<div class="container span8">
					<a href="<?php the_field('wine_list'); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/img/all/CD1_9710-Edit_WEB.jpg"  alt="Avatar">
					<div class="overlay">
						<div class="text">
							<h3><?php the_field('wine_heading'); ?></h3>
								<p><?php the_field('wine_sub_heading'); ?></p>
								</div>
					</div>
				  </a>
				</div>
				<div class="span12">
					<h3>Late night snacks menu available till 2am</h3>
				</div>

			</section>

			




		<!-- /section -->
	</main>



<?php get_footer(); ?>
