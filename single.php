<?php
/**
 * Single Blog Post Template
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
            <header class="post-header" style="max-width: 800px; margin: 0 auto 3rem;">
                <div style="display: flex; gap: 1rem; margin-bottom: 1rem; flex-wrap: wrap;">
                    <?php
                        $categories = get_the_category();
                        if (!empty($categories)) :
                            foreach (array_slice($categories, 0, 3) as $category) :
                                ?>
                    <span class="project-tag">
                        <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>" style="color: inherit;">
                            <?php echo esc_html($category->name); ?>
                        </a>
                    </span>
                    <?php
                            endforeach;
                        endif;
                        ?>
                </div>

                <h1 class="post-title"><?php the_title(); ?></h1>

                <div
                    style="display: flex; gap: 2rem; color: var(--color-text-light); font-size: 0.9rem; margin-top: 1rem;">
                    <span>
                        <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            style="display: inline-block; vertical-align: middle; margin-right: 0.5rem;">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <?php echo get_the_date(); ?>
                    </span>
                    <span>
                        <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            style="display: inline-block; vertical-align: middle; margin-right: 0.5rem;">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <?php echo esc_html(get_the_author()); ?>
                    </span>
                </div>
            </header>

            <?php if (has_post_thumbnail()) : ?>
            <div style="margin-bottom: 3rem; border-radius: 1rem; overflow: hidden; box-shadow: var(--shadow-xl);">
                <?php the_post_thumbnail('full'); ?>
            </div>
            <?php endif; ?>

            <div class="post-content" style="max-width: 800px; margin: 0 auto;">
                <?php
                    the_content();

                    wp_link_pages(array(
                        'before' => '<div class="page-links" style="margin-top: 2rem; padding-top: 2rem; border-top: 1px solid var(--color-border);">Pages: ',
                        'after'  => '</div>',
                    ));
                    ?>
            </div>

            <footer class="post-footer"
                style="max-width: 800px; margin: 3rem auto 0; padding-top: 2rem; border-top: 2px solid var(--color-border);">
                <?php
                    $tags = get_the_tags();
                    if ($tags) :
                        ?>
                <div style="margin-bottom: 2rem;">
                    <strong style="display: block; margin-bottom: 0.5rem;">Tags:</strong>
                    <div style="display: flex; gap: 0.5rem; flex-wrap: wrap;">
                        <?php foreach ($tags as $tag) : ?>
                        <a href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>"
                            style="display: inline-block; padding: 0.25rem 0.75rem; background: var(--color-bg-dark); border-radius: 50px; font-size: 0.875rem; color: var(--color-text);">
                            #<?php echo esc_html($tag->name); ?>
                        </a>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php
                    endif;
                    ?>

                <div style="display: flex; justify-content: space-between; margin-top: 2rem;">
                    <div>
                        <?php
                            $prev_post = get_previous_post();
                            if ($prev_post) :
                                ?>
                        <a href="<?php echo esc_url(get_permalink($prev_post->ID)); ?>"
                            style="display: flex; align-items: center; gap: 0.5rem;">
                            <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 19l-7-7 7-7" />
                            </svg>
                            Previous Post
                        </a>
                        <?php
                            endif;
                            ?>
                    </div>
                    <div>
                        <?php
                            $next_post = get_next_post();
                            if ($next_post) :
                                ?>
                        <a href="<?php echo esc_url(get_permalink($next_post->ID)); ?>"
                            style="display: flex; align-items: center; gap: 0.5rem;">
                            Next Post
                            <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                        <?php
                            endif;
                            ?>
                    </div>
                </div>
            </footer>
        </article>

        <?php
            // Comments
            if (comments_open() || get_comments_number()) :
                ?>
        <div style="max-width: 800px; margin: 3rem auto 0;">
            <?php comments_template(); ?>
        </div>
        <?php
            endif;
            
        endwhile;
        ?>
    </div>
</section>

<?php
get_footer();