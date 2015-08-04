<?php 
if (get_option('show_intro_block')=='checked') {
  $color_arr=array(
    '22, 160, 133',
    '192, 57, 43',
    '34, 167, 240',
    '127, 140, 141',
    '41, 128, 185',
    '142, 68, 173',
    '44, 62, 80',
    '243, 156, 18',
    '102, 51, 153',
    '52, 73, 94'
  );

  $intro_bg = get_option('intro_bg')?get_option('intro_bg'):get_stylesheet_directory_uri().'/image/home.png';
?>
<div class="container-fluid intro-block">
  <div class="bg-image bg-full-width" style="background-image: url(<?php echo $intro_bg;?>);">
    <div class="limiter option-blocks">

    <?php 
      for ($i=0; $i <10 ; $i++) {
        $data = array(); 
        $data=array(
          'title'=>get_option("intro_block_title_{$i}"),
          'icon'=>get_option("intro_block_icon_{$i}")?get_option("intro_block_icon_{$i}"):'<i class="fa fa-heart"></i>',
          'url'=>get_option("intro_block_url_{$i}"),
          'color'=>$color_arr[$i],
        );
        if (get_option("intro_block_title_{$i}")) {
          include(locate_template('module/intro-option.php'));
        }
      }
    ?> 
        <div class="clearfix"></div>
    </div><!-- option-blocks -->
  </div>
</div>
<?php 
}
?>