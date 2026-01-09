<?php
/**
 * Homepage Template
 *
 * @package Portfolio_Theme
 */

get_header();
?>

<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="hero-content">
            <span class="hero-label">WordPress Plugin Developer</span>
            <h1 class="hero-title">I Build Custom Plugins That Solve Real Business Problems</h1>
            <p class="hero-subtitle">
                Transform your WordPress site with tailored plugin solutions. From WooCommerce extensions to complex
                integrations,
                I deliver clean, maintainable code that scales with your business.
            </p>

            <div class="btn-group">
                <a href="<?php echo home_url('/portfolio/'); ?>" class="btn btn-primary btn-large">
                    View My Work
                    <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
                <a href="<?php echo home_url('/contact/'); ?>" class="btn btn-secondary btn-large">Hire Me</a>
            </div>

            <div class="hero-stats">
                <div class="hero-stat">
                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-1.25 17.292l-4.5-4.364 1.857-1.858 2.643 2.506 5.643-5.784 1.857 1.857-7.5 7.643z" />
                    </svg>
                    100% Job Success
                </div>
                <div class="hero-stat">
                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.967-7.417 3.967 1.481-8.279-6.064-5.828 8.332-1.151z" />
                    </svg>
                    5-Star Rated
                </div>
                <div class="hero-stat">
                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M12 2c5.514 0 10 4.486 10 10s-4.486 10-10 10-10-4.486-10-10 4.486-10 10-10zm0-2c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm1 12v-6h-2v8h7v-2h-5z" />
                    </svg>
                    9+ Years Experience
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Projects Section -->
<section class="section section-light">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Featured Projects</h2>
            <p class="section-subtitle">
                Real-world solutions that delivered measurable results for clients across different industries
            </p>
        </div>

        <div class="projects-grid">
            <?php
            $featured_projects = portfolio_get_featured_projects(3);
            
            if ($featured_projects->have_posts()) :
                while ($featured_projects->have_posts()) : $featured_projects->the_post();
                    $project_url = get_post_meta(get_the_ID(), '_project_url', true);
                    $technologies = portfolio_get_project_technologies(get_the_ID());
                    $problem = get_post_meta(get_the_ID(), '_project_problem', true);
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
                    <div class="project-meta">
                        <?php
                                $categories = get_the_terms(get_the_ID(), 'project_category');
                                if ($categories && !is_wp_error($categories)) :
                                    foreach (array_slice($categories, 0, 2) as $category) :
                                        ?>
                        <span class="project-tag"><?php echo esc_html($category->name); ?></span>
                        <?php
                                    endforeach;
                                endif;
                                ?>
                    </div>

                    <h3 class="project-title">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h3>

                    <?php if ($problem) : ?>
                    <p class="project-excerpt"><?php echo esc_html(wp_trim_words($problem, 20)); ?></p>
                    <?php else : ?>
                    <p class="project-excerpt"><?php echo get_the_excerpt(); ?></p>
                    <?php endif; ?>

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
            else :
                ?>
            <p>No featured projects found. Add some projects and mark them as featured!</p>
            <?php
            endif;
            ?>
        </div>

        <div class="text-center mt-lg">
            <a href="<?php echo home_url('/portfolio/'); ?>" class="btn btn-primary">View All Projects</a>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">What I Do</h2>
            <p class="section-subtitle">
                Specialized WordPress development services tailored to your unique business needs
            </p>
        </div>

        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon">
                    <svg width="32" height="32" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                    </svg>
                </div>
                <h3 class="service-title">Custom Plugin Development</h3>
                <p class="service-description">
                    Built from scratch to match your exact requirements. Clean, documented code that follows WordPress
                    coding standards and best practices.
                </p>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <svg width="32" height="32" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                </div>
                <h3 class="service-title">WooCommerce Extensions</h3>
                <p class="service-description">
                    Extend WooCommerce functionality with custom features, payment gateways, shipping methods, and
                    complex product configurations.
                </p>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <svg width="32" height="32" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                </div>
                <h3 class="service-title">API Integrations</h3>
                <p class="service-description">
                    Connect WordPress with external services and platforms. RESTful APIs, webhooks, and third-party
                    integrations done right.
                </p>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <svg width="32" height="32" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                    </svg>
                </div>
                <h3 class="service-title">Plugin Maintenance & Support</h3>
                <p class="service-description">
                    Ongoing updates, bug fixes, and feature enhancements. Keep your plugins secure, compatible, and
                    running smoothly.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="section section-light">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">My Development Process</h2>
            <p class="section-subtitle">
                A proven approach that ensures quality, transparency, and results
            </p>
        </div>

        <div class="process-timeline">
            <div class="process-step">
                <div class="process-number">1</div>
                <div class="process-details">
                    <h3 class="process-title">Discovery & Analysis</h3>
                    <p class="process-description">
                        We start by understanding your business goals, technical requirements, and user needs.
                        I'll analyze your existing setup and provide recommendations for the best approach.
                    </p>
                </div>
            </div>

            <div class="process-step">
                <div class="process-number">2</div>
                <div class="process-details">
                    <h3 class="process-title">Development & Testing</h3>
                    <p class="process-description">
                        Clean, well-documented code written following WordPress standards. Regular updates keep you
                        informed, and thorough testing ensures everything works perfectly before launch.
                    </p>
                </div>
            </div>

            <div class="process-step">
                <div class="process-number">3</div>
                <div class="process-details">
                    <h3 class="process-title">Deployment & Documentation</h3>
                    <p class="process-description">
                        Smooth deployment to your live site with minimal downtime. Complete documentation helps your
                        team understand and maintain the solution long-term.
                    </p>
                </div>
            </div>

            <div class="process-step">
                <div class="process-number">4</div>
                <div class="process-details">
                    <h3 class="process-title">Ongoing Support</h3>
                    <p class="process-description">
                        Post-launch support to address any issues and ensure smooth operation. Available for ongoing
                        maintenance, updates, and new feature development.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">What Clients Say</h2>
            <p class="section-subtitle">
                Real feedback from real clients on Upwork and other platforms
            </p>
        </div>

        <div class="testimonials-grid">
            <div class="testimonial-card">
                <div class="testimonial-rating">★★★★★</div>
                <div class="testimonial-content">
                    "Exceptional work! The custom plugin solution exceeded our expectations. Clean code,
                    excellent communication, and delivered ahead of schedule. Highly recommended!"
                </div>
                <div class="testimonial-author">
                    <div class="author-avatar">JD</div>
                    <div class="author-info">
                        <div class="author-name">John Doe</div>
                        <div class="author-role">CEO, Tech Startup</div>
                    </div>
                </div>
            </div>

            <div class="testimonial-card">
                <div class="testimonial-rating">★★★★★</div>
                <div class="testimonial-content">
                    "Outstanding WooCommerce integration! Transformed our entire e-commerce workflow.
                    The attention to detail and problem-solving skills are top-notch."
                </div>
                <div class="testimonial-author">
                    <div class="author-avatar">SM</div>
                    <div class="author-info">
                        <div class="author-name">Sarah Miller</div>
                        <div class="author-role">E-commerce Director</div>
                    </div>
                </div>
            </div>

            <div class="testimonial-card">
                <div class="testimonial-rating">★★★★★</div>
                <div class="testimonial-content">
                    "Professional, reliable, and incredibly skilled. The API integration was complex,
                    but it was handled perfectly. Will definitely work together again!"
                </div>
                <div class="testimonial-author">
                    <div class="author-avatar">MJ</div>
                    <div class="author-info">
                        <div class="author-name">Michael Johnson</div>
                        <div class="author-role">Product Manager</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section section-light">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Ready to Start Your Project?</h2>
            <p class="section-subtitle">
                Let's discuss how I can help bring your WordPress plugin ideas to life
            </p>
            <div class="btn-group" style="justify-content: center; margin-top: 2rem;">
                <a href="<?php echo home_url('/contact/'); ?>" class="btn btn-primary btn-large">Get In Touch</a>
                <a href="<?php echo home_url('/portfolio/'); ?>" class="btn btn-secondary btn-large">View Portfolio</a>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();