<div class="container">
  <br/>
  <form method="post" action="options.php">
    <?php 
    settings_fields( 'block-2-settings-group' ); 
    do_settings_sections( 'block-2-settings-group' ); 
    ?>
    <div class="checkbox">
      <p class="bg-warning is_show">
        <span>是否开启</span> <input type="checkbox"  id="show_block_2" name="show_block_2" <?php echo get_option("show_block_2"); ?> value="checked">
      </p>
    </div><br/>
    <?php
    for ($i=0; $i <2 ; $i++) { 
      ?>
      <div class="row">
        <div class="col-sm-5">

          <div class="theme-field">
            <div class="col-sm-2">标题</div>
            <div class="col-sm-10">
              <input class="form-control" type="text" name='<?php echo "block_2_title_{$i}"; ?>' id='<?php echo "block_2_title_{$i}"; ?>' value='<?php echo get_option("block_2_title_{$i}"); ?>' />
            </div>
          </div>

          <div class="theme-field">
            <div class="col-sm-2">链接</div>
            <div class="col-sm-10">
              <input class="form-control" type="text" name='<?php echo "block_2_url_{$i}"; ?>' id='<?php echo "block_2_url_{$i}"; ?>' value='<?php echo get_option("block_2_url_{$i}"); ?>' />
            </div>
          </div>

         
        </div>

        <div class="col-sm-7">
          <div class="theme-field">
            <div class="col-sm-12">内容</div><br/><br/>
            <div class="col-sm-12">
            <?php 
              wp_editor( get_option("block_2_content_{$i}"), "block_2_content_{$i}"); 
            ?>              
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