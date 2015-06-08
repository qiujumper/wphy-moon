<?php
get_header();
include(locate_template('module/slider.php')); 
?>

  <div id="primary" class="container-fulid ">
    <main id="main" class="site-main" role="main">

    <?php 
    include(locate_template('module/icon-text-area.php'));
    include(locate_template('module/half-block-area.php'));
    include(locate_template('module/image-block-area.php'));
    include(locate_template('module/full-width-text-block.php'));
    include(locate_template('module/text-block-area.php'));
    include(locate_template('module/image-post-slider.php'));
    ?>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_footer(); ?> 
