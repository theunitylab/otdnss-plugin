<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              www.dabrattoli.com
 * @since             1.0.0
 * @package           Otdnss_Plugin
 *
 * @wordpress-plugin
 * Plugin Name:       OTDN Site Specific Plugin
 * Plugin URI:        www.theunitylab.com
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            David Brattoli
 * Author URI:        www.dabrattoli.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       otdnss-plugin
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-otdnss-plugin-activator.php
 */
function activate_otdnss_plugin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-otdnss-plugin-activator.php';
	Otdnss_Plugin_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-otdnss-plugin-deactivator.php
 */
function deactivate_otdnss_plugin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-otdnss-plugin-deactivator.php';
	Otdnss_Plugin_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_otdnss_plugin' );
register_deactivation_hook( __FILE__, 'deactivate_otdnss_plugin' );

require_once( plugin_dir_path( __FILE__ ).'/php/otdn-CPT.php' );

require_once( plugin_dir_path( __FILE__ ).'/php/otdn-taxonomy.php' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-otdnss-plugin.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_otdnss_plugin() {

	$plugin = new Otdnss_Plugin();
	$plugin->run();

}
run_otdnss_plugin();
