<?php
/**
 * Single Project Template
 *
 * @package Portfolio_Theme
 */

get_header();

while (have_posts()) : the_post();
    $client = get_post_meta(get_the_ID(), '_project_client', true);
    $url = get_post_meta(get_the_ID(), '_project_url', true);
    $duration = get_post_meta(get_the_ID(), '_project_duration', true);
    $technologies = portfolio_get_project_technologies(get_the_ID());
    $problem = get_post_meta(get_the_ID(), '_project_problem', true);
    $solution = get_post_meta(get_the_ID(), '_project_solution', true);
    $results = get_post_meta(get_the_ID(), '_project_results', true);
    ?>

<article class="section section-light">
    <div class="container">
        <?php portfolio_breadcrumbs(); ?>

        <!-- Project Header -->
        <div class="project-header" style="margin-bottom: 3rem;">
            <h1 class="section-title" style="margin-bottom: 1rem;"><?php the_title(); ?></h1>

            <div class="project-meta" style="margin-bottom: 2rem;">
                <?php
                    $categories = get_the_terms(get_the_ID(), 'project_category');
                    if ($categories && !is_wp_error($categories)) :
                        foreach ($categories as $category) :
                            ?>
                <span class="project-tag"><?php echo esc_html($category->name); ?></span>
                <?php
                        endforeach;
                    endif;
                    ?>
            </div>

            <!-- Project Info Grid -->
            <div
                style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 2rem; padding: 2rem; background: white; border-radius: 1rem; margin-bottom: 3rem;">
                <?php if ($client) : ?>
                <div>
                    <div style="font-size: 0.875rem; color: var(--color-text-light); margin-bottom: 0.5rem;">Client
                    </div>
                    <div style="font-weight: 600; color: var(--color-secondary);"><?php echo esc_html($client); ?></div>
                </div>
                <?php endif; ?>

                <?php if ($duration) : ?>
                <div>
                    <div style="font-size: 0.875rem; color: var(--color-text-light); margin-bottom: 0.5rem;">Duration
                    </div>
                    <div style="font-weight: 600; color: var(--color-secondary);"><?php echo esc_html($duration); ?>
                    </div>
                </div>
                <?php endif; ?>

                <?php if (!empty($technologies)) : ?>
                <div>
                    <div style="font-size: 0.875rem; color: var(--color-text-light); margin-bottom: 0.5rem;">
                        Technologies</div>
                    <div style="display: flex; gap: 0.5rem; flex-wrap: wrap;">
                        <?php foreach ($technologies as $tech) : ?>
                        <code
                            style="background: var(--color-bg-dark); padding: 0.25rem 0.75rem; border-radius: 0.375rem; font-size: 0.75rem;"><?php echo esc_html($tech); ?></code>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php endif; ?>

                <?php if ($url) : ?>
                <div>
                    <div style="font-size: 0.875rem; color: var(--color-text-light); margin-bottom: 0.5rem;">Project
                        Link</div>
                    <a href="<?php echo esc_url($url); ?>" target="_blank" rel="noopener" class="project-link">
                        View Live Project
                        <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                        </svg>
                    </a>
                </div>
                <?php endif; ?>
            </div>

            <!-- Featured Image -->
            <?php if (has_post_thumbnail()) : ?>
            <div style="border-radius: 1rem; overflow: hidden; box-shadow: var(--shadow-xl); margin-bottom: 3rem;">
                <?php the_post_thumbnail('full'); ?>
            </div>
            <?php endif; ?>
        </div>

        <!-- Project Content -->
        <div style="max-width: 800px; margin: 0 auto;">

            <!-- The Problem -->
            <?php if ($problem) : ?>
            <div class="project-section"
                style="margin-bottom: 3rem; padding: 2rem; background: white; border-radius: 1rem; border-left: 4px solid #ED8936;">
                <h2
                    style="color: var(--color-secondary); margin-bottom: 1rem; display: flex; align-items: center; gap: 0.75rem;">
                    <svg width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                    </svg>
                    The Challenge
                </h2>
                <div style="color: var(--color-text); line-height: 1.8;">
                    <?php echo wpautop(esc_html($problem)); ?>
                </div>
            </div>
            <?php endif; ?>

            <!-- The Solution -->
            <?php if ($solution) : ?>
            <div class="project-section"
                style="margin-bottom: 3rem; padding: 2rem; background: white; border-radius: 1rem; border-left: 4px solid var(--color-primary);">
                <h2
                    style="color: var(--color-secondary); margin-bottom: 1rem; display: flex; align-items: center; gap: 0.75rem;">
                    <svg width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                    </svg>
                    The Solution
                </h2>
                <div style="color: var(--color-text); line-height: 1.8;">
                    <?php echo wpautop(esc_html($solution)); ?>
                </div>
            </div>
            <?php endif; ?>

            <!-- The Results -->
            <?php if ($results) : ?>
            <div class="project-section"
                style="margin-bottom: 3rem; padding: 2rem; background: white; border-radius: 1rem; border-left: 4px solid var(--color-success);">
                <h2
                    style="color: var(--color-secondary); margin-bottom: 1rem; display: flex; align-items: center; gap: 0.75rem;">
                    <svg width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    The Results
                </h2>
                <div style="color: var(--color-text); line-height: 1.8;">
                    <?php echo wpautop(esc_html($results)); ?>
                </div>
            </div>
            <?php endif; ?>

            <!-- Main Content -->
            <div class="project-content-main" style="margin-bottom: 3rem;">
                <?php the_content(); ?>
            </div>

            <!-- CTA -->
            <div
                style="text-align: center; padding: 3rem 2rem; background: linear-gradient(135deg, #F7FAFC 0%, #EDF2F7 100%); border-radius: 1rem;">
                <h3 style="margin-bottom: 1rem;">Have a Similar Project in Mind?</h3>
                <p
                    style="color: var(--color-text-light); margin-bottom: 2rem; max-width: 500px; margin-left: auto; margin-right: auto;">
                    Let's discuss how I can help bring your WordPress plugin ideas to life
                </p>
                <a href="<?php echo home_url('/contact/'); ?>" class="btn btn-primary btn-large">Start a
                    Conversation</a>
            </div>
        </div>

        <!-- Related Projects -->
        <?php
            $categories = get_the_terms(get_the_ID(), 'project_category');
            if ($categories && !is_wp_error($categories)) {
                $category_ids = wp_list_pluck($categories, 'term_id');
                
                $related_args = array(
                    'post_type' => 'portfolio_project',
                    'posts_per_page' => 3,
                    'post__not_in' => array(get_the_ID()),
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'project_category',
                            'field' => 'term_id',
                            'terms' => $category_ids,
                        ),
                    ),
                );
                
                $related_projects = new WP_Query($related_args);
                
                if ($related_projects->have_posts()) :
                    ?>
        <div style="margin-top: 5rem;">
            <h2 style="text-align: center; margin-bottom: 3rem;">Related Projects</h2>
            <div class="projects-grid">
                <?php
                            while ($related_projects->have_posts()) : $related_projects->the_post();
                                ?>
                <article class="project-card">
                    <?php if (has_post_thumbnail()) : ?>
                    <div class="project-image">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('portfolio-featured'); ?>
                        </a>
                    </div>
                    <?php endif; ?>

                    <div class="project-content">
                        <h3 class="project-title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h3>
                        <p class="project-excerpt"><?php echo get_the_excerpt(); ?></p>
                        <a href="<?php the_permalink(); ?>" class="project-link">
                            View Case Study
                            <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </a>
                    </div>
                </article>
                <?php
                            endwhile;
                            wp_reset_postdata();
                            ?>
            </div>
        </div>
        <?php
                endif;
            }
            ?>
    </div>
</article>

<?php
endwhile;

get_footer();