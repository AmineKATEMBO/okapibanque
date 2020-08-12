<?php
/**
 * Creative business blog Theme Customizer Other
 *
 * @package creative_business_blog
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function creative_business_blog_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'creative_business_blog_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'creative_business_blog_customize_partial_blogdescription',
		) );
	}
	//Upgrade to Pro
	// Register custom section types.
	$wp_customize->register_section_type( 'Creative_Business_Blog_Customize_Section_Upsell' );

	// Register sections.
	$wp_customize->add_section(
		new Creative_Business_Blog_Customize_Section_Upsell(
			$wp_customize,
			'theme_upsell',
			array(
				'title'    => esc_html__( 'Go Pro', 'creative-business-blog' ),
				'pro_text' => esc_html__( 'Buy Pro Creative Busines', 'creative-business-blog' ),
				'pro_url'  => esc_url('https://www.postmagthemes.com/downloads/pro-creative-business-blog/'),
				'priority' => 1,
			)
		)
	);
	$wp_customize->add_section(
		new Creative_Business_Blog_Customize_Section_Upsell(
			$wp_customize,
			'theme_upsell2',
			array(
				'title'    => esc_html__( 'View', 'creative-business-blog' ),
				'pro_text' => esc_html__( 'All documents', 'creative-business-blog' ),
				'pro_url'  => esc_url('https://www.postmagthemes.com/docs/documentation-pro-creative-business-blog/'),
				'priority' => 2,
				'panel'          => 'creative_business_blog_document_panel',
			)
		)
	);

	$wp_customize->add_section(
		new Creative_Business_Blog_Customize_Section_Upsell(
			$wp_customize,
			'theme_upsell6',
			array(
				'title'    => esc_html__( 'Video', 'creative-business-blog' ),
				'pro_text' => esc_html__( 'How to buy Pro theme', 'creative-business-blog' ),
				'pro_url'  => esc_url('https://www.youtube.com/watch?v=NUHM_qpu37Q'),
				'priority' => 6,
				'panel'          => 'creative_business_blog_document_panel',
			)
		)
	);
}
add_action( 'customize_register', 'creative_business_blog_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function creative_business_blog_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function creative_business_blog_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function creative_business_blog_customize_preview_js() {
	wp_enqueue_script( 'creative-business-blog-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'creative_business_blog_customize_preview_js' );

function creative_business_blog_customize_backend_scripts() {
	wp_enqueue_script( 'creative_business_blog-customize-controls', get_template_directory_uri() . '/inc/upgrade-to-pro/pro.js', array( 'customize-controls' ) );
	wp_enqueue_style( 'creative_business_blog-customize-controls', get_template_directory_uri() . '/inc/upgrade-to-pro/pro.css' );
}
add_action( 'customize_controls_enqueue_scripts', 'creative_business_blog_customize_backend_scripts', 10 );

/**
 *  Customizer for post date, comments, tag , etc display
 */
