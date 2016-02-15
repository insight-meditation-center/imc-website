<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Insight_Meditation_Center
 */

get_header(); ?>

	<section id="primary" class="content-area container well">
		<div class="row">
		
			<main id="main" class="site-main col-md-9 col-sm-8" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', get_post_format() );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

			</main><!-- #main -->
			
			<?php get_sidebar(); ?>
		
		</div>
	</section><!-- #primary -->
	<section id="post-navigation">
		<div class="container">
			<div class="row">
				<?php the_post_navigation( array(
					'prev_text'	=>	'<span class="glyphicon glyphicon-chevron-left"></span> %title',
	        		'next_text'	=>	'%title <span class="glyphicon glyphicon-chevron-right"></span>'
				)); ?>
			</div>
		</div>
	</section><!-- #post-navigation -->

<?php get_footer(); ?>