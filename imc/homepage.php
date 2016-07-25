<?php
/**
 * Template Name: Home Page
 *
 * This is the home page template.
 *
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Insight_Meditation_Center
 */

get_header(); ?>

  <div id="heroCarousel" class="carousel slide" data-ride="carousel">
    <?php $pics = array('bodhi-leaf', 'bronze-buddha-hand', 'many-thai-buddhas', 'stream-with-trees', 'three-bodhi-leaves') ?>
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <?php foreach($pics as $index => $pic): ?>
        <li data-target="#heroCarousel" data-slide-to="<?= $index ?>"<?= $index == 0 ? ' class=active' : '' ?>></li>
      <?php endforeach ?>
    </ol>
    <div class="carousel-inner" role="listbox">
      <?php foreach($pics as $index => $pic): ?>
        <div class="item<?= $index == 0 ? ' active' : '' ?>">
        <img class="first-slide" src="<?= get_image_path()  ?>/carousel/<?= $pic ?>.jpg" alt="Slide <?= $index ?>">
          <div class="container">
            <div class="carousel-caption">
              <pre>Don't chase the past
      Or long for the future.
  The past is behind;
      The future is not yet reached.
          The Buddha</pre>
            </div>
          </div>
        </div><!-- /.item -->
      <?php endforeach ?>
    </div><!-- /.carousel-inner -->
  </div><!-- /.carousel -->

<?php get_footer(); ?>
