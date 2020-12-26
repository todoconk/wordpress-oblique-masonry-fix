<?php
/**
 * @package Oblique_Masonry_Fix
 * @version 1.0.0
 */
/*
Plugin Name: Oblique Masonry Fix
Plugin URI: http://wordpress.org/plugins/oblique-masonry-fix/
Description: This is not just a plugin, fix broken outdated Oblique masonry script.
Author: Krikor Krikorian <todoconk>
Version: 1.0.0
Author URI: https://todoconk.com/
*/

// Fix broken outdated Oblique masonry script.
add_action('wp_enqueue_scripts', 'masonry_fix', 100);

function masonry_fix()
{
    wp_dequeue_script('oblique-masonry-init');
    wp_enqueue_script('fix_oblique-masonry-init', plugin_dir_url( __FILE__ ) . '/masonry-init.js', array('jquery', 'masonry'), true);
}
