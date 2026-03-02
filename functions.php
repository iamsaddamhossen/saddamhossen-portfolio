<?php
/**
 * Saddam Portfolio Theme Functions v2.0
 * @package Saddam_Portfolio
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

define( 'SADDAM_PORTFOLIO_VERSION', '7.1.0' );
define( 'SADDAM_PORTFOLIO_DIR', get_template_directory() );
define( 'SADDAM_PORTFOLIO_URI', get_template_directory_uri() );

/* ─── Theme Setup ─── */
function saddam_portfolio_setup() {
  load_theme_textdomain( 'saddam-portfolio', SADDAM_PORTFOLIO_DIR . '/languages' );
  add_theme_support( 'automatic-feed-links' );
  add_theme_support( 'title-tag' );
  add_theme_support( 'post-thumbnails' );
  set_post_thumbnail_size( 1200, 675, true );
  add_image_size( 'saddam-portfolio-medium', 768, 432, true );
  add_image_size( 'saddam-portfolio-small', 400, 225, true );
  add_theme_support( 'html5', ['search-form','comment-form','comment-list','gallery','caption','style','script'] );
  add_theme_support( 'customize-selective-refresh-widgets' );
  add_theme_support( 'custom-logo', ['height'=>100,'width'=>400,'flex-height'=>true,'flex-width'=>true] );
  add_theme_support( 'editor-styles' );
  add_theme_support( 'responsive-embeds' );
  add_theme_support( 'align-wide' );
  register_nav_menus([
    'primary' => esc_html__( 'Primary Menu', 'saddam-portfolio' ),
    'footer'  => esc_html__( 'Footer Menu', 'saddam-portfolio' ),
  ]);
}
add_action( 'after_setup_theme', 'saddam_portfolio_setup' );

function saddam_portfolio_content_width() {
  $GLOBALS['content_width'] = apply_filters( 'saddam_portfolio_content_width', 1200 );
}
add_action( 'after_setup_theme', 'saddam_portfolio_content_width', 0 );

/* ─── Widgets ─── */
function saddam_portfolio_widgets_init() {
  register_sidebar(['name'=>__('Sidebar','saddam-portfolio'),'id'=>'sidebar-1','before_widget'=>'<section id="%1$s" class="widget %2$s">','after_widget'=>'</section>','before_title'=>'<h3 class="widget-title">','after_title'=>'</h3>']);
  for ( $i = 1; $i <= 3; $i++ ) {
    register_sidebar(['name'=>sprintf(__('Footer Widget %d','saddam-portfolio'),$i),'id'=>'footer-'.$i,'before_widget'=>'<div class="footer-widget">','after_widget'=>'</div>','before_title'=>'<h3 class="widget-title">','after_title'=>'</h3>']);
  }
}
add_action( 'widgets_init', 'saddam_portfolio_widgets_init' );

/* ─── Scripts & Styles ─── */
function saddam_portfolio_scripts() {
  // Main theme CSS (header only, real CSS in main.css)
  wp_enqueue_style( 'saddam-portfolio-style', get_stylesheet_uri(), [], SADDAM_PORTFOLIO_VERSION );
  // Main CSS
  wp_enqueue_style( 'saddam-portfolio-main', SADDAM_PORTFOLIO_URI . '/assets/css/main.css', ['saddam-portfolio-style'], SADDAM_PORTFOLIO_VERSION );
  // Font Awesome
  wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css', [], '6.5.0' );
  // Main JS – no jQuery dependency, deferred
  wp_enqueue_script( 'saddam-portfolio-main', SADDAM_PORTFOLIO_URI . '/assets/js/main.js', [], SADDAM_PORTFOLIO_VERSION, true );
  // Comment reply
  if ( is_singular() && comments_open() && get_option('thread_comments') ) {
    wp_enqueue_script('comment-reply');
  }
  // AJAX localize
  wp_localize_script( 'saddam-portfolio-main', 'saddamPortfolio', [
    'ajaxUrl' => admin_url('admin-ajax.php'),
    'nonce'   => wp_create_nonce('saddam-portfolio-nonce'),
  ]);
}
add_action( 'wp_enqueue_scripts', 'saddam_portfolio_scripts' );

/* ─── Defer main JS ─── */
function saddam_portfolio_defer_scripts( $tag, $handle ) {
  if ( 'saddam-portfolio-main' === $handle ) {
    return str_replace( ' src', ' defer src', $tag );
  }
  return $tag;
}
add_filter( 'script_loader_tag', 'saddam_portfolio_defer_scripts', 10, 2 );

