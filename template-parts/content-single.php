<?php 
if (has_post_thumbnail(get_the_ID())) {
?>
	<div class="feature-image">
		<img src="<?php echo get_feature_image_by_id(get_the_ID()); ?>" alt="<?php the_title(); ?>" class="animated" >
	</div>
<?php 
}
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
    <div class="breadcrumbs" xmlns:v="http://rdf.data-vocabulary.org/#">
        <?php if(function_exists('bcn_display'))
        {
            bcn_display();
        }?>
    </div>
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="meta-info">
			<span class="author"><?php the_author(); ?> | </span>
			<span class="date"><?php the_date('Y-m-d'); ?> | </span>
			<span> <?php the_category(); ?></span>
      <span>QQ群:<?php echo get_option('qq_group'); ?></span>
			<div class="clearfix"></div>		
		</div>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<div class="customed-field">
        <?php
        if (function_exists('get_field')) {
        
          if(get_field('plugin_name')){
        ?>
          <div class="item">
            <strong>插件名称 : </strong><?php the_field('plugin_name') ?>
          </div>
        <?php
          }
          
          if (get_field('plugin_type')) {
        ?>
          <div class="item">
            <strong>插件类型 : </strong><?php the_field('plugin_type') ?>
          </div>
        <?php
          }
          
          if (get_field('down_url')) {
        ?>
          <div class="item">
            <strong>下载地址 : </strong><a target="_blank" href="<?php the_field('down_url') ?>"><?php the_field('down_url') ?></a>
          </div>
        <?php
          }
          
          if (get_field('url')) {
        ?>
          <div class="item">
            <strong>预览地址 : </strong><a href="<?php the_field('url') ?>" target="_blank" ><?php the_field('url') ?></a>
          </div>
        <?php
          }
          
          if (get_field('type')) {
        ?>
          <div class="item">
            <strong>网站类型 : </strong><?php the_field('type') ?>
          </div>
        <?php
          }
         
          if (get_field('design_name')) {
        ?>
          <div class="item">
            <strong>网站作者 : </strong><a href="<?php the_field('design_url') ?>" target="_blank" ><?php the_field('design_name') ?></a>
          </div>
        <?php
          }
          
          if (get_post_type($post_ID) == 'work') {            
        ?>
          <div class="item">
            <strong>网站平台 : </strong>Wordpress
          </div>

          <div class="item">
            <strong>是否为响应式 : </strong><?php echo get_field('responsive'); ?>
          </div>

        <?php
          }if(get_field('tech')){
        ?>
        <div class="item">
            <strong>采用技术 : </strong>
            <?php foreach (get_field('tech') as $key => $value) {
              echo $value.', ';
            } ?>
        </div>
       
        <?php
          }
        }
        ?> 
         <div style="font-size:15px; display: inline;">
          WordPress花园承接各种<h2 style="font-size:15px; display: inline;">WordPress建站</h2>项目,包括<h3 style="display: inline;font-size:15px;" >WordPress企业站</h3>以及<h3 style="font-size:15px; display: inline;">Wordpress商城</h3>
        </div>       
      </div>
      <?php 
            if (function_exists('get_field')&&get_field('video')) {
          ?>
            <div class="video" style="margin-bottom: 10px;">
            <h3>wordpress视频教程</h3>
              <?php the_field('video') ?>
              <br/>
            </div>
          <?php
            }

            if (function_exists('get_field')&&get_field('video_link')) {
          ?>
            <div class="video" style="margin-bottom: 10px;">
            <h3>wordpress视频教程</h3>
              <video controls="controls" width="100%" height="auto">
                <source src="<?php the_field('video_link'); ?>" type="video/mp4" />
              </video>
              <br/>
            </div>
          <?php
            }

		        the_content(); 
          ?>
    <div class="qq-group">
      如果对该内容感兴趣或者有疑问,欢迎加QQ群讨论:<?php echo get_option('qq_group'); ?>
    </div> <br/>
		<?php include(locate_template('module/share-button.php')); ?>
    
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wphy_moon' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<div class="tag-cloud"><?php the_tags('','',''); ?></div>
  <div class="nav-links page-nav-wphy">
      <?php
        previous_post_link( '<div class="nav-previous">上一篇: %link</div>', '%title' );
        next_post_link( '<div class="nav-next">下一篇: %link</div>', '%title' );
      ?>
  </div><!-- .nav-links -->

</article><!-- #post-## -->

