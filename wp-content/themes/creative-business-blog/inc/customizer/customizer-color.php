<?php
/**
 * Creative business blog Theme Customizer Color
 *
 * @package creative_business_blog
 *
 */


/**
 *  Customizer for color display
 */
function creative_business_blog_customize_color( $wp_customize ) {

	/////						Background color			//////

	$wp_customize->add_section( 'creative_business_blog_background_color',
		array(
			'title'      => __( 'Background Color', 'creative-business-blog' ),
			'priority'   => 50,
		) );

   
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'background_color', array(
		'label'     => __( 'Main background color', 'creative-business-blog' ),
		'section'   => 'creative_business_blog_background_color',
		'settings'  => 'background_color',
		'type'		=> 'color',
		) 
	) );

		////  					Text Color   					////
	
    $wp_customize->add_setting( 'creative_business_blog_theme_color', array(
		'default'   => __('#e4b31d', 'creative-business-blog'),
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'creative_business_blog_themes_color', array(
		'label'     => __( 'Theme color', 'creative-business-blog' ),
		'section'   => 'colors',
		'settings'  => 'creative_business_blog_theme_color',
		'type'		=> 'color',
		) 
	) );
	
}
add_action( 'customize_register', 'creative_business_blog_customize_color' );
