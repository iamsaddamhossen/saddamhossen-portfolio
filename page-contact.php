<?php get_header(); ?>
<main id="primary" class="site-main">

<section class="page-title-section" aria-labelledby="contact-h">
  <div class="container-sm">
    <?php if (isset($_GET['sent'])): ?>
    <div style="display:flex;align-items:center;gap:.625rem;padding:.875rem 1.125rem;background:var(--green-bg);border:1px solid var(--green-bdr);border-radius:var(--r-lg);margin-bottom:1.25rem;color:var(--green);font-weight:600;font-size:.9375rem">
      <i class="fas fa-check-circle" aria-hidden="true"></i> Message sent — I'll reply within 24 hours.
    </div>
    <?php endif; ?>
    <div class="eyebrow">Contact</div>
    <h1 id="contact-h">Let's build something great.</h1>
    <p>Open to full-time remote roles and freelance projects. Describe what you're building — I reply within 24 hours.</p>
  </div>
</section>

<section class="section-sm">
  <div class="container">
    <div class="contact-wrap">

      <!-- Left -->
      <div class="contact-info">
        <h2>Get in touch</h2>
        <p>Whether it's a plugin, a WooCommerce project, or a full-time role — I reply to every message personally.</p>
        <div class="c-methods">
          <a href="mailto:saddam.wp007@gmail.com" class="c-method">
            <div class="c-icon" aria-hidden="true"><i class="fas fa-envelope"></i></div>
            <div class="c-text"><h4>Email</h4><p>saddam.wp007@gmail.com</p></div>
          </a>
          <a href="https://www.upwork.com/freelancers/~016d4dac9eb588f3e7" target="_blank" rel="noopener noreferrer" class="c-method">
            <div class="c-icon" aria-hidden="true"><i class="fas fa-briefcase"></i></div>
            <div class="c-text"><h4>Upwork</h4><p>Top Rated · 100% Job Success</p></div>
          </a>
          <a href="https://linkedin.com/in/saddam-hossen-dev" target="_blank" rel="noopener noreferrer" class="c-method">
            <div class="c-icon" aria-hidden="true"><i class="fab fa-linkedin-in"></i></div>
            <div class="c-text"><h4>LinkedIn</h4><p>linkedin.com/in/saddam-hossen-dev</p></div>
          </a>
          <div class="c-method" style="cursor:default">
            <div class="c-icon" aria-hidden="true"><i class="fas fa-clock"></i></div>
            <div class="c-text"><h4>Timezone</h4><p>GMT+6 · Mon–Fri · Flexible</p></div>
          </div>
        </div>
        <div class="contact-note" style="margin-top:1.125rem">
          <div class="cn-label">Response Time</div>
          <p>I reply within <strong>24 hours</strong>. For urgent work, email directly.</p>
        </div>
      </div>

      <!-- Right: Form -->
      <div class="form-box">
        <h3>Send a Message</h3>
        <form id="contact-form" method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>" novalidate>
          <div class="fg-row">
            <div class="fg">
              <label for="cn">Name <span aria-hidden="true" style="color:var(--accent)">*</span></label>
              <input type="text" id="cn" name="name" placeholder="John Smith" required autocomplete="name">
            </div>
            <div class="fg">
              <label for="ce">Email <span aria-hidden="true" style="color:var(--accent)">*</span></label>
              <input type="email" id="ce" name="email" placeholder="john@example.com" required autocomplete="email">
            </div>
          </div>
          <div class="fg">
            <label for="cs">Service needed</label>
            <select id="cs" name="subject">
              <option value="">Choose a service…</option>
              <option>Custom WordPress Plugin Development</option>
              <option>WooCommerce Extension / Customization</option>
              <option>Gutenberg / FSE Block Development</option>
              <option>Performance & Core Web Vitals</option>
              <option>Shopify Development</option>
              <option>Full-time Remote Job Opportunity</option>
              <option>Something else</option>
            </select>
          </div>
          <div class="fg">
            <label for="cm">Message <span aria-hidden="true" style="color:var(--accent)">*</span></label>
            <textarea id="cm" name="message" placeholder="Tell me about your project — what you're building, timeline, and budget…" required></textarea>
          </div>
          <?php wp_nonce_field('saddam-portfolio-contact','contact_nonce'); ?>
          <input type="hidden" name="action" value="saddam_portfolio_contact">
          <button type="submit" class="btn btn-primary" style="width:100%;justify-content:center;margin-top:.125rem">
            <i class="fas fa-paper-plane" aria-hidden="true"></i> Send Message
          </button>
        </form>
      </div>

    </div>
  </div>
</section>

</main>
<?php get_footer(); ?>
