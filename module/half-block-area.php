<div class="container-fluid ">
  <div class="row half-block-area">
  <?php
    for ($i=1; $i <3 ; $i++) {
      $data = array(); 
      $block_title = 'block_2_'.$i.'_title';
      $block_content = 'block_2_'.$i.'_content';
      $block_link = 'block_2_'.$i.'_link';

      $data=array(
        'title'=>ot_get_option($block_title),
        'content'=>ot_get_option($block_content),
        'link'=>ot_get_option($block_link)
      );

      include(locate_template('module/half-block.php'));

     } 
    
    ?>
    
  </div>
</div>