<?php
/**
 * Template Name:List Page
 */

get_header(); 
  if ( have_posts() ) :  the_post(); ?>

<header class="page-header">
<?php if(get_feature_image_by_id(get_the_ID())){ ?>
  <img src="<?php echo get_feature_image_by_id(get_the_ID()); ?>" alt="<?php the_title(); ?>" class="header-image">
<?php } ?>
  <h1 class="page-title"><?php the_title(); ?></h1>
  <div class="taxonomy-description"><h2><?php the_content(); ?></h2></div>
</header><!-- .page-header -->
<div class="container">
<?php
$post_type='post';
if (function_exists('get_field')) {
  $post_type = get_field('post_type')?get_field('post_type'):'post'; 
}
get_sidebar();
?>

  <div id="primary" class="content-area col-sm-9">
    <main id="main" class="site-main" role="main">
    <?php
      $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
      $args_page=array(
      'post_type'=>$post_type,
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
      endif; 
      wp_reset_postdata();
      ?>

    </main><!-- #main -->
  </div><!-- #primary -->
</div>
<?php
  endif;
  wp_reset_postdata(); 
  get_footer(); 
?>
