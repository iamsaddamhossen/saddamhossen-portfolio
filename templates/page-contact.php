<?php
/**
 * Template Name: Contact Page
 *
 * @package Portfolio_Theme
 */

get_header();
?>

<section class="section section-light">
    <div class="container">
        <?php portfolio_breadcrumbs(); ?>

        <div class="section-header">
            <h1 class="section-title">Let's Work Together</h1>
            <p class="section-subtitle">
                Ready to start your WordPress plugin development project? Get in touch and let's discuss your needs.
            </p>
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; margin-top: 3rem;">

            <!-- Contact Form -->
            <div style="background: white; padding: 2rem; border-radius: 1rem; box-shadow: var(--shadow-lg);">
                <h2 style="margin-bottom: 1.5rem;">Send a Message</h2>

                <?php echo do_shortcode('[contact-form-7 id="1" title="Contact form"]'); ?>

                <!-- If not using Contact Form 7, use basic HTML form -->
                <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post" class="contact-form">
                    <input type="hidden" name="action" value="portfolio_contact_form">
                    <?php wp_nonce_field('portfolio_contact_form', 'contact_nonce'); ?>

                    <div style="margin-bottom: 1.5rem;">
                        <label for="contact_name" style="display: block; margin-bottom: 0.5rem; font-weight: 600;">Name
                            *</label>
                        <input type="text" id="contact_name" name="contact_name" required
                            style="width: 100%; padding: 0.75rem; border: 2px solid var(--color-border); border-radius: 0.5rem; font-family: inherit; font-size: 1rem;">
                    </div>

                    <div style="margin-bottom: 1.5rem;">
                        <label for="contact_email"
                            style="display: block; margin-bottom: 0.5rem; font-weight: 600;">Email *</label>
                        <input type="email" id="contact_email" name="contact_email" required
                            style="width: 100%; padding: 0.75rem; border: 2px solid var(--color-border); border-radius: 0.5rem; font-family: inherit; font-size: 1rem;">
                    </div>

                    <div style="margin-bottom: 1.5rem;">
                        <label for="contact_subject"
                            style="display: block; margin-bottom: 0.5rem; font-weight: 600;">Subject *</label>
                        <input type="text" id="contact_subject" name="contact_subject" required
                            style="width: 100%; padding: 0.75rem; border: 2px solid var(--color-border); border-radius: 0.5rem; font-family: inherit; font-size: 1rem;">
                    </div>

                    <div style="margin-bottom: 1.5rem;">
                        <label for="contact_message"
                            style="display: block; margin-bottom: 0.5rem; font-weight: 600;">Message *</label>
                        <textarea id="contact_message" name="contact_message" rows="6" required
                            style="width: 100%; padding: 0.75rem; border: 2px solid var(--color-border); border-radius: 0.5rem; font-family: inherit; font-size: 1rem; resize: vertical;"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary" style="width: 100%;">Send Message</button>
                </form>
            </div>

            <!-- Contact Information -->
            <div>
                <div
                    style="background: white; padding: 2rem; border-radius: 1rem; box-shadow: var(--shadow-md); margin-bottom: 2rem;">
                    <h3 style="margin-bottom: 1.5rem;">Contact Information</h3>

                    <div style="margin-bottom: 1.5rem;">
                        <div style="display: flex; align-items: start; gap: 1rem;">
                            <svg width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                style="flex-shrink: 0; color: var(--color-primary);">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <div>
                                <div style="font-weight: 600; margin-bottom: 0.25rem;">Email</div>
                                <a href="mailto:your.email@example.com"
                                    style="color: var(--color-text-light);">your.email@example.com</a>
                            </div>
                        </div>
                    </div>

                    <div style="margin-bottom: 1.5rem;">
                        <div style="display: flex; align-items: start; gap: 1rem;">
                            <svg width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                style="flex-shrink: 0; color: var(--color-primary);">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <div>
                                <div style="font-weight: 600; margin-bottom: 0.25rem;">Location</div>
                                <div style="color: var(--color-text-light);">Your City, Country</div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div style="display: flex; align-items: start; gap: 1rem;">
                            <svg width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                style="flex-shrink: 0; color: var(--color-primary);">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <div>
                                <div style="font-weight: 600; margin-bottom: 0.25rem;">Response Time</div>
                                <div style="color: var(--color-text-light);">Within 24 hours</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div
                    style="background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-primary-dark) 100%); padding: 2rem; border-radius: 1rem; color: white;">
                    <h3 style="color: white; margin-bottom: 1rem;">Professional Profiles</h3>
                    <p style="color: rgba(255, 255, 255, 0.9); margin-bottom: 1.5rem;">
                        Connect with me on professional platforms
                    </p>

                    <div style="display: flex; flex-direction: column; gap: 1rem;">
                        <a href="https://upwork.com/freelancers/~yourprofile" target="_blank" rel="noopener"
                            style="display: flex; align-items: center; gap: 0.75rem; color: white; padding: 1rem; background: rgba(255, 255, 255, 0.1); border-radius: 0.5rem; transition: all 0.2s;">
                            <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M18.561 13.158c-1.102 0-2.135-.467-3.074-1.227l.228-1.076.008-.042c.207-1.143.849-3.06 2.839-3.06 1.492 0 2.703 1.212 2.703 2.703-.001 1.489-1.212 2.702-2.704 2.702zm0-8.14c-2.539 0-4.51 1.649-5.31 4.366-1.22-1.834-2.148-4.036-2.687-5.892H7.828v7.112c-.002 1.406-1.141 2.546-2.547 2.548-1.405-.002-2.543-1.143-2.545-2.548V3.492H0v7.112c0 2.914 2.37 5.303 5.281 5.303 2.913 0 5.283-2.389 5.283-5.303v-1.19c.529 1.107 1.182 2.229 1.974 3.221l-1.673 7.873h2.797l1.213-5.71c1.063.679 2.285 1.109 3.686 1.109 3 0 5.439-2.452 5.439-5.45 0-3-2.439-5.439-5.439-5.439z" />
                            </svg>
                            Upwork Profile
                        </a>

                        <a href="https://linkedin.com/in/yourusername" target="_blank" rel="noopener"
                            style="display: flex; align-items: center; gap: 0.75rem; color: white; padding: 1rem; background: rgba(255, 255, 255, 0.1); border-radius: 0.5rem; transition: all 0.2s;">
                            <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                            </svg>
                            LinkedIn Profile
                        </a>

                        <a href="https://github.com/yourusername" target="_blank" rel="noopener"
                            style="display: flex; align-items: center; gap: 0.75rem; color: white; padding: 1rem; background: rgba(255, 255, 255, 0.1); border-radius: 0.5rem; transition: all 0.2s;">
                            <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                            </svg>
                            GitHub Profile
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();