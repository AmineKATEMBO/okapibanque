<?php
/**
 * Template part for displaying post with overlay image in 16:9
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package creative_business_blog
 */

?>
<article  id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
	<div class = "media"  >
		<header class="entry-header text-center" style =" width: 40%"> <!-- blog width set here for list style-->  
			<div class ="media-left"  >
				<?php
				if ( ! has_post_thumbnail() ) {
					?>
					<div>
						<img  src = "<?php echo esc_url( get_template_directory_uri() ); ?>/images/photo1_32.jpeg " >
					</div>
					
				<?php } else if ( has_post_thumbnail() ) {
					creative_business_blog_post_thumbnail_32();
				}
				?>
			<div >
		</header><!-- .entry-header -->
			<div class = "media-body ml-4" >
                <?php if ( 'post' === get_post_type() ) : ?>
					<div class="entry-meta post-auther-edit-2 w-50" >
						<?php
						if ( absint( get_theme_mod( 'creative_business_blog_blog_post_post_taxonomy_'.__('Date','creative-business-blog'),'1' ) )== 1 ) :
			
							creative_business_blog_posted_on();
						
                        endif;
                        
                        if ( absint( get_theme_mod( 'creative_business_blog_blog_post_post_taxonomy_'.__('Comment & Tag','creative-business-blog'),'1' ) )== 1  ) :
                            ?> <p class = " post-auther-edit-2 "> <?php creative_business_blog_entry_footer(); ?> </p> <?php

                        endif;

						if ( absint( get_theme_mod( 'creative_business_blog_blog_post_post_taxonomy_'.__('Author','creative-business-blog'),'1' ) )== 1 ):

							creative_business_blog_posted_by();
                        endif;
                        
						?>
					</div><!-- .entry-meta -->
				<?php endif; 
				if ( absint( get_theme_mod( 'creative_business_blog_blog_post_post_taxonomy_'.__('Category','creative-business-blog'),'1' )) == 1  ) : ?>
					<p class =" float-left hvr-grow category2 theme-text-color  pl-2 pr-2 pt-1 pb-1" > <?php the_category( ' / ' ); ?> </p>
				<?php endif; ?>

				<h3 class="post-title-2 text-center mt-5 mb-5 "><a href = "<?php the_permalink(); ?>" title = "<?php the_title_attribute(); ?>" ><?php the_title(); ?></a></h3>
               
				<div class="excerpt"><?php the_excerpt(); ?> </div>
				
				<p class=" shadow read-more theme-hover"> <a href="<?php the_permalink(); ?>"><?php echo esc_html( get_theme_mod('creative_business_blog_read_more_title',__('READ MORE', 'creative-business-blog'))); ?></a></p>

			</div>
		
	</div>
	
</article><!-- #post-<?php the_ID(); ?> -->
