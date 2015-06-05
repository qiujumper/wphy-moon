<div class="icon-text-area row no-gutters">
  <?php
  for ($i=1; $i <4 ; $i++) {
    $data = array(); 
    $block_title = 'block_3_'.$i.'_title';
    $block_content = 'block_3_'.$i.'_content';
    $block_icon = 'block_3_'.$i.'_icon';
    $block_link = 'block_3_'.$i.'_link';

    $data=array(
      'title'=>ot_get_option($block_title),
      'content'=>ot_get_option($block_content),
      'icon'=>ot_get_option($block_icon),
      'link'=>ot_get_option($block_link)
    );
    
    include(locate_template('module/icon-text.php'));

   } 
  
  ?>
</div>