<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
<div class="find-us-container container">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

			<?php the_post_navigation(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>
		<button type="button" id="close-comments">Close Comments </button>
		<?php endwhile; // End of the loop. ?>
		
		</main><!-- #main -->
		</div><!-- #primary -->
			<div class="sidebar-widget-area"> 
				<div class="contact">
					<h3>CONTACT INFO</h3> 
					<p><i class="fas fa-envelope"></i> <a href="#">info@inhabitent.com</a></p>
					<p><i class="fas fa-phone"></i> 778-444-3432</p>
					<p><i class="fas fa-map-marker-alt"></i> 462 Wellington St W #101, Toronto, ON M5V 1E3</p>
				</div>
				<?php get_sidebar(); ?>
			</div>
		</div>
		</div>
<?php get_footer(); ?>
