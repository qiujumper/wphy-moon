<div class="container">
<br/><br/><br/>  
<form method="post" action="options.php">
  <?php 
    settings_fields( 'slider-settings-group' ); 
    do_settings_sections( 'slider-settings-group' ); 
  ?>
  <div class="checkbox">
    <p class="bg-warning is_show">
      <span>是否开启</span> <input type="checkbox"  id="show_slider" name="show_slider" <?php echo get_option("show_slider"); ?> value="checked">
    </p>
  </div>
  <?php
    for ($i=0; $i <5 ; $i++) { 
?>
<div class="row">
  <div class="col-sm-6">
    <div class="theme-field">
    <div class="col-sm-2">标题</div>
    <div class="col-sm-10">
      <input class="form-control" type="text" name='<?php echo "slider_title_{$i}"; ?>' id='<?php echo "slider_title_{$i}"; ?>' value='<?php echo get_option("slider_title_{$i}"); ?>' />
    </div>
    </div>
    <div class="theme-field">
    <div class="col-sm-2">链接</div>
    <div class="col-sm-10">
      <input class="form-control" type="text" name='<?php echo "slider_url_{$i}"; ?>' id='<?php echo "slider_url_{$i}"; ?>' value='<?php echo get_option("slider_url_{$i}"); ?>' />
    </div>
    </div>
    <div class="theme-field">
    <div class="col-sm-2">内容</div>
    <div class="col-sm-10">
      <textarea class="form-control" rows="9" cols="50" name="<?php echo "slider_content_{$i}"; ?>" ><?php echo esc_attr( get_option("slider_content_{$i}") ); ?></textarea>
    </div>
    </div>
  </div>

  <div class="col-sm-6">
    <?php print_image_field("slider_image_{$i}","slider_image_{$i}_button") ?>
  </div>
</div>
<hr/>
<?php
  }
  submit_button();
?>
</form>
</div>