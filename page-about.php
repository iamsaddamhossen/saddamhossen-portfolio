<?php get_header(); ?>
<main id="primary" class="site-main">

<section class="page-title-section" aria-labelledby="about-h">
  <div class="container" style="position:relative;z-index:1;max-width:820px">
    <div class="eyebrow">About</div>
    <h1 id="about-h">7+ years building WordPress at the code level.</h1>
    <p class="lead" style="max-width:580px">I'm Saddam Hossen, a WordPress plugin developer from Jamalpur, Bangladesh. PHP, hooks, <code>$wpdb</code>, REST API — not page builders.</p>
  </div>
</section>

<!-- Story + Stack -->
<section class="section-sm">
  <div class="container">
    <div class="about-layout">
      <div class="about-text">
        <div class="eyebrow">My Story</div>
        <h2 style="margin-bottom:1.125rem">From learner to senior developer in 7 years</h2>
        <p>I started web development in 2017. The first two years I spent understanding how WordPress <em>actually</em> works — not the admin panel, but the core. Hooks, actions, filters, the template hierarchy, the rewrite engine, the options API.</p>
        <p>Today I specialise in plugin development and WooCommerce extensions. My proudest work is a custom bulk import plugin that reduced a nonprofit's 5,000-event data entry from 100+ hours to under 2 hours. That's the kind of problem I enjoy solving — business problems through code.</p>
        <p>Top Rated on Upwork with 100% job success. I've published plugins on WordPress.org, worked for agencies in Canada and Australia, and am currently open to full-time remote roles.</p>
        <div class="btn-grp" style="margin-top:1.75rem">
          <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-primary">Work With Me</a>
          <a href="<?php echo esc_url(home_url('/portfolio')); ?>" class="btn btn-outline">View Portfolio</a>
        </div>
      </div>
      <div>
        <div class="eyebrow">Technical Stack</div>
        <div class="skill-grid">
          <?php foreach ([
            ['fa-code','PHP 8+ (OOP, PSR)'],['fab fa-wordpress','WordPress Core & Hooks'],
            ['fa-shopping-cart','WooCommerce'],['fa-cube','Gutenberg / FSE'],
            ['fa-database','MySQL & $wpdb'],['fa-plug','WP REST API'],
            ['fab fa-js','JavaScript ES6+'],['fab fa-react','React'],
            ['fa-cogs','ACF Pro & CPT'],['fa-tachometer-alt','Core Web Vitals'],
            ['fab fa-git-alt','Git & GitHub'],['fa-terminal','WP-CLI & Composer'],
            ['fa-cloud','Cloudflare & CDN'],['fab fa-shopify','Shopify (Liquid)'],
            ['fa-robot','OpenAI & Claude API'],['fa-box','Docker / LocalWP'],
          ] as [$ico,$name]): ?>
          <div class="skill-item">
            <i class="fas <?php echo esc_attr($ico); ?>" aria-hidden="true"></i>
            <?php echo esc_html($name); ?>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Experience -->
<section class="section" aria-labelledby="exp-h" style="background:var(--bg-1);border-top:1px solid var(--border);border-bottom:1px solid var(--border)">
  <div class="container">
    <div class="sec-hd">
      <div class="eyebrow">Experience</div>
      <h2 id="exp-h">Work History</h2>
    </div>
    <div style="max-width:700px">
      <div class="timeline">
        <?php foreach ([
          ['Nov 2024 – Present', 'Senior WordPress Developer',          '99BinaryLab · Full-time Remote',           'Builds custom WordPress plugins and WooCommerce extensions for agency clients. Implements third-party API integrations, optimizes Core Web Vitals, provides technical consulting on WordPress architecture.'],
          ['Dec 2023 – Oct 2024','WordPress Technical Support Engineer', 'Arraytics · Full-time Remote · Dhaka, BD',  'Troubleshot complex WordPress issues including plugin conflicts and Gutenberg block errors. Reduced average page load from 8s to 1.2s. Maintained 95%+ customer satisfaction.'],
          ['Dec 2021 – Jul 2024','Freelance WordPress Developer',        'NetGeeks · Part-time · Sydney, Australia',  'Built 15+ custom WordPress websites. Implemented custom booking systems saving clients $2,000+/year in SaaS fees.'],
          ['Dec 2021 – Dec 2023','Front-End Developer (React + WP)',    'KIMP · Full-time Remote · Markham, Canada', 'Built responsive WordPress sites. Created interactive UI components with React. Integrated frontend with WordPress REST APIs.'],
          ['Jan 2021 – Dec 2021','Assistant Programmer',                 'Golden Harvest InfoTech · Dhaka, BD',       'PHP/MySQL backend for internal ERP. Improved database performance through indexing and query optimization.'],
        ] as [$date,$title,$co,$desc]): ?>
        <div class="tl-item">
          <div class="tl-date"><?php echo esc_html($date); ?></div>
          <h3><?php echo esc_html($title); ?></h3>
          <div class="tl-co"><?php echo esc_html($co); ?></div>
          <p class="tl-desc"><?php echo esc_html($desc); ?></p>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- Credentials -->
<section class="section-sm" aria-labelledby="creds-h">
  <div class="container">
    <div class="sec-hd">
      <div class="eyebrow">Education &amp; Certifications</div>
      <h2 id="creds-h">Credentials</h2>
    </div>
    <div class="cert-grid">
      <?php foreach ([
        ['WordPress VIP Development',            'rtCamp · March 2023',                  'fa-wordpress'],
        ['Project Management Professional',       'TÜV SÜD · April 2021',                 'fa-certificate'],
        ['Advanced WordPress Theme Dev',          'Codeytek Academy',                      'fa-graduation-cap'],
        ['B.Sc. Computer Science & Engineering', 'National University, Bangladesh · 2014','fa-university'],
      ] as [$name,$by,$ico]): ?>
      <div class="cert-item">
        <div class="cert-icon" aria-hidden="true"><i class="fas <?php echo esc_attr($ico); ?>"></i></div>
        <div>
          <div class="cert-name"><?php echo esc_html($name); ?></div>
          <div class="cert-by"><?php echo esc_html($by); ?></div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

</main>
<?php get_footer(); ?>
