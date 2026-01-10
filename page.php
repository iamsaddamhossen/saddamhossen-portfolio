<?php
/**
 * Default Page Template
 *
 * @package Portfolio_Theme
 */

get_header();
?>

<section class="section section-light">
    <div class="container">
        <?php portfolio_breadcrumbs(); ?>

        <?php
        while (have_posts()) : the_post();
            ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="page-header" style="margin-bottom: 3rem;">
                <h1 class="page-title"><?php the_title(); ?></h1>
            </header>

            <?php if (has_post_thumbnail()) : ?>
            <div style="margin-bottom: 2rem; border-radius: 1rem; overflow: hidden;">
                <?php the_post_thumbnail('full'); ?>
            </div>
            <?php endif; ?>

            <div class="page-content" style="max-width: 800px; margin: 0 auto;">
                <?php
                    the_content();

                    wp_link_pages(array(
                        'before' => '<div class="page-links" style="margin-top: 2rem; padding-top: 2rem; border-top: 1px solid var(--color-border);">Pages: ',
                        'after'  => '</div>',
                    ));
                    ?>
            </div>
        </article>

        <?php
            // If comments are open or we have at least one comment, load the comment template.
            if (comments_open() || get_comments_number()) :
                comments_template();
            endif;
            
        endwhile;
        ?>
    </div>
</section>

<?php
get_footer();