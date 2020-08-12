<?php
/**
 * The sidebar containing the widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package creative_business_blog
 */

if ( ! is_active_sidebar( 'sidebar-one' ) ) {
	return;
}
?>

<aside id="sidebarone" class="widget-area ">
	<div id = "sidebar1" class= " wow fadeInUp">
	<?php dynamic_sidebar( 'sidebar-one' );?>
	</div>
</aside>
