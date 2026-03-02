<?php
/**
 * single-service.php
 * Loaded for:
 *   1. WordPress pages whose parent page slug = 'services'  (via template_include filter)
 *   2. Pages with post_name matching a known service slug
 */
get_header();

$services = [
  'wordpress-plugin-development' => [
    'ico'   => 'fa-plug',
    'label' => 'Plugin Development',
    'intro' => 'I build WordPress plugins that solve real business problems — not just admin tools. OOP PHP, WordPress coding standards, PSR guidelines, hooks-first architecture. Every plugin I deliver is maintainable by the next developer.',
    'story' => 'My most-cited build turned a nonprofit\'s 5,000-event manual data entry process — which used to take 100+ hours a year — into a 2-hour job. One CSV upload, one import run, done. The client called it "transformative." That\'s the bar I set for every plugin project.',
    'price' => 'Starting from $200 per project',
    'deliverables' => [
      ['fa-code',        'Custom Admin Panels',    'Settings pages, meta boxes, custom admin screens. Native Settings API — no extra plugin dependencies.'],
      ['fa-file-import', 'Data Import/Export',     'CSV, Excel, JSON, API-based import systems with progress tracking, rollback support, and error logging.'],
      ['fa-plug',        'Third-Party Integrations','CRMs, payment providers, booking systems. Anything with an API can be connected to WordPress.'],
      ['fa-route',       'REST API Endpoints',     'Custom WP REST API endpoints with authentication, rate-limiting, sanitization, and full documentation.'],
      ['fa-key',         'License & Update Systems','Commercial plugin licensing, WordPress.org-style update delivery, subscription gating.'],
      ['fa-clock',       'Cron & Automation',      'wp_cron scheduled tasks, background processing queues, reliable automated workflows.'],
    ],
  ],
  'woocommerce-development' => [
    'ico'   => 'fa-shopping-cart',
    'label' => 'WooCommerce',
    'intro' => 'Deep WooCommerce work — not theme tweaks. I write directly to the WooCommerce codebase with proper hooks and filters. HPOS-compatible, Data API compliant, upgrade-safe. Every customization survives WooCommerce major releases.',
    'story' => 'I built a bKash payment gateway that handles hundreds of transactions daily for a Bangladeshi e-commerce store. Pure WooCommerce hooks — no plugin wrapper, no shortcut. IPN verification, order status transitions, payment confirmations, full refund flow. That level of reliability is non-negotiable when money is involved.',
    'price' => 'Starting from $150 per feature',
    'deliverables' => [
      ['fa-credit-card', 'Payment Gateways',    'Stripe, bKash, SSLCommerz, custom providers. IPN-verified, HPOS-compatible, full refund support.'],
      ['fa-shopping-bag','Custom Checkout',     'Extra checkout fields, multi-step checkout, conditional field logic, server-side validation.'],
      ['fa-box',         'Custom Product Types','Variable product extensions, subscription logic, deposit/layaway, bundle products.'],
      ['fa-envelope',    'WooCommerce Emails',  'Branded HTML transactional emails, custom triggers, template overrides.'],
      ['fa-chart-bar',   'Order Management',    'Custom order statuses, admin column customization, bulk order actions.'],
      ['fa-truck',       'Shipping & Tax',      'Custom shipping calculators, zone-based pricing rules, tax integration.'],
    ],
  ],
  'gutenberg-fse-blocks' => [
    'ico'   => 'fa-cube',
    'label' => 'Gutenberg & FSE',
    'intro' => 'Custom Gutenberg blocks using @wordpress/create-block, block.json, and the wp.data store. Full Site Editing templates, block patterns, and reusable component libraries deployable across multiple WordPress sites — zero page builder dependency.',
    'story' => 'Page builders are a technical liability. They lock your client into a vendor, bloat your CSS by 200KB, and make templates unmaintainable. I build block-based systems your team can use in the editor without breaking anything — and that the next developer can actually read. That\'s the promise of FSE done properly.',
    'price' => 'Starting from $300 per project',
    'deliverables' => [
      ['fa-cube',         'Custom Gutenberg Blocks','React + PHP blocks registered with block.json. Server-side rendering, InnerBlocks, dynamic data.'],
      ['fa-layer-group',  'Block Patterns',         'Pre-built layouts registered with register_block_pattern(). Editor-selectable, no code required.'],
      ['fa-desktop',      'FSE Templates',          'Full Site Editing templates and template parts that replace classic theme files cleanly.'],
      ['fa-object-group', 'InnerBlocks',            'Nested block layouts with controlled child block types and default block configurations.'],
      ['fa-paint-brush',  'Editor Styles',          'theme.json configuration, editor-matching styles, custom color palettes and font scales.'],
      ['fa-copy',         'Multi-Site Libraries',   'Shared block pattern libraries deployable across multiple installs via a single plugin.'],
    ],
  ],
  'performance-core-web-vitals' => [
    'ico'   => 'fa-tachometer-alt',
    'label' => 'Performance',
    'intro' => 'I audit and optimize WordPress sites to 90+ Google PageSpeed scores. Caching, CDN, image strategy, critical CSS, script control — the full technical picture, not just installing a plugin and hoping for the best.',
    'story' => 'I took a WooCommerce store from PageSpeed 42 to 91. Not by buying a better host. By diagnosing why it was slow: 18 render-blocking scripts, no CDN, 4MB of unoptimized images on the homepage, no WebP strategy, no critical CSS. I fixed causes, not symptoms. The client saw a measurable drop in bounce rate within two weeks.',
    'price' => 'Starting from $100 for audit',
    'deliverables' => [
      ['fa-search',       'Lighthouse Audit',   'Full Google PageSpeed audit — LCP, FID, CLS, TTFB — with a prioritised, actionable fix list.'],
      ['fa-server',       'Caching Setup',      'WP Rocket or LiteSpeed configuration: page cache, object cache, browser cache headers.'],
      ['fa-cloud',        'Cloudflare CDN',     'DNS migration, CDN rules, image optimization, Page Rules, cache purge integration.'],
      ['fa-image',        'Image Strategy',     'WebP conversion, lazy loading, srcset optimization, next-gen format delivery.'],
      ['fa-code',         'Critical CSS',       'Above-the-fold CSS extraction and inline delivery to eliminate render-blocking stylesheets.'],
      ['fa-bolt',         'Script Control',     'Defer/async JS implementation, jQuery removal, third-party script quarantine.'],
    ],
  ],
  'api-integration' => [
    'ico'   => 'fa-code-branch',
    'label' => 'API & Automation',
    'intro' => 'Connect WordPress to any external service. REST API development, CRM integrations, webhook handlers, and automation with Zapier, Make, or custom PHP. If it has an API, I can build the bridge — reliable, logged, and maintainable.',
    'story' => 'Most businesses run on disconnected systems. Your CRM doesn\'t know who bought what. Your booking platform doesn\'t update your inventory. Your payment provider doesn\'t trigger your onboarding sequence. I build the connections between these systems — not with Zapier clicks, but with robust PHP that handles failures, retries, and edge cases properly.',
    'price' => 'Starting from $150 per integration',
    'deliverables' => [
      ['fa-route',      'REST API Endpoints',   'Custom WP REST API: GET, POST, PUT, DELETE — authenticated, rate-limited, documented.'],
      ['fa-users',      'CRM Integration',      'HubSpot, Zoho, Salesforce, ActiveCampaign — contact sync, form-to-CRM, lead capture.'],
      ['fa-credit-card','Payment APIs',         'Stripe, PayPal, bKash, SSLCommerz — processing, webhook verification, billing.'],
      ['fa-robot',      'Webhooks',             'Receive and process incoming webhooks: verify signatures, queue jobs, update data reliably.'],
      ['fa-sync',       'Zapier / Make',        'Multi-step automation workflows. Custom Zapier apps when needed.'],
      ['fa-database',   'Data Sync',            'Bidirectional sync between WordPress and ERP systems, SaaS tools, or external databases.'],
    ],
  ],
  'shopify-development' => [
    'ico'   => 'fab fa-shopify',
    'label' => 'Shopify',
    'intro' => 'Custom Shopify themes in Liquid — fast, conversion-focused, and maintainable. I build with custom sections, app integration, and Core Web Vitals targets from day one. Stores for UAE, UK, and North American markets.',
    'story' => 'I built a custom Shopify theme for a UAE home decor brand. Custom product visualization sections, metafield-based content so their team can edit everything without code, and a mobile PageSpeed score that didn\'t embarrass them. The client\'s words: "finally a developer who thinks about speed without us asking."',
    'price' => 'Starting from $300 per project',
    'deliverables' => [
      ['fa-palette',       'Custom Theme',          'Bespoke Shopify theme in Liquid. No Debut or Dawn dependency. Clean, fast, fully documented.'],
      ['fa-th-large',      'Sections & Blocks',     'Custom section/block architecture so store owners manage layouts in the Theme Editor.'],
      ['fab fa-shopify',   'App Integration',       'Reviews, loyalty, subscriptions, upsell — performance-safe app integration.'],
      ['fa-database',      'Metafield Architecture','Metafield and metaobject-based content for structured product and page data.'],
      ['fa-tachometer-alt','Performance',           'Shopify Core Web Vitals: lazy loading, critical CSS, script deferral, image optimization.'],
      ['fa-exchange-alt',  'WC → Shopify Migration','Products, customers, orders — migrated with full data integrity verification.'],
    ],
  ],
];

