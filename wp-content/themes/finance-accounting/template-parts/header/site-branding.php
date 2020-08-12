<?php
/**
 * Displays header site branding
 */

?>

<div class="site-branding">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-12">
				<div class="logo">
			      <?php if ( has_custom_logo() ) : ?>
					<div class="site-logo"><?php the_custom_logo(); ?></div>
					<?php else: ?>
					<?php $blog_info = get_bloginfo( 'name' ); ?>
					<?php if ( ! empty( $blog_info ) ) : ?>
		              	<?php if( get_theme_mod('finance_accounting_show_site_title',true) != ''){ ?>
			                <?php if ( is_front_page() && is_home() ) : ?>
			                  <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			                <?php else : ?>
			                  <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			                <?php endif; ?>
			            <?php }?>
		            <?php endif; ?>
		              	<?php
			              $description = get_bloginfo( 'description', 'display' );
			              if ( $description || is_customize_preview() ) :
		                ?>
	              		<?php if( get_theme_mod('finance_accounting_show_tagline',true) != ''){ ?>
			              <p class="site-description">
			                <?php echo esc_html($description); ?>
			              </p>
			          	<?php }?>
		            <?php endif; ?>
		            <?php endif; ?>      
			    </div>
			</div>
			<div class="col-lg-8 col-md-12">
	        	<div class="row">
					<div class=" col-lg-4 col-md-4">
						<div class="row top-data">
							<?php if( get_theme_mod( 'finance_accounting_time','' ) != '') { ?>
			                <div class="col-lg-2 col-md-2">
			                  	<i class="fas fa-clock"></i>
			                </div>
			                <div class="col-lg-10 col-md-10">
			                  <p class="heavy"><?php echo esc_html( get_theme_mod( 'finance_accounting_time','' )); ?></p>
			                  <p><?php echo esc_html( get_theme_mod('finance_accounting_time1','' )); ?></p>
			                </div>
			                <?php } ?>
			             </div>
				    </div>
				    <div class=" col-lg-4 col-md-4">
				      	<div class="row top-data">
				      		<?php if( get_theme_mod( 'finance_accounting_mail','' ) != '') { ?>
			                <div class="col-lg-2 col-md-2">
			                  <i class="fas fa-envelope"></i>
			                </div>
			                <div class="col-lg-10 col-md-10">
			                  <p class="heavy"><?php echo esc_html( get_theme_mod( 'finance_accounting_mail','' ) ); ?></p>
			                  <p><?php echo esc_html( get_theme_mod('finance_accounting_email','' )); ?></p>
			                </div>
			                <?php } ?>
		              	</div>
				    </div>
				    <div class=" col-lg-4 col-md-4">
				      	<div class="row top-data">
				      		<?php if( get_theme_mod( 'finance_accounting_call','' ) != '') { ?>
			                <div class="col-lg-2 col-md-2">
			                  <i class="fas fa-mobile-alt"></i>
			                </div>
			                <div class="col-lg-10 ol-md-10">
			                  <p class="heavy"><?php echo esc_html( get_theme_mod('finance_accounting_call','') ); ?></p>
			                  <p><?php echo esc_html( get_theme_mod('finance_accounting_call1','' )); ?></p>
			                </div>
			                <?php } ?>
		              	</div>
				    </div>
				</div>
			</div>
		</div>		
	</div>
</div>
