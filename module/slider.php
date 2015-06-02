<?php 
  if(ot_get_option('show_slider')=='on'){
?>
<div class="clearfix"></div>
<div class="flexslider">
  <ul class="slides">
<?php
  $text_css='';
  
  if(ot_get_option('text_color')){
    $text_css.="color:".ot_get_option('text_color').";";
  }
  if(ot_get_option('bg_color')){
    $text_css.="background-color:".ot_get_option('bg_color').";";
  }

  if(ot_get_option('use_animation')=='on'){
    $animated='animated';
  }else{
    $animated='';
  } 
  $slider_arr = ot_get_option('sliders');
  foreach ($slider_arr as $key => $value) {
?>
  
    <li><a href="<?php echo $value['link']; ?>" target="_blank">
      <img src="<?php echo $value['image']; ?>" />
      <div class="title <?php echo $animated; ?>" style="<?php echo $text_css; ?>">
        <?php echo $value['title']; ?>
      </div>
      <div class="content <?php echo $animated; ?>" style="<?php echo $text_css; ?>">
        <?php echo $value['description']; ?>
      </div></a>
    </li>
  
<?php
  }
?>
  </ul>
</div>
<?php 
}
?>
<div class="clearfix"></div>