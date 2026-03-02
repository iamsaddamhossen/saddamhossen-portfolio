<?php get_header(); ?>
<main id="primary" class="site-main">

    <section class="page-title-section" aria-labelledby="blog-page-h">
        <div class="container-sm" style="position:relative;z-index:1">
            <div class="eyebrow">Blog</div>
            <h1 id="blog-page-h">WordPress Development Insights</h1>
            <p class="lead" style="max-width:520px">Practical tutorials, plugin deep-dives, and performance playbooks
                from 7+ years of WordPress work.</p>
        </div>
    </section>

    <section class="section" style="padding-top:2rem">
        <div class="container">
            <?php if (have_posts()): ?>
            <div class="blog-grid">
                <?php while (have_posts()): the_post(); ?>
                <article <?php post_class('blog-card reveal'); ?>>
                    <div class="blog-thumb">
                        <?php if (has_post_thumbnail()): the_post_thumbnail('medium_large');
          else: ?><div style="width:100%;aspect-ratio:16/9;background:var(--bg-2);display:flex;align-items:center;justify-content:center;font-size:1.75rem;color:var(--ink-4)">
                            <i class="fas fa-pen-nib" aria-hidden="true"></i></div><?php endif; ?>
                    </div>
                    <div class="blog-body">
                        <div class="blog-cat">
                            <?php $c=get_the_category(); echo $c ? esc_html($c[0]->name) : 'WordPress'; ?></div>
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <p><?php echo wp_trim_words(get_the_excerpt(),22,'…'); ?></p>
                        <div class="blog-meta" style="margin-top:auto;padding-top:.875rem">
                            <span><?php echo get_the_date('M j, Y'); ?></span>
                            <span><?php echo ceil(str_word_count(get_the_content())/200); ?> min read</span>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="read-more">Read article <i class="fas fa-arrow-right"
                                aria-hidden="true"></i></a>
                    </div>
                </article>
                <?php endwhile; ?>
            </div>
            <div style="text-align:center;margin-top:2.5rem">
                <?php the_posts_pagination(['prev_text'=>'← Previous','next_text'=>'Next →']); ?>
            </div>
            <?php else: ?>
            <div style="text-align:center;padding:4rem 0 3rem;max-width:420px;margin:0 auto">
                <div
                    style="width:64px;height:64px;background:var(--accent-bg);border:1px solid var(--accent-bdr);border-radius:var(--r-xl);display:flex;align-items:center;justify-content:center;margin:0 auto 1.25rem;font-size:1.5rem;color:var(--accent)">
                    <i class="fas fa-pen-nib" aria-hidden="true"></i></div>
                <h3 style="margin-bottom:.5rem">First articles coming soon</h3>
                <p>Starting with: <em>How to build a WordPress bulk event import plugin from scratch.</em></p>
                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-primary"
                    style="margin-top:1.375rem">Get notified</a>
            </div>
            <?php endif; ?>
        </div>
    </section>

</main>
<?php get_footer(); ?>