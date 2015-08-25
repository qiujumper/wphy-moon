<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package wphy_moon
 */
include(locate_template('module/button-text.php'));

?>

	</div><!-- #content -->

	<footer id="footer" class="site-footer " role="contentinfo">
  <div class="container">  
		<div class="row">
    <?php if (get_option('client')) { ?>
    <div class="col-sm-12 client">
      <div class="client-title">
        合作伙伴
      </div>
      <?php echo get_option('client'); ?>
    </div>
    <?php } ?>
    <div class="col-sm-3">
      <div class="about-us">
        <div class="title"><h3><?php bloginfo( 'name' ); ?></h3></div>
        <div class="content"><?php echo get_option('about_us'); ?></div>
      </div>
      <div class="searcharea"><br/>
        <?php 
          get_search_form_wphy(true);
        ?>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="title">
        最新文章
      </div>
      <div class="recent-post">
      <ul>          
        <?php 
          $args = array( 'numberposts' => '5','post_type'=>'any' );
          $recent_posts = wp_get_recent_posts( $args ); 
          foreach( $recent_posts as $recent ){
            echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
          }
        ?>
      </ul>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="title">热门标签</div>
      <div class="tag-cloud">
        <?php wp_tag_cloud( 'number=10&orderby=count&order=RAND' ); ?>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="title">联系方式</div>
      <?php include(locate_template('module/contact-info.php')); ?>
      <div class="page-links">        
        <?php 
        wp_nav_menu(array(
            'theme_location'            =>'footer',
            'container' => false
          )
        ); 
      ?>
      </div><!-- page-links -->
      
    </div>  
    </div>
    <div class="col-sm-12 copy-right">
      <h5 style="font-size: 12px; font-weight: 100; margin-top: 0px;">
        <?php echo get_option('beian'); ?><br/>
        copyright © 2015 Wordpress花园 |  网站由<a href="http://wordpresshy.com/" target="_blank">Wordpress花园</a>提供
      </h5>
    </div>
  </div>
	</footer><!-- #footer -->
</div><!-- #page -->

<?php wp_footer(); 
if(strpos(get_home_url(),'localhost')){

?>
<script src="//localhost:35729/livereload.js"></script>
<?php 
}
echo get_option('analytic');  ?> 
</body>
</html>
