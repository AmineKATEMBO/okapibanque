// NAVIGATION CALLBACK
jQuery(function($){
	"use strict";
	jQuery('.main-menu-navigation > ul').superfish({
		delay:       500,
		animation:   {opacity:'show',height:'show'},  
		speed:       'fast'
	});
});

function the_wp_business_resMenu_open() {
	window.the_wp_business_mobileMenu=true;
	jQuery(".side-nav").addClass('show');
}
function the_wp_business_resMenu_close() {
	window.the_wp_business_mobileMenu=false;
	jQuery(".side-nav").removeClass('show');
}

jQuery(function($){
	$(window).scroll(function(){
	    if ($(window).scrollTop() >= 100) {
	        $('.toggle-menu').addClass('sticky');
	        $('.stick').fadeIn(100);
	    }
	    else {
	        $('.toggle-menu').removeClass('sticky');
	    }
	});

	$(window).scroll(function(){
	    var sticky = $('.sticky-header'),
	    scroll = $(window).scrollTop();

		if (scroll >= 100) sticky.addClass('fixed-header');
		else sticky.removeClass('fixed-header');
	});

	$(window).load(function() {
		$(".tg-loader").delay(2000).fadeOut("slow");
	    $("#overlayer").delay(2000).fadeOut("slow");
	});

	$(window).load(function() {
		$(".preloader").delay(2000).fadeOut("slow");
	    $(".preloader .preloader-container").delay(2000).fadeOut("slow");
	});

	// back to top.
	$( window ).scroll( function() {
		if ( $( this ).scrollTop() > 200 ) {
			$( '.back-to-top' ).addClass( 'show-back-to-top' );
		} else {
			$( '.back-to-top' ).removeClass( 'show-back-to-top' );
		}
	});

	$( '.back-to-top' ).click( function() {
		$( 'html, body' ).animate( { scrollTop : 0 }, 200 );
		return false;
	});
});

jQuery(window).load(function() {
	window.the_wp_business_currentfocus=null;
	the_wp_business_checkfocusdElement();
	var the_wp_business_body = document.querySelector('body');
	the_wp_business_body.addEventListener('keyup', the_wp_business_check_tab_press);
	var the_wp_business_gotoHome = false;
	var the_wp_business_gotoClose = false;
	window.the_wp_business_mobileMenu=false;
	function the_wp_business_checkfocusdElement(){
	    if(window.the_wp_business_currentfocus=document.activeElement.className){
	        window.the_wp_business_currentfocus=document.activeElement.className;
	    }
	}
	function the_wp_business_check_tab_press(e) {
	    "use strict";
	    // pick passed event or global event object if passed one is empty
	    e = e || event;
	    var activeElement;

	    if(window.innerWidth < 999){
		    if (e.keyCode == 9) {
		        if(window.the_wp_business_mobileMenu){
				    if (!e.shiftKey) {
				        if(the_wp_business_gotoHome) {
				            jQuery( ".main-menu-navigation ul:first li:first a:first-child" ).focus();
				        }
				    }
				    if (jQuery("a.closebtn.responsive-menu").is(":focus")) {
				        the_wp_business_gotoHome = true;
				    } else {
				        the_wp_business_gotoHome = false;
				    }
		    	}
		    }
	    }
	    if (e.shiftKey && e.keyCode == 9) {
		    if(window.innerWidth < 999){
			    if(window.the_wp_business_currentfocus=="header-search"){
			        jQuery("button.mobiletoggle").focus();
			    }else{
				    if(window.the_wp_business_mobileMenu){
				        if(the_wp_business_gotoClose){
				        	jQuery("a.closebtn.responsive-menu").focus();
				        }
				        if(jQuery( ".main-menu-navigation ul:first li:first a:first-child" ).is(":focus")) {
				            the_wp_business_gotoClose = true;
				        } else {
				            the_wp_business_gotoClose = false;
				        }
				    }
			    }
		    }
	    }
	    the_wp_business_checkfocusdElement();
	}
});