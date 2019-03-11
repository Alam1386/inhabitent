<?php
/**
 * The template for displaying the home page.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
<div class="home-hero">
  <img src=<?php echo get_stylesheet_directory_uri(). '/images/logos/inhabitent-logo-full.svg' ?>>
</div>
  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
      <div class="shop-container container">
        <h2>SHOP STUFF</h2>
        <div class="shop">
          <?php
          $argsarr = array (
            'orderby' => 'name',
            'order' => 'ASC',
            'taxonomy' => 'product_type'
          ); 
          $categories = get_terms($argsarr );
          foreach ( $categories as $category ) {
            $categorylink = home_url('/') . $category->taxonomy .'/'. $category->slug;
            ?>
           <div class = 'product-type'>
               <img src = "<?php echo get_template_directory_uri()."/images/product-type-icons/$category->slug.svg"?>" alt="<?php echo $category->name ?>">
               <p><?php echo $category->description ?></p>
               <p>
                   <a href="<?php echo "$categorylink" ?>" class='button'><?php echo $category->name ?> Stuff</a>
               </p>
           </div>
          <?php
          }
          ?>
        </div>
      </div>
      <div class="journal container">
        <h2 class="embed-title">INHABITENT JOURNAL</h2>
        <ul>
          <?php 
            $args = array (
              'numberposts' => 3,
              'cat' => 16
            );
            $journals = get_posts($args);

            foreach ($journals as $journal) {
            $journallink = get_permalink($journal->ID);
            $post_thumbnail_id = get_post_thumbnail_id($journal->ID);
            $post_image_url = wp_get_attachment_image_src($post_thumbnail_id, 'large');
            ?>
              <li>
              <div class = "entry-pic-wrapper">
                  <img class = "entry-journal-pic" src = <?php echo $post_image_url[0];  ?> >
              </div>
              <div class = "entry-info-wrapper">
                  <span>
                      <span class = "posted-date">
                          <time>
                              <time><?php echo mysql2date('j F, Y',$journal->post_date) ?></time>
                          </time>
                      </span>
                       / <?php echo $journal->comment_count ?> Comment<?php echo ($journal->comment_count == 1) ?  "" : "s" ?>
                  </span>
                  <h3 class = "journal-title">
                      <a href = "<?php echo $journallink ?>" ><?php echo $journal->post_title; ?></a>
                  </h3> 
              </div>
              <a class = "journal-button" href = "<?php echo $journallink ?>">Read Entry</a>
          </li>
        <?php } ?>
          
      </ul>

      <div class="adventure-embed container">
        <h2 class="embed-title">LATEST ADVENTURES</h2>
          <ul>
            <?php 
            $args = array (
              'numberposts' => 4,
              'order' => 'ASC',
              'cat'=>19,
              
            );
            $adventures = get_posts($args);
            
            $adventurepage = home_url('/') . 'adventures/';
            $count = 0;
            foreach ($adventures as $adventure) {
            $adventurelink = get_permalink($adventure->ID);
            $post_thumbnail_id = get_post_thumbnail_id($adventure->ID);
            $post_image_url = ($count == 0) ? wp_get_attachment_image_src($post_thumbnail_id, 'full') : wp_get_attachment_image_src($post_thumbnail_id, 'large');
            $count++;
            ?>
                <li>
                    <div class = "adventure-wrapper">
                        <img src = "<?php echo $post_image_url[0] ?>">
                        <div class = "adventure-info">
                            <h3 class = "adventure-title">
                              <a href="<?php echo $adventurelink ?>"><?php echo $adventure->post_title ?></a>
                            </h3>
                                <a class = "adventure-button" href = "<?php echo $adventurelink ?>">Read More</a>
                        </div>
                    </div>
                </li>
            <?php } ?>
            </ul>
          <p class="see-more-adventure">
            <a href="<?php echo $adventurepage ?>">More Adventures</a>
          </p>
        </div>
      </div>

      <?php while ( have_posts() ) : the_post(); ?>

        <?php //get_template_part( 'template-parts/content', 'page' ); ?>

      <?php endwhile; // End of the loop. ?>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_footer(); ?>
