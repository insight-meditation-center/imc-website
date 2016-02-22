<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Insight_Meditation_Center
 */

?>

	</div><!-- #content -->

	<footer id="footer" class="site-footer" role="contentinfo">
		<div id="footer-widgets" class="container">
			<div class="row">
				<?php if ( function_exists('dynamic_sidebar') ) {
					dynamic_sidebar( 'footer_widgets' );
				} ?>
			</div>
		</div><!-- #footer-widgets -->
	</footer><!-- #footer -->
	
</div><!-- #page -->

<a href="#header" id="toTop" class="btn btn-primary" data-toggle="tooltip" data-placement="left" title="Go to Top">
	<span class="fa fa-arrow-up"></span>
	<strong class="sr-only">Top</strong>
</a>

<?php wp_footer(); ?>

</body>
</html>
