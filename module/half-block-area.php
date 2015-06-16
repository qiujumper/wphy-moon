<?php 
if (get_option('show_block_2')=='checked') {
?>
<div class="container-fluid ">
  <div class="row half-block-area">
  <?php
    for ($i=0; $i <2 ; $i++) {
      $data = array(); 
      $data=array(
        'title'=>get_option("block_2_title_{$i}"),
        'content'=>get_option("block_2_content_{$i}"),
        'link'=>get_option("block_2_url_{$i}")
      );
      include(locate_template('module/half-block.php'));
     }     
    ?>    
  </div>
</div>
<?php 
}
?>