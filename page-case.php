<?php 
/**
 * Template Name: case study
 */
get_header(); 
?>
<header class="page-header">
  <h1 class="page-title">案例展示</h1>
  <div class="taxonomy-description">我们提供专业的wordpress定制服务，包括企业站已经商城<br/>所有网站均为响应式网站，支持多种主流手机平板设备</div>
</header><!-- .page-header -->
<div class="container">

  <div id="primary" class="content-area col-sm-12">
    <main id="main" class="site-main" role="main">

    <?php 
    $args_case = array(
      'post_type' => get_option('case_type'),
      'posts_per_page' =>20
    );

    $wp_query = new WP_Query($args_case);
    if ($wp_query->have_posts()) {
      while($wp_query->have_posts()){
        $wp_query->the_post();
        $data=array();
        $data=array(
          'title'=>get_the_title(),
          'excertp'=>get_the_excerpt(),
          'link'=>get_permalink(),
          'image'=>get_image_by_id(get_field('pic'))
        );
        ?>
      <div class="col-sm-4 item">
        <?php include(locate_template('module/case-block.php')); ?>
      </div>
      <?php 
      }  
      include(locate_template('module/pagination.php'));
      }else{
      ?>

      <?php get_template_part( 'template-parts/content', 'none' ); ?>

    <?php } ?>

    </main><!-- #main -->
  </div><!-- #primary -->
</div>
<?php get_footer(); ?>