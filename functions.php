<?php
/**
 * Portfolio Child Theme Functions
 * 
 * @package Portfolio_Child_Theme
 * @version 1.0.0
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

// Theme constants
define('PORTFOLIO_CHILD_VERSION', '1.0.0');
define('PORTFOLIO_CHILD_DIR', get_stylesheet_directory());
define('PORTFOLIO_CHILD_URI', get_stylesheet_directory_uri());

/**
 * Enqueue parent and child theme styles
 */
function portfolio_child_enqueue_styles() {
    // Parent theme stylesheet
    wp_enqueue_style(
        'twentytwentyfive-style',
        get_template_directory_uri() . '/style.css',
        array(),
        wp_get_theme()->parent()->get('Version')
    );
    
    // Child theme stylesheet
    wp_enqueue_style(
        'portfolio-child-style',
        get_stylesheet_uri(),
        array('twentytwentyfive-style'),
        PORTFOLIO_CHILD_VERSION
    );
    
    // Custom CSS
    wp_enqueue_style(
        'portfolio-custom-css',
        PORTFOLIO_CHILD_URI . '/assets/css/custom.css',
        array('portfolio-child-style'),
        PORTFOLIO_CHILD_VERSION
    );
    
    // Google Fonts - Inter for modern typography
    wp_enqueue_style(
        'portfolio-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap',
        array(),
        null
    );
    
    // Custom JavaScript
    wp_enqueue_script(
        'portfolio-custom-js',
        PORTFOLIO_CHILD_URI . '/assets/js/portfolio.js',
        array('jquery'),
        PORTFOLIO_CHILD_VERSION,
        true
    );
}
add_action('wp_enqueue_scripts', 'portfolio_child_enqueue_styles');

/**
 * Include custom post types
 */
require_once PORTFOLIO_CHILD_DIR . '/inc/custom-post-types.php';

/**
 * Include block patterns
 */
require_once PORTFOLIO_CHILD_DIR . '/inc/block-patterns.php';