<?php

/**
 * Plugin Name:       BB Random Rows
 * Plugin URI:        https://github.com/jcasabona/bb-random-rows
 * Description:       A small plugin that adds some JS to A/B test or randomize Beaver Builder rows
 * Version:           1.0.0
 * Author:            Joe Casabona
 * Author URI:        https://casabona.org
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       bbrr
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// If Beaver Builder isn't installed, abort
if ( ! is_plugin_active('bb-plugin/fl-builder.php') ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-bbrr-activator.php
 */
function activate_bbrr() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-bbrr-activator.php';
	Bbrr_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-bbrr-deactivator.php
 */
function deactivate_bbrr() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-bbrr-deactivator.php';
	Bbrr_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_bbrr' );
register_deactivation_hook( __FILE__, 'deactivate_bbrr' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-bbrr.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_bbrr() {

	$plugin = new Bbrr();
	$plugin->run();

}
run_bbrr();