/* ─── Preconnect hints ─── */
function saddam_portfolio_resource_hints( $urls, $relation_type ) {
  if ( 'preconnect' === $relation_type ) {
    $urls[] = ['href'=>'https://fonts.googleapis.com','crossorigin'];
    $urls[] = ['href'=>'https://fonts.gstatic.com','crossorigin'];
    $urls[] = ['href'=>'https://cdnjs.cloudflare.com','crossorigin'];
  }
  return $urls;
}
add_filter( 'wp_resource_hints', 'saddam_portfolio_resource_hints', 10, 2 );

/* ─── Includes ─── */
require_once SADDAM_PORTFOLIO_DIR . '/inc/custom-post-types.php';
require_once SADDAM_PORTFOLIO_DIR . '/inc/template-functions.php';
require_once SADDAM_PORTFOLIO_DIR . '/inc/customizer.php';

/* ─── Excerpt ─── */
add_filter( 'excerpt_length', fn() => 30, 999 );
add_filter( 'excerpt_more', fn() => '…' );

/* ─── Body classes ─── */
function saddam_portfolio_body_classes( $classes ) {
  if ( ! is_front_page() )  { $classes[] = 'not-front-page'; }
  if ( is_singular() )      { $classes[] = 'singular-page'; }
  $classes[] = is_active_sidebar('sidebar-1') ? 'has-sidebar' : 'no-sidebar';
  return $classes;
}
add_filter( 'body_class', 'saddam_portfolio_body_classes' );

/* ─── Active nav class ─── */
function saddam_portfolio_nav_menu_css_class( $classes, $item ) {
  if ( in_array('current-menu-item', $classes) ) { $classes[] = 'active'; }
  return $classes;
}
add_filter( 'nav_menu_css_class', 'saddam_portfolio_nav_menu_css_class', 10, 2 );

/* ─── Security ─── */
remove_action( 'wp_head', 'wp_generator' );

/* ─── Disable emojis (performance) ─── */
function saddam_portfolio_disable_emojis() {
  remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
  remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
  remove_action( 'wp_print_styles', 'print_emoji_styles' );
  remove_action( 'admin_print_styles', 'print_emoji_styles' );
}
add_action( 'init', 'saddam_portfolio_disable_emojis' );

/* ─── Remove block library CSS if not needed ─── */
function saddam_portfolio_remove_block_styles() {
  if ( ! is_admin() ) {
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
    wp_dequeue_style('classic-theme-styles');
  }
}
add_action( 'wp_enqueue_scripts', 'saddam_portfolio_remove_block_styles', 100 );

/* ─── Pingback ─── */
function saddam_portfolio_pingback_header() {
  if ( is_singular() && pings_open() ) {
    printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo('pingback_url') ) );
  }
}
add_action( 'wp_head', 'saddam_portfolio_pingback_header' );

/* saddam_portfolio_get_excerpt() is defined in inc/template-functions.php */

/* ── SEO Meta Tags ── */
function saddam_portfolio_seo_meta() {
  global $post;
  $site_name   = get_bloginfo('name');
  $site_url    = home_url();
  $default_desc = 'WordPress plugin developer with 7+ years experience. Gutenberg/FSE, WooCommerce, Core Web Vitals, ACF/CPT, Git workflow. Top Rated on Upwork · 100% Job Success.';
  $default_img  = SADDAM_PORTFOLIO_URI . '/assets/images/og-image.jpg';

  if (is_singular()) {
    $title = get_the_title() . ' — ' . $site_name;
    $desc  = has_excerpt() ? get_the_excerpt() : $default_desc;
    $img   = has_post_thumbnail() ? get_the_post_thumbnail_url(null, 'large') : $default_img;
    $url   = get_permalink();
  } else {
    $title = $site_name . ' — WordPress Developer | Plugins, WooCommerce & Performance';
    $desc  = $default_desc;
    $img   = $default_img;
    $url   = $site_url;
  }

  $desc = wp_strip_all_tags($desc);
  if (strlen($desc) > 160) { $desc = substr($desc, 0, 157) . '…'; }

  echo '<meta name="description" content="' . esc_attr($desc) . '">' . "\n";
  echo '<meta name="robots" content="index, follow">' . "\n";
  echo '<link rel="canonical" href="' . esc_url($url) . '">' . "\n";
  // Open Graph
  echo '<meta property="og:type" content="' . (is_singular() ? 'article' : 'website') . '">' . "\n";
  echo '<meta property="og:title" content="' . esc_attr($title) . '">' . "\n";
  echo '<meta property="og:description" content="' . esc_attr($desc) . '">' . "\n";
  echo '<meta property="og:url" content="' . esc_url($url) . '">' . "\n";
  echo '<meta property="og:image" content="' . esc_url($img) . '">' . "\n";
  echo '<meta property="og:site_name" content="' . esc_attr($site_name) . '">' . "\n";
  // Twitter Card
  echo '<meta name="twitter:card" content="summary_large_image">' . "\n";
  echo '<meta name="twitter:title" content="' . esc_attr($title) . '">' . "\n";
  echo '<meta name="twitter:description" content="' . esc_attr($desc) . '">' . "\n";
  echo '<meta name="twitter:image" content="' . esc_url($img) . '">' . "\n";
  echo '<meta name="twitter:site" content="@SaddamCse007">' . "\n";
}
add_action('wp_head', 'saddam_portfolio_seo_meta', 1);

