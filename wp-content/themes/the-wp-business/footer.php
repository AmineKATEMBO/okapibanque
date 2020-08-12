<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package The WP Business
 */
?>
<?php if( get_theme_mod( 'the_wp_business_hide_scroll',true) != '') { ?>
  <?php $the_wp_business_scroll_align = get_theme_mod( 'the_wp_business_back_to_top','Right');
  if($the_wp_business_scroll_align == 'Left'){ ?>
    <a href="#content" class="back-to-top scroll-left"><?php esc_html_e('Top', 'the-wp-business'); ?><span class="screen-reader-text"><?php esc_html_e('Back to Top', 'the-wp-business'); ?></span></a>
  <?php }else if($the_wp_business_scroll_align == 'Center'){ ?>
    <a href="#content" class="back-to-top scroll-center"><?php esc_html_e('Top', 'the-wp-business'); ?><span class="screen-reader-text"><?php esc_html_e('Back to Top', 'the-wp-business'); ?></span></a>
  <?php }else{ ?>
    <a href="#content" class="back-to-top scroll-right"><?php esc_html_e('Top', 'the-wp-business'); ?><span class="screen-reader-text"><?php esc_html_e('Back to Top', 'the-wp-business'); ?></span></a>
  <?php }?>
<?php }?>
  <footer role="contentinfo" id="footer" class="copyright-wrapper">
    <?php //Set widget areas classes based on user choice
      $the_wp_business_footer_columns = get_theme_mod('the_wp_business_footer_widget', '4');
      if ($the_wp_business_footer_columns == '3') {
        $cols = 'col-lg-4 col-md-4';
      } elseif ($the_wp_business_footer_columns == '4') {
        $cols = 'col-lg-3 col-md-3';
      } elseif ($the_wp_business_footer_columns == '2') {
        $cols = 'col-lg-6 col-md-6';
      } else {
        $cols = 'col-lg-12 col-md-12';
      }
    ?>
    <div class="container">        
      <div class="footerinner">
        <div class="row">
          <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
            <div class="sidebar-column <?php echo esc_attr( $cols ); ?>">
              <?php dynamic_sidebar( 'footer-1'); ?>
            </div>
          <?php endif; ?> 
          <?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
            <div class="sidebar-column <?php echo esc_attr( $cols ); ?>">
              <?php dynamic_sidebar( 'footer-2'); ?>
            </div>
          <?php endif; ?> 
          <?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
            <div class="sidebar-column <?php echo esc_attr( $cols ); ?>">
              <?php dynamic_sidebar( 'footer-3'); ?>
            </div>
          <?php endif; ?> 
          <?php if ( is_active_sidebar( 'footer-4' ) ) : ?>
            <div class="sidebar-column <?php echo esc_attr( $cols ); ?>">
              <?php dynamic_sidebar( 'footer-4'); ?>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
    <div class="inner">
      <div class="container">
        <div class="copyright">
          <p><?php the_wp_business_credit_link(); ?> <?php echo esc_html(get_theme_mod('the_wp_business_footer_copy',__('By Themesglance','the-wp-business'))); ?></p>
        </div>
        <div class="clear"></div>
      </div>
    </div>
  </footer>

  <?php wp_footer(); ?>
</body>
</html>