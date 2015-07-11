<?php 
if (get_option('show_block_3')=='checked') {
?>
<div class="container icon-text-block-area">
  <div class="icon-text-area row no-gutters">
    <?php
    for ($i=0; $i <6 ; $i++) {
      $data = array(); 
      $data=array(
        'title'=>get_option("block_3_title_{$i}"),
        'content'=>get_option("block_3_content_{$i}"),
        'icon'=>get_option("block_3_image_{$i}",'glyphicon glyphicon-ice-lolly-tasted'),
        'link'=>get_option("block_3_url_{$i}")
      );
      if(get_option("block_3_title_{$i}")){
        include(locate_template('module/icon-text.php'));
      }

     } 
    
    ?>
  </div>
</div>
<?php 
}
?>
