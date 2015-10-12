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
        <?php
          get_sidebar('footer-1');
        ?>
      </div>
      
      <div class="col-sm-3">
        <?php
          get_sidebar('footer-2');
        ?>
      </div>

      <div class="col-sm-3">
        <?php
          get_sidebar('footer-3');
        ?>
      </div>

      <div class="col-sm-3">
        <?php
          get_sidebar('footer-4');
        ?>
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
