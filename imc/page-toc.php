<?php
/**
 * Template Name: Generate TOC
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Insight_Meditation_Center
 */

get_header(); ?>

	<div class="container">
		<div class="row">

      <div class="col-md-3" role="complementary">
        <nav class="sidebar">
          <ul class="list-unstyled">
            <li class="active">
              <a href="#nocostnoregistration">No Cost - No Registration</a>
            </li>
            <li>
              <a href="#programsforbeginners">Programs for Beginners</a>
            </li>
            <li>
              <a href="#daylongmeditationretreats">Daylong Meditation Retreats</a>
            </li>
            <li>
              <a href="#daylongteachings">Daylong Teachings</a>
            </li>
            <li>
              <a href="#yearlongtrainings">Year-long Trainings</a>
            </li>
            <li>
              <a href="#nonresidentialretreats">Non-residential retreats</a>
            </li>
            <li>
              <a href="#residentialretreats">Residential Retreats</a>
            </li>
            <li>
              <a href="#youthandfamilyprograms">Youth and Family Programs</a>
            </li>
            <li>
              <a href="#saticenter">Sati Center</a>
            </li>
          </ul>
        </nav>
      </div>

			<main id="main" class="site-main col-md-9 col-sm-8" role="main">

        <?php get_sidebar(); ?>

				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'page' );

				endwhile; // End of the loop.
				?>

			</main><!-- #main -->
			
		</div><!-- /.row -->
	</div><!-- /.container -->

<?php get_footer(); ?>
