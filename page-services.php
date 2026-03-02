<?php get_header(); ?>
<main id="primary" class="site-main">

<section class="page-title-section" aria-labelledby="svc-page-h">
  <div class="container-sm" style="position:relative;z-index:1">
    <div class="label">Services</div>
    <h1 id="svc-page-h" style="margin:.625rem 0 .875rem">What I build &amp; how I work</h1>
    <p class="lead" style="max-width:580px">Real PHP — not drag and drop. Every service ships with clean code, Git history, documentation, and a Core Web Vitals pass before handover.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="svc-grid">
      <?php foreach ([
        ['fa-plug',          '01','Plugin Development',   'OOP PHP plugins from scratch — data imports, admin tools, workflow automation. WP coding standards, hooks-first.','wordpress-plugin-development'],
        ['fa-shopping-cart', '02','WooCommerce',           'Custom checkout, payment gateways (Stripe, bKash), HPOS order management, custom product types.','woocommerce-development'],
        ['fa-cube',          '03','Gutenberg / FSE Blocks','Custom blocks with block.json + React. FSE templates. Reusable libraries for multi-site deployment.','gutenberg-fse-blocks'],
        ['fa-tachometer-alt','04','Core Web Vitals',       'PageSpeed 42 → 91. Caching, Cloudflare CDN, WebP, critical CSS, script defer. Real fixes.','performance-core-web-vitals'],
        ['fa-code-branch',   '05','API & Automation',      'REST API endpoints, CRM integrations, webhook handlers. If it has an API, I can connect it.','api-integration'],
        ['fab fa-shopify',   '06','Shopify',               'Custom Liquid themes, metafield architecture. Performance-first UAE/UK/US market builds.','shopify-development'],
      ] as $i => [$ico,$num,$title,$desc,$slug]): ?>
      <a href="<?php echo esc_url(home_url('/services/'.$slug)); ?>" class="svc-cell reveal d<?php echo min($i+1,4); ?>">
        <div class="svc-n"><?php echo esc_html($num); ?></div>
        <div class="svc-ico" aria-hidden="true"><i class="fas <?php echo esc_attr($ico); ?>"></i></div>
        <h3><?php echo esc_html($title); ?></h3>
        <p><?php echo esc_html($desc); ?></p>
        <span class="svc-arrow" aria-hidden="true">Full details <i class="fas fa-arrow-right"></i></span>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section" style="padding-top:0">
  <div class="container-sm">
    <div class="sec-hd center">
      <div class="label">Process</div>
      <h2>Every project, the same way</h2>
      <p>Discovery → written scope → development with Git → delivery with docs. No surprises.</p>
    </div>
    <div class="process-stack">
      <?php foreach ([
        ['01','Discovery Call',      '30–60 minutes. I ask about your business logic, users, edge cases, and what success looks like. No code yet.'],
        ['02','Proposal & Scope',    'A detailed written proposal: deliverables, timeline, and fixed price. You approve before I write a line.'],
        ['03','Development with Git','Feature branch, daily commits. Staging throughout. You see real progress every day.'],
        ['04','Delivery & Docs',     'Cross-browser QA, PageSpeed audit, security review. Delivered with written documentation — not just a zip file.'],
      ] as [$n,$title,$desc]): ?>
      <div class="ps-item">
        <div class="ps-num"><?php echo $n; ?></div>
        <div><h4><?php echo esc_html($title); ?></h4><p><?php echo esc_html($desc); ?></p></div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="cta-section" aria-labelledby="svc-cta-h">
  <div class="cta-in">
    <div class="label">Get Started</div>
    <h2 id="svc-cta-h">Not sure which service you need?</h2>
    <p>Tell me what you're trying to build. I'll ask the right questions and we'll figure it out together.</p>
    <div class="btn-grp" style="justify-content:center">
      <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-primary btn-lg">
        <i class="fas fa-paper-plane" aria-hidden="true"></i> Let's Talk
      </a>
    </div>
  </div>
</section>

</main>
<?php get_footer(); ?>
