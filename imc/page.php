<?php
/**
 * The template for displaying all pages.
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

			<main id="main" class="site-main col-md-10 col-md-offset-1" role="main">

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
