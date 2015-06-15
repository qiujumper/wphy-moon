
<div class="wrap input-group">
<h2>联系方式</h2>

<form method="post" action="options.php">
    <?php settings_fields( 'contact-settings-group' ); ?>
    <?php do_settings_sections( 'contact-settings-group' ); ?>
    <table class="form-table table table-striped">
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
      <td>二维码</td>
        <td>
          <input class="form-control" type="text" name="qc" value="<?php echo esc_attr( get_option('qc') ); ?>" />
        </td>
      </tr>

      <tr>
      <td>关于我们</td>
        <td>
          <textarea class="form-control" rows="9" cols="50" name="about_us" ><?php echo esc_attr( get_option('about_us') ); ?></textarea>
        </td>
      </tr>
        
    </table>
    
    <?php submit_button(); ?>

</form>
</div>