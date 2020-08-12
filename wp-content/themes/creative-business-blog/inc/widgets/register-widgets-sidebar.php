<?php 
/**
 * Register widget area.
 
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar 
 * 
 * @package Postmagthemes
 * @subpackage creative_business_blog
 */
function creative_business_blog_widgets_init() {
	
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'creative-business-blog' ),
		'id'            => 'sidebar-one',
		'description'   => esc_html__( 'Recommended for in built widget.', 'creative-business-blog' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Sidebar one', 'creative-business-blog' ),
		'id'            => 'sidebar-five',
		'description'   => esc_html__( 'Add widgets here.', 'creative-business-blog' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Sidebar two', 'creative-business-blog' ),
		'id'            => 'sidebar-six',
		'description'   => esc_html__( 'Add widgets here.', 'creative-business-blog' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Sidebar three', 'creative-business-blog' ),
		'id'            => 'sidebar-seven',
		'description'   => esc_html__( 'Add widgets here.', 'creative-business-blog' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'creative_business_blog_widgets_init' );