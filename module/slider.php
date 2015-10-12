<?php 
  if(get_option('show_slider')=='checked'){
?>
<div class="clearfix"></div>
<div class="flexslider">
  <ul class="slides">
<?php
  

  if(get_option('use_animation')=='checked'){
    $animated='animated';
  }else{
    $animated='';
  } 
  for ($i=0; $i < 5 ; $i++) {
  if(get_option("slider_image_{$i}")){ 
?>
  
    <li>
      <a href="<?php echo get_option("slider_url_{$i}"); ?>" target="_blank">
        <img src="<?php echo get_option("slider_image_{$i}"); ?>" />
        <?php 
          if (get_option("slider_title_{$i}")||get_option("slider_content_{$i}")) {
        ?>
        <div class="info">
          <div class="title no-phone <?php echo $animated; ?>" style="<?php echo $text_css; ?>">
            <?php echo get_option("slider_title_{$i}"); ?>
          </div>
          <div class="content no-phone <?php echo $animated; ?>" style="<?php echo $text_css; ?>">
            <?php echo get_option("slider_content_{$i}"); ?>
          </div>
        </div><!-- info -->
        <?php 
          }
        ?>        
      </a>
    </li>
  
<?php
  }
}
?>
  </ul>
</div>
<?php 
}
?>
<div class="clearfix"></div>