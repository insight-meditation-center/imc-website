<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Insight_Meditation_Center
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <nav id="navbar-site" class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#primary-menu-collapse" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img alt="Buddha smiling" src="<?= get_image_path() ?>/bodhi-leaf.png" /><?php bloginfo('name') ?></a>
        
      </div>

			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
        <li><a href="#">Donate</a></li>
				</ul>
				<form class="navbar-form navbar-right" role="search">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Search">
					</div>
				</form>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#">Insight Retreat Center</a></li>
					<li><a href="#">Audio Dharma</a></li>
				</ul>
			</div><!-- /.navbar-collapse -->

    </div>
  </nav>
  <nav id="mainNav" class="navbar">
    <div class="container">
      <div id="primary-menu-collapse" class="collapse navbar-collapse">
        <?php wp_nav_menu( array(
          'menu'              => 'primary-right',
          'theme_location'    => 'primary-right',
          'depth'             => 2,
          'container'         => false,
          'menu_class'        => 'nav nav-justified',
          'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
          'walker'            => new wp_bootstrap_navwalker()
        )); ?>
      </div>
    
    </div><!-- /.container -->
  </nav> <!-- End Main Navigation -->
		
