<?php
/**
 * The template for displaying all single posts.
 *
 * @package wphy_moon
 */

get_header();
?>
<div class="container">
<?php 
get_sidebar();
?>

	<div id="primary" class="content-area col-sm-9">
		<main id="main" class="site-main detail-page" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

			<?php the_post_navigation(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- container -->
<?php get_footer(); ?>
