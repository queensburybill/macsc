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
//  INCLUDE STYLES
// ====================================
function macsc_styles_enqueue() {
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '4.1.1', 'all');
	wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array(), '1.0.0', 'all');
}

add_action('wp_enqueue_scripts', 'macsc_styles_enqueue');


// ====================================
//  INCLUDE SCRIPTS
// ====================================
function macsc_scripts_enqueue() {
	wp_enqueue_script('jquery');
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '4.1.1', 'true');
	wp_enqueue_script('customjs', get_template_directory_uri() . '/js/macsc.js', array(), null, true);
}

add_action('wp_enqueue_scripts', 'macsc_scripts_enqueue');

// ====================================
//  ACTIVATE MENUS
// ====================================
function macsc_theme_setup() {

	add_theme_support('menus');

	register_nav_menus(array(
		'primary' => 'Primary Header Navigation',
		'secondary' => 'Footer Navigation'
	));
}

add_action('init', 'macsc_theme_setup');

// ====================================
//  THEME SUPPORT
// ====================================
add_theme_support('post-thumbnails');

add_theme_support('post-formats', array('image'));

// ====================================
//  SIDEBAR FUNCTION
// ====================================

function macsc_widget_setup() {

	register_sidebar(array(
		'name'          => 'Sidebar',
		'id'            => 'sidebar-1',
		'class'         => 'custom',
		'description'   => 'Standard Sidebar',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>'
	));

}

add_action('widgets_init','macsc_widget_setup')

?>