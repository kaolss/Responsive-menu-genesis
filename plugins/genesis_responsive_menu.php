<?php
/**
 * Plugin Name: Genesis responsive menu
 * Plugin URI: 
 * Description: Makes the primary menu responsive.
 * Version: 0.01
 * Author: Karin H Olsson
 * Author URI: http://kobotolo.se
 * License: GPL2
 */

add_action( 'wp_enqueue_scripts', 'ok_responsive_css' );


function ok_responsive_css() {
    wp_enqueue_script('nav_for_mobile', plugins_url('/js/drop-down-nav.js',  __FILE__), array('jquery'), '0.5' );	
	wp_enqueue_style( 'genesis_responsive_menu', plugins_url('/css/genesis_responsive_menu.css', __FILE__), array(), '0.0.1' );
	if ( file_exists( get_stylesheet_directory()."/genesis_responsive_menu.css" ) ) {
		wp_enqueue_style( 'genesis_responsive_menu_custom', get_stylesheet_directory_uri() . '/genesis_responsive_menu.css', array(), '0.0.1' );
	}		
}
