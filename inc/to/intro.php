
<div class="container">
  <br/>
  <form method="post" action="options.php">
    <?php 
    settings_fields( 'intro-block-settings-group' ); 
    do_settings_sections( 'intro-block-settings-group' ); 
    ?>
    <div class="checkbox">
      <p class="bg-warning is_show">
        <span>是否开启</span> <input type="checkbox"  id="show_intro_block" name="show_intro_block" <?php echo get_option("show_intro_block"); ?> value="checked">
      </p>
    </div><br/>
    <?php
    for ($i=0; $i <10 ; $i++) { 
      ?>
      <div class="row">
        <div class="col-sm-5">

          <div class="theme-field">
            <div class="col-sm-2">标题</div>
            <div class="col-sm-10">
              <input class="form-control" type="text" name='<?php echo "intro_block_title_{$i}"; ?>' id='<?php echo "intro_block_title_{$i}"; ?>' value='<?php echo get_option("intro_block_title_{$i}"); ?>' />
            </div>
          </div>

          <div class="theme-field">
            <div class="col-sm-2">链接</div>
            <div class="col-sm-10">
              <input class="form-control" type="text" name='<?php echo "intro_block_url_{$i}"; ?>' id='<?php echo "intro_block_url_{$i}"; ?>' value='<?php echo get_option("intro_block_url_{$i}"); ?>' />
            </div>
          </div>

        </div>

        <div class="col-sm-7">
          <div class="theme-field">
            <div class="col-sm-12">图标</div><br/><br/>
            <div class="col-sm-12">
              <input class="form-control" type="text" name='<?php echo "intro_block_icon_{$i}"; ?>' id='<?php echo "intro_block_icon_{$i}"; ?>' value='<?php echo get_option("intro_block_icon_{$i}"); ?>' />
              <p class="text-muted"><br/>【图标获取方法】<br/>
                1.登录网站 http://fontawesome.io/icons/<br/>
                2.点击你喜欢的图标，并且复制代码，例如 <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-map-marker"</span><span class="nt">&gt;&lt;/i&gt;</span>
              </p>
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
