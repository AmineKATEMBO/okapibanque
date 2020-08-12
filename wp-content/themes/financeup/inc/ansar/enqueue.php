<?php
function financeup_scripts() {
	
	wp_enqueue_style('bootstrap_style', get_template_directory_uri() . '/css/bootstrap.css');

	wp_enqueue_style( 'financeup-style', get_stylesheet_uri() );

	wp_enqueue_style('financeup_color', get_template_directory_uri() . '/css/colors/default.css');
	
	wp_enqueue_style('smartmenus_min',get_template_directory_uri().'/css/jquery.smartmenus.bootstrap.css');

	wp_enqueue_style('carousel',get_template_directory_uri().'/css/owl.carousel.css');
	wp_enqueue_style('carousel_min',get_template_directory_uri().'/css/owl.carousel.min.css');

    wp_enqueue_style('owl_transitions',get_template_directory_uri().'/css/owl.transitions.css');

	
	wp_enqueue_style('font-awesome',get_template_directory_uri().'/css/font-awesome.css');
	wp_enqueue_style('font-awesome-min',get_template_directory_uri().'/css/font-awesome.min.css');

	wp_enqueue_style('animate',get_template_directory_uri().'/css/animate.css');
	wp_enqueue_style('animate_min',get_template_directory_uri().'/css/animate.min.css');


	/* Js script */

    wp_enqueue_script( 'financeup-navigation', get_template_directory_uri() . '/js/navigation.js', array('jquery'));

	wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.js', array('jquery'));

    wp_enqueue_script('smartmenus', get_template_directory_uri() . '/js/jquery.smartmenus.min.js' , array('jquery'));

    wp_enqueue_script('smartmenus_bootstrap', get_template_directory_uri() . '/js/jquery.smartmenus.bootstrap.js' , array('jquery'));

    wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/js/owl.carousel.js', array('jquery'));

    wp_enqueue_script('financeup_custom', get_template_directory_uri() . '/js/custom.js' , array('jquery'));


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action('wp_enqueue_scripts', 'financeup_scripts');

function financeup_registers() {

	wp_enqueue_script( 'customizer_script', get_template_directory_uri() . '/js/customizer.js', array("jquery"), '20120206', true  );
}
add_action( 'customize_controls_enqueue_scripts', 'financeup_registers' );

add_action('admin_head','financeup_inline_css');
function financeup_inline_css(){ ?>

  <style>
  .js-ocdi-gl-item-container .ocdi__gl-item.js-ocdi-gl-item + div {
    display: none !important;
}
  </style>

    <?php
}

/**
 	* Added skip link focus
 	*/
	function financeup_skip_link_focus_fix() {
	?>
	<script>
	/(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())},!1);
	</script>
	<?php
	}
add_action( 'wp_print_footer_scripts', 'financeup_skip_link_focus_fix' );
?>