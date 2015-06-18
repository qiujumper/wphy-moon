<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package wphy_moon
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="wphy site container-fluid">
  

	<header class="site-header " role="banner">
		<div class="site-branding row">
    
      <div class="col-sm-12">
        <nav class="navbar navbar-inverse container" role="navigation">
          <div class="navbar-header">
            <h1 class="site-title">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
            </h1>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="glyphicon glyphicon-th-large"></span>
            </button>
            
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <?php wp_nav_menu(array(
                'menu'            =>'Top Menu',
                'container'       => 'my-top-menu-container',
                'menu_class'      => 'nav navbar-nav navbar-right',
                'walker'            => new wp_bootstrap_navwalker()
              )
              );  
          ?>
          </div>
        </nav><!-- #site-navigation -->
      </div>
		</div><!-- .site-branding -->

		
	</header><!-- #masthead -->

	<div id="content" class="site-content row">
