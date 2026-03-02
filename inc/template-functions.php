<?php
if (!defined('ABSPATH')) { exit; }

/* ── Fallback navigation menu ── */
function saddam_portfolio_fallback_menu() {
  $pages = ['/' => 'Home', '/about' => 'About', '/portfolio' => 'Portfolio', '/services' => 'Services', '/blog' => 'Blog', '/contact' => 'Contact'];
  echo '<ul id="primary-menu" class="menu">';
  foreach ($pages as $slug => $title) {
    $cur = (home_url($slug) === home_url(add_query_arg([]))) ? ' class="current-menu-item"' : '';
    printf('<li%s><a href="%s">%s</a></li>', $cur, esc_url(home_url($slug)), esc_html($title));
  }
  echo '<li class="nav-hire"><a href="' . esc_url(home_url('/contact')) . '">Hire Me</a></li>';
  echo '</ul>';
}

/* ── Default portfolio projects (shown when no CPT posts exist) ── */
function saddam_portfolio_default_projects() {
  $projects = [
    [
      'title'   => 'EventPrime Plugin Customization &amp; Bulk Import',
      'cat'     => 'Plugin Development',
      'desc'    => 'Built a custom CSV/Excel import plugin that reduced data entry from 100+ hours to under 2 hours for 5,000+ event records. Client called it "transformative".',
      'metric'  => '100hrs → 2hrs',
      'tags'    => ['WordPress', 'PHP', 'EventPrime API', 'CSV Parsing'],
      'github'  => 'https://github.com/iamsaddamhossen',
      'live'    => '',
      'feat'    => true,
    ],
    [
      'title'   => 'Multilingual Website Migration (Divi → Elementor)',
      'cat'     => 'Migration',
      'desc'    => 'Migrated 50+ page multilingual site across 4 languages with zero downtime. Pixel-perfect design replication, WPML-compatible, all SEO retained.',
      'metric'  => '50+ pages',
      'tags'    => ['WordPress', 'Elementor', 'WPML', 'Migration'],
      'github'  => '',
      'live'    => '',
      'feat'    => false,
    ],
    [
      'title'   => 'WebP Optimizer Plugin (Open Source)',
      'cat'     => 'Open Source',
      'desc'    => 'Published on WordPress.org. Converts images to WebP locally — no external API, no fees. 60–80% image size reduction, direct LCP improvement.',
      'metric'  => '60–80% smaller',
      'tags'    => ['PHP', 'Imagick', 'WordPress Media API', 'Performance'],
      'github'  => 'https://github.com/iamsaddamhossen/saddam-hossen-webp-optimizer',
      'live'    => 'https://wordpress.org/plugins/saddam-hossen-webp-optimizer/',
      'feat'    => false,
    ],
    [
      'title'   => 'Custom bKash WooCommerce Payment Gateway',
      'cat'     => 'WooCommerce',
      'desc'    => 'Production-ready WooCommerce payment gateway for bKash — Bangladesh\'s largest mobile payment. Handles IPN, payment verification, and order status.',
      'metric'  => 'Production',
      'tags'    => ['WooCommerce', 'PHP', 'bKash API', 'Payment'],
      'github'  => 'https://github.com/iamsaddamhossen/custom-woocommerce-bkash-payment-gateway-plugin',
      'live'    => '',
      'feat'    => false,
    ],
    [
      'title'   => 'WooCommerce Core Web Vitals Optimization',
      'cat'     => 'Performance',
      'desc'    => 'Optimized a high-traffic WooCommerce store from PageSpeed 42 to 91. Cloudflare CDN, LiteSpeed cache, WebP conversion, critical CSS, and script control.',
      'metric'  => '42 → 91 score',
      'tags'    => ['WooCommerce', 'Cloudflare', 'LiteSpeed', 'Critical CSS'],
      'github'  => '',
      'live'    => '',
      'feat'    => false,
    ],
    [
      'title'   => 'Shopify Home Decor Store — UAE Market',
      'cat'     => 'Shopify',
      'desc'    => 'Performance-first Shopify store for UAE-based home decor brand. Custom sections, metafield architecture, Core Web Vitals targets for UAE and North American markets.',
      'metric'  => 'UAE Market',
      'tags'    => ['Shopify', 'Liquid', 'Custom Theme', 'Performance'],
      'github'  => '',
      'live'    => '',
      'feat'    => false,
    ],
  ];

  foreach ($projects as $p) :
    $feat_class = $p['feat'] ? ' feat' : '';
  ?>
  <div class="proj-card<?php echo $feat_class; ?> reveal">
    <div class="proj-img">
      <div class="proj-ph"><i class="fas fa-code"></i></div>
      <?php if ($p['metric']) : ?>
        <div class="proj-metric"><i class="fas fa-chart-line"></i> <?php echo esc_html($p['metric']); ?></div>
      <?php endif; ?>
    </div>
    <div class="proj-body">
      <div class="proj-cat"><?php echo esc_html($p['cat']); ?></div>
      <h3 class="proj-title"><?php echo $p['title']; ?></h3>
      <p class="proj-desc"><?php echo esc_html($p['desc']); ?></p>
      <div class="proj-tags">
        <?php foreach ($p['tags'] as $t) : ?>
          <span class="badge"><?php echo esc_html($t); ?></span>
        <?php endforeach; ?>
      </div>
      <div class="proj-foot">
        <div class="proj-links">
          <?php if ($p['github']) : ?>
            <a href="<?php echo esc_url($p['github']); ?>" target="_blank" rel="noopener" class="proj-lnk primary"><i class="fab fa-github"></i> GitHub</a>
          <?php endif; ?>
          <?php if ($p['live']) : ?>
            <a href="<?php echo esc_url($p['live']); ?>" target="_blank" rel="noopener" class="proj-lnk"><i class="fas fa-external-link-alt"></i> Live</a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
  <?php endforeach;
}

