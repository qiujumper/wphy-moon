<?php 
  if(ot_get_option('show_small_slider')=='on'){echo "string";
    $slider_arr = ot_get_option('small_slider');
    
?>
<div class="image-post-slider">
  <div class="container">
    <div class="row image-post-slider-wrapper">
      <ul class="slides">
      <?php
        $data =array(); 
        foreach ($slider_arr as $key => $value) {
          $data=$value;
      ?>
        <li>
          <?php include(locate_template('module/image-post.php')); ?>
        </li>
      <?php 
        }
      ?>
      </ul>      
    </div>
  </div>
</div>
<?php 
}
?>