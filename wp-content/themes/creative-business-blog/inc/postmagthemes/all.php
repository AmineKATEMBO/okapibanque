<?php
/**
 * Sub Template part for displaying single, category, author , search and archive posts.
 *
 *
 * @package Postmagthemes
 * @subpackage creative_business_blog
 */
?>
<header class="page-header pt-3 pb-3 ">
    <div >
        <?php if ( is_category() ) { ?>
            <h2 id = "category" class ="most2 theme-text-color" > <?php echo esc_html( the_archive_title() ); ?> </h2>
        <?php } else if ( is_tag() ) { ?>
            <h2 id ="tag" class ="most2 theme-text-color" > <?php echo esc_html( single_tag_title() ) ?> </h2>
        <?php } else if ( is_author() ) { ?>
            <h2 id ="auther" class ="most2 theme-text-color" ><?php the_author();  ?> </h2>
        <?php } else if ( is_archive() ) { ?>
            <h2 id ="archive" class ="most2 theme-text-color" ><?php echo esc_html( single_month_title() );  ?></h2> 
        <?php } else if ( is_search() ) { ?>
            <h2 id ="home" class ="most2 theme-text-color">
            <?php
                /* translators: %s: search query. */
                printf( esc_html__( 'SEARCH RESULTS FOR: %s', 'creative-business-blog' ), '<span>' . get_search_query() . '</span>' );
                ?>
            </h2> 
        <?php } ?> 
    </div>

</header><!-- .page-header -->
<div class=" row ml-0 mr-0 pt-4 mb-4 all-border-white  " >
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