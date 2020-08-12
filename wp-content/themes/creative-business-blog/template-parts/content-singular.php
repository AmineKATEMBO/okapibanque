<?php
/**
 * Template part for displaying posts in singular post
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package creative_business_blog
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
	<div class = " parrent mt-4" >
	
		<header class="entry-header text-center">
				<?php the_post_thumbnail(); ?>
		</header><!-- .entry-header -->

		<h2 class="post-title-2 mt-5 mb-5 text-left"><?php the_title(); ?></h2>

		<div class = "card-body" >
                <?php if ( 'post' === get_post_type() ) : ?>
					<div class="entry-meta post-auther-edit-2 ml-3">
						<?php
			
							creative_business_blog_posted_on();
						                        
                            ?> <p class = " post-auther-edit-2 "> <?php creative_business_blog_entry_footer(); ?> </p> <?php

							creative_business_blog_posted_by();                        
						?>
					</div><!-- .entry-meta -->
				<?php endif; ?>
					<p class =" float-left hvr-grow category2 theme-text-color  pl-2 pr-2 pt-1 pb-1" > <?php the_category( ' / ' ); ?> </p>
				<div class="clearfix"> </div>
        
                <div class=" ml-3 mr-3"><?php the_content(); ?> </div>

			</div>

	</div>
	
</article><!-- #post-<?php the_ID(); ?> -->
