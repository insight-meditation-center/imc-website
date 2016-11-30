<?php
/**
 * Template Name: Content with image
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Insight_Meditation_Center
 */

get_header(); ?>

  <div class="jumbotron hero">
    <img src="<?= get_image_path() ?>/volunteers.jpg" />
  </div>

	<div class="container">
		<div class="row">

			<main id="main" class="site-main col-md-offset-2 col-md-8" role="main">

        <?php get_sidebar(); ?>

				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'page-image' );

				endwhile; // End of the loop.
				?>

			</main><!-- #main -->
			
		</div><!-- /.row -->
	</div><!-- /.container -->

<?php get_footer(); ?>
