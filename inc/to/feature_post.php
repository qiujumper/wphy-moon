<div class="container">
  <br/>
  <form method="post" action="options.php">
    <?php 
    settings_fields( 'featured-post-settings-group' ); 
    do_settings_sections( 'featured-post-settings-group' ); 
    ?>
    <div class="checkbox">
      <p class="bg-warning is_show">
        <span>是否开启</span> <input type="checkbox"  id="show_featured_post" name="show_featured_post" <?php echo get_option("show_featured_post"); ?> value="checked">
      </p>
    </div><br/>
    
      <div class="row">
        
          <div class="theme-field">
            <p class="bg-warning is_show">
              <span>是否直接选用最新发布的3篇文章 </span> <input type="checkbox"  id="use_newest" name="use_newest" <?php echo get_option("use_newest"); ?> value="checked">
            </p>
          </div>

          <div class="theme-field">
            <div class="col-sm-6">请输入指定3篇文章的id(数字),并且以空格分隔,例如‘3 54 9’</div>
            <div class="col-sm-6">
              <input class="form-control" type="text" name='<?php echo "featured_post_id"; ?>' id='<?php echo "featured_post_id"; ?>' value='<?php echo get_option("featured_post_id"); ?>' /><br/>
              <p class="text-muted">【提示:文章id获取方法】进入到文章(post)的列表管理页面,然后将鼠标移动到你想要指定的文章标题上,注意浏览器左下角显示的链接,格式类似于‘wp-admin/post.php?post=1051&action=edit’,其中的1051就是该文章的id号。</p>
            </div>
          </div>     
      </div>
      <hr/>
      <?php
        submit_button();
      ?>
  </form>
</div>