<?php
/*
Plugin Name: Woobizz Hook 27 
Plugin URI: http://woobizz.com
Description: Hide default breadcrumb on all pages
Author: Woobizz
Author URI: http://woobizz.com
Version: 1.0.0
Text Domain: woobizzhook27
Domain Path: /lang/
*/
//Prevent direct acces
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
//Load translation
add_action( 'plugins_loaded', 'woobizzhook27_load_textdomain' );
function woobizzhook27_load_textdomain() {
  load_plugin_textdomain( 'woobizzhook27', false, basename( dirname( __FILE__ ) ) . '/lang' ); 
}
//Add Hook 27
function woobizzhook27_hide_breadcrumb() {
	remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );
}
add_action('init','woobizzhook27_hide_breadcrumb');