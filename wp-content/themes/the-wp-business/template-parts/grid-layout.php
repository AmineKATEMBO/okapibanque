<?php
/**
 * The template part for displaying post
 *
 * @package The WP Business
 * @subpackage the_wp_business
 * @since The WP Business 1.0
 */
?>
<?php 
  $archive_year  = get_the_time('Y'); 
  $archive_month = get_the_time('m'); 
  $archive_day   = get_the_time('d'); 
?> 
<div class="col-lg-4 col-md-4">
  <article class="postbox smallpostimage">
    <div class="hovereffect">
      <?php the_post_thumbnail(); ?>
    </div>
    <div class="clearfix"></div>
    <div class="wow bounceInUp">
      <h2><a href="<?php echo esc_url( get_permalink() );?>"><?php esc_html(the_title()); ?></a></h2>
      <?php if(get_the_excerpt()) { ?>
        <div class="entry-content"><p><?php $excerpt = get_the_excerpt(); echo esc_html( the_wp_business_string_limit_words( $excerpt, esc_attr(get_theme_mod('the_wp_business_post_excerpt_number','20')))); ?> <?php echo esc_html( get_theme_mod('the_wp_business_button_excerpt_suffix','...') ); ?></p></div>
      <?php }?>
      <?php if ( get_theme_mod('the_wp_business_blog_button_text','Read Full') != '' ) {?>
        <a href="<?php echo esc_url( get_permalink() );?>" class="blogbutton-small hvr-sweep-to-right"><?php echo esc_html( get_theme_mod('the_wp_business_blog_button_text',__('Read Full', 'the-wp-business')) ); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('the_wp_business_blog_button_text',__('Read Full', 'the-wp-business')) ); ?></span></a>
      <?php }?>
    </div>
    <div class="clearfix"></div>
  </article>
</div>
  