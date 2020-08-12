<?php
/**
 *
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package creative_business_blog
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main ">
			<div class ="row " >
				<?php if ( absint(get_theme_mod('creative_business_blog_layout','1')) == 1 ) { 
					get_template_part( 'inc/layout/layout-1' ); 
				} elseif (absint(get_theme_mod('creative_business_blog_layout','1')) == 2 ) {
					get_template_part( 'inc/layout/layout-2' ); 
				} elseif (absint(get_theme_mod('creative_business_blog_layout','1')) == 3 ) {
					get_template_part( 'inc/layout/layout-3' ); 
					
				} ?>
				
			</div>
			
    	</main><!--- #main -->
	</div>
<?php
get_footer();
