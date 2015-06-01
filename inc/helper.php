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

function custom_excerpt_length( $length ) {
    return 200;
}
add_filter( 'excerpt_length', 'custom_excerpt_length');


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