<?php
/**
 * Plugin Name: WikiFamilyTree
 * Plugin author: Blocktech Lab
 * Plugin URI: https://github.com/akirk/wiki-family-tree
 * Version: 0.9.2
 * Requires at least: 5.0
 * Requires PHP: 5.2.4
 *
 * Description: Family History Wiki for WordPress
 *
 * Text Domain: wiki-family-tree
 *
 * @package BL_Wiki_Family_Tree
 */
namespace BL_Wiki_Family_Tree;


require __DIR__ . '/class-calendar.php';
require __DIR__ . '/class-private-site.php';
require __DIR__ . '/class-shortcodes.php';

require __DIR__ . '/class-main.php';

add_action( 'upgrader_process_complete', array( __NAMESPACE__ . '\Main', 'upgrade_plugin' ) );
register_activation_hook( __FILE__, array( __NAMESPACE__ . '\Main', 'activate_plugin' ) );
add_action( 'activate_blog', array( __NAMESPACE__ . '\Main', 'activate_plugin' ) );
add_action( 'wp_initialize_site', array( __NAMESPACE__ . '\Main', 'activate_for_blog' ) );

new Main();
