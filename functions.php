<?php
/**
 * Bulmapress functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Bulmapress
 */

require get_template_directory() . '/functions/bulmapress_navwalker.php';
require get_template_directory() . '/functions/bulmapress_helpers.php';
require get_template_directory() . '/functions/bulmapress_custom_query.php';
require get_template_directory() . '/functions/bulmapress_custom_query_courses.php';

if ( ! function_exists( 'bulmapress_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function bulmapress_setup() {
	require get_template_directory() . '/functions/base.php';
	require get_template_directory() . '/functions/post-thumbnails.php';
	require get_template_directory() . '/functions/navigation.php';
	require get_template_directory() . '/functions/content.php';
	require get_template_directory() . '/functions/pagination.php';
	require get_template_directory() . '/functions/widgets.php';
	require get_template_directory() . '/functions/search.php';
	require get_template_directory() . '/functions/scripts-styles.php';
}
endif;
add_action( 'after_setup_theme', 'bulmapress_setup' );

require get_template_directory() . '/functions/template-tags.php';
require get_template_directory() . '/functions/extras.php';
require get_template_directory() . '/functions/customizer.php';
require get_template_directory() . '/functions/jetpack.php';

// Add Custom Header image
$defaults = array(
    'default-image' => '',
    'random-default' => false,
    'width' => 0,
    'height' => 0,
    'flex-height' => false,
    'flex-width' => false,
    'default-text-color' => '',
    'header-text' => true,
    'uploads' => true,
    'wp-head-callback' => '',
    'admin-head-callback' => '',
    'admin-preview-callback' => '',
    'video' => false,
    'video-active-callback' => 'is_front_page',
);
add_theme_support( 'custom-header', $defaults );
$args = array(
	'width'         => 980,
	'height'        => 60,
	'default-image' => get_template_directory_uri() . '/images/header.jpg',
	'uploads'       => true,
);
add_theme_support( 'custom-header', $args );

// Thumbnails
add_theme_support( 'post-thumbnails' );

// Continue Reading
function tyler_excerpt_more( $more ) {
    return 'Read the whole post &gt;&gt;'; // again, change to your liking
}
add_filter( 'excerpt_more', 'tyler_excerpt_more' );

// Add custom css
function add_stylesheet_to_head() {
    echo "<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>";
}

add_action( 'wp_head', 'add_stylesheet_to_head' );

// Add custom logo
add_theme_support( 'custom-logo' );

// Featured content
add_theme_support( 'mytheme_has_featured_posts', array(
    'filter'     => 'featured',
    'max_posts'  => 2,
    'post_types' => array( 'page' ),
) );

// Upload Size Increase
@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

// New navbar
function register_my_menus() {
  register_nav_menus(
    array(
      'Primary' => __( 'main' ),
      'Sub' => __( 'sub' )
    )
  );
}
add_action( 'init', 'register_my_menus' );
