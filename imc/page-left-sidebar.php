<?php
/**
 * Template Name: Content Page w/ Left Sidebar
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
      <?php dynamic_sidebar( 'sidebar-1' ); ?>

      <main id="main" class="site-main col-md-8" role="main">

        <?php
        while ( have_posts() ) : the_post();

          get_template_part( 'template-parts/content', 'page' );

        endwhile; // End of the loop.
        ?>

      </main><!-- #main -->

    </div><!-- /.row -->
  </div><!-- /.container -->

<?php get_footer(); ?>
