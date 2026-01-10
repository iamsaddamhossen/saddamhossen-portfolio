<?php
/**
 * Custom Post Types
 * 
 * @package Portfolio_Child_Theme
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Register Portfolio Projects Custom Post Type
 */
function portfolio_register_post_types() {
    $labels = array(
        'name'                  => 'Portfolio Projects',
        'singular_name'         => 'Portfolio Project',
        'menu_name'             => 'Portfolio',
        'add_new'               => 'Add New Project',
        'add_new_item'          => 'Add New Portfolio Project',
        'edit_item'             => 'Edit Portfolio Project',
        'new_item'              => 'New Portfolio Project',
        'view_item'             => 'View Portfolio Project',
        'search_items'          => 'Search Portfolio Projects',
        'not_found'             => 'No portfolio projects found',
        'not_found_in_trash'    => 'No portfolio projects found in trash',
    );

    $args = array(
        'labels'                => $labels,
        'public'                => true,
        'has_archive'           => true,
        'publicly_queryable'    => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'show_in_rest'          => true,
        'menu_icon'             => 'dashicons-portfolio',
        'supports'              => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
        'rewrite'               => array('slug' => 'portfolio'),
        'capability_type'       => 'post',
    );

    register_post_type('portfolio_project', $args);

    // Register taxonomy for portfolio categories
    register_taxonomy('portfolio_category', 'portfolio_project', array(
        'label'         => 'Project Categories',
        'rewrite'       => array('slug' => 'portfolio-category'),
        'hierarchical'  => true,
        'show_in_rest'  => true,
    ));
}
add_action('init', 'portfolio_register_post_types');