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
<article class="postbox smallpostimage">
  <?php
    if ( ! is_single() ) {

      // If not a single post, highlight the gallery.
      if ( get_post_gallery() ) {
        echo '<div class="entry-gallery">';
          echo ( get_post_gallery() );
        echo '</div>';
      };

    };
  ?>
  <div class="clearfix"></div>
  <div class="row">
    <?php if(get_theme_mod('the_wp_business_metafields_date',true)==1){ ?>
      <div class="col-lg-2 col-md-2">
        <div class="datebox">
          <div class="date-monthwrap">
            <a href="<?php echo esc_url( get_day_link( $archive_year, $archive_month, $archive_day)); ?>">
              <span class="date-month"><?php echo esc_html( get_the_date( 'M' ) ); ?></span>
              <span class="date-day"><?php echo esc_html( get_the_date( 'd') ); ?></span>
            <span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span>
          </a>
          </div>
          <div class="yearwrap">
            <span class="date-year"><?php echo esc_html( get_the_date( 'Y' ) ); ?></span>
          </div>
        </div>
      </div>
    <?php }?>
    <div class="col-lg-10 col-md-10 ">
      <h2><a href="<?php echo esc_url( get_permalink() );?>"><?php esc_html(the_title()); ?></a></h2>   
      <?php if(get_theme_mod('the_wp_business_blog_post_content') == 'Full Content'){ ?>
        <?php the_content(); ?>
      <?php }
      if(get_theme_mod('the_wp_business_blog_post_content', 'Excerpt Content') == 'Excerpt Content'){ ?>
        <?php if(get_the_excerpt()) { ?>
          <div class="entry-content"><p><?php $excerpt = get_the_excerpt(); echo esc_html( the_wp_business_string_limit_words( $excerpt, esc_attr(get_theme_mod('the_wp_business_post_excerpt_number','20')))); ?> <?php echo esc_html( get_theme_mod('the_wp_business_button_excerpt_suffix','...') ); ?></p></div>
        <?php }?>
      <?php }?>
      <div class="metabox">
        <?php if(get_theme_mod('the_wp_business_metafields_author',true)==1){ ?>
          <i class="fa fa-user" aria-hidden="true"></i><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><span class="entry-author"> <?php esc_html(the_author()); ?></span><span class="screen-reader-text"><?php esc_html(the_author()); ?></span></a>
        <?php }?>
        <?php if(get_theme_mod('the_wp_business_metafields_comment',true)==1){ ?>
          <i class="fa fa-comments" aria-hidden="true"></i><span class="entry-comments"> <?php comments_number( __('0 Comments','the-wp-business'), __('0 Comments','the-wp-business'), __('% Comments','the-wp-business') ); ?></span> 
        <?php }?>
      </div>
      <?php if ( get_theme_mod('the_wp_business_blog_button_text','Read Full') != '' ) {?>
        <a href="<?php echo esc_url( get_permalink() );?>" class="blogbutton-small hvr-sweep-to-right"><?php echo esc_html( get_theme_mod('the_wp_business_blog_button_text',__('Read Full', 'the-wp-business')) ); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('the_wp_business_blog_button_text',__('Read Full', 'the-wp-business')) ); ?></span></a>
      <?php }?>
    </div>
    <div class="clearfix"></div>
  </div>
</article>