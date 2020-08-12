<?php
/**
 * This contains customizer function for value 
 *
 * @package Postmagthemes
 * @subpackage creative_business_blog
 */

/**
 * Change the excerpt more string
 */

function creative_business_blog_custom_excerpt_length( $length ) {
	if ( is_admin() ) {
		return $length;
	}
	return 42;
}
add_filter( 'excerpt_length', 'creative_business_blog_custom_excerpt_length', 999 );

// add arrows to menu parent 
function creative_business_blog_add_menu_parent_class( $items ) {
 
    $parents = array();
    foreach ( $items as $item ) {
    if ( $item->menu_item_parent && $item->menu_item_parent > 0 ) {
    $parents[] = $item->menu_item_parent;
    }
    }
    
    foreach ( $items as $item ) {
    if ( in_array( $item->ID, $parents ) ) {
    $item->classes[] = 'has-children';
    }
    }
    
    return $items;
   }
add_filter( 'wp_nav_menu_objects', 'creative_business_blog_add_menu_parent_class' );