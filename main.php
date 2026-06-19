<?php
/*Plugin Name: Update Plugin Public Repo
Plugin URI: https://bootscore.me/documentation/
Description: Updates from GitHub Releases
Version: 0.3.0
Tested up to: 7.0
Requires at least: 5.0
Requires PHP: 7.4
Author: Bootscore
Author URI: https://bootscore.me
License: MIT License
*/


defined( 'ABSPATH' ) || exit;


// Load update configuration
require_once plugin_dir_path(__FILE__) . 'inc/updater-config.php';


/**
 * Add an alert message before the masthead.
 */
function add_alert_after_primary_open_1() {
  echo '<div class="alert alert-info" role="alert">Update Plugin Public Repo is installed!</div>';
}
add_action('wp_body_open', 'add_alert_after_primary_open_1');


