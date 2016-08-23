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
					dynamic_sidebar( 'footer_widgets' );
				} ?>
        <div id="nav_menu-10" class="widget col-md-2 col-sm-6 widget_nav_menu">
        <h4 class="widget-title"><?= read_svg_file('linea/basic_signs') ?> Address</h4>
          <address class="menu-footer-address-container">
            <ul id="menu-footer-address" class="menu">
              <li id="menu-item-63" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-63">
                <a target="_blank" href="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=108+Birch+St,+Redwood+City,+CA+94062+(Insight+Meditation+Center)&amp;sll=37.0625,-95.677068&amp;sspn=43.443045,77.167969&amp;ie=UTF8&amp;t=h&amp;z=16">108 Birch Street Redwood City, California 94062</a>
              </li>
              <li id="menu-item-64" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-64">
                <a href="tel:6505993456">(650) 599-3456</a>
              </li>
            </ul>
          </address>
          <h4 class="widget-title">License</h4>
          <div class="menu-footer-license-container">
            <ul id="menu-footer-license" class="menu">
              <li id="menu-item-65" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-65">
                <a href="http://creativecommons.org/licenses/by-nc-nd/3.0/">Creative Commons Attribution-Noncommercial-No Derivative Works 3.0</a></li>
            </ul>
          </div>
        </div><!-- #nav_menu-10 -->
			</div><!-- .row -->
		</div><!-- #footer-widgets -->
	</footer><!-- #footer -->
	
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
