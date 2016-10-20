<?php
/*
Plugin Name: D2L Featured Pages
Plugin URI: https://dust2life.com
Description: D2L Featured Pages
Version: 1.0
Author: Dust2Life
Author URI: https://dust2life.com
Text Domain: d2l_featured_pages
Domain Path: /lang/
License: GPL2
*/

add_action('wp_enqueue_scripts', 'd2l_featured_pages_styles');

function d2l_featured_pages_styles() {
	wp_enqueue_style( 'd2l-featured-pages-css', plugins_url('d2l-featured-pages/css/d2l-featured-pages.css', dirname(__FILE__)) );
}

// add_action('wp_enqueue_scripts', 'd2l_featured_pages_js');

// function d2l_featured_pages_js() {
// 	//enqueue JQuery script
// 	wp_enqueue_script( 'jquery' );
	


// 	wp_enqueue_script('d2l-featured-pages-main-js', plugins_url('d2l-featured-pages/js/d2l-featured-pages.js', dirname(__FILE__)), array('jquery'));

// 	// The first parameter of wp_enqueue_script and wp_localize_script MUST be the same.
//   wp_enqueue_script('zc-js', plugins_url('js/main.js', dirname(__FILE__)), array('jquery'));
//   wp_localize_script( 'zc-js', 'zcajax', array(
//       'zcajaxurl'     => admin_url( 'admin-ajax.php' ),
//     )
//   );
// }

// // These must go outside of the script enqueue function
// add_action('wp_ajax_ajax_hello_action','ajax_hello_action');
// add_action('wp_ajax_nopriv_ajax_hello_action', 'ajax_hello_action');


include("inc/content.php");
add_shortcode('d2l_fp', 'd2l_fp_content');




