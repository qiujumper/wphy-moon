<div class="container">
  <br/>
  <form method="post" action="options.php">
    <?php 
    settings_fields( 'block-3-settings-group' ); 
    do_settings_sections( 'block-3-settings-group' ); 
    ?>
    <div class="checkbox">
      <p class="bg-warning is_show">
        <span>是否开启</span> <input type="checkbox"  id="show_block_3" name="show_block_3" <?php echo get_option("show_block_3"); ?> value="checked">
      </p>
    </div><br/>
    <?php
    for ($i=0; $i <6 ; $i++) { 
      ?>
      <div class="row">
        <div class="col-sm-6">

          <div class="theme-field">
            <div class="col-sm-2">标题</div>
            <div class="col-sm-10">
              <input class="form-control" type="text" name='<?php echo "block_3_title_{$i}"; ?>' id='<?php echo "block_3_title_{$i}"; ?>' value='<?php echo get_option("block_3_title_{$i}"); ?>' />
            </div>
          </div>

          <div class="theme-field">
            <div class="col-sm-2">链接</div>
            <div class="col-sm-10">
              <input class="form-control" type="text" name='<?php echo "block_3_url_{$i}"; ?>' id='<?php echo "block_3_url_{$i}"; ?>' value='<?php echo get_option("block_3_url_{$i}"); ?>' />
            </div>
          </div>

          <div class="theme-field">
            <div class="col-sm-2">图标</div>
            <div class="col-sm-10">
              <input class="form-control" type="text" name='<?php echo "block_3_image_{$i}"; ?>' id='<?php echo "block_3_image_{$i}"; ?>' value='<?php echo get_option("block_3_image_{$i}"); ?>' /><br/>
               <p class="text-muted">用户可以通过输入字符串码来修改图标，字符串码可以从这里获取：http://getbootstrap.com/components/ <br/>直接拷贝即可，例如 glyphicon glyphicon-ice-lolly-tasted<br/>
            注意中间有一个空格哦！</p>
            </div>
           
          </div>
        </div>

        <div class="col-sm-6">
          <div class="theme-field">
            <div class="col-sm-2">内容</div>
            <div class="col-sm-10">
              <?php wp_editor( get_option("block_3_content_{$i}"), "block_3_content_{$i}"); ?> 
            </div>
          </div>
        </div>
      </div>
      <hr/>
      <?php
    }
    submit_button();
    ?>
  </form>
</div>