<div class="container">
  <br/>
  <form method="post" action="options.php">
    <?php 
    settings_fields( 'text-block-settings-group' ); 
    do_settings_sections( 'text-block-settings-group' ); 
    ?>
    <div class="checkbox">
      <p class="bg-warning is_show">
        <span>是否开启</span> <input type="checkbox"  id="show_text_block" name="show_text_block" <?php echo get_option("show_text_block"); ?> value="checked">
      </p>
    </div><br/>
    <?php
    for ($i=0; $i <9 ; $i++) { 
      ?>
      <div class="row">
        <div class="col-sm-5">

          <div class="theme-field">
            <div class="col-sm-2">标题</div>
            <div class="col-sm-10">
              <input class="form-control" type="text" name='<?php echo "text_block_title_{$i}"; ?>' id='<?php echo "text_block_title_{$i}"; ?>' value='<?php echo get_option("text_block_title_{$i}"); ?>' />
            </div>
          </div>
        </div>

        <div class="col-sm-7">
          <div class="theme-field">
            <div class="col-sm-12">内容</div><br/>
            <div class="col-sm-12">
              <?php wp_editor( get_option("text_block_content_{$i}"), "text_block_content_{$i}"); ?> 
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