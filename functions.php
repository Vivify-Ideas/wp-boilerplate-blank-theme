<?php

if (!defined('ABSPATH')) exit;

// set up theme support
function vi_theme_setup() {

	add_theme_support('post-thumbnails');
	add_theme_support('automatic-feed-links');
	add_theme_support('title-tag');

}
add_action('after_setup_theme', 'vi_theme_setup');



// conditional parent/child styles
function vi_theme_styles() {

	// always load active theme stylesheet
	wp_enqueue_style('vi-theme', get_stylesheet_uri(), array(), null);

}



// frontend script & style
function vi_theme_frontend_scripts() {

	// wp_enqueue_style( $handle, $src, $deps, $ver, $media )

	vi_theme_styles();

	// wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer )

	wp_enqueue_script('vi-theme', get_template_directory_uri() .'/js/custom.js', array('jquery'), null, true);

}
add_action('wp_enqueue_scripts', 'vi_theme_frontend_scripts');


// register nav menus

function register_menu() {

  register_nav_menu('primary-menu',__( 'Primary Menu' ));

}

add_action( 'init', 'register_menu' );

// including generated code for custom fields

include_once( get_stylesheet_directory() . '/inc/custom-fields.php');
