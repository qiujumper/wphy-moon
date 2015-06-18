<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php 
if (has_post_thumbnail(get_the_ID())) {
?>
	<div class="feature-image">
		<img src="<?php echo get_feature_image_by_id(get_the_ID()); ?>" alt="<?php the_title(); ?>" class="animated" >
	</div>
<?php 
}
?>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="meta-info">
			<span class="author"><?php the_author(); ?> | </span>
			<span class="date"><?php the_date('Y-m-d'); ?> | </span>
			<span> <?php the_category(); ?></span>
			<div class="clearfix"></div>		
		</div>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wphy_moon' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<div class="tag-cloud"><?php the_tags('','',''); ?></div>

</article><!-- #post-## -->

