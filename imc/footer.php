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
        <div class="col-md-7 col-md-offset-3">
          <ul class="list-inline">
            <?php $elems = ['Podcast'    => ['linea/basic_ipod', 'http://phobos.apple.com/WebObjects/MZStore.woa/wa/viewPodcast?id=75519213'],
                            'Facebook'   => ['facebook', 'http://www.facebook.com/insightmeditationcenter'],
                            'Email List' => ['linea/basic_mail_multiple', 'http://insightmeditationcenter.us1.list-manage.com/subscribe?u=173a7e720925d7c5362caa7dd&id=fc71dfa9fb'],
                            'Newsletter' => ['linea/basic_spread_text', 'http://www.insightmeditationcenter.org/books-articles/newsletter/'],
                            'RSS'        => ['linea/basic_rss', 'http://feeds.feedburner.com/InsightMeditationCenter']] ?>
            <?php foreach($elems as $text => $spec): ?>
              <li>
                <a href="<?= $spec[1] ?>">
                  <?= read_svg_file($spec[0], ['icon-large']) ?>
                  <?= $text ?>
                </a>
              </li>
            <?php endforeach ?>
          </ul>
        </div><!-- /.col-md-8 -->
      </div><!-- /.row -->
    </div>
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
	</footer><!-- #footer -->
	
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
