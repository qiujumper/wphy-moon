<?php 
if (get_option('show_full_width')=='checked') {
?>
<div class="container-fluid">
  <div class="row full-width-text-block">
    <div class="title">
      <h3><?php echo get_option('full_width_title'); ?></h3>
    </div>
    <div class="content">
      <p><?php echo get_option('full_width_content');  ?></p>
    </div>
  </div>
  <?php 
  }
  ?>
</div>