// Resolve slug: from CPT OR from page post_name
$slug = get_post_field('post_name', get_post());
$svc  = $services[$slug] ?? null;
// Also try parent-based routing: child page slug might not match
if (!$svc) {
  foreach ($services as $k => $v) {
    if (str_contains($slug, str_replace('-', '', $k)) || str_contains($k, $slug)) {
      $svc = $v; break;
    }
  }
}
?>

<main id="primary" class="site-main">

<?php if ($svc): ?>

<section class="svc-hero">
  <div class="container-sm" style="position:relative;z-index:1">
    <div class="svc-hero-icon">
      <i class="fas <?php echo esc_attr($svc['ico']); ?>"></i>
    </div>
    <div class="label"><?php echo esc_html($svc['label']); ?></div>
    <h1 style="margin:.75rem 0 1.25rem;max-width:700px"><?php the_title(); ?></h1>
    <p class="lead" style="max-width:640px"><?php echo esc_html($svc['intro']); ?></p>
    <?php if (!empty($svc['price'])): ?>
    <div class="price-pill"><i class="fas fa-tag"></i><?php echo esc_html($svc['price']); ?></div>
    <?php endif; ?>
    <div class="btn-group mt-2">
      <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-primary">
        <i class="fas fa-paper-plane"></i> Discuss This Project
      </a>
      <a href="<?php echo esc_url(home_url('/services')); ?>" class="btn btn-ghost">← All Services</a>
    </div>
  </div>
