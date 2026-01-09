<?php
/**
 * Enqueue Scripts and Styles
 */

function portfolio_enqueue_assets() {
    // Main stylesheet
    wp_enqueue_style(
        'portfolio-main-style',
        PORTFOLIO_THEME_URI . '/assets/css/main.css',
        array(),
        PORTFOLIO_THEME_VERSION
    );
    
    // Google Fonts - Using Inter for modern, professional look
    wp_enqueue_style(
        'portfolio-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=JetBrains+Mono:wght@400;500;600&display=swap',
        array(),
        null
    );
    
    // Main JavaScript
    wp_enqueue_script(
        'portfolio-main-js',
        PORTFOLIO_THEME_URI . '/assets/js/main.js',
        array('jquery'),
        PORTFOLIO_THEME_VERSION,
        true
    );
    
    // Localize script for AJAX
    wp_localize_script('portfolio-main-js', 'portfolioData', array(
        'ajaxurl' => admin_url('admin-ajax.php'),
        'nonce'   => wp_create_nonce('portfolio_nonce'),
    ));
}
add_action('wp_enqueue_scripts', 'portfolio_enqueue_assets');