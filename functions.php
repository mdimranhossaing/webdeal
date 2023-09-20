<?php 
/*
* WebDeal Theme Functions
*/

if ( ! function_exists( 'webdeal_theme_setup' ) ) {
  function webdeal_theme_setup() {

    // Add theme title and tagline
    add_theme_support( 'title-tag' );

  }
  add_action( 'after_setup_theme', 'webdeal_theme_setup' );
}

// Add theme CSS and JS file
function webdeal_enqueue_scripts () {

  // Add bootsrap css file
  wp_register_style( 'bootstrap', get_theme_file_uri( 'node_modules/bootstrap/dist/css/bootstrap.min.css' ), array(), false, 'all' );
  wp_enqueue_style('bootstrap');

  // Add bootsrap css file
  wp_register_style( 'header-style', get_theme_file_uri( 'assets/css/header-style.css' ), array(), false, 'all' );
  wp_enqueue_style('header-style');

  // Add main stylsheet file
  wp_enqueue_style( 'main-stylesheet', get_stylesheet_uri() );

  // Add main bootsrap js file
  wp_register_script( 'bootstrap', get_theme_file_uri( 'node_modules/bootstrap/dist/js/bootstrap.bundle.min.js' ), array(), false, true );
  wp_enqueue_script( 'bootstrap' );

  // Add main main js file
  wp_register_script( 'main', get_theme_file_uri( 'assets/js/main.js' ), array(), false, true );
  wp_enqueue_script( 'main' );
}
add_action( 'wp_enqueue_scripts', 'webdeal_enqueue_scripts');