<?php

// ====================================
//  ADD NAVWALKER
// ====================================
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';


// ====================================
//  REGISTER STYLES (NOT NECESSARY YET)
// ====================================
// add_action('init', 'macsc_register_styles');

// function macsc_register_styles() {
// 	wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '4.1.1', 'all');
// 	wp_register_style('style', get_template_directory_uri() . '/style.css', array(), '1.0.0', 'all');
// }


// ====================================
//  INCLUDE FONTS
// ====================================

function include_google_fonts() {
	if (!is_admin()) {
		wp_register_style('google', 'https://fonts.googleapis.com/css?family=Montserrat:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,900,900i', array(), null, 'all');
		wp_enqueue_style('google');
	}
}
add_action('wp_enqueue_scripts', 'include_google_fonts');


// ====================================
//  INCLUDE STYLES
// ====================================

// To see how to set up the enqueue functions see this tutorial:
// https: www.youtube.com/watch?v=NF6r3Ejpris&t=240s
function macsc_styles_enqueue() {
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '4.1.1', 'all');
	wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/css/owl.carousel.min.css', array(), '2.3.4', 'all');
	wp_enqueue_style('owl-carousel-theme', get_template_directory_uri() . '/css/owl.theme.default.min.css', array(), '2.3.4', 'all');
	wp_enqueue_style( 'load-fa', 'https://use.fontawesome.com/releases/v5.0.13/css/all.css' );
	wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array(), '1.0.0', 'all');
}

add_action('wp_enqueue_scripts', 'macsc_styles_enqueue');


// ====================================
//  INCLUDE SCRIPTS
// ====================================
function macsc_scripts_enqueue() {
	//wp_enqueue_script('jquery');
	wp_deregister_script('jquery');
	wp_register_script('jquery', 'https://code.jquery.com/jquery-3.3.1.min.js', false, '1.11.3');
	wp_enqueue_script('jquery');
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '4.1.1', 'true');
	wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), '2.3.4', 'true');
	wp_enqueue_script('customjs', get_template_directory_uri() . '/js/scripts.js', array(), null, true);
}

add_action('wp_enqueue_scripts', 'macsc_scripts_enqueue');


// ====================================
//  ACTIVATE MENUS
// ====================================
function macsc_theme_setup() {

	add_theme_support('menus');

	register_nav_menus(array(
		'primary' => 'Primary Header Navigation',
		'secondary' => 'Footer Navigation',
		'site-map-who-we-are'  => 'Who We Are',
		'site-map-what-we-do'  => 'What We Do',
		'site-map-get-help'  => 'Get Help',
		'site-map-get-involved'  => 'Get Involved',
		'site-map-uncategorized'  => 'Uncategorized'
	));
}

add_action('init', 'macsc_theme_setup');


// ====================================
//  THEME SUPPORT
// ====================================
add_theme_support('post-thumbnails');


// ====================================
//  WIDGET FUNCTION
// ====================================
// See tuturial: https://www.youtube.com/watch?v=aSXitOevqA0&t=69s
// function macsc_widget_setup() {
// 	register_sidebar(
// 		array(
// 			'name'  => 'Facebook',
// 			'id'    => 'facebook',
// 			'class' => 'facebook-feed',
// 			'before_widget' => '<li id="%1$s" class="widget %2$s">',
// 			'after_widget'  => '</li>',
// 			'before_title'  => '<h2 class="widgettitle">',
// 			'after_title'   => '</h2>'
// 		)
// 	);
// }

// add_action('widgets_init', 'macsc_widget_setup');

// ====================================
//  CUSTOM POST-TYPES
// ====================================

function custom_post_types() {
	register_post_type( 'slides', array(
		'labels'             => array(
			'name'               => _x( 'Slides', 'slides', 'your-plugin-textdomain' ),
			'singular_name'      => _x( 'Slide', 'slide', 'your-plugin-textdomain' ),
			'name_admin_bar'     => _x( 'Slide', 'add new on admin bar', 'your-plugin-textdomain' ),
			'add_new'            => _x( 'Add New', 'Slide', 'your-plugin-textdomain' ),
			'add_new_item'       => __( 'Add New Slide', 'your-plugin-textdomain' ),
			'new_item'           => __( 'New Slide', 'your-plugin-textdomain' ),
			'edit_item'          => __( 'Edit Slide', 'your-plugin-textdomain' ),
			'view_item'          => __( 'View Slide', 'your-plugin-textdomain' ),
			'all_items'          => __( 'All Slides', 'your-plugin-textdomain' ),
			'search_items'       => __( 'Search Slides', 'your-plugin-textdomain' ),
			'parent_item_colon'  => __( 'Parent Slides:', 'your-plugin-textdomain' ),
			'not_found'          => __( 'No slides found.', 'your-plugin-textdomain' ),
			'not_found_in_trash' => __( 'No slides found in Trash.', 'your-plugin-textdomain' )
		),
        'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'menu_icon'          => 'dashicons-exerpt-view',
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'slides' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title' )
	) );
}
add_action( 'init', 'custom_post_types' );



?>