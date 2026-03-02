<?php if (!defined('ABSPATH')) exit; ?>
</div><!-- #content -->

<footer class="site-footer" id="colophon" role="contentinfo">
    <div class="container">

        <!-- ── Top row: brand + tagline + socials ── -->
        <div class="footer-top">
            <div class="footer-brand-row">
                <div class="footer-logo">
                    <div class="ft-logo-mark" aria-hidden="true">
                        <svg width="16" height="16" viewBox="0 0 20 20" fill="none">
                            <path d="M4 3L1 10L4 17" stroke="white" stroke-width="2.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M16 3L19 10L16 17" stroke="white" stroke-width="2.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <circle cx="10" cy="10" r="2" fill="white" />
                        </svg>
                    </div>
                    <div>
                        <div class="ft-logo-name">Saddam Hossen</div>
                        <!-- <div class="ft-logo-sub">WordPress Developer · Bangladesh</div> -->
                    </div>
                </div>
                <p class="ft-tagline">Senior WordPress developer — custom plugins, WooCommerce, Gutenberg &amp; Core Web
                    Vitals. Top Rated on Upwork with 100% Job Success.</p>
                <div class="ft-socials" aria-label="Social links">
                    <a href="https://www.upwork.com/freelancers/~016d4dac9eb588f3e7" target="_blank"
                        rel="noopener noreferrer" class="ft-soc" aria-label="Upwork">
                        <i class="fas fa-briefcase" aria-hidden="true"></i>
                    </a>
                    <a href="https://linkedin.com/in/saddam-hossen-dev" target="_blank" rel="noopener noreferrer"
                        class="ft-soc" aria-label="LinkedIn">
                        <i class="fab fa-linkedin-in" aria-hidden="true"></i>
                    </a>
                    <a href="https://github.com/iamsaddamhossen" target="_blank" rel="noopener noreferrer"
                        class="ft-soc" aria-label="GitHub">
                        <i class="fab fa-github" aria-hidden="true"></i>
                    </a>
                    <a href="https://twitter.com/SaddamCse007" target="_blank" rel="noopener noreferrer" class="ft-soc"
                        aria-label="Twitter">
                        <i class="fab fa-twitter" aria-hidden="true"></i>
                    </a>
                    <a href="https://profiles.wordpress.org/iamsaddamhossen/" target="_blank" rel="noopener noreferrer"
                        class="ft-soc" aria-label="WordPress.org">
                        <i class="fab fa-wordpress" aria-hidden="true"></i>
                    </a>
                </div>
            </div>

            <!-- ── Nav columns ── -->
            <nav class="footer-nav-cols" aria-label="Footer navigation">
                <div>
                    <h4 class="ft-col-head">Pages</h4>
                    <ul class="ft-col-links">
                        <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                        <li><a href="<?php echo esc_url(home_url('/about')); ?>">About</a></li>
                        <li><a href="<?php echo esc_url(home_url('/portfolio')); ?>">Portfolio</a></li>
                        <li><a href="<?php echo esc_url(home_url('/services')); ?>">Services</a></li>
                        <li><a href="<?php echo esc_url(home_url('/blog')); ?>">Blog</a></li>
                        <li><a href="<?php echo esc_url(home_url('/contact')); ?>">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="ft-col-head">Services</h4>
                    <ul class="ft-col-links">
                        <li><a href="<?php echo esc_url(home_url('/services/wordpress-plugin-development')); ?>">Plugin
                                Dev</a></li>
                        <li><a
                                href="<?php echo esc_url(home_url('/services/woocommerce-development')); ?>">WooCommerce</a>
                        </li>
                        <li><a href="<?php echo esc_url(home_url('/services/gutenberg-fse-blocks')); ?>">Gutenberg /
                                FSE</a></li>
                        <li><a href="<?php echo esc_url(home_url('/services/performance-core-web-vitals')); ?>">Core Web
                                Vitals</a></li>
                        <li><a href="<?php echo esc_url(home_url('/services/api-integration')); ?>">API Integration</a>
                        </li>
                        <li><a href="<?php echo esc_url(home_url('/services/shopify-development')); ?>">Shopify</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="ft-col-head">Open Source</h4>
                    <ul class="ft-col-links">
                        <li><a href="https://wordpress.org/plugins/saddam-hossen-webp-optimizer/" target="_blank"
                                rel="noopener noreferrer">WebP Optimizer ↗</a></li>
                        <li><a href="https://github.com/iamsaddamhossen" target="_blank"
                                rel="noopener noreferrer">GitHub Profile ↗</a></li>
                        <li><a href="https://profiles.wordpress.org/iamsaddamhossen/" target="_blank"
                                rel="noopener noreferrer">WordPress.org ↗</a></li>
                    </ul>
                    <h4 class="ft-col-head" style="margin-top:1.5rem">Contact</h4>
                    <ul class="ft-col-links">
                        <li><a href="mailto:saddam.wp007@gmail.com">saddam.wp007@gmail.com</a></li>
                        <li style="color:rgba(255,255,255,.3);font-size:.8rem">GMT+6 · Mon–Fri · Flexible</li>
                    </ul>
                </div>
            </nav>
        </div>

        <!-- ── Bottom bar ── -->
        <div class="footer-bar">
            <span>&copy; <?php echo esc_html(date('Y')); ?> Saddam Hossen &mdash; Built with WordPress.</span>
            <span class="ft-bar-badges">
                <span class="ft-badge">Top Rated</span>
                <span class="ft-badge">100% Job Success</span>
                <span class="ft-badge">5★ Reviews</span>
            </span>
        </div>

    </div>
</footer>

<button id="scroll-top" aria-label="Back to top">
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"
        stroke-linejoin="round" aria-hidden="true">
        <path d="M12 19V5M5 12l7-7 7 7" />
    </svg>
</button>

<?php wp_footer(); ?>
</body>

</html>