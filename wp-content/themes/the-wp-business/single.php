<?php
/**
 * The Template for displaying all single posts.
 *
 * @package The WP Business
 */
get_header(); ?>

<div class="container">
    <main id="maincontent" role="main" class="middle-align">
    	<div class="content">
	    	<?php
            $the_wp_business_left_right = get_theme_mod( 'the_wp_business_theme_options','Right Sidebar');
            if($the_wp_business_left_right == 'One Column'){ ?>
	            <div class="content-tg">
					<div class="bradcrumbs">
		                <?php the_wp_business_the_breadcrumb(); ?>
		            </div>
					<?php while ( have_posts() ) : the_post(); 
						get_template_part( 'template-parts/single-post');
		            endwhile; // end of the loop. 
		            wp_reset_postdata();?>
		       	</div>
            <?php }else if($the_wp_business_left_right == 'Three Columns'){ ?>
            	<div class="row">
	                <div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-1');?></div>
					<div class="col-lg-6 col-md-6" class="content-tg">
						<div class="bradcrumbs">
			                <?php the_wp_business_the_breadcrumb(); ?>
			            </div>
						<?php while ( have_posts() ) : the_post(); 
							get_template_part( 'template-parts/single-post');
			            endwhile; // end of the loop. 
			            wp_reset_postdata();?>
			       	</div>
					<div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-2');?>
					</div>
				</div>
			<?php }else if($the_wp_business_left_right == 'Four Columns'){ ?>
				<div class="row">
					<div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-1');?></div>
					<div class="col-lg-3 col-md-3" class="content-tg">
						<div class="bradcrumbs">
			                <?php the_wp_business_the_breadcrumb(); ?>
			            </div>
						<?php while ( have_posts() ) : the_post(); 
							get_template_part( 'template-parts/single-post');
			            endwhile; // end of the loop. 
			            wp_reset_postdata();?>
			       	</div>
					<div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-2');?></div>
					<div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-3');?></div>
				</div>
			<?php }else if($the_wp_business_left_right == 'Left Sidebar'){ ?>
				<div class="row">
					<div id="sidebar" class="col-lg-4 col-md-4"><?php dynamic_sidebar('sidebar-1');?></div>
					<div class="col-lg-8 col-md-8" class="content-tg">
						<div class="bradcrumbs">
			                <?php the_wp_business_the_breadcrumb(); ?>
			            </div>
						<?php while ( have_posts() ) : the_post(); 
							get_template_part( 'template-parts/single-post');
			            endwhile; // end of the loop. 
			            wp_reset_postdata();?>
			       	</div>
		       </div>
			<?php }else if($the_wp_business_left_right == 'Right Sidebar'){ ?>
				<div class="row">
					<div class="col-lg-8 col-md-8" class="content-tg">
						<div class="bradcrumbs">
			                <?php the_wp_business_the_breadcrumb(); ?>
			            </div>
						<?php while ( have_posts() ) : the_post(); 
							get_template_part( 'template-parts/single-post');
			            endwhile; // end of the loop. 
			            wp_reset_postdata();?>
			       	</div>
					<div id="sidebar" class="col-lg-4 col-md-4"><?php dynamic_sidebar('sidebar-2');?></div>
				</div>
			<?php }else if($the_wp_business_left_right == 'Grid Layout'){ ?>
				<div class="row">
					<div class="col-lg-8 col-md-8" class="content-tg">
						<div class="bradcrumbs">
			                <?php the_wp_business_the_breadcrumb(); ?>
			            </div>
						<?php while ( have_posts() ) : the_post(); 
							get_template_part( 'template-parts/single-post');
			            endwhile; // end of the loop.  
			            wp_reset_postdata();?>
			       	</div>
					<div id="sidebar" class="col-lg-4 col-md-4"><?php dynamic_sidebar('sidebar-2');?></div>
				</div>
			<?php }else {?>
				<div class="row">
					<div class="col-lg-8 col-md-8" class="content-tg">
						<div class="bradcrumbs">
			                <?php the_wp_business_the_breadcrumb(); ?>
			            </div>
						<?php while ( have_posts() ) : the_post(); 
							get_template_part( 'template-parts/single-post');
			            endwhile; // end of the loop. 
			            wp_reset_postdata();?>
			       	</div>
					<div id="sidebar" class="col-lg-4 col-md-4"><?php dynamic_sidebar('sidebar-2');?>
					</div>
				</div>
			<?php }?>
	        <div class="clearfix"></div>
	    </div>
    </main>
</div>

<?php get_footer(); ?>