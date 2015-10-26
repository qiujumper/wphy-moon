<div class="container">
  <br/>
  <form method="post" action="options.php">
    <?php 
    settings_fields( 'full-width-text-settings-group' ); 
    do_settings_sections( 'full-width-text-settings-group' ); 
    ?>

    <div class="checkbox">
      <p class="bg-warning is_show">
        <span>是否开启全宽区块</span> <input type="checkbox"  id="show_full_width" name="show_full_width" <?php echo get_option("show_full_width"); ?> value="checked">
      </p>
    </div><br/>
      <div class="row">
        <div class="col-sm-5">
          <div class="theme-field">
            <div class="col-sm-2">标题</div>
            <div class="col-sm-10">
              <input class="form-control" type="text" name='<?php echo "full_width_title"; ?>' id='<?php echo "full_width_title"; ?>' value='<?php echo get_option("full_width_title"); ?>' />
            </div>
          </div>         
        </div>

        <div class="col-sm-7">
          <div class="theme-field">
            <div class="col-sm-12">内容</div><br/><br/>
            <div class="col-sm-12">
            <?php 
              wp_editor( get_option("full_width_content"), "full_width_content"); 
            ?>              
            </div>
          </div>
        </div>
      </div>

      <hr/>

    <div class="checkbox">
      <p class="bg-warning is_show">
        <span>是否开启按钮区块</span> <input type="checkbox"  id="show_full_width_button" name="show_full_width_button" <?php echo get_option("show_full_width_button"); ?> value="checked">
      </p>
    </div><br/>
      <div class="row">
        <div class="col-sm-5">

          <div class="theme-field">
            <div class="col-sm-2">标题</div>
            <div class="col-sm-10">
              <input class="form-control" type="text" name='<?php echo "full_width_button_title"; ?>' id='<?php echo "full_width_button_title"; ?>' value='<?php echo get_option("full_width_button_title"); ?>' />
            </div>
          </div>

          <div class="theme-field">
            <div class="col-sm-2">链接</div>
            <div class="col-sm-10">
              <input class="form-control" type="text" name='<?php echo "full_width_button_link"; ?>' id='<?php echo "full_width_button_link"; ?>' value='<?php echo get_option("full_width_button_link"); ?>' />
            </div>
          </div>

         
        </div>

        <div class="col-sm-7">
          <div class="theme-field">
            <div class="col-sm-12">内容</div><br/><br/>
            <div class="col-sm-12">
            <?php 
              wp_editor( get_option("full_width_button_content"), "full_width_button_content"); 
            ?>              
            </div>
          </div>
        </div>
      </div>

      <?php
        submit_button();
      ?>
  </form>
</div>