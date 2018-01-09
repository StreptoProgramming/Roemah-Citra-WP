<?php

function exclude_category( $query ) {
$idObj = get_category_by_slug('testimoni'); 
$id = $idObj->term_id;
if ( $query->is_home() && $query->is_main_query() ) {
$query->set( 'cat', '-'.$id );
}
}
add_action( 'pre_get_posts', 'exclude_category' );
add_filter('jpeg_quality', function($arg){return 100;});
function getim($d) {
  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  if ( has_post_thumbnail() ) {
	  $thumb_id = get_post_thumbnail_id();
$thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);
	  $first_img =$thumb_url[0];
  }
	  else {
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $d, $matches);
  $first_img = $matches [1] [0];

  if(empty($first_img)){ //Defines a default image
    $first_img = esc_url( get_template_directory_uri() )."/Material/Images/default.jpg";
  }
	  }
  return $first_img;
}

add_filter('pre_get_posts', 'posts_in_category');

function posts_in_category($query){
    if ($query->is_category) {
        if (is_category('testimoni')) {
            $query->set('posts_per_archive_page', 12);
        }
    }

}
function wpb_set_post_views($postID) {
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}

/*CSS CUSTOM*/

/*custom*/
if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'Name of Widgetized Area',
    'before_widget' => '<div class = "widgetizedArea">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  )
);

?>