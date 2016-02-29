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
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'imc' ); ?></a>

	<header id="header" class="site-header" role="banner">
		<section id="header-top" class="hidden-xs">
			<div class="container">
			
				<nav id="top-nav">
					<?php wp_nav_menu( array(
						'menu'              => 'top-nav',
						'theme_location'    => 'top-nav',
						'depth'             => 2,
						'container'         => '',
						'container_class'   => false,
						//'container_id'      => 'primary-menu-collapse',
						'menu_class'        => 'nav nav-pills pull-right',
						'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
						'walker'            => new wp_bootstrap_navwalker())
					); ?>
				</nav>
				
				<div id="header-search" class="pull-right">
					<?php get_search_form(); ?>
				</div>
					
			</div>
		</section><!-- #header-top -->
		
		<nav id="mainNav" class="navbar navbar-default" role="navigation">
			<div class="container">
				<div class="row">
				
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header visible-xs">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#primary-menu-collapse" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						
						<h1 class="site-title navbar-brand">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
								<?php if ( function_exists( 'ot_get_option' ) && ot_get_option( 'site_logo' ) ) { ?>
									<img src="<?php echo ot_get_option( 'site_logo' ); ?>" height="64" alt="<?php bloginfo( 'name' ); ?>" title="<?php bloginfo( 'name' ); ?>">
									<strong class="sr-only"><?php bloginfo( 'name' ); ?></strong>
								<?php } else {
									bloginfo( 'name' );
								} ?>
							</a>
						</h1>
						
						<?php $description = get_bloginfo( 'description', 'display' );
						if ( $description || is_customize_preview() ) : ?>
							<p class="navbar-text sr-only"><?php echo $description; /* WPCS: xss ok. */ ?></p>
						<?php endif; ?>
						
					</div>
					
					<div id="primary-menu-collapse" class="collapse navbar-collapse">
						<?php wp_nav_menu( array(
							'menu'              => 'primary-left',
							'theme_location'    => 'primary-left',
							'depth'             => 2,
							'container'         => false,
							'menu_class'        => 'nav navbar-nav navbar-left',
							'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
							'walker'            => new wp_bootstrap_navwalker()
						)); ?>
						<?php wp_nav_menu( array(
							'menu'              => 'primary-right',
							'theme_location'    => 'primary-right',
							'depth'             => 2,
							'container'         => false,
							'menu_class'        => 'nav navbar-nav navbar-right',
							'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
							'walker'            => new wp_bootstrap_navwalker()
						)); ?>
					</div>
				
				</div>
			</div><!-- /.container -->
		</nav> <!-- End Main Navigation -->
		
	</header><!-- #header -->

	<div id="content" class="site-content">
