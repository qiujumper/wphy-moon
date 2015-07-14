<?php
/**
 * Template Name:plugin list
 */

get_header(); 
?>
<header class="page-header">
<h1 class="page-title">Wordpress必备插件</h1>
<?php
  the_archive_description( '<div class="taxonomy-description">', '</div>' );
?>
</header><!-- .page-header -->
<div class="container">
<?php 
get_sidebar();
?>

  <div id="primary" class="content-area col-sm-9">
    <main id="main" class="site-main" role="main">
    <?php
      $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
      $args_page=array(
      'post_type'=>'post',
      'posts_per_page' => 10,
      'paged'=>$paged
      );
      $wp_query = new WP_Query($args_page); 
      if ( $wp_query->have_posts() ) : while ( $wp_query->have_posts() ) : $wp_query->the_post();
      get_template_part( 'template-parts/content');    
      endwhile;
      include(locate_template('module/pagination.php'));
       
      else : 
      get_template_part( 'template-parts/content', 'none' );
      endif; ?>

    </main><!-- #main -->
  </div><!-- #primary -->
</div>
<?php get_footer(); ?>
