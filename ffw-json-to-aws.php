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
require_once( 'classes/class-ffw-json-to-aws.php' );
require_once( 'classes/class-ffw-json-to-aws-settings.php' );
require_once( 'classes/post-types/class-ffw-json-to-aws-post_type.php' );

// Instantiate necessary classes
global $plugin_obj;
$plugin_obj           = new FFW_JSON_TO_AWS( __FILE__ );
$plugin_settings_obj  = new FFW_JSON_TO_AWS_SETTINGS( __FILE__ );