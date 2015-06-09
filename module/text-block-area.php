<?php 
if (ot_get_option('show_text_block')=='on') {
  $text_block = ot_get_option('text_block');
?>
<div class="text-block-area container">
  <div class="row">
    <?php 
      $data =array(); 
      foreach ($text_block as $key => $value) {
        $data=$value;
    ?>
    <div class="col-sm-4">
      <?php include(locate_template('module/text-block.php')); ?>
    </div>
    <?php 
      }
    ?> 

  </div>
</div>
<?php 
}
?>