<?php
/**
 * Theme Helper Functions
 */

/**
 * Get featured projects
 */
function portfolio_get_featured_projects($limit = 3) {
    $args = array(
        'post_type'      => 'portfolio_project',
        'posts_per_page' => $limit,
        'meta_query'     => array(
            array(
                'key'   => '_project_featured',
                'value' => '1',
            ),
        ),
        'orderby'        => 'date',
        'order'          => 'DESC',
    );
    
    return new WP_Query($args);
}

/**
 * Get project technologies as array
 */
function portfolio_get_project_technologies($post_id) {
    $technologies = get_post_meta($post_id, '_project_technologies', true);
    if (empty($technologies)) {
        return array();
    }
    
    return array_map('trim', explode(',', $technologies));
}

/**
 * Custom excerpt length
 */
function portfolio_excerpt_length($length) {
    return 25;
}
add_filter('excerpt_length', 'portfolio_excerpt_length');

/**
 * Custom excerpt more
 */
function portfolio_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'portfolio_excerpt_more');

/**
 * Breadcrumbs function
 */
function portfolio_breadcrumbs() {
    if (is_front_page()) {
        return;
    }
    
    echo '<nav class="breadcrumbs" aria-label="Breadcrumb">';
    echo '<a href="' . home_url('/') . '">Home</a>';
    
    if (is_single()) {
        $post_type = get_post_type();
        if ($post_type == 'portfolio_project') {
            echo ' <span class="separator">/</span> <a href="' . get_post_type_archive_link('portfolio_project') . '">Portfolio</a>';
        }
        echo ' <span class="separator">/</span> <span class="current">' . get_the_title() . '</span>';
    } elseif (is_page()) {
        echo ' <span class="separator">/</span> <span class="current">' . get_the_title() . '</span>';
    } elseif (is_archive()) {
        echo ' <span class="separator">/</span> <span class="current">' . get_the_archive_title() . '</span>';
    }
    
    echo '</nav>';
}