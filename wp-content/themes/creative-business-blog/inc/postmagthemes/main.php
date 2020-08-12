<?php
/**
 * Sub Template part for displaying recent posts.
 *
 *
 * @package Postmagthemes
 * @subpackage creative_business_blog
 */
?>

<?php if ( absint(get_theme_mod('creative_business_blog_feature_slider_enable','1')) == 1) { ?>

    <div id = "demo" class = " carousel slide ml-4 mr-4 mt-4 " data-ride = "carousel" data-interval= "50000" >         <!--slider width and height set here -->
            <div class = "carousel-inner" > 
             
         <?php
            $noofpost = get_theme_mod('creative_business_blog_feature_slider_noofpost','4'); 
            $categorylisting = get_theme_mod ('creative_business_blog_feature_slider_categorylist', '');
            $args = array( 
                'post_type'      => 'post',
                'category_name' => esc_attr($categorylisting),
                'orderby' => esc_attr(get_theme_mod('creative_business_blog_feature_slider_query', 'comment_count')),
                'order'     => 'DSC',
                'posts_per_page' => absint($noofpost),        
            );
            $i = 0;
            $listings = new WP_Query( $args );
            if ( $listings->have_posts() ){
                while ( $listings->have_posts() ){
                    $listings->the_post();
                    $i++;
            ?>
                    <div class = "carousel-item <?php if ( $i == 1 ) {echo 'active';} ?>" >
                    
                    <?php get_template_part( 'template-parts/content-feature' ); ?>
                    </div>
                <?php
                }
                wp_reset_postdata();
            }
                ?>   
            </div>
        <!-- Left and right controls -->
        <a class = "carousel-control-prev" href = "<?php echo esc_url( '#demo' ); ?>" data-slide = "prev" >
            <span class = "carousel-control-prev-icon" ></span>
        </a>
        <a class = "carousel-control-next" href = "<?php echo esc_url( '#demo' ); ?>" data-slide = "next" >
            <span class = "carousel-control-next-icon" ></span>
        </a>
    </div>

<?php } ?>
<?php if ( absint(get_theme_mod('creative_business_blog_blog_post_enable','1')) == 1) { ?>

<div id="most-recent" class ="mt-5" >   <!--content width set here -->
    <header class="page-header pt-3 pb-3 ">
        <div >
            
                <h2 id ="home" class ="most2 theme-text-color"><?php echo esc_html( get_theme_mod('creative_business_blog_most_recent', __('Most Recent','creative-business-blog'))) ?></h2> 
            
        </div>

    </header><!-- .page-header -->
    <div class="row ml-0 mr-0 pt-4 mb-4 all-border-white   " > <!--blog width set here for list style-->
            <?php
            
            if ( have_posts() ){
                while ( have_posts() ){
                    the_post();
                    if ( absint(get_theme_mod('creative_business_blog_blog_post_listgrid','2')) == 2) {
                        ?> 
                        <div  class = " col-lg-6 col-md-12 wow fadeInUp image-changeon-recentpost"   >
                         <?php get_template_part( 'template-parts/content-grid' ); ?>
                        </div>
        
                    <?php } else if ( absint(get_theme_mod('creative_business_blog_blog_post_listgrid','2')) == 1) { ?>
                        <div  class = " col-lg-12 col-md-12 wow fadeInUp image-changeon-recentpost" >
                        <?php get_template_part( 'template-parts/content-list' ); ?>
                        </div>
        
                    <?php }
                    
                } 
            } else {
            get_template_part( 'template-parts/content', 'none' );
            } ?>
            
    </div>
    <div class=" text-center mb-5">
        <?php 
        
            the_posts_pagination( array(
                'pre_text' => __('Previous', 'creative-business-blog'),
                'next_text' => __('Next', 'creative-business-blog'),
            )); 
        
        ?>
    </div>
</div>
<?php } ?>