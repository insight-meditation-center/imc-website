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

	<section id="primary" class="content-area container">
		<div class="row">
		
			<main id="main" class="site-main col-md-12" role="main">

				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'home' );

				endwhile; // End of the loop.
				?>

			</main><!-- #main -->
		
		</div>
	</section><!-- #primary -->

<?php get_footer(); ?>
