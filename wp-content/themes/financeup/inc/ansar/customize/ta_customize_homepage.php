<?php
function financeup_homepage_setting( $wp_customize ) {

	/* Option list of all post */  
    $options_posts = array();
    $options_posts_obj = get_posts('posts_per_page=-1');
    $options_posts[''] = __( 'Choose Post', 'financeup' );
    foreach ( $options_posts_obj as $posts ) {
        $options_posts[$posts->ID] = $posts->post_title;
    }   

			$wp_customize->add_panel( 'homepage_setting', array(
                'priority'       => 450,
                'capability'     => 'edit_theme_options',
                'title'      => __('Homepage section settings', 'financeup'),
            ) );

            /* --------------------------------------
            =========================================
            Slider Section
            =========================================
            -----------------------------------------*/ 
            $wp_customize->add_section(
                'financeup_slider_section_settings', array(
                'title' => __('Slider Section','financeup'),
                'panel'  => 'homepage_setting',
            ) );
            
            
            //Enable slider
            $wp_customize->add_setting(
                'financeup_slider_enable', 
				array(
                'capability'     => 'edit_theme_options',
                'sanitize_callback' => 'financeup_homepage_sanitize_checkbox',
            ) );    
            $wp_customize->add_control( 
                'financeup_slider_enable', array(
                'label'   => __('Enable Slider Section','financeup'),
                'section' => 'financeup_slider_section_settings',
                'type' => 'checkbox',
            ) );
            
            //Select Post One
            $wp_customize->add_setting('slider_post_one',array(
                'capability'=>'edit_theme_options',
                'sanitize_callback'=>'sanitize_text_field',
            ));
            
            $wp_customize->add_control('slider_post_one',array(
                'label' => __('Select Post','financeup'),
                'section'=>'financeup_slider_section_settings',
                'type'=>'select',
                'choices'=>$options_posts,
            ));
            
            //Select Post Two
            $wp_customize->add_setting('slider_post_two',array(
                'capability'=>'edit_theme_options',
                'sanitize_callback'=>'sanitize_text_field',
            ));
            
            $wp_customize->add_control('slider_post_two',array(
                'label' => __('Select Post','financeup'),
                'section'=>'financeup_slider_section_settings',
                'type'=>'select',
                'choices'=>$options_posts,
            ));
            
            //Select Post Three
            $wp_customize->add_setting('slider_post_three',array(
                'capability'=>'edit_theme_options',
                'sanitize_callback'=>'sanitize_text_field',
            ));
            
            $wp_customize->add_control('slider_post_three',array(
                'label' => __('Select Post','financeup'),
                'section'=>'financeup_slider_section_settings',
                'type'=>'select',
                'choices'=>$options_posts,
            ));
			

		    /* --------------------------------------
		    =========================================
		    Serice Section
		    =========================================
		    -----------------------------------------*/  
		    // add section to manage Services
		    $wp_customize->add_section(
		        'financeup_service_section_settings', array(
		        'title' => __('Service Section','financeup'),
		        'description' => '',
		        'panel'  => 'homepage_setting',
		    ) );

            //Enable service
            $wp_customize->add_setting(
                'financeup_service_enable', array(
                'capability'     => 'edit_theme_options',
                'sanitize_callback' => 'financeup_homepage_sanitize_checkbox',
            ) );    
            $wp_customize->add_control( 
                'financeup_service_enable', array(
                'label'   => __('Enable Service Section','financeup'),
                'section' => 'financeup_service_section_settings',
                'type' => 'checkbox',
            ) );

            //Service Title setting
		   	$wp_customize->add_setting(
                'financeup_service_title', array(
                'capability'     => 'edit_theme_options',
                'sanitize_callback' => 'financeup_homepage_sanitize_text',
            ) );	
            $wp_customize->add_control( 
            	'financeup_service_title',array(
                'label'   => __('Title','financeup'),
                'section' => 'financeup_service_section_settings',
                'type' => 'text',
            ) );

            //Service SubTitle setting
            $wp_customize->add_setting(
                'financeup_service_subtitle', array(
                'capability'     => 'edit_theme_options',
                'sanitize_callback' => 'financeup_homepage_sanitize_text',
            ) );  
            $wp_customize->add_control( 'financeup_service_subtitle', array(
                'label'   => __('Description','financeup'),
                'section' => 'financeup_service_section_settings',
                'type' => 'textarea',
            ) );
            
			/* --------------------------------------
		    =========================================
		    Callout Section
		    =========================================
		    -----------------------------------------*/
		    // add section to manage Callout
		    $wp_customize->add_section(
		    	'financeup_callout_section_settings', array(
		        'title' => __('Callout Setting','financeup'),
		        'description' => '',
		        'panel'  => 'homepage_setting',
		    ) );

            //Enable contact
            $wp_customize->add_setting(
                'financeup_callout_enable', array(
                'capability'     => 'edit_theme_options',
                'sanitize_callback' => 'financeup_homepage_sanitize_checkbox',
            ) );    
            $wp_customize->add_control( 
                'financeup_callout_enable', array(
                'label'   => __('Enable Callout Section','financeup'),
                'section' => 'financeup_callout_section_settings',
                'type' => 'checkbox',
            ) );

		    //Callout Background image
		    $wp_customize->add_setting( 
		    	'financeup_callout_background', array(
		    	'sanitize_callback' => 'financeup_sanitize_image',
		    ) );

		    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 
		    	'financeup_callout_background', array(
		    	'label'    => __( 'Background Image', 'financeup' ),
		    	'section'  => 'financeup_callout_section_settings',
		    	'settings' => 'financeup_callout_background',) 
		    ) );
			
			
			$wp_customize->add_setting( 
		    	'financeup_overlay_callout_color_control', array(
		    	'sanitize_callback' => 'sanitize_text_field',
		    ) );

		    	
            $wp_customize->add_control(new Financeup_Customize_Alpha_Color_Control( $wp_customize,'financeup_overlay_callout_color_control', array(
               'label'      => __('Overlay Color', 'financeup' ),
                'palette' => true,
                'section' => 'financeup_callout_section_settings')
            ) );
			
			
			
			

		   // Callout Title Setting
		    $wp_customize->add_setting(
		    	'financeup_callout_title', array(
		        'capability'     => 'edit_theme_options',
		        'sanitize_callback' => 'financeup_homepage_sanitize_text',
		    ) );	
		    $wp_customize->add_control( 
		    	'financeup_callout_title', array(
		    	'label'   => __('Title','financeup'),
		    	'section' => 'financeup_callout_section_settings',
		    	'type' => 'text',
		    ) );	

			// Callout Description Setting	    
		    $wp_customize->add_setting(
		    	'financeup_callout_description', array(
		        'capability'     => 'edit_theme_options',
		        'sanitize_callback' => 'financeup_homepage_sanitize_text',
		    ) );	
		    $wp_customize->add_control( 
		    	'financeup_callout_description', array(
		    	'label'   => __('Description','financeup'),
		    	'section' => 'financeup_callout_section_settings',
		    	'type' => 'textarea',
		    ) );	

		    // Callout Button One Label Setting	 
		    $wp_customize->add_setting(
		    	'financeup_callout_button_one_label', array(
		        'capability'     => 'edit_theme_options',
		        'sanitize_callback' => 'sanitize_text_field',
		    ) );	
		    $wp_customize->add_control( 
		    	'financeup_callout_button_one_label', array(
		    	'label'   => __('Button Text','financeup'),
		    	'section' => 'financeup_callout_section_settings',
		    	'type' => 'text',
		    ) );	

		    //Callout Button One Link Setting	
		    $wp_customize->add_setting(
		    	'financeup_callout_button_one_link', array(
		        'capability'     => 'edit_theme_options',
		        'sanitize_callback' => 'esc_url_raw',
		    ) );	
		    $wp_customize->add_control( 
		    	'financeup_callout_button_one_link',array(
		    	'label'   => __('Button Link','financeup'),
		    	'section' => 'financeup_callout_section_settings',
		    	'type' => 'text',
		    ) );	

		    //Callout Button One Target Setting	
		    $wp_customize->add_setting(
		    	'financeup_callout_button_one_target', array(
		        'capability'     => 'edit_theme_options',
		        'sanitize_callback' => 'financeup_homepage_sanitize_checkbox',
		    ) );	
		    $wp_customize->add_control( 
		    	'financeup_callout_button_one_target',array(
		    	'label'   => __('Open link in a new tab','financeup'),
		    	'section' => 'financeup_callout_section_settings',
		    	'type' => 'checkbox',
		    ) );

		    //Callout Button Two Label Setting	
		    $wp_customize->add_setting(
		    	'financeup_callout_button_two_label', array(
		        'capability'     => 'edit_theme_options',
		        'sanitize_callback' => 'sanitize_text_field',
				
		    ) );	
		    $wp_customize->add_control( 
		    	'financeup_callout_button_two_label', array(
		    	'label'   => __('Button Text','financeup'),
		    	'section' => 'financeup_callout_section_settings',
		    	'type' => 'text',
		    ) );	

		    //Callout Button Two Link Setting
		    $wp_customize->add_setting(
		    	'financeup_callout_button_two_link', array(
		        'capability'     => 'edit_theme_options',
		        'sanitize_callback' => 'esc_url_raw',
		    ) );	
		    $wp_customize->add_control( 
		    	'financeup_callout_button_two_link', array(
		    	'label'   => __('Button Link','financeup'),
		    	'type' => 'text',
		    	'section' => 'financeup_callout_section_settings',
		    ) );	

		    //Callout Button Two Target Setting
		    $wp_customize->add_setting(
		    	'financeup_callout_button_two_target', array(
		        'capability'     => 'edit_theme_options',
		        'sanitize_callback' => 'financeup_homepage_sanitize_checkbox',
		    ) );	
		    $wp_customize->add_control( 
		    	'financeup_callout_button_two_target', array(
		    	'label'   => __('Open link in a new tab','financeup'),
		    	'section' => 'financeup_callout_section_settings',
		    	'type' => 'checkbox',
		    ) );
		    

		    /* --------------------------------------
		    =========================================
		    Latest News Section
		    =========================================
		    -----------------------------------------*/
		    // add section to manage Latest News
		    $wp_customize->add_section(
		    	'news_section_settings', array(
		        'title' => __('Blog Section','financeup'),
		        'description' => '',
		        'panel'  => 'homepage_setting'
		    ) );

            //Enable news
            $wp_customize->add_setting(
                'financeup_news_enable', array(
                'capability'     => 'edit_theme_options',
                'sanitize_callback' => 'financeup_homepage_sanitize_checkbox',
            ) );    
            $wp_customize->add_control( 
                'financeup_news_enable', array(
                'label'   => __('Enable Blog Section','financeup'),
                'section' => 'news_section_settings',
                'type' => 'checkbox',
            ) );

		    //Latest News Background Image
		    $wp_customize->add_setting( 
		    	'news_background', array(
		    	'sanitize_callback' => 'financeup_sanitize_image',
		    ) );
		    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 
		    	'news_background', array(
		    	'label'    => __( 'Background Image', 'financeup' ),
		    	'section'  => 'news_section_settings',
		    	'settings' => 'news_background', ) 
		    ) );

		   
		   $wp_customize->add_setting(
		    	'financeup_overlay_news_color_control', array(
				'sanitize_callback' => 'sanitize_text_field',
				
		    ) );	
            
            $wp_customize->add_control(new Financeup_Customize_Alpha_Color_Control( $wp_customize,'financeup_overlay_news_color_control', array(
               'label'      => __('Overlay Color', 'financeup' ),
                'palette' => true,
                'section' => 'news_section_settings')
            ) );
			
			
		   
		   
			// Latest News Title Setting
		    $wp_customize->add_setting(
		    	'financeup_news_title', array(
		        'capability'     => 'edit_theme_options',
		        'sanitize_callback' => 'financeup_homepage_sanitize_text',
		    ) );	
		    $wp_customize->add_control( 
		    	'financeup_news_title',array(
		    	'label'   => __('Title','financeup'),
		    	'section' => 'news_section_settings',
		    	'type' => 'text',
		    ) );

		    // Latest News Subtitle Setting
		    $wp_customize->add_setting(
		    	'financeup_news_subtitle', array(
		        'capability'     => 'edit_theme_options',
		        'sanitize_callback' => 'financeup_homepage_sanitize_text',
		    ) );  
		    $wp_customize->add_control( 
		    	'financeup_news_subtitle',array(
		    	'label'   => __('Description','financeup'),
		    	'section' => 'news_section_settings',
		    	'type' => 'textarea',
		    ) );
			
			
	function financeup_homepage_sanitize_text( $input ) {

    return wp_kses_post( force_balance_tags( $input ) );

	}
	
	
	function financeup_homepage_sanitize_checkbox( $input ) {
	// Boolean check 
	return ( ( isset( $input ) && true == $input ) ? true : false );
	}
	
	function financeup_sanitize_image( $image, $setting ) {
	/*
	 * Array of valid image file types.
	 *
	 * The array includes image mime types that are included in wp_get_mime_types()
	 */
    $mimes = array(
        'jpg|jpeg|jpe' => 'image/jpeg',
        'gif'          => 'image/gif',
        'png'          => 'image/png',
        'bmp'          => 'image/bmp',
        'tif|tiff'     => 'image/tiff',
        'ico'          => 'image/x-icon'
    );
	// Return an array with file extension and mime_type.
    $file = wp_check_filetype( $image, $mimes );
	// If $image has a valid mime_type, return it; otherwise, return the default.
    return ( $file['ext'] ? $image : $setting->default );
}
}
add_action( 'customize_register', 'financeup_homepage_setting' );
?>