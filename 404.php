<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package wphy_moon
 */

get_header();
?>
<header class="page-header">
  <h1>Wordpress花园</h1>
  <div class="taxonomy-description">
		<?php echo get_option('about_us'); ?>  
	</div>
</header><!-- .page-header --> 
<div class="container">
<?php  
get_sidebar();
?>

	<div id="primary" class="content-area col-sm-9">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( '抱歉,页面没找到:(', 'wphy_moon' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_html_e( '没找到就搜索一下吧:D' ); ?></p>

					<?php get_search_form(); ?>


				</div><!-- .page-content -->
			</section><!-- .error-404 -->
			<div class="all-list-area">

      <div class="item-block">
        <div class="title">
          <h3>新手入门教程</h3>
        </div>
        <div class="item-group">
          <div class="row">
          <?php 
            $args_simple = array(
              'post_type' => 'simple',
              'posts_per_page' => -1,
              'order' => 'ASC'
            );
            $query_simple = new WP_Query($args_simple);
            if ( $query_simple->have_posts() ) : while ( $query_simple->have_posts() ) : $query_simple->the_post(); 
          ?>
            <div class="col-xs-6">
              <div class="list-title">
                <span class="glyphicon glyphicon-triangle-right"></span><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </div><!-- list-title -->
            </div>  <!-- col-xs-6 -->
            <?php
            endwhile; endif;  
            ?>
          </div><!-- row -->
        </div><!-- item-group -->
      </div>  <!-- item-block -->

      <div class="item-block">
        <div class="title">
          <h3>插件使用教程</h3>
        </div>
        <div class="item-group">
          <div class="row">
          <?php 
            $args_simple = array(
              'post_type' => 'post',
              'posts_per_page' => -1,
              'order' => 'ASC'
            );
            $query_simple = new WP_Query($args_simple);
            if ( $query_simple->have_posts() ) : while ( $query_simple->have_posts() ) : $query_simple->the_post(); 
          ?>
            <div class="col-xs-6">
              <div class="list-title">
                <span class="glyphicon glyphicon-triangle-right"></span><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </div><!-- list-title -->
            </div>  <!-- col-xs-6 -->
            <?php
            endwhile; endif;  
            ?>
          </div><!-- row -->
        </div><!-- item-group -->
      </div>  <!-- item-block -->

      <div class="item-block">
        <div class="title">
          <h3>模板制作教程</h3>
        </div>
        <div class="item-group">
          <div class="row">
          <?php 
            $args_simple = array(
              'post_type' => 'theme',
              'posts_per_page' => -1,
              'order' => 'ASC'
            );
            $query_simple = new WP_Query($args_simple);
            if ( $query_simple->have_posts() ) : while ( $query_simple->have_posts() ) : $query_simple->the_post(); 
          ?>
            <div class="col-xs-6">
              <div class="list-title">
                <span class="glyphicon glyphicon-triangle-right"></span><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </div><!-- list-title -->
            </div>  <!-- col-xs-6 -->
            <?php
            endwhile; endif;  
            ?>
          </div><!-- row -->
        </div><!-- item-group -->
      </div>  <!-- item-block -->

      <div class="item-block">
        <div class="title">
          <h3>woocommce商城教程</h3>
        </div>
        <div class="item-group">
          <div class="row">
          <?php 
            $args_simple = array(
              'post_type' => 'woo',
              'posts_per_page' => -1,
              'order' => 'ASC'
            );
            $query_simple = new WP_Query($args_simple);
            if ( $query_simple->have_posts() ) : while ( $query_simple->have_posts() ) : $query_simple->the_post(); 
          ?>
            <div class="col-xs-6">
              <div class="list-title">
                <span class="glyphicon glyphicon-triangle-right"></span><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </div><!-- list-title -->
            </div>  <!-- col-xs-6 -->
            <?php
            endwhile; endif;  
            ?>
          </div><!-- row -->
        </div><!-- item-group -->
      </div>  <!-- item-block -->

      <div class="item-block">
        <div class="title">
          <h3>插件制作教程</h3>
        </div>
        <div class="item-group">
          <div class="row">
          <?php 
            $args_simple = array(
              'post_type' => 'create',
              'posts_per_page' => -1,
              'order' => 'ASC'
            );
            $query_simple = new WP_Query($args_simple);
            if ( $query_simple->have_posts() ) : while ( $query_simple->have_posts() ) : $query_simple->the_post(); 
          ?>
            <div class="col-xs-6">
              <div class="list-title">
                <span class="glyphicon glyphicon-triangle-right"></span><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </div><!-- list-title -->
            </div>  <!-- col-xs-6 -->
            <?php
            endwhile; endif;  
            ?>
          </div><!-- row -->
        </div><!-- item-group -->
      </div>  <!-- item-block -->

      <div class="item-block">
        <div class="title">
          <h3>高级技巧教程</h3>
        </div>
        <div class="item-group">
          <div class="row">
          <?php 
            $args_simple = array(
              'post_type' => 'advanced',
              'posts_per_page' => -1,
              'order' => 'ASC'
            );
            $query_simple = new WP_Query($args_simple);
            if ( $query_simple->have_posts() ) : while ( $query_simple->have_posts() ) : $query_simple->the_post(); 
          ?>
            <div class="col-xs-6">
              <div class="list-title">
                <span class="glyphicon glyphicon-triangle-right"></span><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </div><!-- list-title -->
            </div>  <!-- col-xs-6 -->
            <?php
            endwhile; endif;  
            ?>
          </div><!-- row -->
        </div><!-- item-group -->
      </div>  <!-- item-block -->

    </div><!-- all-list-area -->
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- container -->

<?php get_footer(); ?>
