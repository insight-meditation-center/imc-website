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

  <div id="heroCarousel" class="carousel slide" data-ride="carousel" data-interval="30000">
    <?php $pics = [['wooden-buddha', 'left']] ?>
    <?php $start = intval(date('H')) % sizeof($pics) ?>
    <div class="carousel-inner" role="listbox">
      <?php foreach($pics as $index => $pic): ?>
        <div class="item<?= $index == 0 ? ' active' : '' ?>">
        <img class="first-slide" src="<?= get_image_path() ?>/<?= $pic[0] ?>.jpg" alt="Slide <?= $index ?>">
          <div class="container">
            <a href="#" class="carousel-caption carousel-caption-<?= $pic[1] ?>">
              <pre>All experience is preceded by mind,
     led by mind,
     made by mind.
Speak or act with a peaceful mind, and happiness follows
     like a never-departing shadow.
          — Dhammapada</pre>
            </a>
          </div>
        </div><!-- /.item -->
      <?php endforeach ?>
    </div><!-- /.carousel-inner -->
  </div><!-- /.carousel -->

  <div class="container">
    <div class="row separator-bottom">
      <div class="col-md-4">
        <h4>How To Start With Mindfulness</h4>
        <ul>
          <li>The Basic Idea: <a href="#">The Practice of Mindfulness</a> <a href="#">(Audio)</a></li>
          <li><a href="#">Beginning at IMC</a></li>
          <li>
            Beginning on Your Own
            <ul>
              <li><a href="#">Mindfulness Meditation as Buddhist Practice</a> <a href="#">(Audio)</a></li>
              <li><a href="#">Brief Instructions in Sitting Meditation</a> <a href="#">(Audio)</a></li>
              <li><a href="#">Concentration and Relaxation</a></li>
              <li><a href="#">Posture instructions</a> <a href="#">(Video)</a></li>
              <li>Longer Audio Instructions <a href="#">(44 minute audio)</a></li>
              <li>Read Gil Fronsdal’s <a href="#">The Issue at Hand</a></li>
            </ul>
          </li>
        </uL>
      </div><!-- /.col-md-4 -->
      <div class="col-md-4">
        <h4>Noteworthy:</h4>
        <ul>
          <li><a href="#">Notes from Gil (July 18)</a></li>
          <li><a href="#">Aging, Dying, and Awakening with Anna Douglas, Aug 27</a></li>
          <li><a href="#">The Spectrum of Desire (article)</a></li>
          <li><a href="#">A Call for IMC and IRC photos</a></li>
          <li><a href="#">Eightfold Path Program starts in Oct.</a></li>
        </ul>
        <h4>Recent talks:</h4>
        <ul>
          <li><a href="#">Aug 4: Andrea Fella - Patience</a></li>
          <li><a href="#">Aug 1: Gil Fronsdal - Mindfulness of Body</a></li>
          <li><a href="#">Jul 31: Gil Fronsdal - Mindfulness Cultivates Ethical Virtue</a></li>
          <li><a href="#">Jul 20: Gil Fronsdal - Dharmette: Content vs process</a></li>
          <li><a href="#">Jul 20: Gil Fronsdal - Practice notes: Thinking as Scenery</a></li>
        </ul>
        <h4><a href="http://www.audiodharma.org">View all talks</a></h4>
      </div><!-- /.col-md-4 -->
      <div class="col-md-4">
        <h4 class="calendar">Calendar <a class="small" href="#">(see complete calendar)</a></h4>
        <iframe src="https://www.google.com/calendar/embed?showTitle=0&amp;showNav=0&amp;showDate=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;mode=AGENDA&amp;height=400&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=imc.events.mgs%40gmail.com&amp;src=6fi0sc1ud24qjof96vc5kvmtd8%40group.calendar.google.com&amp;color=%232952A3&amp;ctz=America%2FLos_Angeles" style=" border-width:0 " scrolling="no" frameborder="0" height="400" width="!00%"></iframe>
      </div><!-- /.col-md-4 -->
    </div><!-- /.row -->
    <div class="row separator-bottom-no-margin">
      <div class="col-md-4 col-md-offset-2">
        <h4>Ongoing Support</h4>
        <ul>
          <li><a href="#">For newcomers to IMC</a></li>
          <li><a href="#">Introduction to Audiodharma</a></li>
          <li><a href="#">Introduction to Readings</a></li>
          <li>
            Self-Retreats
            <ul>
              <li><a href="#">Guided daylong retreat</a></li>
              <li><a href="#">Solo half-day retreat</a></li>
              <li><a href="#">Solo one-day retreat</a></li>
            </ul>
          </li>
        </ul>
      </div><!-- /.col-md-4 -->
      <div class="col-md-4">
        <h4>IMC's Online Offerings</h4>
         <ul>
          <li><a href="#">Audiodharma: Listening to the Dharma</a></li>
          <li><a href="#">IMC online courses</a></li>
          <li><a href="#">Sati Center online courses</a></li>
          <li><a href="#">Bibliodharma: Reading the Dharma</a></li>
        </ul>     </div><!-- /.col-md-4 -->
    </div><!-- /.row -->
  </div><!-- /.container -->
  <div id="learnmore" class="jumbotron">
    <div class="container">
      <div class="row">
        <div class="col-md-9 col-md-offset-1">
          <p>We welcome equally people of all cultural, ethnic, and religious backgrounds, racial identities, socio-economic class, sexual orientation, gender, identity, age, education, and physical ability.</p>
        </div>
      </div><!-- /.row -->
    </div><!-- /.container -->
  </div><!-- /#learnmore -->

<?php get_footer(); ?>