/* ── Remove duplicate title from wp_head (title-tag support handles it) ── */
add_filter('document_title_separator', fn() => '—');
add_filter('document_title_parts', function($parts) {
  $parts['tagline'] = '';
  return array_filter($parts);
});

/* ── Contact form handler ── */
function saddam_portfolio_handle_contact() {
  if (!isset($_POST['contact_nonce']) || !wp_verify_nonce($_POST['contact_nonce'], 'saddam-portfolio-contact')) {
    wp_die('Security check failed.');
  }
  $name    = sanitize_text_field($_POST['name'] ?? '');
  $email   = sanitize_email($_POST['email'] ?? '');
  $subject = sanitize_text_field($_POST['subject'] ?? 'Contact Form');
  $message = sanitize_textarea_field($_POST['message'] ?? '');

  if (!$name || !is_email($email) || !$message) {
    wp_die('Please fill in all required fields.');
  }

  $to      = 'saddam.wp007@gmail.com';
  $subject = '[Portfolio] ' . $subject . ' from ' . $name;
  $body    = "Name: {$name}\nEmail: {$email}\n\nMessage:\n{$message}";
  $headers = ["Content-Type: text/plain; charset=UTF-8", "Reply-To: {$name} <{$email}>"];

  wp_mail($to, $subject, $body, $headers);
  wp_redirect(home_url('/contact/?sent=1'));
  exit;
}
add_action('admin_post_nopriv_saddam_portfolio_contact', 'saddam_portfolio_handle_contact');
add_action('admin_post_saddam_portfolio_contact',        'saddam_portfolio_handle_contact');

/* ── Schema.org Person markup ── */
function saddam_portfolio_schema() {
  if (!is_front_page()) { return; }
  $schema = [
    '@context'   => 'https://schema.org',
    '@type'      => 'Person',
    'name'       => 'Saddam Hossen',
    'jobTitle'   => 'WordPress Developer',
    'url'        => home_url(),
    'email'      => 'saddam.wp007@gmail.com',
    'sameAs'     => [
      'https://www.upwork.com/freelancers/~016d4dac9eb588f3e7',
      'https://linkedin.com/in/saddam-hossen-dev',
      'https://github.com/iamsaddamhossen',
      'https://profiles.wordpress.org/iamsaddamhossen/',
    ],
    'knowsAbout' => ['WordPress', 'PHP', 'WooCommerce', 'Gutenberg', 'Core Web Vitals'],
  ];
  echo '<script type="application/ld+json">' . wp_json_encode($schema, JSON_UNESCAPED_SLASHES) . '</script>' . "\n";
}
add_action('wp_head', 'saddam_portfolio_schema');

/* ── XML Sitemap support ── */
add_theme_support('seo-friendly-urls');

/* ── Service page routing ──────────────────────────────────
   Each service has a WordPress page with slug: services/plugin-development etc.
   We intercept and load our single-service.php template.
   This avoids ANY CPT/page slug conflict.
   ─────────────────────────────────────────────────────── */
function saddam_portfolio_service_template( $template ) {
  if ( is_page() ) {
    $slug = get_post_field( 'post_name', get_post() );
    $parent = wp_get_post_parent_id( get_post() );
    $parent_slug = $parent ? get_post_field( 'post_name', $parent ) : '';
    if ( $parent_slug === 'services' || $slug === 'services' ) {
      $t = locate_template( 'single-service.php' );
      if ( $t ) return $t;
    }
  }
  return $template;
}
add_filter( 'template_include', 'saddam_portfolio_service_template' );
