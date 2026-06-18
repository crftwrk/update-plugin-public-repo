<?php
/**
 * Update Plugin Public Repo - Update Configuration
 * Registers this plugin with the Bootscore updater (GitHub source)
 */

defined('ABSPATH') || exit;

add_action('init', function() {
  global $bootscore_updater;

  // Only register if Bootscore updater exists
  if (!class_exists('Bootscore_Update_Checker') || !$bootscore_updater) {
    return;
  }

  // Get plugin data from main file
  $plugin_file = dirname(__DIR__) . '/main.php';
  $plugin_data = get_file_data($plugin_file, array('Version' => 'Version'));

  $bootscore_updater->register_product(array(
    'type' => 'plugin',
    'slug' => 'update-plugin-public-repo',
    'current_version' => $plugin_data['Version'] ?? '1.0',
    'file' => plugin_basename($plugin_file),
    'source' => 'github', // Use GitHub public API
    'github_repo' => 'crftwrk/update-plugin-public-repo', // Public repo
    'name' => 'Update Plugin Public Repo',
  ));
});