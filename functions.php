<?php
/**
 * Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 */

 if ( ! function_exists( 'theme_setup' ) ) :
 /**
  * Sets up theme defaults and registers support for various WordPress features.
  *
  * Note that this function is hooked into the after_setup_theme hook, which
  * runs before the init hook. The init hook is too late for some features, such
  * as indicating support for post thumbnails.
  */
 function theme_setup() {

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


 	register_nav_menus( array(
 		'header-main-menu' => esc_html__( 'Main Menu', 'Dickinson' ),
 		'footer-menu' => esc_html__( 'Footer Menu', 'Dickinson' )
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

 }
 endif;
 add_action( 'after_setup_theme', 'theme_setup' );

 // Adds CSS
 // ============
 function theme_styles() {
   //wp_enqueue_style( 'font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
   wp_enqueue_style( 'mainCSS', get_template_directory_uri() . '/style.min.css' );
   wp_enqueue_style( 'wpCSS', get_template_directory_uri() . '/style.css' );
 }
 add_action( 'wp_enqueue_scripts', 'theme_styles');

 // Adds JS
 // ==========
 function theme_js() {
	wp_enqueue_script( 'zoomJS', get_template_directory_uri() . '/js/jquery.zoom.js', array('jquery'), '', true);
	wp_enqueue_script( 'frameJS', get_template_directory_uri() . '/js/frame.js', array(), '', true);
	wp_enqueue_script( 'aos', 'https://unpkg.com/aos@next/dist/aos.js', array('jquery'), '', true);
	wp_enqueue_script( 'modalJS', get_template_directory_uri() . '/js/modal.js', array('jquery'), '', true);
	wp_enqueue_script( 'sliderJS', get_template_directory_uri() . '/js/slider.js', array('jquery'), '', true);
	wp_enqueue_script( 'mainJS', get_template_directory_uri() . '/js/main.js', array('jquery'), '', true);
  	// wp_enqueue_script( 'mainJS', get_template_directory_uri() . '/js/main.js', array('jquery'), '', true);
 }
 add_action( 'wp_enqueue_scripts', 'theme_js');

// Implement Additional files
//==========
//

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
* Load Custom Posts file
*/
require get_template_directory() . '/inc/custom-posts.php';

/**
* Load Custom Taxonomies file
*/
require get_template_directory() . '/inc/custom-taxonomies.php';

/**
* Theme appearance file (for customising login page and other appearance stuff)
*/
require get_template_directory() . '/inc/theme-appearance.php';

