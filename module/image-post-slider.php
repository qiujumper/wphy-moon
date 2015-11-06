<?php 
  if(get_option('show_small_slider')=='checked'){
    $slider_arr = get_option('small_slider');    
?>
<div class="image-post-slider">
  <div class="limiter">
    <div class="row image-post-slider-wrapper">
      <ul class="slides">
      <?php
        $data =array(); 
        for ($i=0; $i < 10 ; $i++) {
          $data=array(
            'title'=>get_option("small_slider_title_{$i}"),
            'content'=>get_option("small_slider_content_{$i}"),
            'image'=>get_option("small_slider_image_{$i}"),
            'link'=>get_option("small_slider_url_{$i}")
          );
          if(get_option("small_slider_image_{$i}")){ 
      ?>
        <li>
          <?php include(locate_template('module/image-post.php')); ?>
        </li>
      <?php 
          }
        }
      ?>
      </ul>      
    </div>
  </div>
</div>
<?php 
}
?>