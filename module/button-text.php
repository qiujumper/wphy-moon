<?php 
if (ot_get_option('show_button_block')=='on') {
?>
<div class="button-text">
  <span class="content"><?php echo ot_get_option('button_block_content'); ?> </span><a target="_blank" href="<?php echo ot_get_option('button_block_link'); ?>"><?php echo ot_get_option('button_block_title'); ?></a>
</div>
<?php 
}
?>