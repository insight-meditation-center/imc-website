<?php
/**
 * Template Name: Home Page
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

	<section id="primary" class="content-area container">
		<div class="row">
		
			<main id="main" class="site-main col-md-12" role="main">

				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'home' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>

			</main><!-- #main -->
			
			<div class="clear"></div>
			
			<?php if ( function_exists('dynamic_sidebar') ) { ?>
			<aside id="home_widgets" class="col-md-12">
				<div class="well">
					<?php dynamic_sidebar( 'sidebar-home' ); ?>
				</div>
			</aside><!-- #home_widgets -->
			<?php } ?>
		
		</div>
	</section><!-- #primary -->

<?php get_footer(); ?>