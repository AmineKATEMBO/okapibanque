<?php
/**
 * template for header layout-1 
 */
?>

<!-- For header image section start -->
<div class ="row min-height-banner text-center">
	<?php if ( has_header_image() ) { ?>
			<div class = "col-10 pl-0 pr-0"  >
				<img src = "<?php header_image(); ?>" height = "<?php echo esc_attr( get_custom_header()->height ); ?>" width = "<?php echo esc_attr( get_custom_header()->width ); ?>" alt = ""/> 
			</div>
	<?php } ?>
	<!-- Logo -->
	<?php if ( function_exists(  "the_custom_logo" ) ) { 
			?> 
			<!-- <div class = "col-lg-4"> </div> -->
			<div class = "col-2  pl-0 pr-0 margin-auto"  >
			<?php the_custom_logo();
			?> </div> <?php
		} ?>
	
</div>

<div class="row menu-background-color min-height-menu ">
		
	<div class=" col-xl-3 col-lg-5" >
		
			<h1 class="site-title theme-hover "><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		
	</div><!-- .site-branding -->
	<div class="col-xl-9 col-lg-7 margin-auto">
		<nav id="site-navigation" class=" main-navigation navbar navbar-custome row ml-0 mr-0 " >
			<button class="theme-text-color menu-toggle toggle-menu fa fa-bars" aria-controls="primary-menu" aria-expanded="false"></button>
			<?php
			wp_nav_menu( array(
			'theme_location' => 'menu-1',
			'menu_id'        => 'primary-menu',
			'container_class' 	=> 'brand-link menucase menu-text-color'
			) );
			?>

		</nav><!-- #site-navigation -->
		
		<div class = " text-right " >
			<?php if( absint(get_theme_mod( 'creative_business_blog_facebook_url_enable','0' )) == 1 ) :?>
				<a href = "<?php echo esc_url(get_theme_mod( 'creative_business_blog_social_url_'.'Facebook'))?>" target="_blank" class = " fa fa-facebook m-3" ></a>
			<?php endif;
			if( absint(get_theme_mod( 'creative_business_blog_twitter_url_enable','0' )) == 1 ) :?>
				<a href = "<?php echo esc_url(get_theme_mod( 'creative_business_blog_social_url_'.'Twitter'))?>" target="_blank" class = "fa  fa-twitter m-3" ></a>
			<?php endif;
			if( absint(get_theme_mod( 'creative_business_blog_googlplus_url_enable','0' )) == 1 ) :?>
				<a href = "<?php echo esc_url(get_theme_mod( 'creative_business_blog_social_url_'.'Googleplus'))?>" target="_blank" class = "fa  fa-google-plus m-3" ></a>
			<?php endif;
			if( absint(get_theme_mod( 'creative_business_blog_youtube_url_enable','0' )) == 1 ) :?>
				<a href = "<?php echo esc_url(get_theme_mod( 'creative_business_blog_social_url_'.'Youtube'))?>" target="_blank" class = "fa fa-youtube m-3" ></a>
			<?php endif; ?>	
		</div>

		
</div>

