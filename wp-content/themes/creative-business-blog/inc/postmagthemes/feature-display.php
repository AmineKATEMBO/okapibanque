<?php
/**
 * Sub Template part for displaying recent update posts.
 *
 *
 * @package Postmagthemes
 * @subpackage creative_business_blog
 */
?>
<div id="recent-update" class =" mt-5" >   <!--content width set here  , min ml-3 mr-3 should apply -->

<header class="page-header pt-3 pb-3 "  >
    <div >
        <h2 id="recent-update" class ="most3 theme-text-color" > <?php echo esc_html(get_theme_mod('creative_business_blog_feature_display', __('Most Commented', 'creative-business-blog') )) ?> </h2>
    </div>
</header><!-- .page-header -->
<div class=" row ml-0 mr-0 mb-4 pt-4 all-border-white" >
    <?php
    $noofpost = get_theme_mod('creative_business_blog_feature_display_noofpost','4'); 
    $categorylisting = get_theme_mod ('creative_business_blog_feature_display_categorylist', '');
    $args = array( 
        'post_type'      => 'post',
        'category_name' => esc_attr($categorylisting),
        'orderby' => esc_attr(get_theme_mod('creative_business_blog_feature_display_query', 'comment_count')),
        'order'     => 'DSC',
        'posts_per_page' => absint($noofpost),
    );
    $listings = new WP_Query( $args );
    if ( $listings->have_posts() ) :
        
        /* Start the Loop */
        while ( $listings->have_posts() ) :
            $listings->the_post();

            if (is_sticky()) {
                // ignore sticy post
            } else {
            
                // Normal post content
                    ?>
                    <div  class = " col-lg-6 col-md-12  wow fadeInUp image-changeon-recent-update"  >
                    <?php get_template_part( 'template-parts/content-feature-display' ); ?>
                    </div>
                    <?php

            }
                
        endwhile;
        
        wp_reset_postdata();
        
    endif;
    
    ?>
</div>
</div>
