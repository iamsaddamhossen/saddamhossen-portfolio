<?php
/**
 * Theme Customizer
 *
 * @package Saddam_Portfolio
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Add customizer settings
 */
function saddam_portfolio_customize_register( $wp_customize ) {
    
    // Hero Section
    $wp_customize->add_section( 'hero_section', array(
        'title'    => __( 'Hero Section', 'saddam-portfolio' ),
        'priority' => 30,
    ) );
    
    // Hero Title
    $wp_customize->add_setting( 'hero_title', array(
        'default'           => 'WordPress Developer Specializing in Custom Plugins, WooCommerce Extensions & Performance Solutions',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    
    $wp_customize->add_control( 'hero_title', array(
        'label'    => __( 'Hero Title', 'saddam-portfolio' ),
        'section'  => 'hero_section',
        'type'     => 'text',
    ) );
    
    // Hero Subtitle
    $wp_customize->add_setting( 'hero_subtitle', array(
        'default'           => 'Building scalable WordPress solutions that solve complex business problems. Top Rated on Upwork with 100% job success and all 5-star reviews.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ) );
    
    $wp_customize->add_control( 'hero_subtitle', array(
        'label'    => __( 'Hero Subtitle', 'saddam-portfolio' ),
        'section'  => 'hero_section',
        'type'     => 'textarea',
    ) );
    
    // Contact Information Section
    $wp_customize->add_section( 'contact_info', array(
        'title'    => __( 'Contact Information', 'saddam-portfolio' ),
        'priority' => 40,
    ) );
    
    // Email
    $wp_customize->add_setting( 'contact_email', array(
        'default'           => 'saddam.wp007@gmail.com',
        'sanitize_callback' => 'sanitize_email',
    ) );
    
    $wp_customize->add_control( 'contact_email', array(
        'label'    => __( 'Email Address', 'saddam-portfolio' ),
        'section'  => 'contact_info',
        'type'     => 'email',
    ) );
    
    // Phone
    $wp_customize->add_setting( 'contact_phone', array(
        'default'           => '+8801920066584',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    
    $wp_customize->add_control( 'contact_phone', array(
        'label'    => __( 'Phone Number', 'saddam-portfolio' ),
        'section'  => 'contact_info',
        'type'     => 'text',
    ) );
    
    // Social Media Links
    $social_networks = array(
        'linkedin' => 'LinkedIn',
        'github'   => 'GitHub',
        'upwork'   => 'Upwork',
    );
    
    foreach ( $social_networks as $network => $label ) {
        $wp_customize->add_setting( 'social_' . $network, array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        ) );
        
        $wp_customize->add_control( 'social_' . $network, array(
            'label'    => $label . ' ' . __( 'URL', 'saddam-portfolio' ),
            'section'  => 'contact_info',
            'type'     => 'url',
        ) );
    }
}
add_action( 'customize_register', 'saddam_portfolio_customize_register' );