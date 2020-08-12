<?php
	
	/*---------------------------First highlight color-------------------*/
	$finance_accounting_first_theme_color = get_theme_mod('finance_accounting_first_theme_color');

	$finance_accounting_custom_css = '';

	if($finance_accounting_first_theme_color != false){
		$finance_accounting_custom_css .='.top-data i, .slide-button a, .site-info, .woocommerce span.onsale, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, nav.woocommerce-MyAccount-navigation ul li, button.search-submit:hover, .search-form .search-submit, .prev.page-numbers, .next.page-numbers, a.page-numbers, button, input[type="button"], input[type="submit"],.scrollup i,.tags p a, .comment-reply-link, .post-navigation .nav-next a, .post-navigation .nav-previous a,horizontal .ui-slider-range, .woocommerce .widget_price_filter .ui-slider-horizontal .ui-slider-range, .woocommerce .widget_price_filter .ui-slider .ui-slider-handle, .site-footer form.woocommerce-product-search button:hover, .widget .tagcloud a:hover, .widget .tagcloud a:focus, .widget.widget_tag_cloud a:hover, .widget.widget_tag_cloud a:focus, .wp_widget_tag_cloud a:hover, .wp_widget_tag_cloud a:focus, #sidebox .search-form .search-submit, .site-footer .search-form .search-submit{';
			$finance_accounting_custom_css .='background-color: '.esc_html($finance_accounting_first_theme_color).';';
		$finance_accounting_custom_css .='}';
	}
	if($finance_accounting_first_theme_color != false){
		$finance_accounting_custom_css .='.logo h1 a, .navigation-top a, .post-info i, a.post-link:hover, #services h5 a,.main-navigation li li:focus > a,
	.main-navigation li li:hover > a,.main-navigation ul ul li a,.logo h1 a,.site-title, .site-title a, .blogger.singlebox .category a:hover,#sidebox ul li a:hover,.post-info a:hover, #services h3 a{';
			$finance_accounting_custom_css .='color: '.esc_html($finance_accounting_first_theme_color).';';
		$finance_accounting_custom_css .='}';
	}
	if($finance_accounting_first_theme_color != false){
		$finance_accounting_custom_css .='hr.slide,.scrollup i{';
			$finance_accounting_custom_css .='border-color: '.esc_html($finance_accounting_first_theme_color).';';
		$finance_accounting_custom_css .='}';
	}
	if($finance_accounting_first_theme_color != false){
		$finance_accounting_custom_css .='.main-navigation ul ul li:hover{';
			$finance_accounting_custom_css .='border-left-color: '.esc_html($finance_accounting_first_theme_color).';';
		$finance_accounting_custom_css .='}';
	}

	/*-------------Second highlight color-------------------*/
	$finance_accounting_second_color = get_theme_mod('finance_accounting_second_color');

	if($finance_accounting_second_color != false){
		$finance_accounting_custom_css .=' .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, .slide-button a:hover, button:hover, button:focus, input[type="button"]:hover, input[type="button"]:focus, input[type="submit"]:hover, input[type="submit"]:focus,.comment-reply-link:hover,.tags p a:hover,.post-navigation .nav-next a:hover, .post-navigation .nav-previous a:hover, .woocommerce .widget_price_filter .price_slider_wrapper .ui-widget-content{';
			$finance_accounting_custom_css .='background-color: '.esc_html($finance_accounting_second_color).';';
		$finance_accounting_custom_css .='}';
	}
	if($finance_accounting_second_color != false){
		$finance_accounting_custom_css .='{';
			$finance_accounting_custom_css .='color: '.esc_html($finance_accounting_second_color).';';
		$finance_accounting_custom_css .='}';
	}
	if($finance_accounting_second_color != false){
		$finance_accounting_custom_css .='#services h2{';
			$finance_accounting_custom_css .='border-color: '.esc_html($finance_accounting_second_color).';';
		$finance_accounting_custom_css .='}';
	}
	if($finance_accounting_second_color != false){
		$finance_accounting_custom_css .='.woocommerce-info::before{';
			$finance_accounting_custom_css .='color: '.esc_html($finance_accounting_second_color).';';
		$finance_accounting_custom_css .='}';
	}
	if($finance_accounting_second_color != false){
		$finance_accounting_custom_css .='.woocommerce-info{';
			$finance_accounting_custom_css .='border-top-color: '.esc_html($finance_accounting_second_color).';';
		$finance_accounting_custom_css .='}';
	}

	/*---------------------------Width Layout -------------------*/
	$finance_accounting_theme_lay = get_theme_mod( 'finance_accounting_theme_options','Default');
    if($finance_accounting_theme_lay == 'Default'){
		$finance_accounting_custom_css .='body{';
			$finance_accounting_custom_css .='max-width: 100%;';
		$finance_accounting_custom_css .='}';
		$finance_accounting_custom_css .='.page-template-custom-home-page .middle-header{';
			$finance_accounting_custom_css .='width: 97.3%';
		$finance_accounting_custom_css .='}';
	}else if($finance_accounting_theme_lay == 'Wide Layout'){
		$finance_accounting_custom_css .='body{';
			$finance_accounting_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$finance_accounting_custom_css .='}';
		$finance_accounting_custom_css .='.page-template-custom-home-page .middle-header{';
			$finance_accounting_custom_css .='width: 97.7%';
		$finance_accounting_custom_css .='}';
	}else if($finance_accounting_theme_lay == 'Box Layout'){
		$finance_accounting_custom_css .='body{';
			$finance_accounting_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$finance_accounting_custom_css .='}';
	}

	/*--------------------------- Slider Opacity -------------------*/
	$finance_accounting_slider_layout = get_theme_mod( 'finance_accounting_slider_opacity_color','0.7');
	if($finance_accounting_slider_layout == '0'){
		$finance_accounting_custom_css .='#slider-section img{';
			$finance_accounting_custom_css .='opacity:0';
		$finance_accounting_custom_css .='}';
		}else if($finance_accounting_slider_layout == '0.1'){
		$finance_accounting_custom_css .='#slider-section img{';
			$finance_accounting_custom_css .='opacity:0.1';
		$finance_accounting_custom_css .='}';
		}else if($finance_accounting_slider_layout == '0.2'){
		$finance_accounting_custom_css .='#slider-section img{';
			$finance_accounting_custom_css .='opacity:0.2';
		$finance_accounting_custom_css .='}';
		}else if($finance_accounting_slider_layout == '0.3'){
		$finance_accounting_custom_css .='#slider-section img{';
			$finance_accounting_custom_css .='opacity:0.3';
		$finance_accounting_custom_css .='}';
		}else if($finance_accounting_slider_layout == '0.4'){
		$finance_accounting_custom_css .='#slider-section img{';
			$finance_accounting_custom_css .='opacity:0.4';
		$finance_accounting_custom_css .='}';
		}else if($finance_accounting_slider_layout == '0.5'){
		$finance_accounting_custom_css .='#slider-section img{';
			$finance_accounting_custom_css .='opacity:0.5';
		$finance_accounting_custom_css .='}';
		}else if($finance_accounting_slider_layout == '0.6'){
		$finance_accounting_custom_css .='#slider-section img{';
			$finance_accounting_custom_css .='opacity:0.6';
		$finance_accounting_custom_css .='}';
		}else if($finance_accounting_slider_layout == '0.7'){
		$finance_accounting_custom_css .='#slider-section img{';
			$finance_accounting_custom_css .='opacity:0.7';
		$finance_accounting_custom_css .='}';
		}else if($finance_accounting_slider_layout == '0.8'){
		$finance_accounting_custom_css .='#slider-section img{';
			$finance_accounting_custom_css .='opacity:0.8';
		$finance_accounting_custom_css .='}';
		}else if($finance_accounting_slider_layout == '0.9'){
		$finance_accounting_custom_css .='#slider-section img{';
			$finance_accounting_custom_css .='opacity:0.9';
		$finance_accounting_custom_css .='}';
		}

	/*---------------------------Slider Content Layout -------------------*/
	$finance_accounting_slider_layout = get_theme_mod( 'finance_accounting_slider_content_option','Left');
    if($finance_accounting_slider_layout == 'Left'){
		$finance_accounting_custom_css .='#slider-section .carousel-caption{';
			$finance_accounting_custom_css .='text-align:left; left:10%; right:50%;';
		$finance_accounting_custom_css .='}';
		$finance_accounting_custom_css .='
		@media screen and (max-width: 990px) and (min-width: 768px){
		#slider .carousel-caption{';
		$finance_accounting_custom_css .='top:57%;';
		$finance_accounting_custom_css .='} }';
		$finance_accounting_custom_css .='
		@media screen and (max-width: 768px){
		#slider-section .slide-button a{';
		$finance_accounting_custom_css .='font-size:10px;';
		$finance_accounting_custom_css .='} 
		#slider-section .carousel-caption{';
		$finance_accounting_custom_css .='top:52%;';
		$finance_accounting_custom_css .='} }';
	}else if($finance_accounting_slider_layout == 'Center'){
		$finance_accounting_custom_css .='#slider-section .carousel-caption{';
			$finance_accounting_custom_css .='text-align:center; left:30%; right:30%;';
		$finance_accounting_custom_css .='}';
		$finance_accounting_custom_css .='#slider-section .inner_carousel{';
			$finance_accounting_custom_css .='text-align:center;';
		$finance_accounting_custom_css .='}';
		$finance_accounting_custom_css .='hr.slide{';
			$finance_accounting_custom_css .='margin:0 auto 1rem;';
		$finance_accounting_custom_css .='}';
		$finance_accounting_custom_css .='
		@media screen and (max-width: 768px){
		#slider-section .slide-button a{';
		$finance_accounting_custom_css .='font-size:10px;';
		$finance_accounting_custom_css .='} }';
	}else if($finance_accounting_slider_layout == 'Right'){
		$finance_accounting_custom_css .='#slider-section .carousel-caption{';
			$finance_accounting_custom_css .='text-align:right; left:50%; right:10%;';
		$finance_accounting_custom_css .='}';
		$finance_accounting_custom_css .='#slider-section .inner_carousel{';
			$finance_accounting_custom_css .='text-align:right;';
		$finance_accounting_custom_css .='}';
		$finance_accounting_custom_css .='hr.slide{';
			$finance_accounting_custom_css .='margin-right:0 ; margin-left:auto;';
		$finance_accounting_custom_css .='}';
		$finance_accounting_custom_css .='
		@media screen and (max-width: 768px){
		#slider-section .slide-button a{';
		$finance_accounting_custom_css .='font-size:10px;';
		$finance_accounting_custom_css .='} 
		#slider-section .carousel-caption{';
		$finance_accounting_custom_css .='top:52%;';
		$finance_accounting_custom_css .='} }';
	}

	/*------------------------------ Button Settings option-----------------------*/
	$finance_accounting_top_bottom_padding = get_theme_mod('finance_accounting_top_bottom_padding');
	$finance_accounting_left_right_padding = get_theme_mod('finance_accounting_left_right_padding');
	if($finance_accounting_top_bottom_padding != false || $finance_accounting_left_right_padding != false){
		$finance_accounting_custom_css .='a.post-link, .slide-button a, .form-submit input[type="submit"]{';
			$finance_accounting_custom_css .='padding-top: '.esc_html($finance_accounting_top_bottom_padding).'px; padding-bottom: '.esc_html($finance_accounting_top_bottom_padding).'px; padding-left: '.esc_html($finance_accounting_left_right_padding).'px; padding-right: '.esc_html($finance_accounting_left_right_padding).'px; display:inline-block;';
		$finance_accounting_custom_css .='}';
	}

	$finance_accounting_border_radius = get_theme_mod('finance_accounting_border_radius');
	$finance_accounting_custom_css .='a.post-link,.slide-button a, .form-submit input[type="submit"]{';
		$finance_accounting_custom_css .='border-radius: '.esc_html($finance_accounting_border_radius).'px;';
	$finance_accounting_custom_css .='}';
	

	$show_header = get_theme_mod( 'finance_accounting_button_border', false);
	if($show_header == true){
		$finance_accounting_custom_css .='a.post-link{';
			$finance_accounting_custom_css .='border:2px solid #53507b;margin:10px 0;';
		$finance_accounting_custom_css .='}';
	}

	/*---------------------------Blog Layout -------------------*/
	$finance_accounting_theme_lay = get_theme_mod( 'finance_accounting_blog_post_layout','Default');
    if($finance_accounting_theme_lay == 'Default'){
		$finance_accounting_custom_css .='.blogger{';
			$finance_accounting_custom_css .='';
		$finance_accounting_custom_css .='}';
	}elseif($finance_accounting_theme_lay == 'Left'){
		$finance_accounting_custom_css .='.blogger, .blogger h2, .post-info, .text p, .blogger .post-link{';
			$finance_accounting_custom_css .='text-align:left;';
		$finance_accounting_custom_css .='}';
		$finance_accounting_custom_css .='.post-info{';
			$finance_accounting_custom_css .='margin-top:10px;';
		$finance_accounting_custom_css .='}';
		$finance_accounting_custom_css .='.blogger .post-link{';
			$finance_accounting_custom_css .='margin-top:25px;';
		$finance_accounting_custom_css .='}';
	}elseif($finance_accounting_theme_lay == 'Image and Content'){
		$finance_accounting_custom_css .='.blogger, .blogger h2, .post-info, .text p, #our-services p{';
			$finance_accounting_custom_css .='text-align:Left;';
		$finance_accounting_custom_css .='}';
		$finance_accounting_custom_css .='.blogger .post-link{';
			$finance_accounting_custom_css .='text-align:right;';
		$finance_accounting_custom_css .='}';
	}

	/*--------- Preloader Color Option -------*/
	$finance_accounting_loader_color_setting = get_theme_mod('finance_accounting_loader_color_setting');

	if($finance_accounting_loader_color_setting != false){
		$finance_accounting_custom_css .=' .circle .inner{';
			$finance_accounting_custom_css .='border-color: '.esc_html($finance_accounting_loader_color_setting).';';
		$finance_accounting_custom_css .='} ';
	}

	$finance_accounting_loader_background_color = get_theme_mod('finance_accounting_loader_background_color');

	if($finance_accounting_loader_background_color != false){
		$finance_accounting_custom_css .=' #pre-loader{';
			$finance_accounting_custom_css .='background-color: '.esc_html($finance_accounting_loader_background_color).';';
		$finance_accounting_custom_css .='} ';
	}

	$finance_accounting_theme_lay = get_theme_mod( 'finance_accounting_preloader_types','Default');
    if($finance_accounting_theme_lay == 'Default'){
		$finance_accounting_custom_css .='{';
			$finance_accounting_custom_css .='';
		$finance_accounting_custom_css .='}';
	}elseif($finance_accounting_theme_lay == 'Circle'){
		$finance_accounting_custom_css .='.circle .inner{';
			$finance_accounting_custom_css .='width:unset;';
		$finance_accounting_custom_css .='}';
	}elseif($finance_accounting_theme_lay == 'Two Circle'){
		$finance_accounting_custom_css .='.circle .inner{';
			$finance_accounting_custom_css .='width:80%;
    border-right: 5px;';
		$finance_accounting_custom_css .='}';
	}

	// Responsive Media
	$sidebar = get_theme_mod( 'finance_accounting_enable_disable_sidebar',true);
    if($sidebar == true){
    	$finance_accounting_custom_css .='@media screen and (max-width:575px) {';
		$finance_accounting_custom_css .='#sidebox{';
			$finance_accounting_custom_css .='display:block;';
		$finance_accounting_custom_css .='} }';
	}else if($sidebar == false){
		$finance_accounting_custom_css .='@media screen and (max-width:575px) {';
		$finance_accounting_custom_css .='#sidebox{';
			$finance_accounting_custom_css .='display:none;';
		$finance_accounting_custom_css .='} }';
	}

	$stickyheader = get_theme_mod( 'finance_accounting_enable_disable_fixed_header',false);
	if($stickyheader == true && get_theme_mod( 'finance_accounting_fixed_header', false) == false){
    	$finance_accounting_custom_css .='.fixed-header{';
			$finance_accounting_custom_css .='position:static;';
		$finance_accounting_custom_css .='} ';
	}
    if($stickyheader == true){
    	$finance_accounting_custom_css .='@media screen and (max-width:575px) {';
		$finance_accounting_custom_css .='.fixed-header{';
			$finance_accounting_custom_css .='position:fixed;';
		$finance_accounting_custom_css .='} }';
	}else if($stickyheader == false){
		$finance_accounting_custom_css .='@media screen and (max-width:575px) {';
		$finance_accounting_custom_css .='.fixed-header{';
			$finance_accounting_custom_css .='position:static;';
		$finance_accounting_custom_css .='} }';
	}

	$sliderbutton = get_theme_mod( 'finance_accounting_enable_disable_slider', false);
	if($sliderbutton == true && get_theme_mod( 'finance_accounting_slider_hide', false) == false){
    	$finance_accounting_custom_css .='#slider-section{';
			$finance_accounting_custom_css .='display:none;';
		$finance_accounting_custom_css .='} ';
	}
    if($sliderbutton == true){
    	$finance_accounting_custom_css .='@media screen and (max-width:575px) {';
		$finance_accounting_custom_css .='#slider-section{';
			$finance_accounting_custom_css .='display:block;';
		$finance_accounting_custom_css .='} }';
	}else if($sliderbutton == false){
		$finance_accounting_custom_css .='@media screen and (max-width:575px){';
		$finance_accounting_custom_css .='#slider-section{';
			$finance_accounting_custom_css .='display:none;';
		$finance_accounting_custom_css .='} }';
	}

	$sliderbutton = get_theme_mod( 'finance_accounting_enable_disable_scrolltop',true);
	if($sliderbutton == true && get_theme_mod( 'finance_accounting_hide_show_scroll',true) != true){
    	$finance_accounting_custom_css .='.scrollup i{';
			$finance_accounting_custom_css .='display:none;';
		$finance_accounting_custom_css .='} ';
	}
    if($sliderbutton == true){
    	$finance_accounting_custom_css .='@media screen and (max-width:575px) {';
		$finance_accounting_custom_css .='.scrollup i{';
			$finance_accounting_custom_css .='display:block;';
		$finance_accounting_custom_css .='} }';
	}else if($sliderbutton == false){
		$finance_accounting_custom_css .='@media screen and (max-width:575px){';
		$finance_accounting_custom_css .='.scrollup i{';
			$finance_accounting_custom_css .='display:none;';
		$finance_accounting_custom_css .='} }';
	}

	$sliderbutton = get_theme_mod( 'finance_accounting_show_hide_slider_button',true);
	if($sliderbutton == true && get_theme_mod( 'finance_accounting_slider_button', true) == false){
    	$finance_accounting_custom_css .='#slider-section .slide-button{';
			$finance_accounting_custom_css .='display:none;';
		$finance_accounting_custom_css .='} ';
	}
    if($sliderbutton == true){
    	$finance_accounting_custom_css .='@media screen and (max-width:575px) {';
		$finance_accounting_custom_css .='#slider-section .slide-button{';
			$finance_accounting_custom_css .='display:block;';
		$finance_accounting_custom_css .='} }';
	}else if($sliderbutton == false){
		$finance_accounting_custom_css .='@media screen and (max-width:575px){';
		$finance_accounting_custom_css .='#slider-section .slide-button{';
			$finance_accounting_custom_css .='display:none;';
		$finance_accounting_custom_css .='} }';
	}

	// Copyright top-bottom padding setting 
	$finance_accounting_copyright_top_bottom_padding = get_theme_mod('finance_accounting_copyright_top_bottom_padding');
	if($finance_accounting_copyright_top_bottom_padding != false){
		$finance_accounting_custom_css .='.site-info{';
			$finance_accounting_custom_css .='padding-top: '.esc_html($finance_accounting_copyright_top_bottom_padding).'px; padding-bottom: '.esc_html($finance_accounting_copyright_top_bottom_padding).'px;';
		$finance_accounting_custom_css .='}';
	}

	// scroll to top setting
	$finance_accounting_scroll_border_radius = get_theme_mod('finance_accounting_scroll_border_radius');
	if($finance_accounting_scroll_border_radius != false){
		$finance_accounting_custom_css .='.scrollup i{';
			$finance_accounting_custom_css .='border-radius: '.esc_html($finance_accounting_scroll_border_radius).'px;';
		$finance_accounting_custom_css .='}';
	}

	$finance_accounting_scroll_top_fontsize = get_theme_mod('finance_accounting_scroll_top_fontsize');
	if($finance_accounting_scroll_top_fontsize != false){
		$finance_accounting_custom_css .='.scrollup i{';
			$finance_accounting_custom_css .='font-size: '.esc_html($finance_accounting_scroll_top_fontsize).'px;';
		$finance_accounting_custom_css .='}';
	}

	$finance_accounting_scroll_top_bottom_padding = get_theme_mod('finance_accounting_scroll_top_bottom_padding');
	$finance_accounting_scroll_left_right_padding = get_theme_mod('finance_accounting_scroll_left_right_padding');
	if($finance_accounting_scroll_top_bottom_padding != false || $finance_accounting_scroll_left_right_padding != false){
		$finance_accounting_custom_css .='.scrollup i{';
			$finance_accounting_custom_css .='padding-top: '.esc_html($finance_accounting_scroll_top_bottom_padding).'px; padding-bottom: '.esc_html($finance_accounting_scroll_top_bottom_padding).'px; padding-left: '.esc_html($finance_accounting_scroll_left_right_padding).'px; padding-right: '.esc_html($finance_accounting_scroll_left_right_padding).'px;';
		$finance_accounting_custom_css .='}';
	}

	// Slider Height 
	$finance_accounting_slider_height_option = get_theme_mod('finance_accounting_slider_height_option');
	if($finance_accounting_slider_height_option != false){
		$finance_accounting_custom_css .='#slider-section img{';
			$finance_accounting_custom_css .='height: '.esc_html($finance_accounting_slider_height_option).'px;';
		$finance_accounting_custom_css .='}';
	}
