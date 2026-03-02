<?php
/**
 * Register Custom Post Types
 *
 * @package Saddam_Portfolio
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Register Portfolio Post Type
 */
function saddam_portfolio_register_post_types() {
    
    // Portfolio Post Type
    $portfolio_labels = array(
        'name'                  => _x( 'Portfolio', 'Post Type General Name', 'saddam-portfolio' ),
        'singular_name'         => _x( 'Project', 'Post Type Singular Name', 'saddam-portfolio' ),
        'menu_name'             => __( 'Portfolio', 'saddam-portfolio' ),
        'name_admin_bar'        => __( 'Project', 'saddam-portfolio' ),
        'archives'              => __( 'Project Archives', 'saddam-portfolio' ),
        'attributes'            => __( 'Project Attributes', 'saddam-portfolio' ),
        'parent_item_colon'     => __( 'Parent Project:', 'saddam-portfolio' ),
        'all_items'             => __( 'All Projects', 'saddam-portfolio' ),
        'add_new_item'          => __( 'Add New Project', 'saddam-portfolio' ),
        'add_new'               => __( 'Add New', 'saddam-portfolio' ),
        'new_item'              => __( 'New Project', 'saddam-portfolio' ),
        'edit_item'             => __( 'Edit Project', 'saddam-portfolio' ),
        'update_item'           => __( 'Update Project', 'saddam-portfolio' ),
        'view_item'             => __( 'View Project', 'saddam-portfolio' ),
        'view_items'            => __( 'View Projects', 'saddam-portfolio' ),
        'search_items'          => __( 'Search Project', 'saddam-portfolio' ),
        'not_found'             => __( 'Not found', 'saddam-portfolio' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'saddam-portfolio' ),
        'featured_image'        => __( 'Project Image', 'saddam-portfolio' ),
        'set_featured_image'    => __( 'Set project image', 'saddam-portfolio' ),
        'remove_featured_image' => __( 'Remove project image', 'saddam-portfolio' ),
        'use_featured_image'    => __( 'Use as project image', 'saddam-portfolio' ),
    );
    
    $portfolio_args = array(
        'label'                 => __( 'Portfolio', 'saddam-portfolio' ),
        'description'           => __( 'Portfolio Projects', 'saddam-portfolio' ),
        'labels'                => $portfolio_labels,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'excerpt', 'page-attributes' ),
        'taxonomies'            => array( 'portfolio_category', 'portfolio_tag' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-portfolio',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => 'portfolio',
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'show_in_rest'          => true,
        'rewrite'               => array( 'slug' => 'project' ),
    );
    
    register_post_type( 'portfolio', $portfolio_args );
}
add_action( 'init', 'saddam_portfolio_register_post_types', 0 );

/**
 * Register Portfolio Taxonomies
 */
function saddam_portfolio_register_taxonomies() {
    
    // Portfolio Category
    $category_labels = array(
        'name'              => _x( 'Categories', 'taxonomy general name', 'saddam-portfolio' ),
        'singular_name'     => _x( 'Category', 'taxonomy singular name', 'saddam-portfolio' ),
        'search_items'      => __( 'Search Categories', 'saddam-portfolio' ),
        'all_items'         => __( 'All Categories', 'saddam-portfolio' ),
        'parent_item'       => __( 'Parent Category', 'saddam-portfolio' ),
        'parent_item_colon' => __( 'Parent Category:', 'saddam-portfolio' ),
        'edit_item'         => __( 'Edit Category', 'saddam-portfolio' ),
        'update_item'       => __( 'Update Category', 'saddam-portfolio' ),
        'add_new_item'      => __( 'Add New Category', 'saddam-portfolio' ),
        'new_item_name'     => __( 'New Category Name', 'saddam-portfolio' ),
        'menu_name'         => __( 'Categories', 'saddam-portfolio' ),
    );
    
    $category_args = array(
        'hierarchical'      => true,
        'labels'            => $category_labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'portfolio-category' ),
        'show_in_rest'      => true,
    );
    
    register_taxonomy( 'portfolio_category', array( 'portfolio' ), $category_args );
    
    // Portfolio Tags
    $tag_labels = array(
        'name'                       => _x( 'Tags', 'taxonomy general name', 'saddam-portfolio' ),
        'singular_name'              => _x( 'Tag', 'taxonomy singular name', 'saddam-portfolio' ),
        'search_items'               => __( 'Search Tags', 'saddam-portfolio' ),
        'popular_items'              => __( 'Popular Tags', 'saddam-portfolio' ),
        'all_items'                  => __( 'All Tags', 'saddam-portfolio' ),
        'edit_item'                  => __( 'Edit Tag', 'saddam-portfolio' ),
        'update_item'                => __( 'Update Tag', 'saddam-portfolio' ),
        'add_new_item'               => __( 'Add New Tag', 'saddam-portfolio' ),
        'new_item_name'              => __( 'New Tag Name', 'saddam-portfolio' ),
        'separate_items_with_commas' => __( 'Separate tags with commas', 'saddam-portfolio' ),
        'add_or_remove_items'        => __( 'Add or remove tags', 'saddam-portfolio' ),
        'choose_from_most_used'      => __( 'Choose from the most used tags', 'saddam-portfolio' ),
        'menu_name'                  => __( 'Tags', 'saddam-portfolio' ),
    );
    
    $tag_args = array(
        'hierarchical'      => false,
        'labels'            => $tag_labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'portfolio-tag' ),
        'show_in_rest'      => true,
    );
    
    register_taxonomy( 'portfolio_tag', array( 'portfolio' ), $tag_args );
}
add_action( 'init', 'saddam_portfolio_register_taxonomies', 0 );

/**
 * Flush rewrite rules on theme activation
 */
function saddam_portfolio_flush_rewrites() {
    saddam_portfolio_register_post_types();
    saddam_portfolio_register_taxonomies();
    flush_rewrite_rules();
}
add_action( 'after_switch_theme', 'saddam_portfolio_flush_rewrites' );
/* ── Service Post Type ── */
function saddam_portfolio_register_service_cpt() {
  register_post_type('service', [
    'labels'  => [
      'name'          => 'Services',
      'singular_name' => 'Service',
      'menu_name'     => 'Services',
      'add_new_item'  => 'Add New Service',
      'edit_item'     => 'Edit Service',
    ],
    'public'         => true,
    'show_ui'        => true,
    'show_in_menu'   => true,
    'menu_position'  => 6,
    'menu_icon'      => 'dashicons-hammer',
    'supports'       => ['title','editor','excerpt','thumbnail','page-attributes'],
    'has_archive'    => false,
    'rewrite'        => ['slug' => 'services'],
    'show_in_rest'   => true,
  ]);
}
add_action('init', 'saddam_portfolio_register_service_cpt', 0);
