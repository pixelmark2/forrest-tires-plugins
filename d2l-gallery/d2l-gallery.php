<?php
/*
Plugin Name: D2L Gallery
Plugin URI: https://dust2life.com
Description: D2L Gallery
Version: 1.0
Author: Dust2Life
Author URI: https://dust2life.com
Text Domain: d2l_gallery
Domain Path: /lang/
License: GPL2
*/

add_action('wp_enqueue_scripts', 'd2l_gallery_styles');

function d2l_gallery_styles() {
	wp_enqueue_style( 'd2l-gallery-css', plugins_url('d2l-gallery/css/d2l-gallery.css', dirname(__FILE__)) );
}

add_action('wp_enqueue_scripts', 'd2l_gallery_js');

function d2l_gallery_js() {
	//enqueue JQuery script
	wp_enqueue_script( 'jquery' );
	


	wp_enqueue_script('d2l-gallery-main-js', plugins_url('d2l-gallery/js/d2l-gallery.js', dirname(__FILE__)), array('jquery'));

// 	// The first parameter of wp_enqueue_script and wp_localize_script MUST be the same.
//   wp_enqueue_script('zc-js', plugins_url('js/main.js', dirname(__FILE__)), array('jquery'));
//   wp_localize_script( 'zc-js', 'zcajax', array(
//       'zcajaxurl'     => admin_url( 'admin-ajax.php' ),
//     )
//   );
}

// // These must go outside of the script enqueue function
// add_action('wp_ajax_ajax_hello_action','ajax_hello_action');
// add_action('wp_ajax_nopriv_ajax_hello_action', 'ajax_hello_action');


include("inc/content.php");
add_shortcode('d2l_gallery', 'd2l_create_gallery_html');




