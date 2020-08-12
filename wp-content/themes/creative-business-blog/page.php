<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package creative_business_blog
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main mb-4">
		<div class ="row mark-embose-line " >
			<!-- below is to show pages content -->
			<div class = "col-lg-12 col-md-12 pt-4 central-background" >
					
				<?php
				while ( have_posts() ) :
					the_post();
					?> <div class ="image-changeon-recentpost"> 
					<?php get_template_part( 'template-parts/content', 'page' ); ?>
					</div>
					<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop. 
				?>
						
			</div>
			
		</div>
		
		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
