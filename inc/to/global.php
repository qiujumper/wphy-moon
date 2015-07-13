
<div class="container">
  <br/>
  <form method="post" action="options.php">
    <?php 
    settings_fields( 'global-settings-group' ); 
    do_settings_sections( 'global-settings-group' ); 
    ?>
    <div class="row">
      <div class="col-md-12 theme-field">
        <span>是否开启'案例展示'</span> &nbsp;&nbsp;&nbsp;<input type="checkbox"  id="show_case" name="show_case" <?php echo get_option("show_case"); ?> value="checked">
      </div>
      <div class="col-md-12 theme-field">
        <span>'案例展示'类型</span> &nbsp;&nbsp;&nbsp;<?php print_type_field(); ?>
      </div>
    </div>
   
    <?php
        submit_button();
      ?>
  </form>
</div>
