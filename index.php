<?php
get_header(); 
?>
<div class="container">
<?php 
get_sidebar();

?>

	<div id="primary" class="content-area col-sm-9">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					get_template_part( 'template-parts/content', get_post_format() );
				?>

			<?php 
			endwhile;
			include(locate_template('module/pagination.php'));
			else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div>
<?php get_footer(); ?>
