<?php
/**
 * The template for displaying product archive.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
  
  <div id="primary" class="content-area container">
    <main id="main" class="site-main" role="main">

    <?php if ( have_posts() ) : ?>
      <header class="page-header">
          <h1 class="page-title">Shop Stuff</h1>
          <ul class="products">
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
            <li>
              <p>
                <a href="<?php echo $categorylink ?>"> <?php echo $category->name?></a>
              </p>
            </li>
        <?php
          }
        ?>
      </ul>
      </header><!-- .page-header -->

      <?php 
      
      $query_shop = array (
        'orderby' => 'title',
        'order' => 'ASC',
<<<<<<< HEAD
        // 'category_id'=> 16,
=======
        'category_id'=> 16,
>>>>>>> 0d3aab6e90a6cb96eaf6e6e293e736db3f74dde9
        'posts_per_page' => 30,
        'taxonomy' => 'product_type'
      ); 
      $new_query = new WP_Query($query_shop);
      ?>
      <div class="product-grid">
      <?php while ( $new_query->have_posts() ) : $new_query->the_post(); ?>

        <div class="product-grid-item">
          <div class="thumbnail-wrapper">
            <a href="<?php echo esc_url(the_permalink());?>">
              <?php the_post_thumbnail( 'large' ); ?>
            </a>
          </div>
          <div class="product-info">
            <?php the_title('<h2 class="entry-title">', '</h2>' ); ?>
            <span class="price"><?php echo CFS()->get( 'price' ); ?></span>          
            </div>
        </div>

      <?php endwhile; ?>
    </div>
    <?php else : ?>

      <?php get_template_part( 'template-parts/content', 'none' ); ?>

    <?php endif; ?>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_footer(); ?>
