<?php 

  add_theme_support( 'post-thumbnails' );
  
  function remove_default_image_sizes( $sizes) {   
    unset( $sizes['1536x1536']);
    unset( $sizes['2048x2048']);
    return $sizes;
  }
  add_filter('intermediate_image_sizes_advanced', 'remove_default_image_sizes');