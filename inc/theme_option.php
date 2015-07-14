<?php
if($_GET['page']=='theme-option-wphy.php'){
  add_action('admin_head', 'frog_admin_style');
}

function frog_admin_style() {
  echo '<link rel="stylesheet" href="'.get_bloginfo('template_directory').'/css/bootstrap.min.css" type="text/css" media="all" />';
  echo '<script src="'.get_bloginfo('template_directory').'/js/bootstrap.min.js" type="text/javascript"></script>';
  echo '<link rel="stylesheet" href="'.get_bloginfo('template_directory').'/css/admin.css" type="text/css" media="all" />';
  echo '<script src="'.get_bloginfo('template_directory').'/js/admin.js" type="text/javascript"></script>';

}
add_action( 'admin_menu', 'theme_option_wphy' );

function theme_option_wphy() {
  add_menu_page( 'WordPress花园', 'WordPress花园', 'manage_options', 'theme-option-wphy.php', 'theme_option_html_wphy' );
}
add_action( 'admin_init', 'register_contact_settings' );
function register_contact_settings() {

  //register contact info settings
  register_setting( 'contact-settings-group', 'tel' );
  register_setting( 'contact-settings-group', 'email' );
  register_setting( 'contact-settings-group', 'qq' );
  register_setting( 'contact-settings-group', 'qq_group' );
  register_setting( 'contact-settings-group', 'weixin' );
  register_setting( 'contact-settings-group', 'weibo' );
  register_setting( 'contact-settings-group', 'qc' );
  register_setting( 'contact-settings-group', 'address' );
  register_setting( 'contact-settings-group', 'about_us' );
  register_setting( 'contact-settings-group', 'show_team' );
  register_setting( 'contact-settings-group', 'logo' );
  register_setting( 'contact-settings-group', 'beian' );

  
  add_option('tel','021-1234567');
  add_option('email','wordpresshy@126.com');
  add_option('qq','406758623');
  add_option('qq_group','348046974');
  add_option('weixin','wordpresshy');
  add_option('weibo','iqiujumper');
  add_option('qc','wordpresshy');
  add_option('address','shanghai');
  add_option('about_us','wordpress花园提供多种基于wordpress的技术服务,分享Wordpress视频教程,Wordpress模板下载,Wordpress主题下载，Wordpress汉化以及Wordpress项目合作。');
  


  //register slider setting
  register_setting( 'slider-settings-group', "show_slider" );
  register_setting( 'slider-settings-group', "use_animation" );

  for ($i=0; $i <5 ; $i++) { 
    register_setting( 'slider-settings-group', "slider_title_{$i}" );
    register_setting( 'slider-settings-group', "slider_content_{$i}" );
    register_setting( 'slider-settings-group', "slider_image_{$i}" );
    register_setting( 'slider-settings-group', "slider_url_{$i}" );
  }

  //register small slider setting
  register_setting( 'small-slider-settings-group', "show_small_slider" );

  for ($i=0; $i <10 ; $i++) { 
    register_setting( 'small-slider-settings-group', "small_slider_title_{$i}" );
    register_setting( 'small-slider-settings-group', "small_slider_content_{$i}" );
    register_setting( 'small-slider-settings-group', "small_slider_image_{$i}" );
    register_setting( 'small-slider-settings-group', "small_slider_url_{$i}" );
  }

  //register block 3 setting
  register_setting( 'block-3-settings-group', "show_block_3" );

  for ($i=0; $i <6 ; $i++) { 
    register_setting( 'block-3-settings-group', "block_3_title_{$i}" );
    register_setting( 'block-3-settings-group', "block_3_content_{$i}" );
    register_setting( 'block-3-settings-group', "block_3_image_{$i}" );
    register_setting( 'block-3-settings-group', "block_3_url_{$i}" );
  }

  //register block 2 setting
  register_setting( 'block-2-settings-group', "show_block_2" );

  for ($i=0; $i <2 ; $i++) { 
    register_setting( 'block-2-settings-group', "block_2_title_{$i}" );
    register_setting( 'block-2-settings-group', "block_2_content_{$i}" );
    register_setting( 'block-2-settings-group', "block_2_url_{$i}" );
  }

  //register featured post setting
  register_setting('featured-post-settings-group','show_featured_post');
  register_setting('featured-post-settings-group','featured_post_id');
  register_setting('featured-post-settings-group','use_newest');

  //register full width text setting
  register_setting('full-width-text-settings-group','show_full_width');
  register_setting('full-width-text-settings-group','show_full_width_button');
  register_setting('full-width-text-settings-group','full_width_title');
  register_setting('full-width-text-settings-group','full_width_content');
  register_setting('full-width-text-settings-group','full_width_button_title');
  register_setting('full-width-text-settings-group','full_width_button_content');
  register_setting('full-width-text-settings-group','full_width_button_link');

  //register text block setting
  register_setting( 'text-block-settings-group', "show_text_block" );

  for ($i=0; $i <9 ; $i++) { 
    register_setting( 'text-block-settings-group', "text_block_title_{$i}" );
    register_setting( 'text-block-settings-group', "text_block_content_{$i}" );
  }

  //register intro block setting
  register_setting( 'intro-block-settings-group', "show_intro_block" );

  for ($i=0; $i <10 ; $i++) { 
    register_setting( 'intro-block-settings-group', "intro_block_title_{$i}" );
    register_setting( 'intro-block-settings-group', "intro_block_icon_{$i}" );
    register_setting( 'intro-block-settings-group', "intro_block_url_{$i}" );
  }

  register_setting( 'global-settings-group', "show_case" );
  register_setting( 'global-settings-group', "case_type" );
  register_setting( 'global-settings-group', "case_num" );
  register_setting( 'global-settings-group', "analytic" );
  register_setting( 'global-settings-group', "ee" );


}



