<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package The WP Business
 */
get_header(); ?>

<main id="maincontent" role="main" class="content-tg">
	<div class="container">
        <div class="page-content">
			<div class="notfound">
				<?php if(get_theme_mod('the_wp_business_404_title','404 Not Found')){ ?>
					<h1><?php echo esc_html( get_theme_mod('the_wp_business_404_title',__('404 Not Found', 'the-wp-business' )) ); ?></h1>
				<?php }?>
				<?php if(get_theme_mod('the_wp_business_404_button_label','404 Not Found')){ ?>
					<div class="read-moresec">
		        		<a href="<?php echo esc_url( home_url() ); ?>" class="button"><?php echo esc_html( get_theme_mod('the_wp_business_404_button_label',__('Back to home page', 'the-wp-business' )) ); ?><span class="screen-reader-text"><?php esc_html_e('Back to home page','the-wp-business'); ?></span></a>
					</div>
				<?php }?>
			</div>
			<div class="clearfix"></div>
        </div>
	</div>
</main>

<?php get_footer(); ?>