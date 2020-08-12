<?php
/**
 * template for layout-3
 * Primarybar 
 */

?>
<div  class = "col-xl-12 col-lg-12 col-md-12  central-background p-0" >
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
    
</div>