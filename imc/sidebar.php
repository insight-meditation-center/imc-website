<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Insight_Meditation_Center
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area col-md-3 col-sm-12" role="complementary">
	<div class="row">
	
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	
	</div>
</aside><!-- #secondary -->
