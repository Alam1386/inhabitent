<?php
/*
    Template Name: About Page
 */

get_header(); ?>
<header class="entry-header about-hero">
<h1 id="about-title"><?php the_title(); ?></h1>
</header><!-- .entry-header -->
<div class="about-container">
  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <div class="shop">
          <?php
          $aboutPost = new WP_Query('cat=17');
          if($aboutPost->have_posts()): 
            while( $aboutPost->have_posts()) : $aboutPost->the_post(); ?>
            
            <p> <?php the_content();?></p>
            <?php endwhile;
            else: 
            endif;
            wp_reset_postdata();
            ?>
        </div>
    </main>
  </div>
</div>

<?php get_footer(); ?>