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

	<footer id="footer" class="site-footer" role="contentinfo">
		<div id="footer-widgets" class="container">
			<div class="row">
				<?php if ( function_exists('dynamic_sidebar') ) {
					dynamic_sidebar( 'footer_widget_1' );
				} ?>
			</div><!-- .row -->
      <div class="row">
				<?php if ( function_exists('dynamic_sidebar') ) {
					dynamic_sidebar( 'footer_widget_2' );
				} ?>
			</div><!-- .row -->
		</div><!-- #footer-widgets -->
    <div class="well no-margin-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            ©<?php echo date("Y"); ?> Insight Meditation Center - 108 Birch Street, Redwood City, CA 94062 - (650) 599-3456 - <a href="mailto:insightmeditationcenter@gmail.com">insightmeditationcenter@gmail.com</a>
          </div>
        </div>
      </div>
    </div>
	</footer><!-- #footer -->
	
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
