<?php
/**
 * Plugin Name: Genesis responsive menu
 * Plugin URI: 
 * Description: Makes the primary menu responsive.
 * Version: 0.03
 * Author: Karin H Olsson
 * Author URI: http://kobotolo.se
 * License: GPL2
 *  * GitHub Plugin URI: https://github.com/kaolss/Responsive-menu-genesis
 * GitHub Branch:     master
 */


add_action( 'wp_enqueue_scripts', 'ok_responsive_css' );


function ok_responsive_css() {
    wp_enqueue_script('nav_for_mobile', plugins_url('/js/drop-down-nav.js',  __FILE__), array('jquery'), '0.5' );	
	wp_enqueue_style( 'genesis_responsive_menu', plugins_url('/css/genesis_responsive_menu.css', __FILE__), array(), '0.0.1' );
	$cdir= plugin_dir_path(__FILE__);
        if ( file_exists( $cdir."/css/custom.css")) { 
        	wp_enqueue_style( 'genesis_responsive_menu_custom', plugins_url('/css/custom.css', __FILE__), array(), '0.0.1' );
	}		
}
