<?php 
if (get_option('show_full_width_button')=='checked') {
?>
<div class="button-text">
  <span class="content"><?php echo get_option('full_width_button_content'); ?> </span><a target="_blank" href="<?php echo get_option('full_width_button_link'); ?>"><?php echo get_option('full_width_button_title'); ?></a>
</div>
<?php 
}
?>