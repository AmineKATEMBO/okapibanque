<?php
/**
 * The template for displaying archive pages
 */

get_header(); ?>

<main id="main" role="main">
	<div class="container">
		<?php if ( have_posts() ) : ?>
			<header role="banner" class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header>
		<?php endif; ?>
		<div class="row">
			<?php
			$finance_accounting_layout_setting = get_theme_mod( 'finance_accounting_layout_settings','Right Sidebar');
		    if($finance_accounting_layout_setting == 'Left Sidebar'){ ?>
			    <div id="sidebox" class="col-lg-4 col-md-4">
					<?php dynamic_sidebar('sidebox-1'); ?>
				</div>
				<div class="col-lg-8 col-md-8">
					<?php
						if ( have_posts() ) :

							/* Start the Loop */
							while ( have_posts() ) : the_post();
								
								get_template_part( 'template-parts/post/content', get_post_format() );

							endwhile;

						else :

							get_template_part( 'template-parts/post/content', 'none' );

						endif;
					?>
					<div class="navigation">
		                <?php finance_accounting_pagination_type(); ?>
	       	 		</div>
				</div>
			<?php }else if($finance_accounting_layout_setting == 'Right Sidebar'){ ?>
				<div class="col-lg-8 col-md-8">
					<?php
						if ( have_posts() ) :

							/* Start the Loop */
							while ( have_posts() ) : the_post();
								
								get_template_part( 'template-parts/post/content', get_post_format() );

							endwhile;

						else :

							get_template_part( 'template-parts/post/content', 'none' );

						endif;
					?>
					<div class="navigation">
		                <?php finance_accounting_pagination_type(); ?>
	       	 		</div>
				</div>
				<div id="sidebox" class="col-lg-4 col-md-4">
					<?php dynamic_sidebar('sidebox-1'); ?>
				</div>
			<?php }else if($finance_accounting_layout_setting == 'One Column'){ ?>
				<div class="col-lg-12 col-md-12">
					<?php
						if ( have_posts() ) :

							/* Start the Loop */
							while ( have_posts() ) : the_post();
								
								get_template_part( 'template-parts/post/content', get_post_format() );

							endwhile;

						else :

							get_template_part( 'template-parts/post/content', 'none' );

						endif;
					?>
					<div class="navigation">
		                <?php finance_accounting_pagination_type(); ?>
	       	 		</div>
				</div>
			<?php }else if($finance_accounting_layout_setting == 'Three Columns'){ ?>
				<div id="sidebox" class="col-lg-3 col-md-3">
					<?php dynamic_sidebar('sidebox-1'); ?>
				</div>
				<div class="col-lg-6 col-md-6">
					<?php
						if ( have_posts() ) :

							/* Start the Loop */
							while ( have_posts() ) : the_post();
								
								get_template_part( 'template-parts/post/content', get_post_format() );

							endwhile;

						else :

							get_template_part( 'template-parts/post/content', 'none' );

						endif;
					?>
					<div class="navigation">
		                <?php finance_accounting_pagination_type(); ?>
	       	 		</div>
				</div>
				<div id="sidebox" class="col-lg-3 col-md-3">
					<?php dynamic_sidebar('sidebox-2'); ?>
				</div>
			<?php }else if($finance_accounting_layout_setting == 'Four Columns'){ ?>
				<div id="sidebox" class="col-lg-3 col-md-3">
					<?php dynamic_sidebar('sidebox-1'); ?>
				</div>
				<div class="col-lg-3 col-md-3">
					<?php
						if ( have_posts() ) :

							/* Start the Loop */
							while ( have_posts() ) : the_post();
								
								get_template_part( 'template-parts/post/content', get_post_format() );

							endwhile;

						else :

							get_template_part( 'template-parts/post/content', 'none' );

						endif;
					?>
					<div class="navigation">
		                <?php finance_accounting_pagination_type(); ?>
	       	 		</div>
				</div>
				<div id="sidebox" class="col-lg-3 col-md-3">
					<?php dynamic_sidebar('sidebox-2'); ?>
				</div>
				<div id="sidebox" class="col-lg-3 col-md-3">
					<?php dynamic_sidebar('sidebox-3'); ?>
				</div>
			<?php }else if($finance_accounting_layout_setting == 'Grid Layout'){ ?>
				<div class="col-lg-9 col-md-9">
					<div class="row">
						<?php
							if ( have_posts() ) :

								/* Start the Loop */
								while ( have_posts() ) : the_post();
									
									get_template_part( 'template-parts/post/gridlayout', get_post_format() );

								endwhile;

							else :

								get_template_part( 'template-parts/post/content', 'none' );

							endif;
						?>
						<div class="navigation">
			                <?php finance_accounting_pagination_type(); ?>
		       	 		</div>
		       	 	</div>
				</div>
				<div id="sidebox" class="col-lg-3 col-md-3">
					<?php dynamic_sidebar('sidebox-2'); ?>
				</div>
			<?php }else {?>
				<div class="col-lg-8 col-md-8">
					<?php
						if ( have_posts() ) :

							/* Start the Loop */
							while ( have_posts() ) : the_post();
								
								get_template_part( 'template-parts/post/content', get_post_format() );

							endwhile;

						else :

							get_template_part( 'template-parts/post/content', 'none' );

						endif;
					?>
					<div class="navigation">
		                <?php
		                    
		                    the_posts_pagination( array(
		                        'prev_text'          => __( 'Previous page', 'finance-accounting' ),
		                        'next_text'          => __( 'Next page', 'finance-accounting' ),
		                        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'finance-accounting' ) . ' </span>',
		                    ) );
		                ?>
	       	 		</div>
				</div>
				<div id="sidebox" class="col-lg-4 col-md-4">
					<?php dynamic_sidebar('sidebox-1'); ?>
				</div>
			<?php } ?>
		</div>
	</div>
</main>

<?php get_footer();