function theme_option_html_wphy() {
  if ( !current_user_can( 'manage_options' ) )  {
    wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
  }
  echo '<div class="wrap container"><div class="row">';
?>
<div class="info">
  <h1>欢迎使用Wordpress花园的主题!</h1>
  <blockquote>
    <p>欢迎使用wordpress花园的“月亮”主题！
在Wordpress花园的官网(http://wordpresshy.com)上有详细的主题使用【配套视频教程】<br/>手把手让你零基础不求助任何人搭建起你自己的Wordpress网站！
如果阁下在使用该主题的过程中有任何疑问<br/>可以发邮件到<span class="text-primary">wordpresshy@126.com</span>，或者到Wordpress网站对应的主题页面下留言
</p>
  </blockquote>
  <p>
    <a href="http://wordpresshy.com" target="_blank"><button type="button" class="btn btn-primary">WordPress花园官网</button></a>
    <a href="http://wordpresshy.com/business" target="_blank"><button type="button" class="btn btn-primary">配套视频教程</button></a>
  </p>
</div>
<div role="tabpanel">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#golbal" aria-controls="golbal" role="tab" data-toggle="tab">全局设置</a></li>

    <li role="presentation"><a href="#slider" aria-controls="slider" role="tab" data-toggle="tab">幻灯片</a></li>
    <li role="presentation"><a href="#intro" aria-controls="intro" role="tab" data-toggle="tab">首页介绍区块</a></li>
    <li role="presentation" ><a href="#contact" aria-controls="contact" role="tab" data-toggle="tab">联系方式</a></li>
    <li role="presentation"><a href="#smallslider" aria-controls="smallslider" role="tab" data-toggle="tab">小幻灯片</a></li>
    <li role="presentation"><a href="#block3" aria-controls="block3" role="tab" data-toggle="tab">首页3栏区块</a></li>
    <li role="presentation"><a href="#block2" aria-controls="block2" role="tab" data-toggle="tab">首页2栏区块</a></li>
    <li role="presentation"><a href="#featurepost" aria-controls="featurepost" role="tab" data-toggle="tab">首页特色文章</a></li>
    <li role="presentation"><a href="#fullwidth" aria-controls="fullwidth" role="tab" data-toggle="tab">首页文案</a></li>
    <li role="presentation"><a href="#textblock" aria-controls="textblock" role="tab" data-toggle="tab">首页文字区块</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="global"><?php require get_template_directory() . '/inc/to/global.php'; ?></div>

    <div role="tabpanel" class="tab-pane fade" id="contact"><?php require get_template_directory() . '/inc/to/contact.php'; ?></div>
    <div role="tabpanel" class="tab-pane fade" id="slider"><?php require get_template_directory() . '/inc/to/slider.php'; ?></div>
    <div role="tabpanel" class="tab-pane fade" id="smallslider"><?php require get_template_directory() . '/inc/to/small_slider.php'; ?></div>
    <div role="tabpanel" class="tab-pane fade" id="block3"><?php require get_template_directory() . '/inc/to/block_3.php'; ?></div>
    <div role="tabpanel" class="tab-pane fade" id="block2"><?php require get_template_directory() . '/inc/to/block_2.php'; ?></div>
    <div role="tabpanel" class="tab-pane fade" id="featurepost"><?php require get_template_directory() . '/inc/to/feature_post.php'; ?></div>
    <div role="tabpanel" class="tab-pane fade" id="fullwidth"><?php require get_template_directory() . '/inc/to/full_width_block.php'; ?></div>
    <div role="tabpanel" class="tab-pane fade" id="textblock"><?php require get_template_directory() . '/inc/to/text_area.php'; ?></div>
    <div role="tabpanel" class="tab-pane fade" id="intro"><?php require get_template_directory() . '/inc/to/intro.php'; ?></div>

  </div>

</div>
<?php  echo '</div></div>
<div class="clear"></div>';
}
