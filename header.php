<?php if (!defined('ABSPATH')) exit; ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Sora:wght@400;500;600;700;800&family=Inter:wght@400;500;600&family=JetBrains+Mono:wght@400;500&display=swap"
        rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <a class="skip-link sr-only" href="#primary">Skip to content</a>

    <header class="site-header" id="masthead" role="banner">
        <div class="container">
            <div class="header-inner">

                <div class="site-branding">
                    <a href="<?php echo esc_url(home_url('/')); ?>" rel="home" aria-label="Saddam Hossen — Home">
                        <div class="logo-mark" aria-hidden="true">
                            <svg width="18" height="18" viewBox="0 0 20 20" fill="none">
                                <path d="M4 3L1 10L4 17" stroke="white" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M16 3L19 10L16 17" stroke="white" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <circle cx="10" cy="10" r="2" fill="white" />
                            </svg>
                        </div>
                        <div class="logo-name">
                            Saddam Hossen
                            <!-- <span>WordPress Developer</span> -->
                        </div>
                    </a>
                </div>

                <nav class="main-navigation" id="site-navigation" aria-label="Primary navigation">
                    <button class="menu-toggle" id="menu-toggle" aria-controls="primary-menu" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <i class="fas fa-bars" id="menu-icon" aria-hidden="true"></i>
                    </button>
                    <?php wp_nav_menu([
          'theme_location' => 'primary',
          'menu_id'        => 'primary-menu',
          'container'      => false,
          'fallback_cb'    => 'saddam_portfolio_fallback_menu',
        ]); ?>
                </nav>

            </div>
        </div>
    </header>

    <div id="content" class="site-content">