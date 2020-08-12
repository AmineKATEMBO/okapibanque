<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div class="content-tg">
 *
 * @package The WP Business
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php if ( function_exists( 'wp_body_open' ) ) {
    wp_body_open();
  } else {
    do_action( 'wp_body_open' );
  }?>
  <?php if(get_theme_mod('the_wp_business_preloader',true)){ ?>
    <?php if(get_theme_mod( 'the_wp_business_preloader_type','Square') == 'Square'){ ?>
      <div id="overlayer"></div>
      <span class="tg-loader">
        <span class="tg-loader-inner"></span>
      </span>
    <?php }else if(get_theme_mod( 'the_wp_business_preloader_type') == 'Circle') {?>    
      <div class="preloader">
        <div class="preloader-container">
          <span class="animated-preloader"></span>
        </div>
      </div>
    <?php }?>
  <?php }?>
  <header role="banner">
    <a class="screen-reader-text skip-link" href="#maincontent"><?php esc_html_e( 'Skip to content', 'the-wp-business' ); ?><span class="screen-reader-text"><?php esc_html_e( 'Skip to content', 'the-wp-business' ); ?></span></a>
    <div id="header">
      <?php if(get_theme_mod('the_wp_business_top_header',true)){ ?>
        <div class="header-top">
          <div class="container">
            <div class="row">
              <div class="top-contact col-lg-3 col-md-3">
                <?php if( get_theme_mod( 'the_wp_business_contact_corporate','' ) != '') { ?>
                  <span class="call"><i class="fa fa-phone" aria-hidden="true"></i><?php echo esc_html( get_theme_mod('the_wp_business_contact_corporate','' )); ?></span>
                <?php } ?>
              </div>   
              <div class="top-contact col-lg-3 col-md-4">
                <?php if( get_theme_mod( 'the_wp_business_email_corporate','' ) != '') { ?>
                  <span class="email_corporate"><i class="fa fa-envelope" aria-hidden="true"></i><?php echo esc_html( get_theme_mod('the_wp_business_email_corporate','') ); ?></span>
                <?php } ?>
              </div>
              <div class="social-media col-lg-6 col-md-5">
                <?php if( get_theme_mod( 'the_wp_business_youtube_url') != '') { ?>
                  <a href="<?php echo esc_url( get_theme_mod( 'the_wp_business_youtube_url','' ) ); ?>"><i class="fab fa-youtube" aria-hidden="true"></i><span class="screen-reader-text"><?php esc_html_e( 'Youtube', 'the-wp-business' ); ?></span></a>
                <?php } ?>
                <?php if( get_theme_mod( 'the_wp_business_facebook_url') != '') { ?>
                  <a href="<?php echo esc_url( get_theme_mod( 'the_wp_business_facebook_url','' ) ); ?>"><i class="fab fa-facebook-f" aria-hidden="true"></i><span class="screen-reader-text"><?php esc_html_e( 'Facebook', 'the-wp-business' ); ?></span></a>
                <?php } ?>
                <?php if( get_theme_mod( 'the_wp_business_twitter_url' ) != '') { ?>
                  <a href="<?php echo esc_url( get_theme_mod( 'the_wp_business_twitter_url','' ) ); ?>"><i class="fab fa-twitter" aria-hidden="true"></i><span class="screen-reader-text"><?php esc_html_e( 'Twitter', 'the-wp-business' ); ?></span></a>
                <?php } ?>
                <?php if( get_theme_mod( 'the_wp_business_rss_url') != '') { ?>
                  <a href="<?php echo esc_url( get_theme_mod( 'the_wp_business_rss_url','' ) ); ?>"><i class="fas fa-rss" aria-hidden="true"></i><span class="screen-reader-text"><?php esc_html_e( 'RSS', 'the-wp-business' ); ?></span></a>
                <?php } ?>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
        </div>
      <?php }?>
      <div class="toggle-menu responsive-menu">
        <button role="tab" onclick="the_wp_business_resMenu_open()"><i class="fas fa-bars"></i><?php esc_html_e('Menu','the-wp-business'); ?><span class="screen-reader-text"><?php esc_html_e('Menu','the-wp-business'); ?></span></button>
        <?php if(get_theme_mod('the_wp_business_show_search',true) ){ ?>
          <div class="wrap"><?php get_search_form(); ?></div>
        <?php }?>
      </div>
      <div class="menu-sec <?php if( get_theme_mod( 'the_wp_business_sticky_header') != '') { ?> sticky-header"<?php } else { ?>close-sticky <?php } ?>">
        <div class="container">
          <div class="row">
            <div class="logo col-lg-3 col-md-5 wow bounceInDown">
              <?php if ( has_custom_logo() ) : ?>
                <div class="site-logo"><?php the_custom_logo(); ?></div>
              <?php endif; ?> 
              <?php $blog_info = get_bloginfo( 'name' ); ?>
              <?php if ( ! empty( $blog_info ) ) : ?>
                <?php if ( is_front_page() && is_home() ) : ?>
                  <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                <?php else : ?>
                  <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                <?php endif; ?>
              <?php endif; ?>
              <?php
              $description = get_bloginfo( 'description', 'display' );
              if ( $description || is_customize_preview() ) :
                ?>
                <p class="site-description">
                  <?php echo esc_html($description); ?>
                </p>
              <?php endif; ?>   
            </div>
            <div class="menubox <?php if(get_theme_mod('the_wp_business_show_search',true)) { ?>col-lg-6 col-md-3" <?php } else { ?>col-lg-7 col-md-5 <?php } ?>">
              <div id="sidelong-menu" class="nav side-nav">
                <nav id="primary-site-navigation" class="nav-menu" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'the-wp-business' ); ?>">
                  <?php 
                    wp_nav_menu( array( 
                      'theme_location' => 'primary',
                      'container_class' => 'main-menu-navigation clearfix' ,
                      'menu_class' => 'clearfix',
                      'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
                      'fallback_cb' => 'wp_page_menu',
                    ) ); 
                  ?>
                  <a href="javascript:void(0)" class="closebtn responsive-menu" onclick="the_wp_business_resMenu_close()"><?php esc_html_e('Close Menu','the-wp-business'); ?><i class="fas fa-times-circle"></i><span class="screen-reader-text"><?php esc_html_e('Close Menu','the-wp-business'); ?></span></a>
                </nav>
              </div>
            </div>
            <?php if(get_theme_mod('the_wp_business_show_search',true) ){ ?>
              <div class="search-box col-lg-1 col-md-2">
                <div class="wrap"><?php get_search_form(); ?></div>
              </div>
            <?php }?>
            <?php if ( get_theme_mod('the_wp_business_button_url','') != "" ) {?>
              <div class="col-lg-2 col-md-4 pl-0">
                <div class ="testbutton">
                  <a href="<?php echo esc_url(get_theme_mod('the_wp_business_button_url','')); ?>"><?php echo esc_html(get_theme_mod('the_wp_business_button_text','')); ?> <span class="screen-reader-text"><?php echo esc_html(get_theme_mod('the_wp_business_button_text','')); ?></span></a>
                </div>
              </div>
            <?php }?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>