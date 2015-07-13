<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package wphy_moon
 */

get_header(); 
?>
<header class="page-header">
<h1 class="page-title">Wordpress 
<?php
	post_type_archive_title();
	echo '</h1>';
	the_archive_description( '<div class="taxonomy-description">', '</div>' );
?>
</header><!-- .page-header -->
<div class="container">
<?php 
get_sidebar();
?>

	<div id="primary" class="content-area col-sm-9">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : 
			while ( have_posts() ) : the_post(); ?>

				<?php

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content');
				?>

			<?php endwhile; 			
			include(locate_template('module/pagination.php'));
			else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div>
<?php get_footer(); ?>
