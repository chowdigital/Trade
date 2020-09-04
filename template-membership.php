<?php /* Template Name: Template - Membership */ get_header(); ?>

	
	
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
			<section id="membershipForm" class="grid">
			
					<img class="span4" src="<?php echo get_template_directory_uri(); ?>/img/all/CD1_9563-Edit.jpg" alt="">
				
				<div class="span8">
					<h2>Membership Form</h2>

					<!-- Begin SproutSend.com form -->
						<div id='CONTACTA_5e4229c67d36116e8316dc00'></div>
            <script type='text/javascript' async>
                    var script = document.createElement('script');
                    script.type = 'text/javascript';
                    script.src = 'https://forms.contacta.io/5e4229c67d36116e8316dc00.js';
                    document.getElementsByTagName('head')[0].appendChild(script);
            </script>
					<!-- End SproutSend.com form -->
				
			
			<?php
					// if (function_exists('wpforms')) echo do_shortcode( '[wpforms id="68"]');  
					
			?>
					
					
		
		</div>
			</section>
	
		<!-- /section -->
	</main>



<?php get_footer(); ?>
