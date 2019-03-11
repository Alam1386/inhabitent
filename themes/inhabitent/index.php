<?php
/**
 * The template for displaying product archive.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
  <div class="find-us-container container">
  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

    <?php if ( have_posts() ) : ?>

	  <?php 
	  $journallink = get_permalink($journal->ID);
      $new_query = new WP_Query($query_vars);
      ?>
      <div class="journal-grid">
      <?php while ( have_posts() ) : the_post(); ?>
        
          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
              <?php if ( has_post_thumbnail() ) : ?>
                <?php the_post_thumbnail( 'full' ); ?>
              <?php endif; ?>

              <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

              <div class="entry-meta">
                <?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
              </div><!-- .entry-meta -->
            </header><!-- .entry-header -->

            <div class="entry-content">
			  <?php the_excerpt(); ?>
			  <a class="button" href ="<?php echo $journallink ?>">Read more</a>
            </div><!-- .entry-content -->
            <?php

            ?>
           
          </article><!-- #post-## -->

      <?php endwhile; // End of the loop. ?>
    </div>
    <?php else : ?>

      <?php get_template_part( 'template-parts/content', 'none' ); ?>

    <?php endif; ?>

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
