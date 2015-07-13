
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
        <span>案例数目</span> &nbsp;&nbsp;&nbsp;<input class="" type="text" name='<?php echo "case_num"; ?>' id='<?php echo "case_num"; ?>' value='<?php echo get_option("case_num"); ?>' />

      </div>

      <div class="col-md-12 theme-field">
        <span>'案例展示'类型</span> &nbsp;&nbsp;&nbsp;<?php print_type_field(); ?>
      </div>
    </div>
    <br/>
    <hr/>
    <br/>
    <div class="col-md-12 theme-field">
    <span>统计代码</span>(全部的统计代码都可贴在这里)<br/><br/>
    <textarea rows="20" cols="150" name="analytic" id="analytic" >
      <?php echo get_option('analytic'); ?>
    </textarea>
    </div>
    <?php
        submit_button();
      ?>
  </form>
</div>
