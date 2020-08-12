<?php
/**
 * About Demo import configuration
 * @package Postmagthemes
 * @subpackage creative_business_blog
 */

$importconfig = array(
	'menu_name' => esc_html__( 'About Demo import', 'creative-business-blog' ),
	'page_name' => esc_html__( 'About Demo import', 'creative-business-blog' ),
	// Tabs.
	'tabs' => array(
		
		'recommended_actions' => esc_html__( 'Recommended Actions', 'creative-business-blog' ),
		'support'             => esc_html__( 'Support', 'creative-business-blog' ),
		
	),

	// Recommended actions.
	'recommended_actions' => array(
		'content' => array(

			'one-click-demo-ma' => array(
				'title'       => esc_html__( 'One Click Demo Import', 'creative-business-blog' ),
				'description' => esc_html__( 'Get the plugin One Click Demo Import. After activation go to Appearance >> Import Demo Data and import it. It will import 9 media files, 9 posts and 4 categories.', 'creative-business-blog' ),
				'check'       => class_exists( 'OCDI_Plugin' ),
				'plugin_slug' => 'one-click-demo-import',
				'id'          => 'one-click-demo-import',
				
			),
			
		),
		
	),

	// Support.
	'support_content' => array(
		'first' => array(
			'title'        => esc_html__( 'Contact Support', 'creative-business-blog' ),
			'icon'         => 'dashicons dashicons-sos',
			'text'         => esc_html__( 'Contact support@Postmagthemes.com', 'creative-business-blog' ),
			'button_label' => esc_html__( 'Contact Support', 'creative-business-blog' ),
			'button_link'  => esc_url( '#' ),
			'is_button'    => true,
			'is_new_tab'   => true,
		),
	),
);
Creative_Business_Blog_About::init( apply_filters( 'Creative_Business_Blog_About_Filter', $importconfig ) );