<?php 
if (get_option('show_partner')=='checked') {
  $item_number = count(get_option('client_image'));
  $client_images = get_option('client_image');
  $client_urls = get_option('client_url');
  $client_titles = get_option('client_title');
?>
<div class="client-area">
  <div class="limiter">
  <div class="block-title">
    合作伙伴
  </div>
  <?php 
    for ($i=0; $i < $item_number ; $i++ ) { 
  ?>
    <div class="col-sm-2 item">
      <a href="<?php echo $client_urls[$i] ?>" target="_blank" >
        <img src="<?php echo $client_images[$i] ?>" alt="<?php echo $client_titles[$i]; ?>">
      </a> 
    </div>
  <?php
    }
  ?>    
  </div>
  <div class="clearfix"></div>
</div>
<?php
}
?>