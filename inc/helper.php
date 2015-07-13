<?php 
/**
 * get image url by media id(not post id)
 * 
 * $media_id integer
 * $size string wordpress image size
 * $return string url of the image
 */
function get_image_by_id($media_id,$size = 'full', $all=false){
  $pic_array=wp_get_attachment_image_src($media_id,$size);
  if ($all) {
    return $pic_array;
  } else {
    return $pic_array[0];
  }
}

/**
 * get feature image by post id
 * 
 * $post_id integer the id of a post
 * $size string wordpress image size
 * return string
 */
function get_feature_image_by_id($post_id,$size = 'full', $all=false){
  $pic_array=wp_get_attachment_image_src(get_post_thumbnail_id($post_id),$size);
  if ($all) {
    return $pic_array;
  } else {
    return $pic_array[0];
  }

}

function chinese_excerpt($text, $lenth=100) {
$text = mb_substr($text,0, $lenth);
 return $text.' [...]';
}
add_filter('the_excerpt', ' chinese_excerpt ');


/**
 * get permalink by slug
 * $page_slug string the slug of a page
 * $post_type sting the type of page
 * 
 * $return string the url of the page
 */
function get_permalink_by_slug($page_slug,$post_type = 'page' ) {
    global $wpdb;
    $page_id = $wpdb->get_var( $wpdb->prepare( "SELECT ID FROM $wpdb->posts WHERE post_name = %s AND post_type= %s", $page_slug, $post_type ) );
    if ( $page_id ) {
      return get_permalink($page_id);
    }
    return null;
}

/**
 * create image field for theme option
 * $option_slug : the id of the result input field;
 * $button_id : the id of image uplad button field
 */
 

function print_image_field($option_slug,$button_id){

// jQuery
wp_enqueue_script('jquery');
// This will enqueue the Media Uploader script
wp_enqueue_media();
?>
    <div>
    <input type="text" name="<?php echo $option_slug; ?>" id="<?php echo $option_slug; ?>" value="<?php echo get_option($option_slug); ?>" class="regular-text">
    <input type="button" name="<?php echo $button_id; ?>" id="<?php echo $button_id; ?>" class="btn btn-info" value="选择图片">
    <br/>
    <img src="<?php echo esc_attr( get_option($option_slug) ); ?>" alt="" class="<?php echo $option_slug; ?>" style="width:300px;" >
</div>
<script type="text/javascript">
jQuery(document).ready(function($){
    $('#<?php echo $button_id; ?>').click(function(e) {
        e.preventDefault();
        var image = wp.media({ 
            title: 'Upload Image',
            // mutiple: true if you want to upload multiple files at once
            multiple: false
        }).open()
        .on('select', function(e){
            // This will return the selected image from the Media Uploader, the result is an object
            var uploaded_image = image.state().get('selection').first();
            // We convert uploaded_image to a JSON object to make accessing it easier
            
            var image_url = uploaded_image.toJSON().url;
            // Let's assign the url value to the input field
            $('#<?php echo $option_slug; ?>').val(image_url);
            $('.<?php echo $option_slug; ?>').attr('src',image_url);
        });
    });
});
</script>

<?php
}


/**
 * use to print the selection field for all type in wordpress
 */
function print_type_field($option_slug='case_type'){
  $post_types = get_post_types();
  $type_option = '';
  foreach ($post_types as $key => $value) {
    if(get_option($option_slug)==$value){
      $type_option.="<option value='{$value}' selected>{$value}</option>";
    }else{
      $type_option.="<option value='{$value}'>{$value}</option>";
    }
    
  }
  echo "<select class='{$option_slug}' name='{$option_slug}' id='{$option_slug}' value='".get_option($option_slug)."' >".$type_option."</select>";
}

















