<?php
/**
 * Plugin Name: WooCommerce Dynamic Pricing & Discount Rules
 * Description: Adds dynamic pricing and discount rules to WooCommerce.
 * Version: 1.0
 * Author: Vasim Shaikh
 * Text Domain: wc-dynamic-pricing-discount-rules
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

// Define constants
define( 'WC_DPR_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'WC_DPR_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

// Include necessary files
include_once WC_DPR_PLUGIN_DIR . 'includes/admin-settings.php';
include_once WC_DPR_PLUGIN_DIR . 'includes/dynamic-pricing-rules.php';

// Hook to initialize plugin
add_action( 'plugins_loaded', 'wc_dpr_initialize_plugin' );

function wc_dpr_initialize_plugin() {
    // Plugin initialization code
}
