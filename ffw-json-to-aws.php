<?php
/*
 * Plugin Name: FFW JSON to AWS
 * Plugin URI: http://fiftyandfifty.org
 * Description: Export feed (post object) as JSON to 
 * Version: 1.0
 * Author: Fifty and Fifty
 * Author URI: http://labs.fiftyandfifty.org
 *
 * @package WordPress
 * @author Hugh Lashbrooke
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit;

// Include plugin class files
require_once( 'classes/class-wordpress-plugin-template.php' );
require_once( 'classes/class-wordpress-plugin-template-settings.php' );
require_once( 'classes/post-types/class-wordpress-plugin-template-post_type.php' );

// Instantiate necessary classes
global $plugin_obj;
$plugin_obj = new WordPress_Plugin_Template( __FILE__ );
$plugin_settings_obj = new WordPress_Plugin_Template_Settings( __FILE__ );
$plugin_post_type_obj = new WordPress_Plugin_Template_Post_Type( __FILE__ );