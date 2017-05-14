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

get_header(); 

while ( have_posts() ) : the_post();

  the_content();

endwhile;

get_footer(); 
