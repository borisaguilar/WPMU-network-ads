<?php
/**
 * @package NETWORK WP_FOOT
 * @version 0.1
 */
/*
Plugin Name: Network wp_foot
Plugin URI: http://etchq.net/
Description: on every page.
Author: Boris Aguilar & Jossemar Cordero
Version: 0.1
Author URI: http://ethcq.net/
*/

/** Step 1. */
function my_plugin_menu() {
	add_options_page( 'My Plugin Options', 'My Plugin', 'manage_options', 'my-unique-identifier', 'my_plugin_options' );
}

/** Step 2 (from text above). */
add_action( 'admin_menu', 'my_plugin_menu' );

/** Step 3. */
function my_plugin_options() {
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}
	echo '<div class="wrap">';
	echo '<p>Here is where the form would go if I actually had options.</p>';
	echo '</div>';
}

function your_function() {
	$r = rand();
    	echo "<style>div.upstuff$r{text-align:center;font-size:120%;color:white;padding-top:10px;padding-bottom:10px;position: fixed;bottom: 0;left: 0;width: 100%;background-color: rgba(64,143,255,0.6);z-index: 999;}div.upstuff$r a{text-decoration:none;color:white;}</style><div class='upstuff$r'><!-- Banner Test --><div style='text-align:center;'><ins class='adsbygoogle' style='display:inline-block;width:468px;height:60px' data-ad-client='ca-pub-1130416518509640' data-ad-slot='6629883702'></ins></div><a href='http://etchq.net'><div>Creado Gratis en <span>etchq.net</span></div><div><strong>¡Crea tu sitio web con nosotros!</strong></div></a></div>";
    	echo '<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script><script>(adsbygoogle = window.adsbygoogle || []).push({});</script>';
}
add_action('wp_footer', 'your_function');
?>