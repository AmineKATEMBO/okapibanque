<?php
/**
 * Sub Template part for displaying current posts.
 *
 *
 * @package Postmagthemes
 * @subpackage creative_business_blog
 */
?>

<div class=" row mr-0 ml-0" >

    <?php
    while ( have_posts() ) :
        
        the_post();
    ?>
        <div class="entry-content wow fadeInUp col-lg-12 pl-4 pr-4 ">
        <?php
            get_template_part( 'template-parts/content-singular' );
            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;
            the_post_navigation();
            
        ?>
        </div><!-- .entry-content -->
        <?php
    endwhile; ?>
</div>