<?php 
if (get_option('show_text_block')=='checked') {
  $text_block = get_option('text_block');
?>
<div class="text-block-area container">
  <div class="row">
    <?php 
      for ($i=0; $i <9 ; $i++) {
      $data = array(); 
      $data=array(
        'title'=>get_option("text_block_title_{$i}"),
        'content'=>get_option("text_block_content_{$i}")
      );
    ?>
    <div class="col-sm-4">
      <?php 
        if (get_option("text_block_title_{$i}")) {
          include(locate_template('module/text-block.php'));
        }
      ?>
    </div>
    <?php 
      }
    ?> 

  </div>
</div>
<?php 
}
?>