/* ── Testimonials ── */
function saddam_portfolio_testimonials() {
  $testimonials = [
    [
      'text'   => 'Star ratings are not enough to describe the work Saddam did for us. He customized an extremely complicated WordPress plugin by creating his own data import system. We went from 100+ hours of manual work to just 2 hours. Exceptional work, exceptional developer.',
      'name'   => 'EventPrime Client',
      'role'   => 'Nonprofit Organization · Upwork',
      'initials' => 'EC',
    ],
    [
      'text'   => 'Saddam did an outstanding job transforming our website from Divi to Elementor, replicating the content and design with exact precision across multiple languages. He managed the migration flawlessly. Zero downtime, pixel perfect.',
      'name'   => 'Migration Client',
      'role'   => 'E-commerce Business · Upwork',
      'initials' => 'MC',
    ],
    [
      'text'   => 'Great experience working with Saddam! Professional, responsive, and delivered high-quality work on time. Highly recommended for WordPress development, performance optimization, and API integrations.',
      'name'   => 'Website Development Client',
      'role'   => 'Tech Startup · Upwork',
      'initials' => 'WD',
    ],
  ];

  foreach ($testimonials as $t) : ?>
  <div class="testi-card reveal">
    <div class="testi-stars">★★★★★</div>
    <p class="testi-text"><?php echo esc_html($t['text']); ?></p>
    <div class="testi-foot">
      <div class="testi-avatar"><?php echo esc_html($t['initials']); ?></div>
      <div>
        <div class="testi-name"><?php echo esc_html($t['name']); ?></div>
        <div class="testi-role"><?php echo esc_html($t['role']); ?></div>
      </div>
    </div>
  </div>
  <?php endforeach;
}

/* ── Placeholder blog posts (shown when no posts exist) ── */
function saddam_portfolio_placeholder_posts() {
  $posts = [
    [
      'title' => 'How I Built a WordPress Bulk Event Import Plugin That Cut 100 Hours to 2',
      'cat'   => 'Plugin Development',
      'exc'   => 'A deep-dive into building a custom CSV/Excel import system. CPT architecture, admin UI, nonce-secured AJAX, and proper error handling — the full build.',
    ],
    [
      'title' => 'add_action vs add_filter: The Complete WordPress Hooks Guide',
      'cat'   => 'WordPress Core',
      'exc'   => 'Everything you need to know about WordPress hooks — priority, accepted_args, removing actions, and building your own hook system from scratch.',
    ],
    [
      'title' => 'How to Hit 90+ PageSpeed on WooCommerce: The Full Playbook',
      'cat'   => 'Performance',
      'exc'   => 'Caching, Cloudflare CDN, WebP conversion, critical CSS extraction, script defer/async control — the complete process from PageSpeed 42 to 91.',
    ],
  ];

  echo '<div class="blog-grid">';
  foreach ($posts as $p) : ?>
  <article class="post-card reveal">
    <div class="post-thumb">
      <div class="post-ph"><i class="fas fa-pen-nib"></i></div>
    </div>
    <div class="post-body">
      <div class="post-meta">
        <span class="post-cat"><?php echo esc_html($p['cat']); ?></span>
        <span>Coming soon</span>
      </div>
      <h3><?php echo esc_html($p['title']); ?></h3>
      <p class="post-exc"><?php echo esc_html($p['exc']); ?></p>
    </div>
  </article>
  <?php endforeach;
  echo '</div>';
}

/* ── Get portfolio project technologies (tags) ── */
function saddam_portfolio_get_technologies($post_id = null) {
  if (!$post_id) { $post_id = get_the_ID(); }
  $tags = get_the_terms($post_id, 'portfolio_tag');
  if (!$tags || is_wp_error($tags)) { return []; }
  return wp_list_pluck($tags, 'name');
}

/* ── Get excerpt with fallback to content ── */
function saddam_portfolio_get_excerpt($post_id = null, $length = 22) {
  if (!$post_id) { $post_id = get_the_ID(); }
  $excerpt = get_post_field('post_excerpt', $post_id);
  if (!$excerpt) { $excerpt = get_post_field('post_content', $post_id); }
  return wp_trim_words(strip_shortcodes(strip_tags($excerpt)), $length, '…');
}
