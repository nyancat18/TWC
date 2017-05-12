<?php
/* enqueue styles and scripts */
function jpen_enqueue_assets() {
  
  /* theme's primary style.css file */
  wp_enqueue_style( 'main-css' , get_stylesheet_uri() );
  /* template's primary css file */
  wp_enqueue_style( 'startup-boostrap-css' , get_template_directory_uri() . './css/blog-post.css' );
  /* boostrap resources from theme files */
  wp_enqueue_style( 'site-css' , get_template_directory_uri() . '/css/site.css' );
  /* boostrap resources from theme files */
  wp_enqueue_style( 'reset' , get_template_directory_uri() . '/css/reset.css' );
  wp_enqueue_script( 'sit' , get_template_directory_uri() . '/js/sit.js' , array( 'jquery' ) , false , true );
  /*conditional resources for IE 9 */
  wp_enqueue_script( 'toad', 'js/modernizr.js' , array(), '3.7.0' );
}
add_action( 'wp_enqueue_scripts' , 'jpen_enqueue_assets' );
?>
