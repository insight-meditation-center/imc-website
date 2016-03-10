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

	<div class="jumbotron container">
		<div class="row">
		
			<main id="main" class="site-main col-md-12" role="main">

				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'home' );

				endwhile; // End of the loop.
				?>

			</main><!-- #main -->
		
		</div>
	</div><!-- .jumbotron.container -->

<?php get_footer(); ?>
