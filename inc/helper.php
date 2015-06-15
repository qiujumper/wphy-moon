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
 return $text.'...';
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
 * $text_id : the id of the result input field;
 * $image_id : the id of image uplad button field
 */
 

function print_image_field($text_id,$image_id,$option_slug){

// jQuery
wp_enqueue_script('jquery');
// This will enqueue the Media Uploader script
wp_enqueue_media();
?>
    <div>
    <input type="text" name="image_url" id="<?php echo $text_id; ?>" value="<?php echo esc_attr( get_option($option_slug) ); ?>" class="regular-text">
    <input type="button" name="<?php echo $image_id; ?>" id="<?php echo $image_id; ?>" class="btn btn-info" value="选择图片">
    <br/>
    <img src="#" alt="" class="<?php echo $text_id; ?>" style="width:300px; display: none;" >
</div>
<script type="text/javascript">
jQuery(document).ready(function($){
    $('#<?php echo $image_id; ?>').click(function(e) {
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
            $('#<?php echo $text_id; ?>').val(image_url);
            $('.<?php echo $text_id; ?>').attr('src',image_url).show();
        });
    });
});
</script>

<?php
}




















