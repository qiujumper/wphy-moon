<div class="container show-case">
  <div class="block-title"><h2><a href="/show-case">案例展示</a></h2></div>
  <div class="row three-image-block">
  <?php 
    $args_case = array(
      'post_type' => 'work',
      'posts_per_page' =>9
    );

    $query_case = new WP_Query($args_case);
    if ($query_case->have_posts()) {
      while($query_case->have_posts()){
        $query_case->the_post();
        ?>
        <div class="col-sm-4 item">
          <div class="image-block">
            <a href="<?php the_permalink(); ?>">
              <img src="<?php echo get_image_by_id(get_field('pic')); ?>" alt="<?php the_title(); ?>" class="animated">
              <div class="info">
                <div class="title animated">
                  <?php the_title(); ?>
                </div>
                <div class="content animated">
                  <?php the_excerpt(); ?>
                </div>
              </div>      
            </a>
          </div>
        </div>
        <?php
      }
    }
    wp_reset_postdata();
  ?> 
  </div>
</div><!-- show-case -->