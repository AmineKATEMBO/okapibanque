<?php
/**
  * One Click Demo Import v2.5.0
 * Available under License: GPLv3 or later
 * Contributors   capuderg, cyman, Prelc
 *
 * @link http://proteusthemes.github.io/one-click-demo-import/
 * @package Postmagthemes
 * @subpackage creative_business_blog
 */
// ************** theme setting function for one time DEMO ****************//
function creative_business_blog_ocdi_import_files() {
	return array(
	  	array(
		'import_file_name'             => __('Demo Import','creative-business-blog'),
		'categories'                   => array( __('Category A','creative-business-blog' )),
		'import_file_url' 	           => esc_url( 'https://www.postmagthemes.com/download/creativebusinessblog/ocdi/creativebusinessblog.wordpress.2018-10-02.xml'),
		'import_widget_file_url'	     => esc_url( 'https://www.postmagthemes.com/download/creativebusinessblog/ocdi/postmagthemes.com-democreativebusinessblog-widgets.wie'),
		'import_customizer_file_url'	 => esc_url( 'https://www.postmagthemes.com/download/creativebusinessblog/ocdi/creative-business-blog-export.dat'),
		'import_redux'	           		 => array( ),
		'import_notice'                => __( 'Welcom to download DEMO. This will download 9 new posts, 4 categories and 9 images. Multiple download will not download same post multiple times. It only creates menu and widget multiple time in each download. Hence you are free to do many time download if any gets failed. You will get message ----Thats it, all done!.--- after sucessfull download.  ', 'creative-business-blog' ),
		'preview_url'                  => esc_url( 'https://postmagthemes.com/democreativebusinessblog/' ),
		),
		
	);
  }
  add_filter( 'pt-ocdi/import_files', 'creative_business_blog_ocdi_import_files' );

  // ************** default value after import function ****************//
  function creative_business_blog_ocdi_after_import_setup() {
	  // Assign menus to their locations. Header is menu name created from GU
	  $header_menu = get_term_by( 'name', 'Primary', 'nav_menu' );
	//   $footer_menu = get_term_by( 'name', 'Footer', 'nav_menu' );
	  set_theme_mod( 'nav_menu_locations', array(
			  'menu-1' => $header_menu->term_id,
			//   'primary_footer' => $footer_menu->term_id,
		  )
	  );
	  // Assign front page and posts page (blog page).
	  $front_page_id = get_page_by_title( 'Home' );
	  $blog_page_id  = get_page_by_title( 'Blog' );
	  update_option( 'show_on_front', 'posts' );
	  update_option( 'page_on_front', $front_page_id->ID );
	  update_option( 'page_for_posts', $blog_page_id->ID );
  }
  add_action( 'pt-ocdi/after_import', 'creative_business_blog_ocdi_after_import_setup' );