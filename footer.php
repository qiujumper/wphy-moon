<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package wphy-sun
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'wphy-sun' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'wphy-sun' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'wphy-sun' ), 'wphy-sun', '<a href="http://wordpresshy.com/" rel="designer">wordpresshy.com</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script src="//localhost:35729/livereload.js"></script> 
</body>
</html>
