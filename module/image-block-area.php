<?php 
if (get_option('show_featured_post')=='checked') {
?>
<div class="container">
  <div class="row image-block-area">
    <?php
      $feature_post_id = array(); 
      $feature_post_string = get_option('featured_post_id');
      $feature_post = explode(' ',$feature_post_string);

      foreach ($feature_post as $key => $value) {
        $feature_post_ids[] = intval($value);
      }
      if (get_option('use_newest')=='checked') {
        $feature_post_query = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 3,'order'=>'DESC','orderby'=>'date') );
      }else{
        $feature_post_query = new WP_Query( array( 'post_type' => 'post', 'post__in' => $feature_post_ids,'ignore_sticky_posts' => true ) );
      }
      if ( $feature_post_query->have_posts() ) {
        
        while ( $feature_post_query->have_posts() ) {
          $data = array();
          $feature_post_query->the_post();
          $data = array(
            'title' => get_the_title(),
            'excerpt' => get_the_excerpt(),
            'link' =>get_permalink(),
            'image'=>get_feature_image_by_id(get_the_ID())
          );
          echo '<div class="col-sm-4">';
          include(locate_template('module/image-block.php'));
          echo '</div>';
        }
       
      } 
      wp_reset_postdata();

    ?>
    
  </div>
</div>
<?php 
}
?>