<?php
 /**
 * @wordpress-plugin
 * Plugin Name:       Custom Action Block
 * Plugin URI:        http://tplugins.com/
 * Description:       Adds a new block type for creating custom actions
 * Version:           1.0.0
 * Author:            TP Plugins
 * Author URI:        http://tplugins.com/shop
 * Text Domain:       custom-action-block
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */

if (!defined('ABSPATH')) {
    exit;
}

// Include necessary files
require_once plugin_dir_path(__FILE__) . 'includes/block-registration.php';
require_once plugin_dir_path(__FILE__) . 'includes/action-handler.php';