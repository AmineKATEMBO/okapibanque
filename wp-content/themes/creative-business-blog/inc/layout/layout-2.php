<?php
/**
 * template for layout-1
 *  Primarybar /Left Sidebar 
 */
?>


<div  class = "col-xl-9 col-lg-8 col-md-8  central-background p-0" >
    <?php if ( is_singular() ) {
            get_template_part( 'inc/postmagthemes/current-post' );
    } elseif ( is_home() ) { ?>
       
        <?php  get_template_part( 'inc/postmagthemes/main' ); ?>

    <?php } else { ?>    
        
        <?php  get_template_part( 'inc/postmagthemes/all' ); ?>
        
    <?php } ?>

    <?php if ( absint(get_theme_mod('creative_business_blog_feature_display_enable','1') == 1)) { ?>
        <div  >
            <?php get_template_part( 'inc/postmagthemes/feature-display' ); ?>
        </div>
    <?php } ?>
   
<div  class ="  menu-background-color w-100">
<button id="add-btn"  onclick="creative_business_blog_sidebarclass()" class="theme-text-color menu-background-color ml-3 mb-2 fa fa-bars menu-toggle toggle-menu"  aria-expanded="false"></button>
</div>
</div>
<div id ="sidebar-one" class=" col-xl-3 col-lg-4 col-md-4 sidebar-background-color mark-embose-thickline"  >
<!-- Site descritpion-->
        <?php
        $creative_business_blog_description = get_bloginfo( 'description', 'display' );
        if ( $creative_business_blog_description || is_customize_preview() ) :
            ?>
            <div class ="mt-3 mb-3">
                <h2 class="site-description" ><?php echo esc_html($creative_business_blog_description); /* WPCS: xss ok. */ ?></h2>
            </div>
        <?php endif;?>

        <!-- Date section-->
        <?php if(  esc_attr( get_theme_mod( 'title_date_display' )) === '1' or esc_attr( get_theme_mod( 'title_date_display' )) == null) : ?> 
            <div class = "title-date theme-text-color mt-3 mb-3" > 
            
                <?php echo esc_html( date( get_option('date_format') ) ); ?>
            
            </div>
        <?php 
        endif;?>
		<div  >
        <?php get_sidebar(); ?>  
        </div>
</div>