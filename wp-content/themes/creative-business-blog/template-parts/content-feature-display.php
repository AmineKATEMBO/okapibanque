<article  id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
<div class ="containers" >
		<header class="entry-header text-center ">
			<?php
			if ( ! has_post_thumbnail() ) {
			?>	
				<div>
					<img  src = "<?php echo esc_url( get_template_directory_uri() ); ?>/images/photo1_219.jpeg " >
				</div>
				<?php 
			} else if ( has_post_thumbnail() ) {
				creative_business_blog_post_thumbnail_219();
			}
			?>
		</header><!-- .entry-header -->
		<div class="overlays">
			<?php if ( 'post' === get_post_type() ) : ?>
				<div class="entry-meta post-auther-edit-1 theme-hover pl-1">
					<?php
					if ( absint( get_theme_mod( 'creative_business_blog_feature_display_taxonomy_'.__('Date','creative-business-blog'),'1' ) )== 1 ) :

						creative_business_blog_posted_on();
					
					endif;
					if ( absint( get_theme_mod( 'creative_business_blog_feature_display_taxonomy_'.__('Author','creative-business-blog'),'1' ) )== 1 ):
					
						creative_business_blog_posted_by();
					endif;
					?>
				</div><!-- .entry-meta -->
			<?php endif; 
			if ( absint( get_theme_mod( 'creative_business_blog_feature_display_taxonomy_'.__('Comment & Tag','creative-business-blog'),'1' ) )== 1  ) :
				?> <div class = " post-auther-edit-1 theme-hover pl-1"> <?php creative_business_blog_entry_footer(); ?> </div> <?php
			endif; ?>
			<h3 class="post-title pt-1 pb-3 theme-hover text-center"><a href = "<?php the_permalink(); ?>" title = "<?php the_title_attribute(); ?>" ><?php the_title(); ?></a></h3>
		</div>
		</div>
</article><!-- #post-<?php the_ID(); ?> -->