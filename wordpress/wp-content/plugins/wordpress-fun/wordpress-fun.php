<?php
/**
 * Plugin Name: Wordpress Fun
 * Description: Fun Wordpress project to depict how simple that Wordpress plugin development be
 * Version: 1.0.0
 * Requires at least: 4.6
 * Requires PHP: 7.4
 * Author: Chamith Jayaweera
 * Author URI: https://chamithblogs.com/
 * Text Domain: wordpress-fun
 * Domain Path: /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}


/**
 * Currently plugin version.
 */
define( 'WORDPRESS_FUN_VERSION', '1.0.0' );

function activate_wordpress_fun(){
    require_once plugin_dir_path(__FILE__) . 'includes/class-wordpress-fun-activator.php';
    Wordpress_Fun_Activator::activate();
}

function deactivate_wordpress_fun(){
    require_once plugin_dir_path(__FILE__) . 'includes/class-wordpress-fun-deactivator.php';
    Wordpress_Fun_Deactivator::deactivate();
}

register_activation_hook(__FILE__, 'activate_wordpress_fun');
register_deactivation_hook(__FILE__, 'deactivate_wordpress_fun');

require_once plugin_dir_path(__FILE__) . 'includes/class-wordpress-fun.php';

function run_wordpress_fun()
{
    $plugin = new Wordpress_Fun();
    $plugin->run();
}

run_wordpress_fun();