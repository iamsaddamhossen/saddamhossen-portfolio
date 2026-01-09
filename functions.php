<?php
/**
 * Portfolio Theme Functions
 * 
 * @package Portfolio_Theme
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

// Theme constants
define('PORTFOLIO_THEME_VERSION', '1.0.0');
define('PORTFOLIO_THEME_DIR', get_stylesheet_directory());
define('PORTFOLIO_THEME_URI', get_stylesheet_directory_uri());

/**
 * Include required files
 */
require_once PORTFOLIO_THEME_DIR . '/inc/enqueue-scripts.php';
require_once PORTFOLIO_THEME_DIR . '/inc/custom-post-types.php';
require_once PORTFOLIO_THEME_DIR . '/inc/theme-functions.php';

/**
 * Theme setup
 */
function portfolio_theme_setup() {
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    add_theme_support('custom-logo');
    add_theme_support('responsive-embeds');
    add_theme_support('editor-styles');
    
    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'portfolio-theme'),
        'footer'  => __('Footer Menu', 'portfolio-theme'),
    ));
    
    // Set content width
    if (!isset($content_width)) {
        $content_width = 1200;
    }
    
    // Add image sizes
    add_image_size('portfolio-featured', 1200, 600, true);
    add_image_size('portfolio-thumb', 600, 400, true);
}
add_action('after_setup_theme', 'portfolio_theme_setup');

/**
 * Register widget areas
 */
function portfolio_register_sidebars() {
    register_sidebar(array(
        'name'          => __('Footer Widget Area', 'portfolio-theme'),
        'id'            => 'footer-widgets',
        'description'   => __('Appears in the footer section', 'portfolio-theme'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'portfolio_register_sidebars');