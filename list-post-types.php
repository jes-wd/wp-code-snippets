<?php 
/* Template Name: List post types */

$args = array(
   'public'   => true,
   '_builtin' => false
);
  
$output = 'names'; // 'names' or 'objects' (default: 'names')
$operator = 'and'; // 'and' or 'or' (default: 'and')
  
$post_types = get_post_types( $args, $output, $operator );
  
if ( $post_types ) { // If there are any custom public post types.
  
    echo '<ul>';
  
    foreach ( $post_types  as $post_type ) {
        echo '<li>' . $post_type . '</li>';
    }
  
    echo '<ul>';
  
}