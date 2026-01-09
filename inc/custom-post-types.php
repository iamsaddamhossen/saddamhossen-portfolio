<?php
/**
 * Custom Post Types
 */

/**
 * Register Portfolio Projects CPT
 */
function portfolio_register_project_cpt() {
    $labels = array(
        'name'               => 'Projects',
        'singular_name'      => 'Project',
        'menu_name'          => 'Portfolio',
        'add_new'            => 'Add New Project',
        'add_new_item'       => 'Add New Project',
        'edit_item'          => 'Edit Project',
        'new_item'           => 'New Project',
        'view_item'          => 'View Project',
        'search_items'       => 'Search Projects',
        'not_found'          => 'No projects found',
        'not_found_in_trash' => 'No projects found in Trash',
    );

    $args = array(
        'labels'              => $labels,
        'public'              => true,
        'has_archive'         => true,
        'menu_icon'           => 'dashicons-portfolio',
        'supports'            => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
        'rewrite'             => array('slug' => 'portfolio'),
        'show_in_rest'        => true,
        'menu_position'       => 5,
    );

    register_post_type('portfolio_project', $args);
}
add_action('init', 'portfolio_register_project_cpt');

/**
 * Register Project Taxonomies
 */
function portfolio_register_taxonomies() {
    // Project Category
    register_taxonomy('project_category', 'portfolio_project', array(
        'labels' => array(
            'name'          => 'Project Categories',
            'singular_name' => 'Project Category',
        ),
        'hierarchical'      => true,
        'show_admin_column' => true,
        'show_in_rest'      => true,
        'rewrite'           => array('slug' => 'project-category'),
    ));

    // Project Tags
    register_taxonomy('project_tag', 'portfolio_project', array(
        'labels' => array(
            'name'          => 'Project Tags',
            'singular_name' => 'Project Tag',
        ),
        'hierarchical'      => false,
        'show_admin_column' => true,
        'show_in_rest'      => true,
        'rewrite'           => array('slug' => 'project-tag'),
    ));
}
add_action('init', 'portfolio_register_taxonomies');

/**
 * Add custom meta boxes for projects
 */
function portfolio_add_project_meta_boxes() {
    add_meta_box(
        'project_details',
        'Project Details',
        'portfolio_project_details_callback',
        'portfolio_project',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'portfolio_add_project_meta_boxes');

function portfolio_project_details_callback($post) {
    wp_nonce_field('portfolio_save_project_details', 'portfolio_project_nonce');
    
    $client = get_post_meta($post->ID, '_project_client', true);
    $url = get_post_meta($post->ID, '_project_url', true);
    $duration = get_post_meta($post->ID, '_project_duration', true);
    $technologies = get_post_meta($post->ID, '_project_technologies', true);
    $problem = get_post_meta($post->ID, '_project_problem', true);
    $solution = get_post_meta($post->ID, '_project_solution', true);
    $results = get_post_meta($post->ID, '_project_results', true);
    $is_featured = get_post_meta($post->ID, '_project_featured', true);
    ?>

<div style="margin-bottom: 15px;">
    <label style="display: block; margin-bottom: 5px; font-weight: 600;">
        <input type="checkbox" name="project_featured" value="1" <?php checked($is_featured, '1'); ?>>
        Featured Project (Show on homepage)
    </label>
</div>

<p>
    <label for="project_client" style="display: block; margin-bottom: 5px; font-weight: 600;">Client Name:</label>
    <input type="text" id="project_client" name="project_client" value="<?php echo esc_attr($client); ?>"
        style="width: 100%;">
</p>

<p>
    <label for="project_url" style="display: block; margin-bottom: 5px; font-weight: 600;">Project URL:</label>
    <input type="url" id="project_url" name="project_url" value="<?php echo esc_url($url); ?>" style="width: 100%;">
</p>

<p>
    <label for="project_duration" style="display: block; margin-bottom: 5px; font-weight: 600;">Project
        Duration:</label>
    <input type="text" id="project_duration" name="project_duration" value="<?php echo esc_attr($duration); ?>"
        placeholder="e.g., 3 months" style="width: 100%;">
</p>

<p>
    <label for="project_technologies" style="display: block; margin-bottom: 5px; font-weight: 600;">Technologies Used
        (comma-separated):</label>
    <input type="text" id="project_technologies" name="project_technologies"
        value="<?php echo esc_attr($technologies); ?>" placeholder="e.g., PHP, JavaScript, WooCommerce"
        style="width: 100%;">
</p>

<p>
    <label for="project_problem" style="display: block; margin-bottom: 5px; font-weight: 600;">The Problem:</label>
    <textarea id="project_problem" name="project_problem" rows="4"
        style="width: 100%;"><?php echo esc_textarea($problem); ?></textarea>
</p>

<p>
    <label for="project_solution" style="display: block; margin-bottom: 5px; font-weight: 600;">The Solution:</label>
    <textarea id="project_solution" name="project_solution" rows="4"
        style="width: 100%;"><?php echo esc_textarea($solution); ?></textarea>
</p>

<p>
    <label for="project_results" style="display: block; margin-bottom: 5px; font-weight: 600;">The Results:</label>
    <textarea id="project_results" name="project_results" rows="4"
        style="width: 100%;"><?php echo esc_textarea($results); ?></textarea>
</p>
<?php
}

function portfolio_save_project_details($post_id) {
    if (!isset($_POST['portfolio_project_nonce']) || !wp_verify_nonce($_POST['portfolio_project_nonce'], 'portfolio_save_project_details')) {
        return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    $fields = array(
        'project_client' => '_project_client',
        'project_url' => '_project_url',
        'project_duration' => '_project_duration',
        'project_technologies' => '_project_technologies',
        'project_problem' => '_project_problem',
        'project_solution' => '_project_solution',
        'project_results' => '_project_results',
    );

    foreach ($fields as $field => $meta_key) {
        if (isset($_POST[$field])) {
            update_post_meta($post_id, $meta_key, sanitize_text_field($_POST[$field]));
        }
    }
    
    // Handle featured checkbox
    $is_featured = isset($_POST['project_featured']) ? '1' : '0';
    update_post_meta($post_id, '_project_featured', $is_featured);
}
add_action('save_post_portfolio_project', 'portfolio_save_project_details');