<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://www.webhereos.it
 * @since             1.0.0a
 * @package           Web_Heroes
 *
 * @wordpress-plugin
 * Plugin Name:       Web Heroes
 * Plugin URI:        https://github.com/mitch827/web-heroes
 * Description:       This plugin collect all WH related addons
 * Version:           1.0.3a
 * Author:            Web Heroes
 * Author URI:        http://www.webhereos.it
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       web-heroes
 * Domain Path:       /languages
 * GitHub Plugin URI: https://github.com/mitch827/web-heroes
 * GitHub Branch:     master
 * Textdomain:		  web-heroes
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-web-heroes-activator.php
 */
function activate_web_heroes() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-web-heroes-activator.php';
	Web_Heroes_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-web-heroes-deactivator.php
 */
function deactivate_web_heroes() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-web-heroes-deactivator.php';
	Web_Heroes_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_web_heroes' );
register_deactivation_hook( __FILE__, 'deactivate_web_heroes' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-web-heroes.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_web_heroes() {

	$plugin = new Web_Heroes();
	$plugin->run();

}
run_web_heroes();
