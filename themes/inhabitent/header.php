<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<!-- The stylesheet links. -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<<<<<<< HEAD
   
=======
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

>>>>>>> 0d3aab6e90a6cb96eaf6e6e293e736db3f74dde9
	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
    <div id="page" class="hfeed site">
      <a class="skip-link screen-reader-text" href="#content"><?php echo esc_html( 'Skip to content' ); ?></a>

      <header id="masthead" class=<?php echo (is_front_page() || is_page('about') || is_singular('adventure')) ? '"site-header reverse-header"' : "site-header" ?> role="banner">
        <div class="container">
          <div class="site-branding nav navbar ">
            <div class="logo">
              <a href=<?php echo home_url('/'); ?>>
                <h1 class="site-title">Inhabitent</h1>
              </a>
            </div>
          </div>

          <nav id="site-navigation" class="main-navigation collapse navbar-collapse justify-content-end" role="navigation">
          
            <?php 
            wp_nav_menu( array( 
              'theme_location' => 'primary', 
              'menu_id' => 'primary-menu' 
              ) ); 
              ?>
              <button class=" menu-toggle navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span><i class="fa fa-angle-double-left  fa-lg" aria-hidden="true"></i>
              </span>
            </button>
            <div class="header-search">
              <?php echo get_search_form(); ?>
            </div>
          </nav>
        </div>
      </header>

      <div id="content" class="site-content">