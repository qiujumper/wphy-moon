<?php 
/**
 * Template name: wordpress tutorial
 */
get_header(); 
?>
<header class="page-header">
  <h1 class="page-title">Wordpress视频教程大全</h1>
  <div class="taxonomy-description">
    包含Wordpress的新手入门教程，插件使用教程，模板制作教程，商城创建教程  
  </div>
</header><!-- .page-header --> 
<div class="container">
<?php
  get_sidebar();
?>

  <div id="primary" class="content-area col-sm-9 all-tutorial">
    <main id="main" class="site-main" role="main">
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
    </main>
  </div>  <!-- col-sm-9 -->
</div> <!-- details-page -->
<?php get_footer(); ?>