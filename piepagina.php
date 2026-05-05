<?php
/**
 * Plugin Name:       piepagina
 * Plugin URI:        https://gabrieleomodeo.it/wordpress/p/piepagina
 * Description:       Just another footnotes plugin for Wordpress
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Gabriele Omodeo Vanone
 * Author URI:        https://gabrieleomodeo.it
 * License:           GNU GPL v3
 * License URI:       https://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain:       piepagina
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}

/**
 * Currently plugin version.
 */
define('PIEPAGINA_VERSION', '1.0.0');

/**
 * The code that runs during plugin activation.
 */
function activate_piepagina() {
    require_once plugin_dir_path(__FILE__) . 'includes/class-piepagina-activator.php';
    Piepagina_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 */
function deactivate_piepagina() {
    require_once plugin_dir_path(__FILE__) . 'includes/class-piepagina-deactivator.php';
    Piepagina_Deactivator::deactivate();
}

register_activation_hook(__FILE__, 'activate_piepagina');
register_deactivation_hook(__FILE__, 'deactivate_piepagina');

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path(__FILE__) . 'includes/class-piepagina.php';

/**
 * Begins execution of the plugin.
 */
function run_piepagina() {
    $plugin = new Piepagina();
    $plugin->run();
}
run_piepagina();