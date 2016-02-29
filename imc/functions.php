<?php
/**
 * Insight Meditation Center functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Insight_Meditation_Center
 */

if ( ! function_exists( 'imc_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function imc_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Insight Meditation Center, use a find and replace
	 * to change 'imc' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'imc', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary-left' => esc_html__( 'Primary Navbar-Left', 'imc' ),
		'primary-right' => esc_html__( 'Primary Navbar-Right', 'imc' ),
		'top-nav' => esc_html__( 'Top Menu', 'imc' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'imc_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'imc_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function imc_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'imc_content_width', 640 );
}
add_action( 'after_setup_theme', 'imc_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function imc_widgets_init() {
	register_sidebar(array(
		'name'          => esc_html__( 'Home Sidebar', 'imc' ),
		'id'            => 'sidebar-home',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget col-sm-4 col-xs-12 %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title h3">',
		'after_title'   => '</h2>',
	));
	register_sidebar(array(
		'name'          => esc_html__( 'Sidebar', 'imc' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget col-md-12 col-sm-6 %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	));
	register_sidebar(array(
		'name'          => esc_html__( 'Footer', 'imc' ),
		'id'            => 'footer_widgets',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget col-md-3 col-sm-6 %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	));
}
add_action( 'widgets_init', 'imc_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function imc_scripts() {
	wp_enqueue_style( 'imc-googlefone', '//fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic,900,900italic');
	wp_enqueue_style( 'imc-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
	wp_enqueue_style( 'imc-fontawesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css');
	wp_enqueue_style( 'imc-css', get_template_directory_uri() . '/assets/css/imc.css');
	wp_enqueue_style( 'imc-style', get_stylesheet_uri() );

	wp_enqueue_script( 'imc-jquery', get_template_directory_uri() . '/assets/js/jquery-1.11.3.min.js', array(), '', false );
	wp_enqueue_script( 'imc-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.js', array(), '', true );
	wp_enqueue_script( 'imc-bootstrap-classes', get_template_directory_uri() . '/assets/js/bootstrap-classes.js', array(), '', true );
	wp_enqueue_script( 'imc-customjs', get_template_directory_uri() . '/assets/js/custom-scripts.js', array(), '', true );
	wp_enqueue_script( 'imc-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '20120206', true );
	wp_enqueue_script( 'imc-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'imc_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Bootstrap functions for theme templates.
 */
require get_template_directory() . '/inc/bootstrap.php';

/**
 * Register Custom Navigation Walker - Bootstrap
 */
require_once(get_template_directory() . '/inc/wp_bootstrap_navwalker.php');


/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


//function to call first uploaded image in functions file
function article_first_image() {
	$files = get_children('post_parent='.get_the_ID().'&post_type=attachment&post_mime_type=image&order=desc');
	
	if($files) :
		$keys = array_reverse(array_keys($files));
		$j=0;
		$num = $keys[$j];
		$image=wp_get_attachment_image($num, 'large', true);
		$imagepieces = explode('"', $image);
		$imagepath = $imagepieces[1];
		$main=wp_get_attachment_url($num);
			$template=get_template_directory();
			$the_title=get_the_title();
		print "<img src='$main' alt='$the_title' class='frame' />";
	endif;
}


// Changing Continue Reading Text
function modify_read_more_link() {
	return '<a class="btn btn-sm btn-default more-link" href="' . get_permalink() . '">Continue <span class="glyphicon glyphicon-chevron-right"></span></a>';
}
add_filter( 'the_content_more_link', 'modify_read_more_link' );

