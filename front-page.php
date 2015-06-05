<?php
get_header();
include(locate_template('module/slider.php')); 
?>

  <div id="primary" class="container-fulid ">
    <main id="main" class="site-main" role="main">

    <?php 
    include(locate_template('module/icon-text-area.php'));
    include(locate_template('module/half-block-area.php'));
    if ( have_posts() ) : ?>

      <?php /* Start the Loop */ ?>
      <?php while ( have_posts() ) : the_post(); ?> 

        <?php

          /*
           * Include the Post-Format-specific template for the content.
           * If you want to override this in a child theme, then include a file
           * called content-___.php (where ___ is the Post Format name) and that will be used instead.
           */
          get_template_part( 'template-parts/content', get_post_format() );
        ?>

      <?php endwhile; ?>

      <?php the_posts_navigation(); ?>

    <?php else : ?>

      <?php get_template_part( 'template-parts/content', 'none' ); ?>

    <?php endif; ?>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_footer(); ?> 
