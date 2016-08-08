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
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          Connect with IMC:
        </div><!-- /.col-md-4 -->
        <div class="col-md-8">
          <ul class="list-inline">
            <?php $elems = ['Podcast'    => 'linea/basic_ipod',
                            'Facebook'   => 'facebook',
                            'Email List' => 'linea/basic_mail_multiple',
                            'Newsletter' => 'linea/basic_spread_text',
                            'RSS'        => 'linea/basic_rss'] ?>
            <?php foreach($elems as $text => $icon): ?>
              <li>
                <?= read_svg_file($icon) ?>
                <?= $text ?>
              </li>
            <?php endforeach ?>
          </ul>
        </div><!-- /.col-md-8 -->
      </div><!-- /.row -->
    </div>
		<div id="footer-widgets" class="container">
			<div class="row">
				<?php if ( function_exists('dynamic_sidebar') ) {
					dynamic_sidebar( 'footer_widgets' );
				} ?>
			</div>
		</div><!-- #footer-widgets -->
	</footer><!-- #footer -->
	
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
