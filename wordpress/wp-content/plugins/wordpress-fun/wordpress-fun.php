<?php
/**
 * Plugin Name: Wordpress Fun
 * Description: Fun Wordpress project to depict how simple that Wordpress plugin development be
 * Version: 1.0.0
 * Requires at least: 4.6
 * Requires PHP: 7.4
 * Author: Chamith Jayaweera
 * Author URI: https://chamithblogs.com/
 * 
 */

function wordpress_fun_activate(){
    add_option('Activated_plugin', 'wordpress-fun');
}