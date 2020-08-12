<?php
function financeup_top_header_setting( $wp_customize ) {
/* Header Section */
	$wp_customize->add_panel( 'top_header_options', array(
		'priority' => 450,
		'capability' => 'edit_theme_options',
		'title' => __('Header Section','financeup'),
	) );
	
	$wp_customize->add_section( 'top_header_contact' , array(
		'title' => __('Header Contact Info','financeup'),
		'panel' => 'top_header_options',
   	) );
	
	$wp_customize->add_setting(
		'financeup_head_info_one', array(
        'capability' => 'edit_theme_options',
		'sanitize_callback' => 'financeup_top_header_sanitize_text',
		'default' => '<a><i class="fa fa fa-clock-o"></i>10:00 am &gt; 7:00 pm</a>',
    ) );
    $wp_customize->add_control( 'financeup_head_info_one', array(
        'label' => __('Info One:','financeup'),
        'section' => 'top_header_contact',
        'type' => 'textarea',
    ) );
	
	
	$wp_customize->add_setting(
		'financeup_head_info_two', array(
        'capability' => 'edit_theme_options',
		'sanitize_callback' => 'financeup_top_header_sanitize_text',
		'default' => '<a><i class="fa fa fa-phone"></i>9876541230</a>',
    ) );
    $wp_customize->add_control( 'financeup_head_info_two', array(
        'label' => __('Info Two:','financeup'),
        'section' => 'top_header_contact',
        'type' => 'textarea',
    ) );
	
	function financeup_top_header_sanitize_text( $input ) {

    return wp_kses_post( force_balance_tags( $input ) );

	}

    $wp_customize->add_section( 'top_header_social_icon' , array(
        'title' => __('Social Icon','financeup'),
        'panel' => 'top_header_options',
    ) );

    // Facebook link
    $wp_customize->add_setting('header_social_link_facebook', array(
        'sanitize_callback' => 'esc_url_raw',
        'default' => '#',
    ) );
    $wp_customize->add_control('header_social_link_facebook', array(
        'label' => __('Facebook URL','financeup'),
        'section' => 'top_header_social_icon',
        'type' => 'text',
    ) );

    $wp_customize->add_setting(
        'header_social_link_facebook_tab',array(
        'sanitize_callback' => 'financeup_copyright_sanitize_checkbox',
    ));
    $wp_customize->add_control('header_social_link_facebook_tab', array(
        'type' => 'checkbox',
        'label' => __('Open link in a new tab','financeup'),
        'section' => 'top_header_social_icon',
    ) );

    //Twitter link
    $wp_customize->add_setting( 'header_social_link_twitter', array(
       'sanitize_callback' => 'esc_url_raw',
       'default' => '#',
    ) );
    $wp_customize->add_control( 'header_social_link_twitter', array(
        'label' => __('Twitter URL','financeup'),
        'section' => 'top_header_social_icon',
        'type' => 'text',
    ) );

    $wp_customize->add_setting( 'header_social_link_twitter_tab',array(
       'sanitize_callback' => 'financeup_copyright_sanitize_checkbox',
    ) );

    $wp_customize->add_control( 'header_social_link_twitter_tab', array(
        'type' => 'checkbox',
        'label' => __('Open link in a new tab','financeup'),
        'section' => 'top_header_social_icon',
    ) );

    //Linkdin link
    $wp_customize->add_setting( 'header_social_link_linkedin', array(
       'sanitize_callback' => 'esc_url_raw',
       'default' => '#',
    ) );
    $wp_customize->add_control( 'header_social_link_linkedin', array(
        'label' => __('Linkedin URL','financeup'),
        'section' => 'top_header_social_icon',
        'type' => 'text',
    ) );

    $wp_customize->add_setting( 
        'header_social_link_linkedin_tab',array(
        'sanitize_callback' => 'financeup_copyright_sanitize_checkbox',
    ) );

    $wp_customize->add_control( 'header_social_link_linkedin_tab', array(
        'type' => 'checkbox',
        'label' => __('Open link in a new tab','financeup'),
        'section' => 'top_header_social_icon',
    ) );

    //Google-plus link
    $wp_customize->add_setting('header_social_link_google', array(
        'sanitize_callback' => 'esc_url_raw',
        'default' => '#',
    ) );
    $wp_customize->add_control('header_social_link_google', array(
        'label' => __('Google-plus URL','financeup'),
        'section' => 'top_header_social_icon',
        'type' => 'text',
    ) );

    $wp_customize->add_setting(
        'header_social_link_google_tab',array(
        'sanitize_callback' => 'financeup_copyright_sanitize_checkbox',
    ) );

    $wp_customize->add_control('header_social_link_google_tab', array(
        'type' => 'checkbox',
        'label' => __('Open link in a new tab','financeup'),
        'section' => 'top_header_social_icon',
    ) );


	// add Header widget one Setting

    $wp_customize->add_section( 'header_widget_one' , array(
		'title' => __('Header Widget One Setting', 'financeup'),
		'panel' => 'top_header_options',
		'priority'    => 600,
   	) );

   	$wp_customize->add_setting(
    	'financeup_header_widget_one_icon', array(
        'default' => 'fa-map-marker',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
    ) );  
    $wp_customize->add_control( 
        'financeup_header_widget_one_icon', array(
        'label' => __('Icon','financeup'),
        'section' => 'header_widget_one',
        'type' => 'text',
    ) );

    $wp_customize->add_setting(
        'financeup_header_widget_one_title', array(
        'default' => '1240 Park Avenue',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
    ) );  
    $wp_customize->add_control( 
        'financeup_header_widget_one_title',array(
        'label'   => __('Title','financeup'),
        'section' => 'header_widget_one',
        'type' => 'text',
    ) );

    $wp_customize->add_setting(
        'financeup_header_widget_one_description', array(
        'capability' => 'edit_theme_options',
        'default' => 'NYC, USA 256323',
        'sanitize_callback' => 'sanitize_text_field',
    ) );  
    $wp_customize->add_control( 
        'financeup_header_widget_one_description', array(
        'label' => __('Description','financeup'),
        'section' => 'header_widget_one',
        'type' => 'textarea',
    ) );

    // add Header widget Two Setting
    
    $wp_customize->add_section( 'header_widget_two' , array(
		'title' => __('Header Widget Two Setting', 'financeup'),
		'panel' => 'top_header_options',
		'priority'    => 620,
   	) );

   	$wp_customize->add_setting(
    	'financeup_header_widget_two_icon', array(
		'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
        'default' => 'fa fa-clock-o',
    ) );  
    $wp_customize->add_control( 
        'financeup_header_widget_two_icon', array(
        'label' => __('Icon','financeup'),
        'section' => 'header_widget_two',
        'type' => 'text',
    ) );

    $wp_customize->add_setting(
        'financeup_header_widget_two_title', array(
		'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
        'default'=> '7:30 AM - 7:30 PM',
    ) );  
    $wp_customize->add_control( 
        'financeup_header_widget_two_title',array(
        'label'   => __('Title','financeup'),
        'section' => 'header_widget_two',
        'type' => 'text',
    ) );

    $wp_customize->add_setting(
        'financeup_header_widget_two_description', array(
		'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
        'default'=> 'Monday to Saturday',
    ) );  
    $wp_customize->add_control( 
        'financeup_header_widget_two_description', array(
        'label' => __('Description','financeup'),
        'section' => 'header_widget_two',
        'type' => 'textarea',
    ) );

    // add Header widget Three Setting
    
    $wp_customize->add_section( 'header_widget_three' , array(
		'title' => __('Header Widget Three Setting', 'financeup'),
		'panel' => 'top_header_options',
		'priority'    => 620,
   	) );

   	$wp_customize->add_setting(
    	'financeup_header_widget_three_icon', array(
		'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
        'default' => 'fa fa-phone',
        ) );  
    $wp_customize->add_control( 
        'financeup_header_widget_three_icon', array(
        'label' => __('Icon','financeup'),
        'section' => 'header_widget_three',
        'type' => 'text',
    ) );

    $wp_customize->add_setting(
        'financeup_header_widget_three_title', array(
		'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
        'default' => '+ (007) 548 58 5400',
    ) );  
    $wp_customize->add_control( 
        'financeup_header_widget_three_title',array(
        'label'   => __('Title','financeup'),
        'section' => 'header_widget_three',
        'type' => 'text',
    ) );

    $wp_customize->add_setting(
        'financeup_header_widget_three_description', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
        'default' => 'info@themeansar.com',
    ) );  
    $wp_customize->add_control( 
        'financeup_header_widget_three_description', array(
        'label' => __('Description','financeup'),
        'section' => 'header_widget_three',
        'type' => 'textarea',
    ) );

    // add Header widget Three Setting
    
    $wp_customize->add_section( 'header_widget_four' , array(
        'title' => __('Header Widget Four Setting', 'financeup'),
        'panel' => 'top_header_options',
        'priority'    => 620,
    ) );

    $wp_customize->add_setting(
        'financeup_header_widget_four_label', array(
		'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
        'default' => __('Get Quote','financeup'),
    ) );  
    $wp_customize->add_control( 
        'financeup_header_widget_four_label', array(
        'label' => __('Button Text','financeup'),
        'section' => 'header_widget_four',
        'type' => 'text',
    ) );

    $wp_customize->add_setting(
        'financeup_header_widget_four_link', array(
		'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw',
    ) );  
    $wp_customize->add_control( 
        'financeup_header_widget_four_link',array(
        'label'   => __('Button Link','financeup'),
        'section' => 'header_widget_four',
        'type' => 'text',
    ) );

    $wp_customize->add_setting(
        'financeup_header_widget_four_target', array(
		'capability' => 'edit_theme_options',
        'sanitize_callback' => 'financeup_header_sanitize_checkbox',
    ) );  
    $wp_customize->add_control( 
        'financeup_header_widget_four_target', array(
        'label' => __('Open Link New window','financeup'),
        'section' => 'header_widget_four',
        'type' => 'checkbox',
    ) );
	
	
	function financeup_header_sanitize_checkbox( $input ) {
	// Boolean check 
	return ( ( isset( $input ) && true == $input ) ? true : false );
	}
	
	
	}
	add_action( 'customize_register', 'financeup_top_header_setting' );
	?>