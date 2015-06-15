<?php
add_action('admin_head', 'frog_admin_style');
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
  //register our settings
  register_setting( 'contact-settings-group', 'tel' );
  register_setting( 'contact-settings-group', 'email' );
  register_setting( 'contact-settings-group', 'qq' );
  register_setting( 'contact-settings-group', 'qq_group' );
  register_setting( 'contact-settings-group', 'weixin' );
  register_setting( 'contact-settings-group', 'weibo' );
  register_setting( 'contact-settings-group', 'qc' );
  register_setting( 'contact-settings-group', 'address' );
  register_setting( 'contact-settings-group', 'about_us' );

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
在Wordpress花园的官网(http://wordpresshy.com)上有详细的主题使用【配套视频教程】，<br/>手把手让你零基础不求助任何人搭建起你自己的Wordpress网站！
如果阁下在使用该主题的过程中有任何疑问，<br/>可以发邮件到<span class="text-primary">wordpresshy@126.com</span>，或者到Wordpress网站对应的主题页面下留言。
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
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">概况</a></li>
    <li role="presentation"><a href="#contact" aria-controls="contact" role="tab" data-toggle="tab">联系方式</a></li>
    <li role="presentation"><a href="#slider" aria-controls="slider" role="tab" data-toggle="tab">幻灯片</a></li>
    <li role="presentation"><a href="#smallslider" aria-controls="smallslider" role="tab" data-toggle="tab">小幻灯片</a></li>
    <li role="presentation"><a href="#block3" aria-controls="block3" role="tab" data-toggle="tab">首页3栏区块</a></li>
    <li role="presentation"><a href="#block2" aria-controls="block2" role="tab" data-toggle="tab">首页2栏区块</a></li>
    <li role="presentation"><a href="#featurepost" aria-controls="featurepost" role="tab" data-toggle="tab">首页特色文章</a></li>
    <li role="presentation"><a href="#fullwidth" aria-controls="fullwidth" role="tab" data-toggle="tab">首页文案</a></li>
    <li role="presentation"><a href="#textblock" aria-controls="textblock" role="tab" data-toggle="tab">首页文字区块</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home"><?php require get_template_directory() . '/inc/to/intro.php'; ?></div>
    <div role="tabpanel" class="tab-pane fade" id="contact"><?php require get_template_directory() . '/inc/to/contact.php'; ?></div>
    <div role="tabpanel" class="tab-pane fade" id="slider"><?php require get_template_directory() . '/inc/to/slider.php'; ?></div>
    <div role="tabpanel" class="tab-pane fade" id="smallslider"><?php require get_template_directory() . '/inc/to/small_slider.php'; ?></div>
    <div role="tabpanel" class="tab-pane fade" id="block3"><?php require get_template_directory() . '/inc/to/block_3.php'; ?></div>
    <div role="tabpanel" class="tab-pane fade" id="block2"><?php require get_template_directory() . '/inc/to/block_2.php'; ?></div>
    <div role="tabpanel" class="tab-pane fade" id="featurepost"><?php require get_template_directory() . '/inc/to/feature_post.php'; ?></div>
    <div role="tabpanel" class="tab-pane fade" id="fullwidth"><?php require get_template_directory() . '/inc/to/full_width_block.php'; ?></div>
    <div role="tabpanel" class="tab-pane fade" id="textblock"><?php require get_template_directory() . '/inc/to/text_area.php'; ?></div>

  </div>

</div>
<?php  echo '</div></div>
<div class="clear"></div>';
}
