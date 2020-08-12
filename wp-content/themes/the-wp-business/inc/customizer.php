<?php
/**
 * The WP Business Theme Customizer
 *
 * @package The WP Business
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function the_wp_business_customize_register( $wp_customize ) {	

	class The_WP_Business_WP_Customize_Range_Control extends WP_Customize_Control{
	    public $type = 'custom_range';
	    public function enqueue(){
	        wp_enqueue_script(
	            'cs-range-control',
	            false,
	            true
	        );
	    }
	    public function render_content(){?>
	        <label>
	            <?php if ( ! empty( $this->label )) : ?>
	                <span class="customize-control-title"><?php echo esc_html($this->label); ?></span>
	            <?php endif; ?>
	            <div class="cs-range-value"><?php echo esc_html($this->value()); ?></div>
	            <input data-input-type="range" type="range" <?php $this->input_attrs(); ?> value="<?php echo esc_attr($this->value()); ?>" <?php $this->link(); ?> />
	            <?php if ( ! empty( $this->description )) : ?>
	                <span class="description customize-control-description"><?php echo esc_html($this->description); ?></span>
	            <?php endif; ?>
	        </label>
        <?php }
	}	

	//add home page setting pannel
	$wp_customize->add_panel( 'the_wp_business_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'TG Settings', 'the-wp-business' ),
	    'description' => __( 'Description of what this panel does.', 'the-wp-business' ),
	) );

	// Add the Theme Color Option section.
	$wp_customize->add_section( 'the_wp_business_theme_color_option', array( 
		'panel' => 'the_wp_business_panel_id', 
		'title' => esc_html__( 'Global Color Settings', 'the-wp-business' ) 
	) );

  	$wp_customize->add_setting( 'the_wp_business_theme_color', array(
	    'default' => '#1e7600',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'the_wp_business_theme_color', array(
  		'label' => 'Color Option',
	    'description' => __('One can change complete theme global color settings on just one click.', 'the-wp-business'),
	    'section' => 'the_wp_business_theme_color_option',
	    'settings' => 'the_wp_business_theme_color',
  	)));

    $the_wp_business_font_array = array(
        '' =>'No Fonts',
        'Abril Fatface' => 'Abril Fatface',
        'Acme' =>'Acme', 
        'Anton' => 'Anton', 
        'Architects Daughter' =>'Architects Daughter',
        'Arimo' => 'Arimo', 
        'Arsenal' =>'Arsenal',
        'Arvo' =>'Arvo',
        'Alegreya' =>'Alegreya',
        'Alfa Slab One' =>'Alfa Slab One',
        'Averia Serif Libre' =>'Averia Serif Libre', 
        'Bangers' =>'Bangers', 
        'Boogaloo' =>'Boogaloo', 
        'Bad Script' =>'Bad Script',
        'Bitter' =>'Bitter', 
        'Bree Serif' =>'Bree Serif', 
        'BenchNine' =>'BenchNine',
        'Cabin' =>'Cabin',
        'Cardo' =>'Cardo', 
        'Courgette' =>'Courgette', 
        'Cherry Swash' =>'Cherry Swash',
        'Cormorant Garamond' =>'Cormorant Garamond', 
        'Crimson Text' =>'Crimson Text',
        'Cuprum' =>'Cuprum', 
        'Cookie' =>'Cookie',
        'Chewy' =>'Chewy',
        'Days One' =>'Days One',
        'Dosis' =>'Dosis',
        'Droid Sans' =>'Droid Sans', 
        'Economica' =>'Economica', 
        'Fredoka One' =>'Fredoka One',
        'Fjalla One' =>'Fjalla One',
        'Francois One' =>'Francois One', 
        'Frank Ruhl Libre' => 'Frank Ruhl Libre', 
        'Gloria Hallelujah' =>'Gloria Hallelujah',
        'Great Vibes' =>'Great Vibes', 
        'Handlee' =>'Handlee', 
        'Hammersmith One' =>'Hammersmith One',
        'Inconsolata' =>'Inconsolata',
        'Indie Flower' =>'Indie Flower', 
        'IM Fell English SC' =>'IM Fell English SC',
        'Julius Sans One' =>'Julius Sans One',
        'Josefin Slab' =>'Josefin Slab',
        'Josefin Sans' =>'Josefin Sans',
        'Kanit' =>'Kanit',
        'Lobster' =>'Lobster',
        'Lato' => 'Lato',
        'Lora' =>'Lora', 
        'Libre Baskerville' =>'Libre Baskerville',
        'Lobster Two' => 'Lobster Two',
        'Merriweather' =>'Merriweather',
        'Monda' =>'Monda',
        'Montserrat' =>'Montserrat',
        'Muli' =>'Muli',
        'Marck Script' =>'Marck Script',
        'Noto Serif' =>'Noto Serif',
        'Open Sans' =>'Open Sans',
        'Overpass' => 'Overpass', 
        'Overpass Mono' =>'Overpass Mono',
        'Oxygen' =>'Oxygen',
        'Orbitron' =>'Orbitron',
        'Patua One' =>'Patua One',
        'Pacifico' =>'Pacifico',
        'Padauk' =>'Padauk',
        'Playball' =>'Playball',
        'Playfair Display' =>'Playfair Display',
        'PT Sans' =>'PT Sans',
        'Philosopher' =>'Philosopher',
        'Permanent Marker' =>'Permanent Marker',
        'Poiret One' =>'Poiret One',
        'Quicksand' =>'Quicksand',
        'Quattrocento Sans' =>'Quattrocento Sans',
        'Raleway' =>'Raleway',
        'Rubik' =>'Rubik',
        'Rokkitt' =>'Rokkitt',
        'Russo One' => 'Russo One', 
        'Righteous' =>'Righteous', 
        'Slabo' =>'Slabo', 
        'Source Sans Pro' =>'Source Sans Pro',
        'Shadows Into Light Two' =>'Shadows Into Light Two',
        'Shadows Into Light' =>  'Shadows Into Light',
        'Sacramento' =>'Sacramento',
        'Shrikhand' =>'Shrikhand',
        'Tangerine' => 'Tangerine',
        'Ubuntu' =>'Ubuntu',
        'VT323' =>'VT323',
        'Varela Round' =>'Varela Round',
        'Vampiro One' =>'Vampiro One',
        'Vollkorn' => 'Vollkorn',
        'Volkhov' =>'Volkhov',
        'Yanone Kaffeesatz' =>'Yanone Kaffeesatz'
    );


	//Typography
	$wp_customize->add_section( 'the_wp_business_typography', array(
    	'title'      => __( 'Typography', 'the-wp-business' ),
		'panel' => 'the_wp_business_panel_id'
	) );
	
	// This is Paragraph Color picker setting
	$wp_customize->add_setting( 'the_wp_business_paragraph_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'the_wp_business_paragraph_color', array(
		'label' => __('Paragraph Color', 'the-wp-business'),
		'section' => 'the_wp_business_typography',
		'settings' => 'the_wp_business_paragraph_color',
	)));

	//This is Paragraph FontFamily picker setting
	$wp_customize->add_setting('the_wp_business_paragraph_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'the_wp_business_sanitize_choices'
	));
	$wp_customize->add_control(
	    'the_wp_business_paragraph_font_family', array(
	    'section'  => 'the_wp_business_typography',
	    'label'    => __( 'Paragraph Fonts','the-wp-business'),
	    'type'     => 'select',
	    'choices'  => $the_wp_business_font_array,
	));

	$wp_customize->add_setting('the_wp_business_paragraph_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('the_wp_business_paragraph_font_size',array(
		'label'	=> __('Paragraph Font Size','the-wp-business'),
		'section'	=> 'the_wp_business_typography',
		'setting'	=> 'the_wp_business_paragraph_font_size',
		'type'	=> 'text'
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'the_wp_business_atag_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'the_wp_business_atag_color', array(
		'label' => __('"a" Tag Color', 'the-wp-business'),
		'section' => 'the_wp_business_typography',
		'settings' => 'the_wp_business_atag_color',
	)));

	//This is "a" Tag FontFamily picker setting
	$wp_customize->add_setting('the_wp_business_atag_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'the_wp_business_sanitize_choices'
	));
	$wp_customize->add_control(
	    'the_wp_business_atag_font_family', array(
	    'section'  => 'the_wp_business_typography',
	    'label'    => __( '"a" Tag Fonts','the-wp-business'),
	    'type'     => 'select',
	    'choices'  => $the_wp_business_font_array,
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'the_wp_business_li_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'the_wp_business_li_color', array(
		'label' => __('"li" Tag Color', 'the-wp-business'),
		'section' => 'the_wp_business_typography',
		'settings' => 'the_wp_business_li_color',
	)));

	//This is "li" Tag FontFamily picker setting
	$wp_customize->add_setting('the_wp_business_li_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'the_wp_business_sanitize_choices'
	));
	$wp_customize->add_control(
	    'the_wp_business_li_font_family', array(
	    'section'  => 'the_wp_business_typography',
	    'label'    => __( '"li" Tag Fonts','the-wp-business'),
	    'type'     => 'select',
	    'choices'  => $the_wp_business_font_array,
	));

	// This is H1 Color picker setting
	$wp_customize->add_setting( 'the_wp_business_h1_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'the_wp_business_h1_color', array(
		'label' => __('H1 Color', 'the-wp-business'),
		'section' => 'the_wp_business_typography',
		'settings' => 'the_wp_business_h1_color',
	)));

	//This is H1 FontFamily picker setting
	$wp_customize->add_setting('the_wp_business_h1_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'the_wp_business_sanitize_choices'
	));
	$wp_customize->add_control(
	    'the_wp_business_h1_font_family', array(
	    'section'  => 'the_wp_business_typography',
	    'label'    => __( 'H1 Fonts','the-wp-business'),
	    'type'     => 'select',
	    'choices'  => $the_wp_business_font_array,
	));

	//This is H1 FontSize setting
	$wp_customize->add_setting('the_wp_business_h1_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('the_wp_business_h1_font_size',array(
		'label'	=> __('H1 Font Size','the-wp-business'),
		'section'	=> 'the_wp_business_typography',
		'setting'	=> 'the_wp_business_h1_font_size',
		'type'	=> 'text'
	));

	// This is H2 Color picker setting
	$wp_customize->add_setting( 'the_wp_business_h2_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'the_wp_business_h2_color', array(
		'label' => __('H2 Color', 'the-wp-business'),
		'section' => 'the_wp_business_typography',
		'settings' => 'the_wp_business_h2_color',
	)));

	//This is H2 FontFamily picker setting
	$wp_customize->add_setting('the_wp_business_h2_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'the_wp_business_sanitize_choices'
	));
	$wp_customize->add_control(
	    'the_wp_business_h2_font_family', array(
	    'section'  => 'the_wp_business_typography',
	    'label'    => __( 'H2 Fonts','the-wp-business'),
	    'type'     => 'select',
	    'choices'  => $the_wp_business_font_array,
	));

	//This is H2 FontSize setting
	$wp_customize->add_setting('the_wp_business_h2_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_wp_business_h2_font_size',array(
		'label'	=> __('H2 Font Size','the-wp-business'),
		'section'	=> 'the_wp_business_typography',
		'setting'	=> 'the_wp_business_h2_font_size',
		'type'	=> 'text'
	));

	// This is H3 Color picker setting
	$wp_customize->add_setting( 'the_wp_business_h3_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'the_wp_business_h3_color', array(
		'label' => __('H3 Color', 'the-wp-business'),
		'section' => 'the_wp_business_typography',
		'settings' => 'the_wp_business_h3_color',
	)));

	//This is H3 FontFamily picker setting
	$wp_customize->add_setting('the_wp_business_h3_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'the_wp_business_sanitize_choices'
	));
	$wp_customize->add_control(
	    'the_wp_business_h3_font_family', array(
	    'section'  => 'the_wp_business_typography',
	    'label'    => __( 'H3 Fonts','the-wp-business'),
	    'type'     => 'select',
	    'choices'  => $the_wp_business_font_array,
	));

	//This is H3 FontSize setting
	$wp_customize->add_setting('the_wp_business_h3_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('the_wp_business_h3_font_size',array(
		'label'	=> __('H3 Font Size','the-wp-business'),
		'section'	=> 'the_wp_business_typography',
		'setting'	=> 'the_wp_business_h3_font_size',
		'type'	=> 'text'
	));

	// This is H4 Color picker setting
	$wp_customize->add_setting( 'the_wp_business_h4_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'the_wp_business_h4_color', array(
		'label' => __('H4 Color', 'the-wp-business'),
		'section' => 'the_wp_business_typography',
		'settings' => 'the_wp_business_h4_color',
	)));

	//This is H4 FontFamily picker setting
	$wp_customize->add_setting('the_wp_business_h4_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'the_wp_business_sanitize_choices'
	));
	$wp_customize->add_control(
	    'the_wp_business_h4_font_family', array(
	    'section'  => 'the_wp_business_typography',
	    'label'    => __( 'H4 Fonts','the-wp-business'),
	    'type'     => 'select',
	    'choices'  => $the_wp_business_font_array,
	));

	//This is H4 FontSize setting
	$wp_customize->add_setting('the_wp_business_h4_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_wp_business_h4_font_size',array(
		'label'	=> __('H4 Font Size','the-wp-business'),
		'section'	=> 'the_wp_business_typography',
		'setting'	=> 'the_wp_business_h4_font_size',
		'type'	=> 'text'
	));

	// This is H5 Color picker setting
	$wp_customize->add_setting( 'the_wp_business_h5_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'the_wp_business_h5_color', array(
		'label' => __('H5 Color', 'the-wp-business'),
		'section' => 'the_wp_business_typography',
		'settings' => 'the_wp_business_h5_color',
	)));

	//This is H5 FontFamily picker setting
	$wp_customize->add_setting('the_wp_business_h5_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'the_wp_business_sanitize_choices'
	));
	$wp_customize->add_control(
	    'the_wp_business_h5_font_family', array(
	    'section'  => 'the_wp_business_typography',
	    'label'    => __( 'H5 Fonts','the-wp-business'),
	    'type'     => 'select',
	    'choices'  => $the_wp_business_font_array,
	));

	//This is H5 FontSize setting
	$wp_customize->add_setting('the_wp_business_h5_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('the_wp_business_h5_font_size',array(
		'label'	=> __('H5 Font Size','the-wp-business'),
		'section'	=> 'the_wp_business_typography',
		'setting'	=> 'the_wp_business_h5_font_size',
		'type'	=> 'text'
	));

	// This is H6 Color picker setting
	$wp_customize->add_setting( 'the_wp_business_h6_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'the_wp_business_h6_color', array(
		'label' => __('H6 Color', 'the-wp-business'),
		'section' => 'the_wp_business_typography',
		'settings' => 'the_wp_business_h6_color',
	)));

	//This is H6 FontFamily picker setting
	$wp_customize->add_setting('the_wp_business_h6_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'the_wp_business_sanitize_choices'
	));
	$wp_customize->add_control(
	    'the_wp_business_h6_font_family', array(
	    'section'  => 'the_wp_business_typography',
	    'label'    => __( 'H6 Fonts','the-wp-business'),
	    'type'     => 'select',
	    'choices'  => $the_wp_business_font_array,
	));

	//This is H6 FontSize setting
	$wp_customize->add_setting('the_wp_business_h6_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('the_wp_business_h6_font_size',array(
		'label'	=> __('H6 Font Size','the-wp-business'),
		'section'	=> 'the_wp_business_typography',
		'setting'	=> 'the_wp_business_h6_font_size',
		'type'	=> 'text'
	));

	//Topbar section
	$wp_customize->add_section('the_wp_business_topbar_icon',array(
		'title'	=> __('Topbar Section','the-wp-business'),
		'description'	=> __('Add Header Content here','the-wp-business'),
		'priority'	=> null,
		'panel' => 'the_wp_business_panel_id',
	));

	$wp_customize->add_setting('the_wp_business_top_header',array(
       'default' => true,
       'sanitize_callback'	=> 'the_wp_business_sanitize_checkbox'
    ));
    $wp_customize->add_control('the_wp_business_top_header',array(
       'type' => 'checkbox',
       'label' => __('Enable Top Header','the-wp-business'),
       'section' => 'the_wp_business_topbar_icon'
    ));

    $wp_customize->add_setting('the_wp_business_topbar_padding',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('the_wp_business_topbar_padding',array(
		'label'	=> esc_html__('Topbar Padding','the-wp-business'),
		'section'=> 'the_wp_business_topbar_icon',
	));

    $wp_customize->add_setting('the_wp_business_top_topbar_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'the_wp_business_sanitize_float'
	));
	$wp_customize->add_control('the_wp_business_top_topbar_padding',array(
		'description'	=> __('Top','the-wp-business'),
		'input_attrs' => array(
            'step' => 1,
			'min' => 0,
			'max' => 50,
        ),
		'section'=> 'the_wp_business_topbar_icon',
		'type'=> 'number',
	));

	$wp_customize->add_setting('the_wp_business_bottom_topbar_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'the_wp_business_sanitize_float'
	));
	$wp_customize->add_control('the_wp_business_bottom_topbar_padding',array(
		'description'	=> __('Bottom','the-wp-business'),
		'input_attrs' => array(
            'step' => 1,
			'min' => 0,
			'max' => 50,
        ),
		'section'=> 'the_wp_business_topbar_icon',
		'type'=> 'number',
	));

    $wp_customize->add_setting('the_wp_business_sticky_header',array(
       'default' => '',
       'sanitize_callback'	=> 'the_wp_business_sanitize_checkbox'
    ));
    $wp_customize->add_control('the_wp_business_sticky_header',array(
       'type' => 'checkbox',
       'label' => __('Stick header on Desktop','the-wp-business'),
       'section' => 'the_wp_business_topbar_icon'
    ));

	$wp_customize->add_setting('the_wp_business_show_search',array(
       'default' => 'true',
       'sanitize_callback'	=> 'the_wp_business_sanitize_checkbox'
    ));
    $wp_customize->add_control('the_wp_business_show_search',array(
       'type' => 'checkbox',
       'label' => __('Show/Hide Search','the-wp-business'),
       'section' => 'the_wp_business_topbar_icon'
    ));

	$wp_customize->add_setting('the_wp_business_contact_corporate',array(
		'default'	=> '',
		'sanitize_callback'	=> 'the_wp_business_sanitize_phone_number'
	));	
	$wp_customize->add_control('the_wp_business_contact_corporate',array(
		'label'	=> __('Add Phone Number','the-wp-business'),
		'section'	=> 'the_wp_business_topbar_icon',
		'setting'	=> 'the_wp_business_contact_corporate',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('the_wp_business_email_corporate',array(
		'default'	=> '',
		'sanitize_callback'	=> 'the_wp_business_sanitize_email'
	));	
	$wp_customize->add_control('the_wp_business_email_corporate',array(
		'label'	=> __('Add Email','the-wp-business'),
		'section'	=> 'the_wp_business_topbar_icon',
		'setting'	=> 'the_wp_business_email_corporate',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('the_wp_business_button_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('the_wp_business_button_text',array(
		'label'	=> __('Add Button Text','the-wp-business'),
		'section'	=> 'the_wp_business_topbar_icon',
		'setting'	=> 'the_wp_business_button_text',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('the_wp_business_button_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('the_wp_business_button_url',array(
		'label'	=> __('Add Button Url','the-wp-business'),
		'section'	=> 'the_wp_business_topbar_icon',
		'setting'	=> 'the_wp_business_button_url',
		'type'		=> 'text'
	));

	//Social Icons(topbar)
	$wp_customize->add_section('the_wp_business_topbar_header',array(
		'title'	=> __('Social Icon Section','the-wp-business'),
		'description'	=> __('Add Header Content here','the-wp-business'),
		'priority'	=> null,
		'panel' => 'the_wp_business_panel_id',
	));

	$wp_customize->add_setting('the_wp_business_youtube_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('the_wp_business_youtube_url',array(
		'label'	=> __('Add Youtube link','the-wp-business'),
		'section'	=> 'the_wp_business_topbar_header',
		'setting'	=> 'the_wp_business_youtube_url',
		'type'		=> 'url'
	));

	$wp_customize->add_setting('the_wp_business_facebook_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('the_wp_business_facebook_url',array(
		'label'	=> __('Add Facebook link','the-wp-business'),
		'section'	=> 'the_wp_business_topbar_header',
		'setting'	=> 'the_wp_business_facebook_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('the_wp_business_twitter_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('the_wp_business_twitter_url',array(
		'label'	=> __('Add Twitter link','the-wp-business'),
		'section'	=> 'the_wp_business_topbar_header',
		'setting'	=> 'the_wp_business_twitter_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('the_wp_business_rss_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('the_wp_business_rss_url',array(
		'label'	=> __('Add RSS link','the-wp-business'),
		'section'	=> 'the_wp_business_topbar_header',
		'setting'	=> 'the_wp_business_rss_url',
		'type'	=> 'url'
	));

	//home page slider
	$wp_customize->add_section( 'the_wp_business_slidersettings' , array(
    	'title'      => __( 'Slider Settings', 'the-wp-business' ),
		'priority'   => null,
		'panel' => 'the_wp_business_panel_id'
	) );

	$wp_customize->add_setting('the_wp_business_slider_hide',array(
       'default' => 'false',
       'sanitize_callback'	=> 'the_wp_business_sanitize_checkbox'
    ));
    $wp_customize->add_control('the_wp_business_slider_hide',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide slider','the-wp-business'),
       'section' => 'the_wp_business_slidersettings'
    ));

    $wp_customize->add_setting('the_wp_business_slider_indicator',array(
        'default' => true,
        'sanitize_callback'	=> 'the_wp_business_sanitize_checkbox'
	));
	$wp_customize->add_control('the_wp_business_slider_indicator',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide Slider Indicators','the-wp-business'),
      	'section' => 'the_wp_business_slidersettings'
	));

	$wp_customize->add_setting('the_wp_business_slider_title',array(
        'default' => true,
        'sanitize_callback'	=> 'the_wp_business_sanitize_checkbox'
	));
	$wp_customize->add_control('the_wp_business_slider_title',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide Slider Title','the-wp-business'),
      	'section' => 'the_wp_business_slidersettings'
	));

	$wp_customize->add_setting('the_wp_business_slider_content',array(
        'default' => true,
        'sanitize_callback'	=> 'the_wp_business_sanitize_checkbox'
	));
	$wp_customize->add_control('the_wp_business_slider_content',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide Slider Content','the-wp-business'),
      	'section' => 'the_wp_business_slidersettings'
	));

	$wp_customize->add_setting('the_wp_business_slider_button',array(
        'default' => true,
        'sanitize_callback'	=> 'the_wp_business_sanitize_checkbox'
	));
	$wp_customize->add_control('the_wp_business_slider_button',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide Slider Button','the-wp-business'),
      	'section' => 'the_wp_business_slidersettings'
	));

	for ( $count = 1; $count <= 4; $count++ ) {
		$wp_customize->add_setting( 'the_wp_business_slidersettings_page' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'the_wp_business_sanitize_dropdown_pages'
		) );
		$wp_customize->add_control( 'the_wp_business_slidersettings_page' . $count, array(
			'label'    => __( 'Select Slide Image Page', 'the-wp-business' ),
			'section'  => 'the_wp_business_slidersettings',
			'type'     => 'dropdown-pages'
		) );
	}

	$wp_customize->add_setting( 'the_wp_business_slider_speed', array(
		'default'              => 3000,
		'sanitize_callback'	=> 'the_wp_business_sanitize_float'
	) );
	$wp_customize->add_control( 'the_wp_business_slider_speed', array(
		'label'       => esc_html__( 'Slider Speed','the-wp-business' ),
		'section'     => 'the_wp_business_slidersettings',
		'type'        => 'number',
		'settings'    => 'the_wp_business_slider_speed',
		'input_attrs' => array(
			'step'             => 500,
			'min'              => 500,
			'max'              => 5000,
		),
	) );

	//content Alignment
    $wp_customize->add_setting('the_wp_business_slider_alignment_option',array(
    'default' => __('Center Align','the-wp-business'),
        'sanitize_callback' => 'the_wp_business_sanitize_choices'
	));
	$wp_customize->add_control('the_wp_business_slider_alignment_option',array(
        'type' => 'radio',
        'label' => __('Slider Content Alignment','the-wp-business'),
        'section' => 'the_wp_business_slidersettings',
        'choices' => array(
            'Center Align' => __('Center Align','the-wp-business'),
            'Left Align' => __('Left Align','the-wp-business'),
            'Right Align' => __('Right Align','the-wp-business'),
        ),
	) );

    //Slider excerpt
	$wp_customize->add_setting( 'the_wp_business_slider_excerpt_number', array(
		'default'              => 15,
		'sanitize_callback'    => 'the_wp_business_sanitize_float',
	) );
	$wp_customize->add_control( 'the_wp_business_slider_excerpt_number', array(
		'label'       => esc_html__( 'Slider Excerpt length','the-wp-business' ),
		'section'     => 'the_wp_business_slidersettings',
		'type'        => 'number',
		'settings'    => 'the_wp_business_slider_excerpt_number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('the_wp_business_slider_image_overlay',array(
        'default' => true,
        'sanitize_callback'	=> 'the_wp_business_sanitize_checkbox'
	));
	$wp_customize->add_control('the_wp_business_slider_image_overlay',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide Slider Image Overlay','the-wp-business'),
      	'section' => 'the_wp_business_slidersettings',
	));

	$wp_customize->add_setting( 'the_wp_business_slider_overlay_color', array(
	    'default' => '#000',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'the_wp_business_slider_overlay_color', array(
	    'label' => __('Slider Overlay Color', 'the-wp-business'),
	    'section' => 'the_wp_business_slidersettings',
  	)));

	//Opacity
	$wp_customize->add_setting('the_wp_business_slider_opacity_color',array(
      'default'              => 0.7,
      'sanitize_callback' => 'the_wp_business_sanitize_choices'
	));
	$wp_customize->add_control( 'the_wp_business_slider_opacity_color', array(
		'label'       => esc_html__( 'Slider Image Opacity','the-wp-business' ),
		'section'     => 'the_wp_business_slidersettings',
		'type'        => 'select',
		'settings'    => 'the_wp_business_slider_opacity_color',
		'choices' => array(
	      '0' =>  esc_attr('0','the-wp-business'),
	      '0.1' =>  esc_attr('0.1','the-wp-business'),
	      '0.2' =>  esc_attr('0.2','the-wp-business'),
	      '0.3' =>  esc_attr('0.3','the-wp-business'),
	      '0.4' =>  esc_attr('0.4','the-wp-business'),
	      '0.5' =>  esc_attr('0.5','the-wp-business'),
	      '0.6' =>  esc_attr('0.6','the-wp-business'),
	      '0.7' =>  esc_attr('0.7','the-wp-business'),
	      '0.8' =>  esc_attr('0.8','the-wp-business'),
	      '0.9' =>  esc_attr('0.9','the-wp-business')
		),
	));

	$wp_customize->add_setting( 'the_wp_business_slider_button_label', array(
		'default' => __('LEARN MORE','the-wp-business' ),
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'the_wp_business_slider_button_label', array(
		'label' => esc_html__( 'Slider Button Label','the-wp-business' ),
		'section'     => 'the_wp_business_slidersettings',
		'type'        => 'text',
		'settings'    => 'the_wp_business_slider_button_label'
	) );

	//we think
	$wp_customize->add_section('the_wp_business_wethink',array(
		'title'	=> __('We Think Section','the-wp-business'),
		'description'	=> __('Add We Think sections below.','the-wp-business'),
		'panel' => 'the_wp_business_panel_id',
	));

	$args = array('numberposts' => -1);
	$post_list = get_posts($args);
	$i = 0;
	$pst[]='Select';  
	foreach($post_list as $post){
		$pst[$post->post_title] = $post->post_title;
	}

	$wp_customize->add_setting('the_wp_business_wethink_post_setting',array(
		'sanitize_callback' => 'the_wp_business_sanitize_choices',
	));

	$wp_customize->add_control('the_wp_business_wethink_post_setting',array(
		'type'    => 'select',
		'choices' => $pst,
		'label' => __('Select post','the-wp-business'),
		'section' => 'the_wp_business_wethink',
	));

	//Layouts
	$wp_customize->add_section( 'the_wp_business_left_right', array(
    	'title'   => __( 'Blog Settings', 'the-wp-business' ),
		'panel' => 'the_wp_business_panel_id'
	) );

	$wp_customize->add_setting('the_wp_business_theme_options',array(
        'default' => __('Right Sidebar','the-wp-business'),
        'sanitize_callback' => 'the_wp_business_sanitize_choices'
    ));
	$wp_customize->add_control('the_wp_business_theme_options', array(
        'type' => 'radio',
        'section' => 'the_wp_business_left_right',
   		'label' => __('Blog Layout','the-wp-business'),
        'choices' => array(
        	'One Column' => __('One Column','the-wp-business'),
            'Three Columns' => __('Three Columns','the-wp-business'),
            'Four Columns' => __('Four Columns','the-wp-business'),
            'Left Sidebar' => __('Left Sidebar','the-wp-business'),
            'Right Sidebar' => __('Right Sidebar','the-wp-business'),
          	'Grid Layout' => __('Grid Layout','the-wp-business')
        ),
    ));

    $wp_customize->add_setting('the_wp_business_metafields_date',array(
       'default' => 'true',
       'sanitize_callback'	=> 'the_wp_business_sanitize_checkbox'
    ));
    $wp_customize->add_control('the_wp_business_metafields_date',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Date ','the-wp-business'),
       'section' => 'the_wp_business_left_right'
    ));

    $wp_customize->add_setting('the_wp_business_metafields_author',array(
       'default' => 'true',
       'sanitize_callback'	=> 'the_wp_business_sanitize_checkbox'
    ));
    $wp_customize->add_control('the_wp_business_metafields_author',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Author','the-wp-business'),
       'section' => 'the_wp_business_left_right'
    ));

    $wp_customize->add_setting('the_wp_business_metafields_comment',array(
       'default' => 'true',
       'sanitize_callback'	=> 'the_wp_business_sanitize_checkbox'
    ));
    $wp_customize->add_control('the_wp_business_metafields_comment',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Comments','the-wp-business'),
       'section' => 'the_wp_business_left_right'
    ));

    $wp_customize->add_setting('the_wp_business_blog_post_content',array(
    	'default' => __('Excerpt Content','the-wp-business'),
        'sanitize_callback' => 'the_wp_business_sanitize_choices'
	));
	$wp_customize->add_control('the_wp_business_blog_post_content',array(
        'type' => 'radio',
        'label' => __('Blog Post Content Type','the-wp-business'),
        'section' => 'the_wp_business_left_right',
        'choices' => array(
            'No Content' => __('No Content','the-wp-business'),
            'Full Content' => __('Full Content','the-wp-business'),
            'Excerpt Content' => __('Excerpt Content','the-wp-business'),
        ),
	) );

   $wp_customize->add_setting( 'the_wp_business_post_excerpt_number', array(
		'default'              => 20,
		'sanitize_callback'	=> 'the_wp_business_sanitize_float'
	) );
	$wp_customize->add_control( 'the_wp_business_post_excerpt_number', array(
		'label'       => esc_html__( 'Blog Post Excerpt Number (Max 50)','the-wp-business' ),
		'section'     => 'the_wp_business_left_right',
		'type'        => 'number',
		'settings'    => 'the_wp_business_post_excerpt_number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
		'active_callback' => 'the_wp_business_excerpt_enabled'
	) );

	$wp_customize->add_setting( 'the_wp_business_button_excerpt_suffix', array(
		'default'   => '...',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'the_wp_business_button_excerpt_suffix', array(
		'label'       => __( 'Post Excerpt Suffix','the-wp-business' ),
		'section'     => 'the_wp_business_left_right',
		'type'        => 'text',
		'settings'    => 'the_wp_business_button_excerpt_suffix',
		'active_callback' => 'the_wp_business_excerpt_enabled'
	) );

	$wp_customize->add_section( 'the_wp_business_single_post_settings', array(
		'title' => __( 'Single Post Options', 'the-wp-business' ),
		'panel' => 'the_wp_business_panel_id',
	));

	$wp_customize->add_setting('the_wp_business_metafields_tags',array(
       'default' => 'true',
       'sanitize_callback'	=> 'the_wp_business_sanitize_checkbox'
    ));
    $wp_customize->add_control('the_wp_business_metafields_tags',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Single Post Tags','the-wp-business'),
       'section' => 'the_wp_business_single_post_settings'
    ));

    $wp_customize->add_setting('the_wp_business_single_post_image',array(
       'default' => 'true',
       'sanitize_callback'	=> 'the_wp_business_sanitize_checkbox'
    ));
    $wp_customize->add_control('the_wp_business_single_post_image',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Single Post Featured Image','the-wp-business'),
       'section' => 'the_wp_business_single_post_settings'
    ));

    $wp_customize->add_setting('the_wp_business_single_post_nav',array(
       'default' => 'true',
       'sanitize_callback'	=> 'the_wp_business_sanitize_checkbox'
    ));
    $wp_customize->add_control('the_wp_business_single_post_nav',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Single Post Navigation','the-wp-business'),
       'section' => 'the_wp_business_single_post_settings'
    ));

    $wp_customize->add_setting( 'the_wp_business_single_post_prev_nav_text', array(
		'default' => __('Previous','the-wp-business' ),
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'the_wp_business_single_post_prev_nav_text', array(
		'label' => esc_html__( 'Single Post Previous Nav text','the-wp-business' ),
		'section'     => 'the_wp_business_single_post_settings',
		'type'        => 'text',
		'settings'    => 'the_wp_business_single_post_prev_nav_text'
	) );

	$wp_customize->add_setting( 'the_wp_business_single_post_next_nav_text', array(
		'default' => __('Next','the-wp-business' ),
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'the_wp_business_single_post_next_nav_text', array(
		'label' => esc_html__( 'Single Post Next Nav text','the-wp-business' ),
		'section'     => 'the_wp_business_single_post_settings',
		'type'        => 'text',
		'settings'    => 'the_wp_business_single_post_next_nav_text'
	) );

    $wp_customize->add_setting('the_wp_business_single_post_comment',array(
       'default' => 'true',
       'sanitize_callback'	=> 'the_wp_business_sanitize_checkbox'
    ));
    $wp_customize->add_control('the_wp_business_single_post_comment',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Single Post comment','the-wp-business'),
       'section' => 'the_wp_business_single_post_settings'
    ));

	$wp_customize->add_setting( 'the_wp_business_comment_width', array(
		'default'=> '100',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( new The_WP_Business_WP_Customize_Range_Control( $wp_customize, 'the_wp_business_comment_width', array(
        'label'  => __('Comment textarea width','the-wp-business'),
        'section'  => 'the_wp_business_single_post_settings',
        'description' => __('Measurement is in %.','the-wp-business'),
        'input_attrs' => array(
            'min' => 0,
            'max' => 100,
        ),
    )));

    $wp_customize->add_setting('the_wp_business_comment_title',array(
       'default' => __('Leave a Reply','the-wp-business'),
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('the_wp_business_comment_title',array(
       'type' => 'text',
       'label' => __('Comment form Title','the-wp-business'),
       'section' => 'the_wp_business_single_post_settings'
    ));

    $wp_customize->add_setting('the_wp_business_comment_submit_text',array(
       'default' => __('Post Comment','the-wp-business'),
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('the_wp_business_comment_submit_text',array(
       'type' => 'text',
       'label' => __('Comment Submit Button Label','the-wp-business'),
       'section' => 'the_wp_business_single_post_settings'
    ));

	$wp_customize->add_setting('the_wp_business_related_posts',array(
       'default' => true,
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('the_wp_business_related_posts',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Related Posts','the-wp-business'),
       'section' => 'the_wp_business_single_post_settings'
    ));

    $wp_customize->add_setting('the_wp_business_related_posts_title',array(
       'default' => __('You May Also Like','the-wp-business'),
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('the_wp_business_related_posts_title',array(
       'type' => 'text',
       'label' => __('Related Posts Title','the-wp-business'),
       'section' => 'the_wp_business_single_post_settings'
    ));

    $wp_customize->add_setting( 'the_wp_business_related_post_count', array(
		'default' => 3,
		'sanitize_callback'	=> 'the_wp_business_sanitize_float'
	) );
	$wp_customize->add_control( 'the_wp_business_related_post_count', array(
		'label' => esc_html__( 'Related Posts Count','the-wp-business' ),
		'section' => 'the_wp_business_single_post_settings',
		'type' => 'number',
		'settings' => 'the_wp_business_related_post_count',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 6,
		),
	) );

    $wp_customize->add_setting( 'the_wp_business_post_shown_by', array(
        'default' => 'categories',
        'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control( 'the_wp_business_post_shown_by', array(
        'section' => 'the_wp_business_single_post_settings',
        'type' => 'radio',
        'label' => __( 'Related Posts must be shown:', 'the-wp-business' ),
        'choices'		=> array(
            'categories'  => __('By Categories', 'the-wp-business'),
            'tags' => __( 'By Tags', 'the-wp-business' ),
    )));

	// Button option
	$wp_customize->add_section( 'the_wp_business_button_options', array(
		'title' =>  __( 'Button Options', 'the-wp-business' ),
		'panel' => 'the_wp_business_panel_id',
	));

    $wp_customize->add_setting( 'the_wp_business_blog_button_text', array(
		'default'   => 'Read Full',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'the_wp_business_blog_button_text', array(
		'label'       => esc_html__( 'Blog Post Button Label','the-wp-business' ),
		'section'     => 'the_wp_business_button_options',
		'type'        => 'text',
		'settings'    => 'the_wp_business_blog_button_text'
	) );

	$wp_customize->add_setting('the_wp_business_button_padding',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('the_wp_business_button_padding',array(
		'label'	=> esc_html__('Button Padding','the-wp-business'),
		'section'=> 'the_wp_business_button_options',
		'active_callback' => 'the_wp_business_button_enabled'
	));

	$wp_customize->add_setting('the_wp_business_top_button_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'the_wp_business_sanitize_float'
	));
	$wp_customize->add_control('the_wp_business_top_button_padding',array(
		'label'	=> __('Top','the-wp-business'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'the_wp_business_button_options',
		'type'=> 'number',
		'active_callback' => 'the_wp_business_button_enabled'
	));

	$wp_customize->add_setting('the_wp_business_bottom_button_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'the_wp_business_sanitize_float'
	));
	$wp_customize->add_control('the_wp_business_bottom_button_padding',array(
		'label'	=> __('Bottom','the-wp-business'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'the_wp_business_button_options',
		'type'=> 'number',
		'active_callback' => 'the_wp_business_button_enabled'
	));

	$wp_customize->add_setting('the_wp_business_left_button_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'the_wp_business_sanitize_float'
	));
	$wp_customize->add_control('the_wp_business_left_button_padding',array(
		'label'	=> __('Left','the-wp-business'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'the_wp_business_button_options',
		'type'=> 'number',
		'active_callback' => 'the_wp_business_button_enabled'
	));

	$wp_customize->add_setting('the_wp_business_right_button_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'the_wp_business_sanitize_float'
	));
	$wp_customize->add_control('the_wp_business_right_button_padding',array(
		'label'	=> __('Right','the-wp-business'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'the_wp_business_button_options',
		'type'=> 'number',
		'active_callback' => 'the_wp_business_button_enabled'
	));

	$wp_customize->add_setting( 'the_wp_business_button_border_radius', array(
		'default'=> 4,
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( new The_WP_Business_WP_Customize_Range_Control( $wp_customize, 'the_wp_business_button_border_radius', array(
            'label'  => __('Border Radius','the-wp-business'),
            'section'  => 'the_wp_business_button_options',
            'description' => __('Measurement is in pixel.','the-wp-business'),
            'input_attrs' => array(
                'min' => 0,
                'max' => 50,
            ),
			'active_callback' => 'the_wp_business_button_enabled'
    )));

    //Advance Options
	$wp_customize->add_section( 'the_wp_business_advance_options', array(
    	'title' => __( 'Advance Options', 'the-wp-business' ),
		'priority'   => null,
		'panel' => 'the_wp_business_panel_id'
	) );

	$wp_customize->add_setting('the_wp_business_preloader',array(
       'default' => 'true',
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('the_wp_business_preloader',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Preloader','the-wp-business'),
       'section' => 'the_wp_business_advance_options'
    ));

    $wp_customize->add_setting( 'the_wp_business_preloader_color', array(
	    'default' => '#333333',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'the_wp_business_preloader_color', array(
  		'label' => __('Preloader Color', 'the-wp-business'),
	    'section' => 'the_wp_business_advance_options',
	    'settings' => 'the_wp_business_preloader_color',
  	)));

  	$wp_customize->add_setting( 'the_wp_business_preloader_bg_color', array(
	    'default' => '#ffffff',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'the_wp_business_preloader_bg_color', array(
  		'label' => __('Preloader Background Color', 'the-wp-business'),
	    'section' => 'the_wp_business_advance_options',
	    'settings' => 'the_wp_business_preloader_bg_color',
  	)));

  	$wp_customize->add_setting('the_wp_business_preloader_type',array(
        'default' => __('Square','the-wp-business'),
        'sanitize_callback' => 'the_wp_business_sanitize_choices'
	));
	$wp_customize->add_control('the_wp_business_preloader_type',array(
        'type' => 'radio',
        'label' => __('Preloader Type','the-wp-business'),
        'section' => 'the_wp_business_advance_options',
        'choices' => array(
            'Square' => __('Square','the-wp-business'),
            'Circle' => __('Circle','the-wp-business'),
        ),
	) );

	$wp_customize->add_setting('the_wp_business_theme_layout_options',array(
        'default' => __('Default Theme','the-wp-business'),
        'sanitize_callback' => 'the_wp_business_sanitize_choices'
	));
	$wp_customize->add_control('the_wp_business_theme_layout_options',array(
        'type' => 'radio',
        'label' => __('Theme Layout','the-wp-business'),
        'section' => 'the_wp_business_advance_options',
        'choices' => array(
            'Default Theme' => __('Default Theme','the-wp-business'),
            'Container Theme' => __('Container Theme','the-wp-business'),
            'Box Container Theme' => __('Box Container Theme','the-wp-business'),
        ),
	) );

	//404 Page Option
	$wp_customize->add_section('the_wp_business_404_settings',array(
		'title'	=> __('404 Page & Search Result Settings','the-wp-business'),
		'priority'	=> null,
		'panel' => 'the_wp_business_panel_id',
	));

	$wp_customize->add_setting('the_wp_business_404_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('the_wp_business_404_title',array(
		'label'	=> __('404 Title','the-wp-business'),
		'section'	=> 'the_wp_business_404_settings',
		'type'		=> 'text'
	));	

	$wp_customize->add_setting('the_wp_business_404_button_label',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('the_wp_business_404_button_label',array(
		'label'	=> __('404 button Label','the-wp-business'),
		'section'	=> 'the_wp_business_404_settings',
		'type'		=> 'text'
	));	

	$wp_customize->add_setting('the_wp_business_search_result_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('the_wp_business_search_result_title',array(
		'label'	=> __('No Search Result Title','the-wp-business'),
		'section'	=> 'the_wp_business_404_settings',
		'type'		=> 'text'
	));	

	$wp_customize->add_setting('the_wp_business_search_result_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('the_wp_business_search_result_text',array(
		'label'	=> __('No Search Result Text','the-wp-business'),
		'section'	=> 'the_wp_business_404_settings',
		'type'		=> 'text'
	));	

	//Woocommerce Options
	$wp_customize->add_section('the_wp_business_woocommerce',array(
		'title'	=> __('WooCommerce Options','the-wp-business'),
		'panel' => 'the_wp_business_panel_id',
	));

	$wp_customize->add_setting('the_wp_business_shop_page_sidebar',array(
       'default' => true,
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('the_wp_business_shop_page_sidebar',array(
       'type' => 'checkbox',
       'label' => __('Enable Shop Page Sidebar','the-wp-business'),
       'section' => 'the_wp_business_woocommerce'
    ));

    $wp_customize->add_setting('the_wp_business_single_product_sidebar',array(
       'default' => true,
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('the_wp_business_single_product_sidebar',array(
       'type' => 'checkbox',
       'label' => __('Enable Single Product Page Sidebar','the-wp-business'),
       'section' => 'the_wp_business_woocommerce'
    ));

    $wp_customize->add_setting('the_wp_business_products_per_page',array(
		'default'=> '9',
		'sanitize_callback'	=> 'the_wp_business_sanitize_float'
	));
	$wp_customize->add_control('the_wp_business_products_per_page',array(
		'label'	=> __('Products Per Page','the-wp-business'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'the_wp_business_woocommerce',
		'type'=> 'number',
	));

	$wp_customize->add_setting('the_wp_business_products_per_row',array(
		'default'=> '3',
		'sanitize_callback'	=> 'the_wp_business_sanitize_choices'
	));
	$wp_customize->add_control('the_wp_business_products_per_row',array(
		'label'	=> __('Products Per Row','the-wp-business'),
		'choices' => array(
            '2' => '2',
			'3' => '3',
			'4' => '4',
        ),
		'section'=> 'the_wp_business_woocommerce',
		'type'=> 'select',
	));

	$wp_customize->add_setting('the_wp_business_product_border',array(
       'default' => false,
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('the_wp_business_product_border',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide product border','the-wp-business'),
       'section' => 'the_wp_business_woocommerce',
    ));

    $wp_customize->add_setting('the_wp_business_product_padding',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('the_wp_business_product_padding',array(
		'label'	=> esc_html__('Product Padding','the-wp-business'),
		'section'=> 'the_wp_business_woocommerce',
	));

	$wp_customize->add_setting( 'the_wp_business_product_top_padding',array(
		'default' => 5,
		'sanitize_callback' => 'the_wp_business_sanitize_float'
	));
	$wp_customize->add_control('the_wp_business_product_top_padding', array(
		'label' => esc_html__( 'Top','the-wp-business' ),
		'type' => 'number',
		'section' => 'the_wp_business_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting('the_wp_business_product_bottom_padding',array(
		'default' => 5,
		'sanitize_callback' => 'the_wp_business_sanitize_float'
	));
	$wp_customize->add_control('the_wp_business_product_bottom_padding', array(
		'label' => esc_html__( 'Bottom','the-wp-business' ),
		'type' => 'number',
		'section' => 'the_wp_business_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting('the_wp_business_product_left_padding',array(
		'default' => 5,
		'sanitize_callback' => 'the_wp_business_sanitize_float'
	));
	$wp_customize->add_control('the_wp_business_product_left_padding', array(
		'label' => esc_html__( 'Left','the-wp-business' ),
		'type' => 'number',
		'section' => 'the_wp_business_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting( 'the_wp_business_product_right_padding',array(
		'default' => 5,
		'sanitize_callback' => 'the_wp_business_sanitize_float'
	));
	$wp_customize->add_control('the_wp_business_product_right_padding', array(
		'label' => esc_html__( 'Right','the-wp-business' ),
		'type' => 'number',
		'section' => 'the_wp_business_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting( 'the_wp_business_product_border_radius',array(
		'default' => '0',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control( new The_WP_Business_WP_Customize_Range_Control( $wp_customize, 'the_wp_business_product_border_radius', array(
        'label'  => __('Product Border Radius','the-wp-business'),
        'section'  => 'the_wp_business_woocommerce',
        'description' => __('Measurement is in pixel.','the-wp-business'),
        'input_attrs' => array(
            'min' => 0,
            'max' => 50,
        )
    )));

	$wp_customize->add_setting('the_wp_business_product_button_padding',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('the_wp_business_product_button_padding',array(
		'label'	=> esc_html__('Product Button Padding','the-wp-business'),
		'section'=> 'the_wp_business_woocommerce',
	));

	$wp_customize->add_setting( 'the_wp_business_product_button_top_padding',array(
		'default' => 10,
		'sanitize_callback' => 'the_wp_business_sanitize_float'
	));
	$wp_customize->add_control('the_wp_business_product_button_top_padding', array(
		'label' => esc_html__( 'Top','the-wp-business' ),
		'type' => 'number',
		'section' => 'the_wp_business_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting('the_wp_business_product_button_bottom_padding',array(
		'default' => 10,
		'sanitize_callback' => 'the_wp_business_sanitize_float'
	));
	$wp_customize->add_control('the_wp_business_product_button_bottom_padding', array(
		'label' => esc_html__( 'Bottom','the-wp-business' ),
		'type' => 'number',
		'section' => 'the_wp_business_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting('the_wp_business_product_button_left_padding',array(
		'default' => 15,
		'sanitize_callback' => 'the_wp_business_sanitize_float'
	));
	$wp_customize->add_control('the_wp_business_product_button_left_padding', array(
		'label' => esc_html__( 'Left','the-wp-business' ),
		'type' => 'number',
		'section' => 'the_wp_business_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting( 'the_wp_business_product_button_right_padding',array(
		'default' => 15,
		'sanitize_callback' => 'the_wp_business_sanitize_float'
	));
	$wp_customize->add_control('the_wp_business_product_button_right_padding', array(
		'label' => esc_html__( 'Right','the-wp-business' ),
		'type' => 'number',
		'section' => 'the_wp_business_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting( 'the_wp_business_product_button_border_radius',array(
		'default' => '0',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control( new The_WP_Business_WP_Customize_Range_Control( $wp_customize, 'the_wp_business_product_button_border_radius', array(
        'label'  => __('Product Button Border Radius','the-wp-business'),
        'section'  => 'the_wp_business_woocommerce',
        'description' => __('Measurement is in pixel.','the-wp-business'),
        'input_attrs' => array(
            'min' => 0,
            'max' => 50,
        )
    )));

    $wp_customize->add_setting('the_wp_business_product_sale_position',array(
        'default' => __('Right','the-wp-business'),
        'sanitize_callback' => 'the_wp_business_sanitize_choices'
	));
	$wp_customize->add_control('the_wp_business_product_sale_position',array(
        'type' => 'radio',
        'label' => __('Product Sale Position','the-wp-business'),
        'section' => 'the_wp_business_woocommerce',
        'choices' => array(
            'Left' => __('Left','the-wp-business'),
            'Right' => __('Right','the-wp-business'),
        ),
	) );

    $wp_customize->add_setting('the_wp_business_product_sale_padding',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('the_wp_business_product_sale_padding',array(
		'label'	=> esc_html__('Product Sale Padding','the-wp-business'),
		'section'=> 'the_wp_business_woocommerce',
	));

	$wp_customize->add_setting( 'the_wp_business_product_sale_top_padding',array(
		'default' => 0,
		'sanitize_callback' => 'the_wp_business_sanitize_float'
	));
	$wp_customize->add_control('the_wp_business_product_sale_top_padding', array(
		'label' => esc_html__( 'Top','the-wp-business' ),
		'type' => 'number',
		'section' => 'the_wp_business_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting('the_wp_business_product_sale_bottom_padding',array(
		'default' => 0,
		'sanitize_callback' => 'the_wp_business_sanitize_float'
	));
	$wp_customize->add_control('the_wp_business_product_sale_bottom_padding', array(
		'label' => esc_html__( 'Bottom','the-wp-business' ),
		'type' => 'number',
		'section' => 'the_wp_business_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting('the_wp_business_product_sale_left_padding',array(
		'default' => 0,
		'sanitize_callback' => 'the_wp_business_sanitize_float'
	));
	$wp_customize->add_control('the_wp_business_product_sale_left_padding', array(
		'label' => esc_html__( 'Left','the-wp-business' ),
		'type' => 'number',
		'section' => 'the_wp_business_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting('the_wp_business_product_sale_right_padding',array(
		'default' => 0,
		'sanitize_callback' => 'the_wp_business_sanitize_float'
	));
	$wp_customize->add_control('the_wp_business_product_sale_right_padding', array(
		'label' => esc_html__( 'Right','the-wp-business' ),
		'type' => 'number',
		'section' => 'the_wp_business_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting( 'the_wp_business_product_sale_border_radius',array(
		'default' => '50',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control( new The_WP_Business_WP_Customize_Range_Control( $wp_customize, 'the_wp_business_product_sale_border_radius', array(
        'label'  => __('Product Sale Border Radius','the-wp-business'),
        'section'  => 'the_wp_business_woocommerce',
        'description' => __('Measurement is in pixel.','the-wp-business'),
        'input_attrs' => array(
            'min' => 0,
            'max' => 50,
        )
    )));

	//Footer
	$wp_customize->add_section('the_wp_business_footer_section',array(
		'title'	=> __('Footer Section','the-wp-business'),
		'description'	=> '',
		'priority'	=> null,
		'panel' => 'the_wp_business_panel_id',
	));

	$wp_customize->add_setting('the_wp_business_hide_scroll',array(
        'default' => 'true',
        'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_wp_business_hide_scroll',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide Back To Top','the-wp-business'),
      	'section' => 'the_wp_business_footer_section',
	));

	$wp_customize->add_setting('the_wp_business_back_to_top',array(
        'default' => __('Right','the-wp-business'),
        'sanitize_callback' => 'the_wp_business_sanitize_choices'
	));
	$wp_customize->add_control('the_wp_business_back_to_top',array(
        'type' => 'radio',
        'label' => __('Back to Top Alignment','the-wp-business'),
        'section' => 'the_wp_business_footer_section',
        'choices' => array(
            'Left' => __('Left','the-wp-business'),
            'Right' => __('Right','the-wp-business'),
            'Center' => __('Center','the-wp-business'),
        ),
	) );

	$wp_customize->add_setting('the_wp_business_footer_widget',array(
        'default'           => '4',
        'sanitize_callback' => 'the_wp_business_sanitize_choices',
    ));
    $wp_customize->add_control('the_wp_business_footer_widget',array(
        'type'        => 'radio',
        'label'       => __('No. of Footer columns', 'the-wp-business'),
        'section'     => 'the_wp_business_footer_section',
        'description' => __('Select the number of footer columns and add your widgets in the footer.', 'the-wp-business'),
        'choices' => array(
            '1'     => __('One column', 'the-wp-business'),
            '2'     => __('Two columns', 'the-wp-business'),
            '3'     => __('Three columns', 'the-wp-business'),
            '4'     => __('Four columns', 'the-wp-business')
        ),
    )); 

    $wp_customize->add_setting('the_wp_business_copyright_padding',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('the_wp_business_copyright_padding',array(
		'label'	=> esc_html__('Copyright Padding','the-wp-business'),
		'section'=> 'the_wp_business_footer_section',
	));

    $wp_customize->add_setting('the_wp_business_top_copyright_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'the_wp_business_sanitize_float'
	));
	$wp_customize->add_control('the_wp_business_top_copyright_padding',array(
		'description'	=> __('Top','the-wp-business'),
		'input_attrs' => array(
            'step' => 1,
			'min' => 0,
			'max' => 50,
        ),
		'section'=> 'the_wp_business_footer_section',
		'type'=> 'number'
	));

	$wp_customize->add_setting('the_wp_business_bottom_copyright_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'the_wp_business_sanitize_float'
	));
	$wp_customize->add_control('the_wp_business_bottom_copyright_padding',array(
		'description'	=> __('Bottom','the-wp-business'),
		'input_attrs' => array(
            'step' => 1,
			'min' => 0,
			'max' => 50,
        ),
		'section'=> 'the_wp_business_footer_section',
		'type'=> 'number'
	));

	$wp_customize->add_setting('the_wp_business_copyright_alignment',array(
        'default' => 'center',
        'sanitize_callback' => 'the_wp_business_sanitize_choices'
	));
	$wp_customize->add_control('the_wp_business_copyright_alignment',array(
        'type' => 'radio',
        'label' => __('Copyright Alignment','the-wp-business'),
        'section' => 'the_wp_business_footer_section',
        'choices' => array(
            'left' => __('Left','the-wp-business'),
            'right' => __('Right','the-wp-business'),
            'center' => __('Center','the-wp-business'),
        ),
	) );

	$wp_customize->add_setting( 'the_wp_business_copyright_font_size', array(
		'default'=> '15',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( new The_WP_Business_WP_Customize_Range_Control( $wp_customize, 'the_wp_business_copyright_font_size', array(
        'label'  => __('Copyright Font Size','the-wp-business'),
        'section'  => 'the_wp_business_footer_section',
        'description' => __('Measurement is in pixel.','the-wp-business'),
        'input_attrs' => array(
            'min' => 0,
            'max' => 50,
        )
    )));
	
	$wp_customize->add_setting('the_wp_business_footer_copy',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field',
	));	
	$wp_customize->add_control('the_wp_business_footer_copy',array(
		'label'	=> __('Copyright Text','the-wp-business'),
		'section'	=> 'the_wp_business_footer_section',
		'type'		=> 'text'
	));
	
}
add_action( 'customize_register', 'the_wp_business_customize_register' );

// logo resize
load_template( trailingslashit( get_template_directory() ) . '/inc/logo/logo-resizer.php' );

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class The_WP_Business_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'The_WP_Business_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new The_WP_Business_Customize_Section_Pro(
				$manager,
				'example_1',
				array(
					'priority'	=> 9,
					'title'    => esc_html__( 'Upgrade to Pro', 'the-wp-business' ),
					'pro_text' => esc_html__( 'Go Pro', 'the-wp-business' ),
					'pro_url'  => esc_url( 'https://www.themesglance.com/themes/business-wordpress-theme/' ),
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'the-wp-business-customize-controls', trailingslashit( get_template_directory_uri() ) . '/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'the-wp-business-customize-controls', trailingslashit( get_template_directory_uri() ) . '/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
The_WP_Business_Customize::get_instance();