<div class="container">
<br/><br/><br/>  
<form method="post" action="options.php">
  <?php 
    settings_fields( 'small-slider-settings-group' ); 
    do_settings_sections( 'small-slider-settings-group' ); 
  ?>
  <div class="checkbox">
    <p class="bg-warning is_show">
      <span>是否开启</span> <input type="checkbox"  id="show_small_slider" name="show_small_slider" <?php echo get_option("show_small_slider"); ?> value="checked">
    </p>
  </div>
  <?php
    for ($i=0; $i <10 ; $i++) { 
?>
<div class="row">
  <div class="col-sm-6">
    <div class="theme-field">
    <div class="col-sm-2">标题</div>
    <div class="col-sm-10">
      <input class="form-control" type="text" name='<?php echo "small_slider_title_{$i}"; ?>' id='<?php echo "small_slider_title_{$i}"; ?>' value='<?php echo get_option("small_slider_title_{$i}"); ?>' />
    </div>
    </div>
    <div class="theme-field">
    <div class="col-sm-2">链接</div>
    <div class="col-sm-10">
      <input class="form-control" type="text" name='<?php echo "small_slider_url_{$i}"; ?>' id='<?php echo "small_slider_url_{$i}"; ?>' value='<?php echo get_option("small_slider_url_{$i}"); ?>' />
    </div>
    </div>
    <div class="theme-field">
    <div class="col-sm-2">内容</div>
    <div class="col-sm-10">
      <textarea class="form-control" rows="9" cols="50" name="<?php echo "small_slider_content_{$i}"; ?>" ><?php echo esc_attr( get_option("small_slider_content_{$i}") ); ?></textarea>
    </div>
    </div>
  </div>

  <div class="col-sm-6">
    <?php print_image_field("small_slider_image_{$i}","small_slider_image_{$i}_button") ?>
  </div>
</div>
<hr/>
<?php
  }
  submit_button();
?>
</form>
</div>