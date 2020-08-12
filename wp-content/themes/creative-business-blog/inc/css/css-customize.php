<?php

/**
 * creative business blog CSS Customizer
 *
 * @package creative_business_blog
 *
 */

function creative_business_blog_customize_css() {
    $hex = esc_attr( get_theme_mod( 'creative_business_blog_theme_color', __('#b29700', 'creative-business-blog') ) );
	$percent  = -0.1;
	$final_color = creative_business_blog_color_luminance( $hex, $percent );
?>
	<style type="text/css">
    
    /* Theme color change */
    .widget > ul > li > span > a:hover,
    a:hover,
    .sub-menu,
    .menu li.has-children > a:after,
    .menu li li.has-children > a:after,
    .theme-text-color,
    .theme-hover:hover, 
    li:hover,
    .widget > ul > li > a:hover,
    .main-navigation ul li:hover,
    .nav-previous:hover,
    .nav-next:hover,
    .widget-title { 
        color: <?php echo  esc_attr( get_theme_mod( 'creative_business_blog_theme_color', __('#6246dd', 'creative-business-blog') ) ); ?>;
    }
    
    /* Theme color change */
    
    .main-navigation ul li ul a:hover
    .custom-pagination a:hover,
    .custom-pagination span.current,
    .theme-background-color,
    .main-navigation ul li ul a:hover,
    .custom-pagination a:hover,
    .custom-pagination span.current,
    .page-numbers:hover {
        background: <?php echo  esc_attr( get_theme_mod( 'creative_business_blog_theme_color', __('#6246dd', 'creative-business-blog') ) ); ?>;
    }

/* Theme color change */
#homepage2 .menu li.has-children > a:after,
#homepage2 .menu li li.has-children > a:after,
#homepage2 .theme-text-color,
#homepage2 .theme-hover:hover, 
#homepage2 li:hover,
#homepage2 .widget > ul > li > a:hover,
#homepage2 .main-navigation ul li:hover,
#homepage2 .nav-previous:hover,
#homepage2 .nav-next:hover,
#homepage2 .widget-title { 
        color: #DB4437;
    }
    
    /* Theme color change */
    #homepage3 .custom-pagination a:hover,
    #homepage3 .custom-pagination span.current,
    #homepage2 .theme-background-color,
    #homepage2 .main-navigation ul li ul a:hover,
    #homepage2 .custom-pagination a:hover,
    #homepage2 .custom-pagination span.current,
    #homepage2 .page-numbers:hover {
        background: #DB4437;
    }
    /* highlight active menu */
    #homepage2 li.current-menu-item {   
        color: #DB4437  ; 
    }

/* Theme color change */
#homepage3 .menu li.has-children > a:after,
#homepage3 .menu li li.has-children > a:after,
#homepage3 .theme-text-color,
#homepage3 .theme-hover:hover, 
#homepage3 li:hover,
#homepage3 .widget > ul > li > a:hover,
#homepage3 .main-navigation ul li:hover,
#homepage3 .nav-previous:hover,
#homepage3 .nav-next:hover,
#homepage3 .widget-title { 
        color: #FF69B4;
    }
    
    /* Theme color change */
    #homepage3 .custom-pagination a:hover,
    #homepage3 .custom-pagination span.current,
    #homepage3 .theme-background-color,
    #homepage3 .main-navigation ul li ul a:hover,
    #homepage3 .custom-pagination a:hover,
    #homepage3 .custom-pagination span.current,
    #homepage3 .page-numbers:hover {
        background: #FF69B4;
    }
    /* highlight active menu */
    #homepage3 li.current-menu-item {   
        color: #FF69B4  ; 
    }
    /* highlight active menu */
    li.current-menu-item {   
        color: <?php echo esc_attr( $final_color ); ?>  ; 
    }
    
    /* Image size change on blog post */
    .image-changeon-recentpost {
        padding: <?php echo esc_attr( get_theme_mod( 'creative_business_blog_image_changeon_blogpost','1.6' ) - .1).'rem';?> ;

    }
    /* Image size change on feature display */
    .image-changeon-recent-update {
    padding: <?php echo esc_attr( get_theme_mod( 'creative_business_blog_image_changeon_feature_display','1.6' ) - .1 ).'rem';?> ;

    }
    /* main width */
    .container-fluid {
	width: <?php echo esc_attr( get_theme_mod( 'creative_business_blog_frontpage_width','93' )-1).'%';?> ;

    }
    /* main width */
    #homepage4 .container-fluid {
	width: 99%;
    }
    </style>
<?php
}
add_action( 'wp_head', 'creative_business_blog_customize_css' );