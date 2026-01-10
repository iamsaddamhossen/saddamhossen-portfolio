<?php
/**
 * Register Block Pattern Category
 * 
 * @package Portfolio_Child_Theme
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Register custom block pattern category
 */
function portfolio_register_pattern_categories() {
    register_block_pattern_category(
        'portfolio',
        array('label' => __('Portfolio Sections', 'portfolio-child'))
    );
}
add_action('init', 'portfolio_register_pattern_categories');