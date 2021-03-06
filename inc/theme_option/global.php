
<div class="container">
  <br/>
  <form method="post" action="options.php">
    <?php 
    settings_fields( 'global-settings-group' ); 
    do_settings_sections( 'global-settings-group' );
    submit_button('保存设置');
    ?>
    <div class="row">
      <div class="col-md-12 theme-field" >
        <span>LOGO(选择了LOGO就无法显示站点名称，所以如果希望同时显示LOGO图片和站点名称，可以把文字添加到图片中)</span> &nbsp;&nbsp;&nbsp;<?php print_image_field('logo','logo_button'); ?><br/>

      </div>

      <div class="col-md-12 theme-field" >
        <div class="alert alert-success" role="alert">
          <span>是否启用【定制首页】</span> &nbsp;&nbsp;&nbsp;<input type="checkbox"  id="use_wphy" name="use_wphy"  <?php echo get_option("use_wphy"); ?> value="checked"> 
        </div>
        <hr>
      </div>

      <div class="col-md-12 theme-field" >
        <span>是否开启'案例展示'</span> &nbsp;&nbsp;&nbsp;<input type="checkbox"  id="show_case" name="show_case"  <?php echo get_option("show_case"); ?> value="checked">
      </div>

      <div class="col-md-12 theme-field" >
        <span>是否【全局】开启'案例展示'</span> &nbsp;&nbsp;&nbsp;<input type="checkbox"  id="show_case_global" name="show_case_global"  <?php echo get_option("show_case_global"); ?> value="checked">
      </div>

      <div class="col-md-12 theme-field" >
        <span>案例数目</span> &nbsp;&nbsp;&nbsp;<input class="" type="text" name='<?php echo "case_num"; ?>' id='<?php echo "case_num"; ?>' value='<?php echo get_option("case_num"); ?>' />

      </div>

      <div class="col-md-12 theme-field" >
        <span>'案例展示'类型</span> &nbsp;&nbsp;&nbsp;<?php print_type_field(); ?>
        <hr>
      </div>

      <div class="col-md-12 theme-field" >
      <span>是否开启'合作伙伴'</span> &nbsp;&nbsp;&nbsp;<input type="checkbox"  id="show_partner" name="show_partner"  <?php echo get_option("show_partner"); ?> value="checked"><br/>
      </div>
      <div class="col-md-12 theme-field">
      
        <span>合作伙伴</span>(以图片的形式显示在底部)<br/><br/>
        <div class="repeat-group">
         <div class="repeat-fields-area">

        <?php          
          $client_url = get_option('client_url');
          $client_title = get_option('client_title');
          $client_num = count($client_url);
          for ($i=0; $i < $client_num; $i++) { 
        ?>
          <div class="repeat-fields">
             <div class="col-md-6">
              <div class="field">标题: <input type="text"  name="client_title[]" value="<?php echo $client_title[$i]; ?>"></div>

               <div class="field">链接: <input type="text" size=35 name="client_url[]" value="<?php echo $client_url[$i]; ?>"></div>
               <div class="field"><button class="remove-field btn btn-danger btn-xs">删除</button></div>
             </div><!-- col-md-6 -->

             <div class="col-md-6">
               <div class="field"><?php print_image_field('client_image',$i,true); ?></div>
             </div>
             <div class="clearfix"></div>
           </div><!-- repeat-fields -->
        <?php
          }
        ?>

           

         </div> <!-- repeat-fields-area make sure to have a better layout with add button-->
        <div class="clearfix"></div>
            <button class="add-field btn btn-info btn-sm">添加一组字段</button> 
         </div><!-- repeat-group the whole repeat feild-->
      </div><!-- theme-field -->

      <div class="col-md-12 theme-field">
        <span>统计代码</span>(全部的统计代码都可贴在这里)<br/><br/>
        <textarea rows="20" cols="150" name="analytic" id="analytic" >
          <?php echo get_option('analytic'); ?>
        </textarea>
      </div>

    </div>
    <?php
    submit_button('保存设置');
    ?>
  </form>
</div>
