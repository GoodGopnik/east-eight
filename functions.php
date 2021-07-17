<?php
/**
 * east-eight Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package east-eight
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_EAST_EIGHT_VERSION', '1.0.0' );


/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style('bootstrap-grid-css', get_stylesheet_directory_uri() . '/inc/css/bootstrap-grid.css', array('astra-theme-css'), CHILD_THEME_EAST_EIGHT_VERSION, 'all');
	wp_enqueue_style('font-awesome-css', get_stylesheet_directory_uri() . '/inc/css/font-awesome.css', array('astra-theme-css'), CHILD_THEME_EAST_EIGHT_VERSION, 'all');
	wp_enqueue_style('line-awesome-css', get_stylesheet_directory_uri() . '/inc/css/line-awesome.min.css', array('astra-theme-css'), CHILD_THEME_EAST_EIGHT_VERSION, 'all');
	wp_enqueue_style('magnific-popup-css', get_stylesheet_directory_uri() . '/inc/css/magnific-popup.css', array('astra-theme-css'), CHILD_THEME_EAST_EIGHT_VERSION, 'all');
	//wp_enqueue_style('fullpage-css', get_stylesheet_directory_uri() . '/inc/css/jquery.fullpage.min.css', array('astra-theme-css'), CHILD_THEME_EAST_EIGHT_VERSION, 'all');
    //wp_enqueue_style('select2-css', get_stylesheet_directory_uri() . '/inc/css/select2.min.css', array('astra-theme-css'), CHILD_THEME_EAST_EIGHT_VERSION, 'all');
	//wp_enqueue_style('animate-css', get_stylesheet_directory_uri() . '/inc/css/animate.css', array('astra-theme-css'), CHILD_THEME_EAST_EIGHT_VERSION, 'all');
	wp_enqueue_style('carousel2-css', get_stylesheet_directory_uri() . '/inc/js/owl.carousel2/assets/owl.carousel.min.css', array('astra-theme-css'), CHILD_THEME_EAST_EIGHT_VERSION, 'all');
	wp_enqueue_style('east-eight-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_EAST_EIGHT_VERSION, 'all');
	wp_enqueue_style('main-css', get_stylesheet_directory_uri() . '/inc/css/main.css', array('astra-theme-css'), CHILD_THEME_EAST_EIGHT_VERSION, 'all');
	wp_enqueue_style('other-css', get_stylesheet_directory_uri() . '/inc/css/other.css', array('astra-theme-css'), CHILD_THEME_EAST_EIGHT_VERSION, 'all');
	wp_enqueue_style('media-css', get_stylesheet_directory_uri() . '/inc/css/media.css', array('astra-theme-css'), CHILD_THEME_EAST_EIGHT_VERSION, 'all');

	//wp_enqueue_script('sticky-js', get_stylesheet_directory_uri() . '/inc/js/jquery.sticky.js', array('jquery'), '1.0.0');
   	//wp_enqueue_script('isotope-js', get_stylesheet_directory_uri() . '/inc/js/isotope.pkgd.min.js', array('jquery'), '1.0.0');
   	//wp_enqueue_script('scrolloverflow', get_stylesheet_directory_uri() . '/inc/js/scrolloverflow.min.js', array('jquery'), '1.0.0');
	//wp_enqueue_script('fullpage-js', get_stylesheet_directory_uri() . '/inc/js/jquery.fullpage.min.js', array('jquery'), '1.0.0');
	wp_enqueue_script('matchHeight', get_stylesheet_directory_uri() . '/inc/js/jquery.matchHeight.js', array('jquery'), '1.0.0');
	wp_enqueue_script('carousel2', get_stylesheet_directory_uri() . '/inc/js/owl.carousel2/owl.carousel.min.js', array('jquery'), '1.0.0');
	wp_enqueue_script('magnific-popup-js', get_stylesheet_directory_uri() . '/inc/js/jquery.magnific-popup.min.js', array('jquery'), '1.0.0');
    //wp_enqueue_script('select2-js', get_stylesheet_directory_uri() . '/inc/js/select2.full.min.js', array('jquery'), '1.0.0');
	wp_enqueue_script('scripts', get_stylesheet_directory_uri() . '/inc/js/scripts.js', array('jquery'), '1.0.0');
}
add_action('wp_enqueue_scripts', 'child_enqueue_styles', 15);

/*------------------------------------*\
	Custom
\*------------------------------------*/

if( function_exists('acf_add_options_page') ) {
	acf_add_options_page('East Eight');
}

/* API Maps */ 
function my_theme_add_scripts() {
    wp_enqueue_script( 'google-map', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBnwBSfpPjF_ny6V2Kpomc0LNJzNkEZleo', array(), '3', true );
    wp_enqueue_script( 'google-map-init', get_template_directory_uri() . '/inc/js/google-maps.js', array('google-map', 'jquery'), '0.1', true );
}
add_action( 'wp_enqueue_scripts', 'my_theme_add_scripts' );
 
function my_acf_google_map_api( $api ){
    $api['key'] = 'AIzaSyBnwBSfpPjF_ny6V2Kpomc0LNJzNkEZleo';
    return $api;
}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');