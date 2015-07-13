<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package wphy_moon
 */

?>

	</div><!-- #content -->

	<footer id="footer" class="site-footer " role="contentinfo">
  <div class="container">  
		<div class="row">
    <div class="col-sm-3">
      <div class="about-us">
        <div class="title"><h3><?php bloginfo( 'name' ); ?></h3></div>
        <div class="content"><?php echo get_option('about_us'); ?></div>
      </div>
      <div class="searcharea"><br/>
        <?php 
          get_search_form(true);
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
          $args = array( 'numberposts' => '5' );
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
            'menu'            =>'Footer Menu',
            'container' => false
          )
        ); 
      ?>
      </div><!-- page-links -->
      
    </div>  
    </div>
    <div class="col-sm-12 copy-right">
      <h3>
        copyright © 2015 Wordpress花园 |  主题由<a href="http://wordpresshy.com/" target="_blank">Wordpress花园</a>提供
      </h3>
    </div>
  </div>
	</footer><!-- #footer -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script src="//localhost:35729/livereload.js"></script>
<?php echo get_option('analytic');  ?> 
</body>
</html>
