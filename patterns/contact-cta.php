<?php
/**
 * Title: Professional Contact Form
 * Slug: portfolio-child/contact-cta
 * Categories: portfolio
 * Description: Premium contact section with form
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"8rem","bottom":"8rem","left":"2rem","right":"2rem"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"bg-light","layout":{"type":"constrained","contentSize":"1000px"}} -->
<div class="wp-block-group alignfull has-bg-light-background-color has-background"
    style="margin-top:0;margin-bottom:0;padding-top:8rem;padding-right:2rem;padding-bottom:8rem;padding-left:2rem">

    <!-- wp:group {"style":{"spacing":{"margin":{"bottom":"4rem"}}},"layout":{"type":"constrained","contentSize":"700px"}} -->
    <div class="wp-block-group" style="margin-bottom:4rem">

        <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.875rem","fontWeight":"600","letterSpacing":"0.1em","textTransform":"uppercase"},"spacing":{"margin":{"bottom":"1rem"}}},"textColor":"primary"} -->
        <p class="has-text-align-center has-primary-color has-text-color"
            style="margin-bottom:1rem;font-size:0.875rem;font-weight:600;letter-spacing:0.1em;text-transform:uppercase">
            Ready to Start?</p>
        <!-- /wp:paragraph -->

        <!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontSize":"2.75rem","fontWeight":"800","lineHeight":"1.2"},"spacing":{"margin":{"bottom":"1.5rem"}}},"textColor":"dark"} -->
        <h2 class="has-text-align-center has-dark-color has-text-color"
            style="margin-bottom:1.5rem;font-size:2.75rem;font-weight:800;line-height:1.2">Let's Build Something Amazing
        </h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.25rem","lineHeight":"1.7"}},"textColor":"text-light"} -->
        <p class="has-text-align-center has-text-light-color has-text-color" style="font-size:1.25rem;line-height:1.7">
            Tell me about your project and let's discuss how I can help you achieve your goals.</p>
        <!-- /wp:paragraph -->

    </div>
    <!-- /wp:group -->

    <!-- wp:group {"className":"contact-form-container","style":{"spacing":{"padding":{"top":"3rem","right":"3rem","bottom":"3rem","left":"3rem"}},"border":{"radius":"16px"}},"backgroundColor":"white","layout":{"type":"constrained","contentSize":"600px"}} -->
    <div class="wp-block-group contact-form-container has-white-background-color has-background"
        style="border-radius:16px;padding-top:3rem;padding-right:3rem;padding-bottom:3rem;padding-left:3rem">

        <!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.75rem","fontWeight":"700"},"spacing":{"margin":{"bottom":"2rem"}}},"textColor":"dark"} -->
        <h3 class="has-dark-color has-text-color" style="margin-bottom:2rem;font-size:1.75rem;font-weight:700">Get in
            Touch</h3>
        <!-- /wp:heading -->

        <!-- wp:html -->
        <form class="portfolio-contact-form" action="#" method="post">
            <div style="margin-bottom:1.5rem;">
                <label for="contact-name" style="display:block;margin-bottom:0.5rem;font-weight:600;color:#1e293b;">Name
                    *</label>
                <input type="text" id="contact-name" name="name" required
                    style="width:100%;padding:0.875rem 1rem;border:2px solid #e2e8f0;border-radius:8px;font-size:1rem;font-family:inherit;">
            </div>

            <div style="margin-bottom:1.5rem;">
                <label for="contact-email"
                    style="display:block;margin-bottom:0.5rem;font-weight:600;color:#1e293b;">Email *</label>
                <input type="email" id="contact-email" name="email" required
                    style="width:100%;padding:0.875rem 1rem;border:2px solid #e2e8f0;border-radius:8px;font-size:1rem;font-family:inherit;">
            </div>

            <div style="margin-bottom:1.5rem;">
                <label for="contact-project"
                    style="display:block;margin-bottom:0.5rem;font-weight:600;color:#1e293b;">Project Type *</label>
                <select id="contact-project" name="project_type" required
                    style="width:100%;padding:0.875rem 1rem;border:2px solid #e2e8f0;border-radius:8px;font-size:1rem;font-family:inherit;background-color:white;">
                    <option value="">Select one...</option>
                    <option value="woocommerce">WooCommerce Extension</option>
                    <option value="custom-plugin">Custom WordPress Plugin</option>
                    <option value="api-integration">API Integration</option>
                    <option value="consultation">Consultation</option>
                    <option value="other">Other</option>
                </select>
            </div>

            <div style="margin-bottom:1.5rem;">
                <label for="contact-budget"
                    style="display:block;margin-bottom:0.5rem;font-weight:600;color:#1e293b;">Budget Range</label>
                <select id="contact-budget" name="budget"
                    style="width:100%;padding:0.875rem 1rem;border:2px solid #e2e8f0;border-radius:8px;font-size:1rem;font-family:inherit;background-color:white;">
                    <option value="">Select budget...</option>
                    <option value="5k-10k">$5,000 - $10,000</option>
                    <option value="10k-20k">$10,000 - $20,000</option>
                    <option value="20k+">$20,000+</option>
                    <option value="flexible">Flexible</option>
                </select>
            </div>

            <div style="margin-bottom:2rem;">
                <label for="contact-message"
                    style="display:block;margin-bottom:0.5rem;font-weight:600;color:#1e293b;">Project Details *</label>
                <textarea id="contact-message" name="message" rows="5" required
                    style="width:100%;padding:0.875rem 1rem;border:2px solid #e2e8f0;border-radius:8px;font-size:1rem;font-family:inherit;resize:vertical;"></textarea>
            </div>

            <button type="submit"
                style="width:100%;padding:1rem 2rem;background:linear-gradient(135deg, #6366f1 0%, #8b5cf6 100%);color:white;border:none;border-radius:8px;font-weight:600;font-size:1.125rem;cursor:pointer;transition:all 0.3s ease;box-shadow:0 8px 16px rgba(99, 102, 241, 0.15);">
                Send Message →
            </button>
        </form>
        <!-- /wp:html -->

        <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.875rem"},"spacing":{"margin":{"top":"2rem"}}},"textColor":"text-light"} -->
        <p class="has-text-align-center has-text-light-color has-text-color" style="margin-top:2rem;font-size:0.875rem">
            For smaller changes, I recommend <a href="https://codeable.io" target="_blank" rel="noopener">Codeable</a>.
            For ongoing support, check out <a href="https://nerdpress.net" target="_blank" rel="noopener">NerdPress</a>.
        </p>
        <!-- /wp:paragraph -->

    </div>
    <!-- /wp:group -->

    <!-- wp:spacer {"height":"3rem"} -->
    <div style="height:3rem" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->

    <!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"},"style":{"spacing":{"blockGap":"3rem"}}} -->
    <div class="wp-block-group">

        <!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
        <div class="wp-block-group">
            <!-- wp:paragraph {"style":{"typography":{"fontSize":"1rem","fontWeight":"600"}},"textColor":"primary"} -->
            <p class="has-primary-color has-text-color" style="font-size:1rem;font-weight:600">📧 Email</p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"style":{"typography":{"fontSize":"1.125rem"}},"textColor":"dark"} -->
            <p class="has-dark-color has-text-color" style="font-size:1.125rem"><a
                    href="mailto:hello@saddamhossen.dev">hello@saddamhossen.dev</a></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
        <div class="wp-block-group">
            <!-- wp:paragraph {"style":{"typography":{"fontSize":"1rem","fontWeight":"600"}},"textColor":"secondary"} -->
            <p class="has-secondary-color has-text-color" style="font-size:1rem;font-weight:600">💼 LinkedIn</p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"style":{"typography":{"fontSize":"1.125rem"}},"textColor":"dark"} -->
            <p class="has-dark-color has-text-color" style="font-size:1.125rem"><a
                    href="https://linkedin.com/in/saddamhossen" target="_blank" rel="noopener">/in/saddamhossen</a></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
        <div class="wp-block-group">
            <!-- wp:paragraph {"style":{"typography":{"fontSize":"1rem","fontWeight":"600"}},"textColor":"accent"} -->
            <p class="has-accent-color has-text-color" style="font-size:1rem;font-weight:600">🐙 GitHub</p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"style":{"typography":{"fontSize":"1.125rem"}},"textColor":"dark"} -->
            <p class="has-dark-color has-text-color" style="font-size:1.125rem"><a
                    href="https://github.com/saddamhossen" target="_blank" rel="noopener">@saddamhossen</a></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->