<?php
	
	$the_wp_business_theme_color = get_theme_mod('the_wp_business_theme_color');

	$the_wp_business_custom_css = '';

	if($the_wp_business_theme_color != false){
		$the_wp_business_custom_css .='input[type="submit"], #footer input[type="submit"], .hovereffect a:hover, .bradcrumbs a, #comments input[type="submit"].submit, #comments a.comment-reply-link, #sidebar h3, #sidebar input[type="submit"], a.button,  #header .header-top, .page-template-custom-front-page .search-box span i, .page-template-custom-front-page .testbutton a, .woocommerce a.button, .woocommerce a.added_to_cart, .woocommerce button.button.alt, .woocommerce a.button.alt, .woocommerce input.button.alt, .woocommerce .cart .button, .woocommerce .cart input.button, nav.woocommerce-MyAccount-navigation ul li, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .postbox a, .date-monthwrap, .inner, .read-more a, .pagination span, .pagination a,  .pagination .current, .woocommerce span.onsale, #header, .yearwrap, span.meta-nav{';
			$the_wp_business_custom_css .='background-color: '.esc_html($the_wp_business_theme_color).';';
		$the_wp_business_custom_css .='}';
	}
	if($the_wp_business_theme_color != false){
		$the_wp_business_custom_css .='a, .notfound h1, #sidebar ul li a:hover, .nav-menu ul ul a:hover, .footerinner ul li a:hover, .search-box span i, h2.woocommerce-loop-product__title, .woocommerce select.orderby, p.woocommerce-result-count, h1.woocommerce-products-header__title , .woocommerce div.product .product_title, .read-more a:hover, .title-box, span.post-title, .woocommerce-message::before  {';
			$the_wp_business_custom_css .='color: '.esc_html($the_wp_business_theme_color).';';
		$the_wp_business_custom_css .='}';
	}
	if($the_wp_business_theme_color != false){
		$the_wp_business_custom_css .=' 
		@media screen and (max-width:1000px){
			.nav-menu .current_page_ancestor > a{';
			$the_wp_business_custom_css .='color: '.esc_html($the_wp_business_theme_color).';';
		$the_wp_business_custom_css .='} }';
	}
	if($the_wp_business_theme_color != false){
		$the_wp_business_custom_css .='a.button, #header, .woocommerce select.orderby, #footer h3, .woocommerce-message {';
			$the_wp_business_custom_css .='border-color: '.esc_html($the_wp_business_theme_color).';';
		$the_wp_business_custom_css .='}';
	}
	if($the_wp_business_theme_color != false){
		$the_wp_business_custom_css .='.hvr-sweep-to-right {';
			$the_wp_business_custom_css .='box-shadow: 0 0 5px '.esc_html($the_wp_business_theme_color).';';
		$the_wp_business_custom_css .='}';
	}

	// Layout Options
	$the_wp_business_theme_layout = get_theme_mod( 'the_wp_business_theme_layout_options','Default Theme');
    if($the_wp_business_theme_layout == 'Default Theme'){
		$the_wp_business_custom_css .='body{';
			$the_wp_business_custom_css .='max-width: 100%;';
		$the_wp_business_custom_css .='}';
	}else if($the_wp_business_theme_layout == 'Container Theme'){
		$the_wp_business_custom_css .='body{';
			$the_wp_business_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$the_wp_business_custom_css .='}';
		$the_wp_business_custom_css .='.page-template-custom-front-page #header{';
			$the_wp_business_custom_css .='width: 97.7%';
		$the_wp_business_custom_css .='}';
		$the_wp_business_custom_css .='
		@media screen and (min-width:1000px) and (max-width:1024px){
			.page-template-custom-front-page #header{';
			$the_wp_business_custom_css .='width:97%;';
		$the_wp_business_custom_css .='} }';
		$the_wp_business_custom_css .='
		@media screen and (min-width:720px) and (max-width:1000px){
			.page-template-custom-front-page #header{';
			$the_wp_business_custom_css .='width:96.1%;';
		$the_wp_business_custom_css .='} }';
		$the_wp_business_custom_css .='
		@media screen and  (max-width:720px){
			.page-template-custom-front-page #header{';
			$the_wp_business_custom_css .='width:100%;';
		$the_wp_business_custom_css .='} }';
	}else if($the_wp_business_theme_layout == 'Box Container Theme'){
		$the_wp_business_custom_css .='body{';
			$the_wp_business_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$the_wp_business_custom_css .='}';
		$the_wp_business_custom_css .='.page-template-custom-front-page #header{';
			$the_wp_business_custom_css .='width: 86.4%;';
		$the_wp_business_custom_css .='}';
		$the_wp_business_custom_css .='
		@media screen and (min-width:1000px) and (max-width:1024px){
			.page-template-custom-front-page #header{';
			$the_wp_business_custom_css .='width:97% ;';
		$the_wp_business_custom_css .='} }';
		$the_wp_business_custom_css .='
		@media screen and (min-width:720px) and (max-width:1000px){
			.page-template-custom-front-page #header{';
			$the_wp_business_custom_css .='width:96.1%;';
		$the_wp_business_custom_css .='} }';
		$the_wp_business_custom_css .='
		@media screen and  (max-width:720px){
			.page-template-custom-front-page #header{';
			$the_wp_business_custom_css .='width:100%;';
		$the_wp_business_custom_css .='} }';
	}

	/*--------------------------- Slider Opacity -------------------*/
	$the_wp_business_slider_layout = get_theme_mod( 'the_wp_business_slider_opacity_color','0.7');
	if($the_wp_business_slider_layout == '0'){
		$the_wp_business_custom_css .='#slider img{';
			$the_wp_business_custom_css .='opacity:0';
		$the_wp_business_custom_css .='}';
	}else if($the_wp_business_slider_layout == '0.1'){
		$the_wp_business_custom_css .='#slider img{';
			$the_wp_business_custom_css .='opacity:0.1';
		$the_wp_business_custom_css .='}';
	}else if($the_wp_business_slider_layout == '0.2'){
		$the_wp_business_custom_css .='#slider img{';
			$the_wp_business_custom_css .='opacity:0.2';
		$the_wp_business_custom_css .='}';
	}else if($the_wp_business_slider_layout == '0.3'){
		$the_wp_business_custom_css .='#slider img{';
			$the_wp_business_custom_css .='opacity:0.3';
		$the_wp_business_custom_css .='}';
	}else if($the_wp_business_slider_layout == '0.4'){
		$the_wp_business_custom_css .='#slider img{';
			$the_wp_business_custom_css .='opacity:0.4';
		$the_wp_business_custom_css .='}';
	}else if($the_wp_business_slider_layout == '0.5'){
		$the_wp_business_custom_css .='#slider img{';
			$the_wp_business_custom_css .='opacity:0.5';
		$the_wp_business_custom_css .='}';
	}else if($the_wp_business_slider_layout == '0.6'){
		$the_wp_business_custom_css .='#slider img{';
			$the_wp_business_custom_css .='opacity:0.6';
		$the_wp_business_custom_css .='}';
	}else if($the_wp_business_slider_layout == '0.7'){
		$the_wp_business_custom_css .='#slider img{';
			$the_wp_business_custom_css .='opacity:0.7';
		$the_wp_business_custom_css .='}';
	}else if($the_wp_business_slider_layout == '0.8'){
		$the_wp_business_custom_css .='#slider img{';
			$the_wp_business_custom_css .='opacity:0.8';
		$the_wp_business_custom_css .='}';
	}else if($the_wp_business_slider_layout == '0.9'){
		$the_wp_business_custom_css .='#slider img{';
			$the_wp_business_custom_css .='opacity:0.9';
		$the_wp_business_custom_css .='}';
	}

	/*---------------Slider Content Layout -------------------*/
	$the_wp_business_slider_layout = get_theme_mod( 'the_wp_business_slider_alignment_option','Center Align');
    if($the_wp_business_slider_layout == 'Left Align'){
		$the_wp_business_custom_css .='#slider .carousel-caption, #slider .inner_carousel{';
			$the_wp_business_custom_css .='text-align:left;';
		$the_wp_business_custom_css .='}';
		$the_wp_business_custom_css .='#slider .inner_carousel p{';
		$the_wp_business_custom_css .='padding-left:0;';
		$the_wp_business_custom_css .='}';
		$the_wp_business_custom_css .='#slider .carousel-caption{';
		$the_wp_business_custom_css .='left:15%; right:25%;';
		$the_wp_business_custom_css .='}';
	}else if($the_wp_business_slider_layout == 'Center Align'){
		$the_wp_business_custom_css .='#slider .carousel-caption, #slider .inner_carousel{';
			$the_wp_business_custom_css .='text-align:center;';
		$the_wp_business_custom_css .='}';
	}else if($the_wp_business_slider_layout == 'Right Align'){
		$the_wp_business_custom_css .='#slider .carousel-caption, #slider .inner_carousel{';
			$the_wp_business_custom_css .='text-align:right;';
		$the_wp_business_custom_css .='}';
		$the_wp_business_custom_css .='#slider .inner_carousel p{';
		$the_wp_business_custom_css .='padding-right:0;';
		$the_wp_business_custom_css .='}';
		$the_wp_business_custom_css .='#slider .carousel-caption{';
		$the_wp_business_custom_css .='left:25%; right:15%;';
		$the_wp_business_custom_css .='}';
	}

	/*--------- Preloader Color Option -------*/
	$the_wp_business_preloader_color = get_theme_mod('the_wp_business_preloader_color');

	if($the_wp_business_preloader_color != false){
		$the_wp_business_custom_css .=' .tg-loader{';
			$the_wp_business_custom_css .='border-color: '.esc_html($the_wp_business_preloader_color).';';
		$the_wp_business_custom_css .='} ';
		$the_wp_business_custom_css .=' .tg-loader-inner{';
			$the_wp_business_custom_css .='background-color: '.esc_html($the_wp_business_preloader_color).';';
		$the_wp_business_custom_css .='} ';
	}

	$the_wp_business_preloader_bg_color = get_theme_mod('the_wp_business_preloader_bg_color');

	if($the_wp_business_preloader_bg_color != false){
		$the_wp_business_custom_css .=' #overlayer{';
			$the_wp_business_custom_css .='background-color: '.esc_html($the_wp_business_preloader_bg_color).';';
		$the_wp_business_custom_css .='} ';
	}

	/*------- Topbar settings -----*/
	$the_wp_business_top_header = get_theme_mod('the_wp_business_top_header',true);
	if($the_wp_business_top_header == false){
		$the_wp_business_custom_css .=' .menu-sec{';
			$the_wp_business_custom_css .='margin: 0;';
		$the_wp_business_custom_css .='} ';
	}

	/*------------ Button Settings option-----------------*/
	$the_wp_business_top_button_padding = get_theme_mod('the_wp_business_top_button_padding');
	$the_wp_business_bottom_button_padding = get_theme_mod('the_wp_business_bottom_button_padding');
	$the_wp_business_left_button_padding = get_theme_mod('the_wp_business_left_button_padding');
	$the_wp_business_right_button_padding = get_theme_mod('the_wp_business_right_button_padding');
	if($the_wp_business_top_button_padding != false || $the_wp_business_bottom_button_padding != false || $the_wp_business_left_button_padding != false || $the_wp_business_right_button_padding != false){
		$the_wp_business_custom_css .='.read-more a, a.blogbutton-small, #comments input[type="submit"].submit, .read-btn a{';
			$the_wp_business_custom_css .='padding-top: '.esc_html($the_wp_business_top_button_padding).'px; padding-bottom: '.esc_html($the_wp_business_bottom_button_padding).'px; padding-left: '.esc_html($the_wp_business_left_button_padding).'px; padding-right: '.esc_html($the_wp_business_right_button_padding).'px; display:inline-block;';
		$the_wp_business_custom_css .='}';
	}

	$the_wp_business_button_border_radius = get_theme_mod('the_wp_business_button_border_radius',4);
	$the_wp_business_custom_css .='.read-more a, a.blogbutton-small, #comments input[type="submit"].submit, .hvr-sweep-to-right:before, .read-btn a{';
		$the_wp_business_custom_css .='border-radius: '.esc_html($the_wp_business_button_border_radius).'px;';
	$the_wp_business_custom_css .='}';

	/*----------- Copyright css -----*/
	$the_wp_business_copyright_top_padding = get_theme_mod('the_wp_business_top_copyright_padding');
	$the_wp_business_copyright_bottom_padding = get_theme_mod('the_wp_business_bottom_copyright_padding');
	if($the_wp_business_copyright_top_padding != false || $the_wp_business_copyright_bottom_padding != false){
		$the_wp_business_custom_css .='.inner{';
			$the_wp_business_custom_css .='padding-top: '.esc_html($the_wp_business_copyright_top_padding).'px; padding-bottom: '.esc_html($the_wp_business_copyright_bottom_padding).'px; ';
		$the_wp_business_custom_css .='}';
	} 

	$the_wp_business_copyright_alignment = get_theme_mod('the_wp_business_copyright_alignment', 'center');
	if($the_wp_business_copyright_alignment == 'center' ){
		$the_wp_business_custom_css .='#footer .copyright p{';
			$the_wp_business_custom_css .='text-align: '. $the_wp_business_copyright_alignment .';';
		$the_wp_business_custom_css .='}';
	}elseif($the_wp_business_copyright_alignment == 'left' ){
		$the_wp_business_custom_css .='#footer .copyright p{';
			$the_wp_business_custom_css .=' text-align: '. $the_wp_business_copyright_alignment .';';
		$the_wp_business_custom_css .='}';
	}elseif($the_wp_business_copyright_alignment == 'right' ){
		$the_wp_business_custom_css .='#footer .copyright p{';
			$the_wp_business_custom_css .='text-align: '. $the_wp_business_copyright_alignment .';';
		$the_wp_business_custom_css .='}';
	}

	$the_wp_business_copyright_font_size = get_theme_mod('the_wp_business_copyright_font_size');
	$the_wp_business_custom_css .='#footer .copyright p{';
		$the_wp_business_custom_css .='font-size: '.esc_html($the_wp_business_copyright_font_size).'px;';
	$the_wp_business_custom_css .='}';