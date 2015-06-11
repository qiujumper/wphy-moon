<?php
/**
 * Template part for displaying posts.
 *
 * @package wphy-sun
 */

?>

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
		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			echo chinese_excerpt(get_the_excerpt());
			echo '<a class="read-more" href=".get_permalink()." target="_blank" >查看详情</a>';
		
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wphy-sun' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<div class="meta-info">
		<span><?php the_author(); ?> | </span>
		<span><?php the_date('Y-m-d'); ?> | </span>
		<span><?php the_category(); ?></span>
		<div class="clearfix"></div>		
	</div>
	<div class="tag-cloud"><?php the_tags('','',''); ?></div>

</article><!-- #post-## -->
