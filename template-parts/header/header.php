<?php
/**
 * The header for my portfolio theme
 *
 * @package Portfolio_Theme
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header class="site-header" id="site-header">
        <div class="header-container">
            <div class="site-logo">
                <?php if (has_custom_logo()) : ?>
                <?php the_custom_logo(); ?>
                <?php else : ?>
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <?php bloginfo('name'); ?>
                </a>
                <?php endif; ?>
            </div>

            <nav class="main-navigation" id="main-navigation" role="navigation" aria-label="Main Navigation">
                <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'menu_class'     => 'nav-menu',
                'container'      => false,
                'fallback_cb'    => function() {
                    echo '<ul class="nav-menu">';
                    echo '<li><a href="' . home_url('/') . '">Home</a></li>';
                    echo '<li><a href="' . home_url('/portfolio/') . '">Portfolio</a></li>';
                    echo '<li><a href="' . home_url('/blog/') . '">Blog</a></li>';
                    echo '<li><a href="' . home_url('/about/') . '">About</a></li>';
                    echo '<li><a href="' . home_url('/contact/') . '">Contact</a></li>';
                    echo '</ul>';
                }
            ));
            ?>
            </nav>

            <button class="mobile-menu-toggle" id="mobile-menu-toggle" aria-label="Toggle Menu" aria-expanded="false">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </header>

    <main id="main-content" class="site-main"></main>