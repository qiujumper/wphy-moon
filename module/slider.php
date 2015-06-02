<?php 
  if(ot_get_option('show_slider')=='on'){
?>
<div class="clearfix"></div>
<div class="flexslider">
  <ul class="slides">
<?php 
  $slider_arr = ot_get_option('sliders');
  foreach ($slider_arr as $key => $value) {
?>
  <li>
    <img src="<?php echo $value['image']; ?>" />
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