function creative_business_blog_customize_other( $wp_customize ) {
	/////DEAFULT SITE IDENTITY ADDED CONTROL STARTS//////
		// first control
		$wp_customize->add_setting( 'title_date_display', 
			array(
				'default'     => 1,
				'sanitize_callback' => 'creative_business_blog_sanitize_radio'
			) 
		);
				
		$wp_customize->add_control( 'title_date_display', 
			array(
				'label' 	=> __( 'Title Date Display', 'creative-business-blog' ),
				'section'	=> 'title_tagline',
				'settings' 	=> 'title_date_display',
				'type' 		=> 'radio',
				'choices' 	=> 
					array(
						'1' => __( 'Show Date', 'creative-business-blog' ),
						'2'	=> __( 'Hide Date', 'creative-business-blog' ),
					),
			) 
		);
		// THEME OPTION panel
		$wp_customize->add_panel( 'creative_business_blog_theme_option_panel', array(
			'priority'	=> 21,
			'title'		=> __( 'Theme options', 'creative-business-blog' )
		) );

		$wp_customize->add_panel(
			'creative_business_blog_document_panel',
			array(
				'priority'       => 2,
				'capability'     => 'edit_theme_options',
				'theme_supports' => '',
				'title'          => __( 'Documents', 'creative-business-blog' ),
			)
		);

		// 'feature_slider section'
		$wp_customize->add_section( 'creative_business_blog_feature_slider_section',
		array(
			'title'      => __( 'Feature slider section', 'creative-business-blog' ),
			'priority'   => 20,
			'panel'		=> 'creative_business_blog_theme_option_panel'
		) );

		$wp_customize->add_setting( 'creative_business_blog_feature_slider_enable', 
		array(
			
			'default'     => 1,
			'sanitize_callback' => 'creative_business_blog_sanitize_checkbox'
		) );

		$wp_customize->add_control( 'creative_business_blog_feature_slider_enable', 
			array(
				'label' 	=> __( 'Show Feature slider section', 'creative-business-blog' ),
				'section'	=> 'creative_business_blog_feature_slider_section',
				'settings' 	=> 'creative_business_blog_feature_slider_enable',
				'type'      => 'checkbox',

			) 
		);

		$wp_customize->add_setting( 'creative_business_blog_feature_slider_query', 
		array(
			
			'default'     => 'comment_count',
			'sanitize_callback' => 'creative_business_blog_sanitize_select'
		) );

		$wp_customize->add_control( 'creative_business_blog_feature_slider_query', 
			array(
				'label' 	=> __( 'Display the post order by', 'creative-business-blog' ),
				'section'	=> 'creative_business_blog_feature_slider_section',
				'settings' 	=> 'creative_business_blog_feature_slider_query',
				'type'      => 'select',
				'choices'	=> array (
					'date' => __('most recent post', 'creative-business-blog' ),
					'comment_count' => __('most commented post', 'creative-business-blog' ),

				),
			) 
		);

		require_once( trailingslashit( get_template_directory() ) . 'inc/dropdown-category.php' );
		$wp_customize->add_setting( 'creative_business_blog_feature_slider_categorylist', 
		array(
			'default'     =>  0,
			'sanitize_callback' => 'sanitize_text_field',
		) );

		$wp_customize->add_control( new Creative_Business_Blog_My_Dropdown_Category_Control( $wp_customize, 'creative_business_blog_feature_slider_categorylist', array(
			
				'label' 	=> __( 'Select the post among', 'creative-business-blog' ),
				'section'	=> 'creative_business_blog_feature_slider_section',
				
		) 	)	
		);
		$wp_customize->add_setting( 'creative_business_blog_feature_slider_noofpost', 
		array(
			'default'     => 2,
			'sanitize_callback' => 'creative_business_blog_sanitize_positive_integer'
		) );

		$wp_customize->add_control( 'creative_business_blog_feature_slider_noofpost', 
			array(
				'label' 	=> __( 'Number of posts to show in slider' , 'creative-business-blog' ),
				'section'	=> 'creative_business_blog_feature_slider_section',
				'settings' 	=> 'creative_business_blog_feature_slider_noofpost',
				'type' 		=> 'number',
			) 
		);

		$post_taxonomy_arrays = array(__('Comment & Tag','creative-business-blog'),__('Author','creative-business-blog'),__('Date','creative-business-blog'));
		foreach ($post_taxonomy_arrays as  $post_taxonomy) {
			$wp_customize->add_setting( 'creative_business_blog_feature_slider_post_taxonomy_'.$post_taxonomy, array(
			'capability'            => 'edit_theme_options',
			'default'               => 1,
			'sanitize_callback' => 'creative_business_blog_sanitize_checkbox'
			) );

			$wp_customize->add_control( 'creative_business_blog_feature_slider_post_taxonomy_'.$post_taxonomy, array(
				/* translators: %s: Label */ 
				'label'                 =>  sprintf( __( '%s display', 'creative-business-blog' ), $post_taxonomy ),
				'section'               => 'creative_business_blog_feature_slider_section',
				'type'                  => 'checkbox',
				'settings' => 'creative_business_blog_feature_slider_post_taxonomy_'.$post_taxonomy,

			) );
		}

		// 'Blog post section'
		
		$wp_customize->add_section( 'creative_business_blog_blog_post_section',
		array(
			'title'      => __( 'Blog post section', 'creative-business-blog' ),
			'priority'   => 20,
			'panel'		=> 'creative_business_blog_theme_option_panel'
		) );
		$wp_customize->add_setting( 'creative_business_blog_blog_post_enable', 
		array(
			
			'default'     => 1,
			'sanitize_callback' => 'creative_business_blog_sanitize_checkbox'
		) );

		$wp_customize->add_control( 'creative_business_blog_blog_post_enable', 
			array(
				'label' 	=> __( 'Show blog post', 'creative-business-blog' ),
				'section'	=> 'creative_business_blog_blog_post_section',
				'settings' 	=> 'creative_business_blog_blog_post_enable',
				'type'      => 'checkbox',

			) 
			);

		$wp_customize->add_setting( 'creative_business_blog_most_recent', 
		array(
			'default'     => __('Most Recent','creative-business-blog'),
			'sanitize_callback' => 'sanitize_text_field'
		) );

		$wp_customize->add_control( 'creative_business_blog_most_recent', 
			array(
				'label' 	=> __( 'Title', 'creative-business-blog' ),
				'section'	=> 'creative_business_blog_blog_post_section',
				'settings' 	=> 'creative_business_blog_most_recent',
				'type' 		=> 'text',
			) 
		);

		$wp_customize->add_setting( 'creative_business_blog_blog_post_listgrid', 
		array(
			'default'     => 2,
			'sanitize_callback' => 'creative_business_blog_sanitize_select'
		) );

		$wp_customize->add_control( 'creative_business_blog_blog_post_listgrid', 
			array(
				'label' 	=> __( 'List / Grid selection', 'creative-business-blog' ),
				'section'	=> 'creative_business_blog_blog_post_section',
				'settings' 	=> 'creative_business_blog_blog_post_listgrid',
				'type'		=> 'select',
				'description'	=> __('These settings also affect archive and search pages','creative-business-blog'),
				'choices' 	=> 
					array(
						'1' => __( 'List', 'creative-business-blog' ),
						'2'	=> __( 'Grid', 'creative-business-blog' ),
					),
			) 
		);

		$post_taxonomy_arrays = array(__('Comment & Tag','creative-business-blog'),__('Author','creative-business-blog'),__('Date','creative-business-blog'),__('Category','creative-business-blog'));
		foreach ($post_taxonomy_arrays as  $post_taxonomy) {
			$wp_customize->add_setting( 'creative_business_blog_blog_post_post_taxonomy_'.$post_taxonomy, array(
			'capability'            => 'edit_theme_options',
			'default'               => 1,
			'sanitize_callback' => 'creative_business_blog_sanitize_checkbox'
			) );

			$wp_customize->add_control( 'creative_business_blog_blog_post_post_taxonomy_'.$post_taxonomy, array(
				/* translators: %s: Label */ 
				'label'                 =>  sprintf( __( '%s display', 'creative-business-blog' ), $post_taxonomy ),
				'section'               => 'creative_business_blog_blog_post_section',
				'type'                  => 'checkbox',
				'settings' => 'creative_business_blog_blog_post_post_taxonomy_'.$post_taxonomy,
			) );
		}
		
		$wp_customize->add_setting( 'creative_business_blog_image_changeon_blogpost', 
		array(
			'default'     => 1.6,
			'sanitize_callback' => 'creative_business_blog_sanitize_positive_integer'
		) );

		$wp_customize->add_control( 'creative_business_blog_image_changeon_blogpost', 
			array(
				'label' 	=> __( 'Box display size change', 'creative-business-blog' ),
				'section'	=> 'creative_business_blog_blog_post_section',
				'settings' 	=> 'creative_business_blog_image_changeon_blogpost',
				'description' => __('Recommended value 1.6, 0.1 means no space', 'creative-business-blog'),
				'type'		=> 'number',
				'input_attrs' => array(
					'min'		=> .1,
					'max' 	  	=> 10,
					'step'    	=> .1,
				),
			) 
		);

		// 'Social link' section
		$wp_customize->add_section( 'creative_business_blog_section_social_section',
		array(
			'title'      => __( 'Social link section', 'creative-business-blog' ),
			'priority'   => 20,
			'panel'		=> 'creative_business_blog_theme_option_panel'
		) );
		
		// Socail url
		$social_name_arrays = array(__('Facebook','creative-business-blog'),__('Twitter','creative-business-blog'),__('Youtube','creative-business-blog'),__('Googleplus','creative-business-blog'));
		foreach ($social_name_arrays as  $social_name) {
			$wp_customize->add_setting( 'creative_business_blog_social_url_'.$social_name, array(
			'capability'            => 'edit_theme_options',
			'default'               => '',
			'sanitize_callback' => 'creative_business_blog_sanitize_url'
			) );

			$wp_customize->add_control( 'creative_business_blog_social_url_'.$social_name, array(
				/* translators: %s: Label */ 
				'label'                 =>  sprintf( __( '%s Url', 'creative-business-blog' ), $social_name ),
				'section'               => 'creative_business_blog_section_social_section',
				'type'                  => 'url',
				'settings' => 'creative_business_blog_social_url_'.$social_name,
			) );
		}
		//Socail Url Enable or disable by checkboxs

		$wp_customize->add_setting( 'creative_business_blog_facebook_url_enable', array(
			'capability'            => 'edit_theme_options',
			'default'               => 0,
			'sanitize_callback'     => 'creative_business_blog_sanitize_checkbox'
		) );

		$wp_customize->add_control( 'creative_business_blog_facebook_url_enable', array(
			'label'                 =>  __( 'Enable facebook Icon', 'creative-business-blog' ),
			'section'               => 'creative_business_blog_section_social_section',
			'type'                  => 'checkbox',
			'settings'              => 'creative_business_blog_facebook_url_enable',
		) );
		$wp_customize->add_setting( 'creative_business_blog_twitter_url_enable', array(
			'capability'            => 'edit_theme_options',
			'default'               => 0,
			'sanitize_callback'     => 'creative_business_blog_sanitize_checkbox'
		) );

		$wp_customize->add_control( 'creative_business_blog_twitter_url_enable', array(
			'label'                 =>  __( 'Enable twitter Icon', 'creative-business-blog' ),
			'section'               => 'creative_business_blog_section_social_section',
			'type'                  => 'checkbox',
			'settings'              => 'creative_business_blog_twitter_url_enable',
		) );
		$wp_customize->add_setting( 'creative_business_blog_googlplus_url_enable', array(
			'capability'            => 'edit_theme_options',
			'default'               => 0,
			'sanitize_callback'     => 'creative_business_blog_sanitize_checkbox'
		) );

		$wp_customize->add_control( 'creative_business_blog_googlplus_url_enable', array(
			'label'                 =>  __( 'Enable google plus Icon', 'creative-business-blog' ),
			'section'               => 'creative_business_blog_section_social_section',
			'type'                  => 'checkbox',
			'settings'              => 'creative_business_blog_googlplus_url_enable',
		) );
		$wp_customize->add_setting( 'creative_business_blog_youtube_url_enable', array(
			'capability'            => 'edit_theme_options',
			'default'               => 0,
			'sanitize_callback'     => 'creative_business_blog_sanitize_checkbox'
		) );

		$wp_customize->add_control( 'creative_business_blog_youtube_url_enable', array(
			'label'                 =>  __( 'Enable youtube Icon', 'creative-business-blog' ),
			'section'               => 'creative_business_blog_section_social_section',
			'type'                  => 'checkbox',
			'settings'              => 'creative_business_blog_youtube_url_enable',
		) );
		
		
		// 'Feature display section'
		
		
		$wp_customize->add_section( 'creative_business_blog_feature_display_section',
		array(
			'title'      => __( 'Feature display section', 'creative-business-blog' ),
			'priority'   => 20,
			'panel'		=> 'creative_business_blog_theme_option_panel'
		) );
		
		$wp_customize->add_setting( 'creative_business_blog_feature_display_enable', 
		array(
			
			'default'     => 1,
			'sanitize_callback' => 'creative_business_blog_sanitize_checkbox'
		) );

		$wp_customize->add_control( 'creative_business_blog_feature_display_enable', 
			array(
				'label' 	=> __( 'Show Feature display section', 'creative-business-blog' ),
				'section'	=> 'creative_business_blog_feature_display_section',
				'settings' 	=> 'creative_business_blog_feature_display_enable',
				'type'      => 'checkbox',

			) 
		);
		$wp_customize->add_setting( 'creative_business_blog_feature_display_query', 
		array(
			
			'default'     => 'comment_count',
			'sanitize_callback' => 'creative_business_blog_sanitize_select'
		) );

		$wp_customize->add_control( 'creative_business_blog_feature_display_query', 
			array(
				'label' 	=> __( 'Display the post order by', 'creative-business-blog' ),
				'section'	=> 'creative_business_blog_feature_display_section',
				'settings' 	=> 'creative_business_blog_feature_display_query',
				'type'      => 'select',
				'choices'	=> array (
					'date' => __('most recent post', 'creative-business-blog' ),
					'comment_count' => __('most commented post', 'creative-business-blog' ),

				),

			) 
		);
		require_once( trailingslashit( get_template_directory() ) . 'inc/dropdown-category.php' );
		$wp_customize->add_setting( 'creative_business_blog_feature_display_categorylist', 
		array(
			'default'     =>  0,
			'sanitize_callback' => 'sanitize_text_field',
		) );

		$wp_customize->add_control( new Creative_Business_Blog_My_Dropdown_Category_Control( $wp_customize, 'creative_business_blog_feature_display_categorylist', array(
			
				'label' 	=> __( 'Select the post among', 'creative-business-blog' ),
				'section'	=> 'creative_business_blog_feature_display_section',
				'description'  => __('Filter recently update post among below selected','creative-business-blog'),
				
		) 	)	
		);

		$wp_customize->add_setting( 'creative_business_blog_feature_display', 
		array(
			'default'     => __('Most commented','creative-business-blog'),
			'sanitize_callback' => 'sanitize_text_field'
		) );

		$wp_customize->add_control( 'creative_business_blog_recent_update', 
			array(
				'label' 	=> __( 'Title', 'creative-business-blog' ),
				'section'	=> 'creative_business_blog_feature_display_section',
				'settings' 	=> 'creative_business_blog_feature_display',
				'type' 		=> 'text',
			) 
		);

		$wp_customize->add_setting( 'creative_business_blog_feature_display_noofpost', 
		array(
			'default'     => 4,
			'sanitize_callback' => 'creative_business_blog_sanitize_positive_integer'
		) );

		$wp_customize->add_control( 'creative_business_blog_feature_display_noofpost', 
			array(
				'label' 	=> __( 'Total Number of post to show', 'creative-business-blog' ),
				'section'	=> 'creative_business_blog_feature_display_section',
				'settings' 	=> 'creative_business_blog_feature_display_noofpost',
				'type' 		=> 'number',
			) 
		);


		$post_taxonomy_arrays = array(__('Comment & Tag','creative-business-blog'),__('Author','creative-business-blog'),__('Date','creative-business-blog'));
		foreach ($post_taxonomy_arrays as  $post_taxonomy) {
			$wp_customize->add_setting( 'creative_business_blog_feature_display_taxonomy_'.$post_taxonomy, array(
			'capability'            => 'edit_theme_options',
			'default'               => 1,
			'sanitize_callback' => 'creative_business_blog_sanitize_checkbox'
			) );

			$wp_customize->add_control( 'creative_business_blog_feature_display_taxonomy_'.$post_taxonomy, array(
				/* translators: %s: Label */ 
				'label'                 =>  sprintf( __( '%s display', 'creative-business-blog' ), $post_taxonomy ),
				'section'               => 'creative_business_blog_feature_display_section',
				'type'                  => 'checkbox',
				'settings' => 'creative_business_blog_feature_display_taxonomy_'.$post_taxonomy,
			) );
		}
		$wp_customize->add_setting( 'creative_business_blog_image_changeon_feature_display', 
		array(
			'default'     => 1.6,
			'sanitize_callback' => 'creative_business_blog_sanitize_positive_integer'
		) );

		$wp_customize->add_control( 'creative_business_blog_image_changeon_feature_display', 
			array(
				'label' 	=> __( 'Box display size change', 'creative-business-blog' ),
				'section'	=> 'creative_business_blog_feature_display_section',
				'settings' 	=> 'creative_business_blog_image_changeon_feature_display',
				'description' => __('Recommended value 1.6, 0.1 means no spaceing', 'creative-business-blog'),
				'type'		=> 'number',
				'input_attrs' => array(
					'min'		=> 0.1,
					'max' 	  	=> 10,
					'step'    	=> 0.1,
				),
			) 
		);

		// 'Section Footer section'
		$wp_customize->add_section( 'creative_business_blog_section_footer_section',
		array(
			'title'      => __( 'Footer section', 'creative-business-blog' ),
			'priority'   => 20,
			'panel'		=> 'creative_business_blog_theme_option_panel'
		) );

		$wp_customize->add_setting( 'creative_business_blog_most_used_categories_text',
		array(
			'capability'            => 'edit_theme_options',
			'default'               => __('Most Used Categories','creative-business-blog'),
			'sanitize_callback' => 'sanitize_text_field'
		) );

		$wp_customize->add_control( 'creative_business_blog_most_used_categories_text', 
			array(
				'label' 	=> __( 'Most used categories header text', 'creative-business-blog' ),
				'section'	=> 'creative_business_blog_section_footer_section',
				'settings' 	=> 'creative_business_blog_most_used_categories_text',
				'type'      => 'text',
			) 
		);

		$wp_customize->add_setting( 'creative_business_blog_most_used_categories_enable',
		array(
			'capability'            => 'edit_theme_options',
			'default'               => 1,
			'sanitize_callback' => 'creative_business_blog_sanitize_checkbox'
		) );

		$wp_customize->add_control( 'creative_business_blog_most_used_categories_enable', 
			array(
				'label' 	=> __( 'Enable 4 Most used categories', 'creative-business-blog' ),
				'section'	=> 'creative_business_blog_section_footer_section',
				'settings' 	=> 'creative_business_blog_most_used_categories_enable',
				'type'      => 'checkbox',
			) 
		);

		// 'Section Footer' section MOST COMMENTED POST
		$wp_customize->add_setting( 'creative_business_blog_most_commented_post_text',
		array(
			'capability'            => 'edit_theme_options',
			'default'               => __('Most Commented Post','creative-business-blog'),
			'sanitize_callback' => 'sanitize_text_field'
		) );

		$wp_customize->add_control( 'creative_business_blog_most_commented_post_text', 
			array(
				'label' 	=> __( 'Most commented post header text', 'creative-business-blog' ),
				'section'	=> 'creative_business_blog_section_footer_section',
				'settings' 	=> 'creative_business_blog_most_commented_post_text',
				'type'      => 'text',
			) 
		);

		$wp_customize->add_setting( 'creative_business_blog_most_commented_post_enable', 
		array(
			
			'default'     => 1,
			'sanitize_callback' => 'creative_business_blog_sanitize_checkbox'
		) );

		$wp_customize->add_control( 'creative_business_blog_most_commented_post_enable', 
			array(
				'label' 	=> __( 'Enable 4 Most commented post', 'creative-business-blog' ),
				'section'	=> 'creative_business_blog_section_footer_section',
				'settings' 	=> 'creative_business_blog_most_commented_post_enable',
				'type'      => 'checkbox',

			) 
		);

		// 'Section Footer' section About us
		$wp_customize->add_setting( 'creative_business_blog_about_text', 
		array(
			'default'     => __('about us','creative-business-blog'),
			'sanitize_callback' => 'sanitize_text_field'
		) );

		$wp_customize->add_control( 'creative_business_blog_about_text', 
			array(
				'label' 	=> __( 'About us header text', 'creative-business-blog' ),
				'section'	=> 'creative_business_blog_section_footer_section',
				'settings' 	=> 'creative_business_blog_about_text',
				'type' 		=> 'text',
		) );

		$wp_customize->add_setting( 'creative_business_blog_copyright_statement', 
		array(
			'default'     => __('copyright@','creative-business-blog' ),
			'sanitize_callback' => 'sanitize_textarea_field'
		) );

		$wp_customize->add_control( 'creative_business_blog_copyright_statement', 
			array(
				'label' 	=> __( 'Detail', 'creative-business-blog' ),
				'section'	=> 'creative_business_blog_section_footer_section',
				'settings' 	=> 'creative_business_blog_copyright_statement',
				'type' 		=> 'textarea',
			) 
		);

		$wp_customize->add_setting( 'creative_business_blog_copyright_enable', 
		array(
			
			'default'     => 1,
			'sanitize_callback' => 'creative_business_blog_sanitize_checkbox'
		) );

		$wp_customize->add_control( 'creative_business_blog_copyright_enable', 
			array(
				'label' 	=> __( 'Enable copyright', 'creative-business-blog' ),
				'section'	=> 'creative_business_blog_section_footer_section',
				'settings' 	=> 'creative_business_blog_copyright_enable',
				'type'      => 'checkbox',

			) 
		);
	

		//////////        Main Layout  setting   ////////
		$wp_customize->add_section( 'creative_business_blog_layout_setting',
		array(
			'title'      => __( 'Body Layout setting', 'creative-business-blog' ),
			'priority'   => 20,
			'panel'		=> 'creative_business_blog_theme_option_panel'
		) );
		$wp_customize->add_setting( 'creative_business_blog_frontpage_width',
		array(
			'default'               => 92,
			'sanitize_callback' => 'creative_business_blog_sanitize_positive_integer'
		) );

		$wp_customize->add_control( 'creative_business_blog_frontpage_width', 
			array(
				'label' 	=> __( 'Frontpage width', 'creative-business-blog' ),
				'section'	=> 'creative_business_blog_layout_setting',
				'settings' 	=> 'creative_business_blog_frontpage_width',
				'description' => __('Recommended Range ( 80 % to 100 %)', 'creative-business-blog'),
				'type'		=> 'number',
				'input_attrs' => array(
					'min'		=> 80,
					'max' 	  	=> 100,
					'step'    	=> 1,
				),
			) 
		);
		$wp_customize->add_setting( 'creative_business_blog_layout',
		array(
			'default'               => 1,
			'sanitize_callback' => 'creative_business_blog_sanitize_select'
		) );

		$wp_customize->add_control( 'creative_business_blog_layout', 
			array(
				'label' 	=> __( 'Layout', 'creative-business-blog' ),
				'section'	=> 'creative_business_blog_layout_setting',
				'settings' 	=> 'creative_business_blog_layout',
				'type'		=> 'select',
				'choices' 	=> 
					array(
						'1' => __( 'Left Sidebar / Primarybar', 'creative-business-blog' ),
						'2'	=> __( 'Primarybar / Right Sidebar', 'creative-business-blog' ),
						'3'	=> __( 'Primarybar ', 'creative-business-blog' ),
					),
			) 
		);

		///////// 'General setting section'  ////////////

		$wp_customize->add_section( 'creative_business_blog_general_setting_section',
		array(
			'title'      => __( 'General setting section', 'creative-business-blog' ),
			'priority'   => 20,
			'panel'		=> 'creative_business_blog_theme_option_panel'
		) );

		$wp_customize->add_setting( 'creative_business_blog_read_more_title', 
		array(
			
			'default'     => __('READ MORE','creative-business-blog'),
			'sanitize_callback' => 'sanitize_text_field'
		) );

		$wp_customize->add_control( 'creative_business_blog_read_more_title', 
			array(
				'label' 	=> __( 'Read more text', 'creative-business-blog' ),
				'section'	=> 'creative_business_blog_general_setting_section',
				'settings' 	=> 'creative_business_blog_read_more_title',
				'type'      => 'text',
		));
		
		
	}
add_action( 'customize_register', 'creative_business_blog_customize_other' );