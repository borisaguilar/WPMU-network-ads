<?php
/**
 * The WordPress Plugin Boilerplate.
 *
 * A foundation off of which to build well-documented WordPress plugins that
 * also follow WordPress Coding Standards and PHP best practices.
 *
 * @package   WPMU Network Ads
 * @author    Boris Aguilar <me@borisguilar.com>
 * @license   GPL-2.0+
 * @link      https://github.com/boriscougar/WPMU-network-ads.git
 * @copyright 2013 Boris Aguilar
 *
 * @wordpress-plugin
 * Plugin Name:       WPMU Network Ads
 * Plugin URI:        https://github.com/boriscougar/WPMU-network-ads.git
 * Description:       Plugin to display Ads network-wide
 * Version:           0.0.6
 * Author:            Boris Aguilar
 * Author URI:        http://borisaguilar.com
 * Text Domain:       WPMU-network-ads
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path:       /languages
 * GitHub Plugin URI: https://github.com/boriscougar/WPMU-network-ads
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/*----------------------------------------------------------------------------*
 * Public-Facing Functionality
 *----------------------------------------------------------------------------*/

/*
 *
 *
 */
require_once( plugin_dir_path( __FILE__ ) . '/public/class-wpmu-network-ads.php' );

/*
 * Register hooks that are fired when the plugin is activated or deactivated.
 * When the plugin is deleted, the uninstall.php file is loaded.
 *
 */
register_activation_hook( __FILE__, array( 'WPMUNetworkAds', 'activate' ) );
register_deactivation_hook( __FILE__, array( 'WPMUNetworkAds', 'deactivate' ) );

/*
 * TODO:
 *
 * - replace Plugin_Name_Admin with the name of the class defined in
 *   `class-plugin-name-admin.php`
 */
add_action( 'plugins_loaded', array( 'WPMUNetworkAds', 'get_instance' ) );

/*----------------------------------------------------------------------------*
 * Dashboard and Administrative Functionality
 *----------------------------------------------------------------------------*/

/*
 * TODO:
 *
 * If you want to include Ajax within the dashboard, change the following
 * conditional to:
 *
 * if ( is_admin() ) {
 *   ...
 * }
 *
 * The code below is intended to to give the lightest footprint possible.
 */
if ( is_admin() && ( ! defined( 'DOING_AJAX' ) || ! DOING_AJAX ) ) {

	require_once( plugin_dir_path( __FILE__ ) . '/admin/class-wpmunetworkads-admin.php' );
	add_action( 'plugins_loaded', array( 'WPMUNetworkAds_Admin', 'get_instance' ) );

}