</section>

<section class="section">
  <div class="container-sm">
    <div class="label">Real Story</div>
    <h2 style="margin:.75rem 0 1.5rem;max-width:640px">A project that proves this service works</h2>
    <p style="font-size:1.0625rem;color:var(--t-3);line-height:1.88;max-width:680px"><?php echo esc_html($svc['story']); ?></p>
  </div>
</section>

<section class="section" style="padding-top:0">
  <div class="container">
    <div class="sec-h">
      <div class="label">Deliverables</div>
      <h2>What's included</h2>
      <p>Every engagement includes Git history, documentation, and a QA pass before handover. No zip-and-goodbye.</p>
    </div>
    <div class="svc-deliverables">
      <?php foreach ($svc['deliverables'] as [$ico,$title,$desc]): ?>
      <div class="svc-d-cell reveal">
        <div class="svc-d-ico"><i class="fas <?php echo esc_attr($ico); ?>"></i></div>
        <div>
          <h4><?php echo esc_html($title); ?></h4>
          <p><?php echo esc_html($desc); ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section" style="padding-top:0">
  <div class="container-sm">
    <div class="sec-h">
      <div class="label">Process</div>
      <h2>How we work together</h2>
    </div>
    <div class="process-stack">
      <?php foreach ([
        ['01','Discovery Call',  '30–60 min. I ask about your business logic, edge cases, and what success looks like. No code yet.'],
        ['02','Written Scope',   'Detailed proposal: deliverables, timeline, fixed price. You approve before any work starts.'],
        ['03','Development',     'Feature branch, daily commits. Staging throughout. You can review at any point.'],
        ['04','Delivery',        'QA pass, security review, and full written documentation. Not just a zip file.'],
      ] as [$n,$title,$desc]): ?>
      <div class="ps-item reveal">
        <div class="ps-num"><?php echo $n; ?></div>
        <div><h4><?php echo esc_html($title); ?></h4><p><?php echo esc_html($desc); ?></p></div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php else: // fallback — display WP editor content
  while (have_posts()): the_post(); ?>
<section class="page-hero">
  <div class="container-sm">
    <div class="label">Service</div>
    <h1 style="margin:.75rem 0 1rem"><?php the_title(); ?></h1>
    <?php if (get_the_excerpt()): ?>
    <p class="lead"><?php the_excerpt(); ?></p>
    <?php endif; ?>
  </div>
</section>
<section class="section">
  <div class="container-sm">
    <div class="entry-content"><?php the_content(); ?></div>
  </div>
</section>
<?php endwhile; endif; ?>

<section class="section cta-section">
  <div class="container"><div class="cta-in">
    <div class="label">Get Started</div>
    <h2>Ready to discuss your project?</h2>
    <p>Tell me what you need. I'll reply with real questions — not a generic quote — within 24 hours.</p>
    <div class="btn-group" style="justify-content:center">
      <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-primary btn-lg"><i class="fas fa-paper-plane"></i> Let's Talk</a>
      <a href="<?php echo esc_url(home_url('/services')); ?>" class="btn btn-ghost btn-lg">All Services</a>
    </div>
  </div></div>
</section>

</main>
<?php get_footer(); ?>
