
<div class="wrap input-group">
<h2>联系方式</h2>

<form method="post" action="options.php">
    <?php settings_fields( 'contact-settings-group' ); ?>
    <?php do_settings_sections( 'contact-settings-group' ); ?>
    <div class="checkbox">
      <p class="bg-warning is_show">
        <span>是否开启</span> <input type="checkbox"  id="show_intro_block" name="show_intro_block" <?php echo get_option("show_intro_block"); ?> value="checked">
      </p>
    </div><br/>

    <table class="form-table table table-striped">

      <tr>
        <td>是否显示团队成员</td>
        <td>  
          <input type="checkbox"  id="show_team" name="show_team" <?php echo get_option("show_team"); ?> value="checked">
        </td>
      </tr>
      
      <tr>
      <td>电话号码</td>
        <td>
          <input class="form-control" type="text" name="tel" value="<?php echo esc_attr( get_option('tel') ); ?>" />
        </td>
      </tr>

      <tr>
      <td>QQ号码</td>
        <td>
          <input class="form-control" type="text" name="qq" value="<?php echo esc_attr( get_option('qq') ); ?>" />
        </td>
      </tr>

      <tr>
      <td>QQ群号码</td>
        <td>
          <input class="form-control" type="text" name="qq_group" value="<?php echo esc_attr( get_option('qq_group') ); ?>" />
        </td>
      </tr>

      <tr>
      <td>Email</td>
        <td>
          <input class="form-control" type="text" name="email" value="<?php echo esc_attr( get_option('email') ); ?>" />
        </td>
      </tr>

      <tr>
      <td>微信账号</td>
        <td>
          <input class="form-control" type="text" name="weixin" value="<?php echo esc_attr( get_option('weixin') ); ?>" />
        </td>
      </tr>

      <tr>
      <td>微博账号</td>
        <td>
          <input class="form-control" type="text" name="weibo" value="<?php echo esc_attr( get_option('weibo') ); ?>" />
        </td>
      </tr>

      <tr>
      <td>地址</td>
        <td>
          <input class="form-control" type="text" name="address" value="<?php echo esc_attr( get_option('address') ); ?>" />
        </td>
      </tr>

      <tr>
      <td>备案号</td>
        <td>
          <?php wp_editor( get_option("beian"), "beian"); ?>         </td>
      </tr>

      <tr>
      <td>二维码</td>
        <td>
          <?php print_image_field('qr','qr_button'); ?>        
        </td>
      </tr>

      <tr>
      <td>关于我们</td>
        <td>
          <?php wp_editor( get_option("about_us"), "about_us"); ?> 
        </td>
      </tr>
        
    </table>
    
    <?php submit_button(); ?>

</form>
</div>
