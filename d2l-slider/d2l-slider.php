<?php
/*
Plugin Name: Slider
Plugin URI: https://dust2life.com
Description: Slider
Version: 1.0
Author: Dust2Life
Author URI: https://dust2life.com
Text Domain: d2l_slider
Domain Path: /lang/
License: GPL2
*/


add_action('wp_enqueue_scripts', 'd2l_slider_styles');

function d2l_slider_styles() {
	wp_enqueue_style( 'd2l-slider-css', plugins_url('d2l-slider/css/slider.css', dirname(__FILE__)) );
}

add_action('wp_enqueue_scripts', 'd2l_slider_js');

function d2l_slider_js() {
	wp_enqueue_script('d2l-slider-main-js', plugins_url('d2l-slider/js/main.js', dirname(__FILE__)), array('jquery'));
}

include("inc/content.php");

add_shortcode('d2l_slider', 'slider_content');





