<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
  <div class="find-us-container container">
  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
    <h1>FIND US</h1>
      <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2603.6833050880164!2d-123.14035688397895!3d49.26344827932926!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x548673c79e1ac457%3A0x3aea6428fa30dc6a!2s1490+W+Broadway%2C+Vancouver%2C+BC+V6H+4E8!5e0!3m2!1sen!2sca!4v1542809014904" width="760" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
      <?php while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <div class="entry-content">
            <h1>
                WE TAKE COMPING VERY SERIOUSLY
            </h1>
            <p class="lead">Inhabitant Camping Supply Co. knows what it takes to outfit a camping trip right. From flannel shirts to artisan axes, we’ve got your covered. Please contact us below with any questions comments or suggestions.</p>
          </div><!-- .entry-content -->
          <h2>SEND US EMAIL!</h2>
          <form class="contact-form" id="contactForm">
          <div class="form-group">
            <p class="name">
              <label>Name<span class="required">*</span></label>
              <input type="text" size="40" name="contact-name" placeholder="Your Name"required />
            </p>
            <p class="email">
              <label>Email<span class="required">*</span></label>
              <input type="text" size="40" pattern="email" name="contact-email" placeholder="Your Email"required />
            </p>
            <p class="subject">
              <label>Subject<span class="required">*</span></label>
              <input type="text" size="40" name="contact-subject" placeholder="Subject Name"required />
            </p>  
            <p class="message">
              <label>Message<span class="required">*</span></label>
              <textarea name="contact-message" cols="40" rows="10"placeholder="Type in your messages "></textarea> 
            </p>
            <p>
              <input type="submit" value="Submit">
            </p>
            </div>
          </form>
        </article><!-- #post-## -->
        

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
<?php get_footer(); ?>
