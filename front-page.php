<?php get_header(); ?>
<main id="primary" class="site-main">

    <!-- ═══ HERO ═══════════════════════════════════════════════════════ -->
    <section class="hero" aria-labelledby="hero-h">
        <div class="hero-inner">

            <!-- Left: Copy -->
            <div>
                <div class="hero-pill">
                    <span class="hero-dot" aria-hidden="true"></span>
                    Open to full-time remote &amp; freelance
                </div>
                <h1 class="hero-h1" id="hero-h">
                    I build WordPress<br>that <span class="accent-word">actually performs.</span>
                </h1>
                <p class="hero-sub">Senior WordPress developer specialising in custom plugins, WooCommerce extensions,
                    and Gutenberg blocks. Clean PHP, Git workflow, 90+ PageSpeed — delivered on time.</p>
                <div class="btn-grp hero-ctas">
                    <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-primary btn-lg">
                        <i class="fas fa-paper-plane" aria-hidden="true"></i> Hire Me
                    </a>
                    <a href="<?php echo esc_url(home_url('/portfolio')); ?>" class="btn btn-ghost btn-lg">
                        See My Work <i class="fas fa-arrow-right" aria-hidden="true"></i>
                    </a>
                </div>
                <div class="hero-proof">
                    <div><span class="hp-val">7<em>+</em></span>
                        <div class="hp-lbl">Years in WP</div>
                    </div>
                    <div><span class="hp-val">100<em>%</em></span>
                        <div class="hp-lbl">Upwork Success</div>
                    </div>
                    <div><span class="hp-val">90<em>+</em></span>
                        <div class="hp-lbl">PageSpeed</div>
                    </div>
                    <div><span class="hp-val">5<em>★</em></span>
                        <div class="hp-lbl">Every Review</div>
                    </div>
                </div>
            </div>

            <!-- Right: Profile Card -->
            <div aria-hidden="true">
                <div class="hero-card">
                    <div class="hero-card-top">
                        <div class="hct-inner">
                            <div class="hero-avatar">SH</div>
                            <div class="hct-info">
                                <h3>Saddam Hossen</h3>
                                <p>WordPress Plugin Developer · Bangladesh</p>
                            </div>
                        </div>
                        <div class="hero-card-badges">
                            <span class="hcb hcb-green">
                                <svg width="6" height="6" viewBox="0 0 6 6" fill="currentColor">
                                    <circle cx="3" cy="3" r="3" />
                                </svg>
                                Available for Hire
                            </span>
                            <span class="hcb hcb-blue">Top Rated · Upwork</span>
                            <span class="hcb hcb-blue">100% Job Success</span>
                        </div>
                    </div>
                    <div class="hero-card-stats">
                        <div class="hcs-item">
                            <span class="hcs-val">7<em>+</em></span>
                            <div class="hcs-lbl">Years Experience</div>
                            <div class="hcs-sub">Since 2017</div>
                        </div>
                        <div class="hcs-item">
                            <span class="hcs-val">50<em>+</em></span>
                            <div class="hcs-lbl">Projects Delivered</div>
                            <div class="hcs-sub">Plugins · WooCommerce · FSE</div>
                        </div>
                        <div class="hcs-item">
                            <span class="hcs-val">90<em>+</em></span>
                            <div class="hcs-lbl">PageSpeed Score</div>
                            <div class="hcs-sub">Core Web Vitals passed</div>
                        </div>
                        <div class="hcs-item">
                            <span class="hcs-val">5<em>★</em></span>
                            <div class="hcs-lbl">All Client Reviews</div>
                            <div class="hcs-sub">Every job · every client</div>
                        </div>
                    </div>
                    <div class="hero-card-stack">
                        <p>Core Stack</p>
                        <div class="stack-chips">
                            <?php foreach (['PHP 8','WordPress','WooCommerce','Gutenberg','REST API','MySQL','JavaScript','React','Git','Shopify'] as $t): ?>
                            <span class="stack-chip"><?php echo esc_html($t); ?></span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- ═══ SERVICES ══════════════════════════════════════════════════ -->
    <section class="section" aria-labelledby="svc-h"
        style="background:var(--bg-1); border-top:1px solid var(--border); border-bottom:1px solid var(--border)">
        <div class="container">
            <div class="sec-hd flex">
                <div>
                    <div class="label">Services</div>
                    <h2 id="svc-h">What I build for you</h2>
                    <p>Real PHP, Git workflow, docs, and a QA pass before every handover.</p>
                </div>
                <a href="<?php echo esc_url(home_url('/services')); ?>" class="btn btn-ghost btn-sm">All Services <i
                        class="fas fa-arrow-right" aria-hidden="true"></i></a>
            </div>
            <div class="svc-grid">
                <?php
      $svcs = [
        ['fa-plug',          '01','Plugin Development',   'OOP PHP plugins that automate workflows, import data, and solve real business problems. WordPress coding standards, hooks-first.','wordpress-plugin-development'],
        ['fa-shopping-cart', '02','WooCommerce',           'Custom checkout, payment gateways (Stripe, bKash), HPOS order management, custom product types. Upgrade-safe hooks.','woocommerce-development'],
        ['fa-cube',          '03','Gutenberg / FSE',       'Custom blocks with block.json + React. Full Site Editing templates. Reusable component systems for multi-site deployment.','gutenberg-fse-blocks'],
        ['fa-tachometer-alt','04','Core Web Vitals',       'From PageSpeed 42 → 91. Caching, Cloudflare CDN, WebP, critical CSS, script defer. Real audits, real fixes.','performance-core-web-vitals'],
        ['fa-code-branch',   '05','API & Automation',      'REST API endpoints, CRM integrations, webhook handlers. Zapier/Make automation. If it has an API, I can connect it.','api-integration'],
        ['fab fa-shopify',   '06','Shopify',               'Custom Liquid themes, sections, metafield architecture. Performance-first builds for UAE, UK, and North American markets.','shopify-development'],
      ];
      foreach ($svcs as $i => [$ico,$num,$title,$desc,$slug]): ?>
                <a href="<?php echo esc_url(home_url('/services/'.$slug)); ?>"
                    class="svc-cell reveal d<?php echo min($i+1,4); ?>">
                    <div class="svc-n"><?php echo esc_html($num); ?></div>
                    <div class="svc-ico" aria-hidden="true"><i class="fas <?php echo esc_attr($ico); ?>"></i></div>
                    <h3><?php echo esc_html($title); ?></h3>
                    <p><?php echo esc_html($desc); ?></p>
                    <span class="svc-arrow" aria-hidden="true">Explore <i class="fas fa-arrow-right"></i></span>
                </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ═══ PROJECTS ══════════════════════════════════════════════════ -->
    <section class="section" aria-labelledby="work-h">
        <div class="container">
            <div class="sec-hd flex">
                <div>
                    <div class="label">Work</div>
                    <h2 id="work-h">Projects with measurable results</h2>
                    <p>Real problems. Real solutions. Every project below has a number that proves it worked.</p>
                </div>
                <a href="<?php echo esc_url(home_url('/portfolio')); ?>" class="btn btn-ghost btn-sm">All Projects <i
                        class="fas fa-arrow-right" aria-hidden="true"></i></a>
            </div>
            <div class="proj-grid">
                <?php
      $pq = new WP_Query(['post_type'=>'portfolio','posts_per_page'=>6,'orderby'=>'menu_order','order'=>'ASC']);
      if ($pq->have_posts()): while ($pq->have_posts()): $pq->the_post();
        get_template_part('template-parts/content','portfolio');
      endwhile; wp_reset_postdata();
      else: saddam_portfolio_default_projects(); endif; ?>
            </div>
        </div>
    </section>

    <!-- ═══ ABOUT STRIP ═════════════════════════════════════════════ -->
    <section class="section" aria-labelledby="about-h"
        style="background:var(--bg-1);border-top:1px solid var(--border);border-bottom:1px solid var(--border)">
        <div class="container">
            <div style="display:grid;grid-template-columns:1fr 360px;gap:4rem;align-items:start">
                <div>
                    <div class="label">About</div>
                    <h2 id="about-h" style="margin-bottom:1.125rem">7+ years building WordPress<br>at the code level.
                    </h2>
                    <p style="margin-bottom:.875rem">I'm Saddam Hossen — WordPress plugin developer from Jamalpur,
                        Bangladesh. Not page builders. Not visual composers. PHP, hooks, <code>$wpdb</code>, REST API —
                        since 2017.</p>
                    <p style="margin-bottom:.875rem">My best-known build cut a client's 5,000-event data entry from 100+
                        hours down to 2 hours per year. That's the kind of work I'm here for.</p>
                    <p>Top Rated on Upwork · 100% job success · every review is 5 stars. Available for full-time remote
                        and freelance.</p>
                    <div class="btn-grp" style="margin-top:1.75rem">
                        <a href="<?php echo esc_url(home_url('/about')); ?>" class="btn btn-ghost">My Full Story</a>
                        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-primary">Work With Me</a>
                    </div>
                </div>
                <div>
                    <div class="label" style="margin-bottom:1rem">Technical Stack</div>
                    <div style="display:flex;flex-wrap:wrap;gap:.375rem">
                        <?php foreach ([
            ['fa-code','PHP 8 / OOP'],['fab fa-wordpress','WordPress'],['fa-shopping-cart','WooCommerce'],
            ['fa-cube','Gutenberg'],['fa-database','MySQL / $wpdb'],['fa-plug','WP REST API'],
            ['fab fa-js','JavaScript'],['fab fa-react','React'],['fa-tachometer-alt','Core Web Vitals'],
            ['fab fa-git-alt','Git / GitHub'],['fab fa-shopify','Shopify Liquid'],['fa-robot','AI API'],
          ] as [$ico,$name]): ?>
                        <span
                            style="display:inline-flex;align-items:center;gap:.3125rem;font-size:.8rem;font-weight:500;padding:.25rem .6875rem;background:var(--bg-card);border:1px solid var(--border);border-radius:99px;color:var(--ink-2)">
                            <i class="fas <?php echo esc_attr($ico); ?>" style="color:var(--accent);font-size:.75rem"
                                aria-hidden="true"></i>
                            <?php echo esc_html($name); ?>
                        </span>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══ TESTIMONIALS ══════════════════════════════════════════════ -->
    <section class="section" aria-labelledby="reviews-h">
        <div class="container">
            <div class="sec-hd center">
                <div class="label">Reviews</div>
                <h2 id="reviews-h">What clients say</h2>
                <p>Five stars. Every project. Every client.</p>
            </div>
            <div class="testi-grid">
                <?php saddam_portfolio_testimonials(); ?>
            </div>
            <div style="text-align:center;margin-top:2rem">
                <a href="https://www.upwork.com/freelancers/~016d4dac9eb588f3e7" target="_blank"
                    rel="noopener noreferrer" class="btn btn-ghost">
                    <i class="fas fa-external-link-alt" aria-hidden="true"></i> Verify on Upwork · Top Rated · 100% Job
                    Success
                </a>
            </div>
        </div>
    </section>

    <!-- ═══ OPEN SOURCE ════════════════════════════════════════════════ -->
    <section class="section" aria-labelledby="oss-h"
        style="background:var(--bg-1);border-top:1px solid var(--border);border-bottom:1px solid var(--border)">
        <div class="container">
            <div class="sec-hd">
                <div class="label">Open Source</div>
                <h2 id="oss-h">Published on WordPress.org</h2>
                <p>Real plugins, real installs — production code you can download today.</p>
            </div>
            <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(320px,1fr));gap:1.125rem">
                <?php foreach ([
        ['fa-image','WebP Optimizer','Converts images to WebP locally — no external API, no fees. 60–80% size reduction, direct LCP improvement.',
         'https://wordpress.org/plugins/saddam-hossen-webp-optimizer/','https://github.com/iamsaddamhossen/saddam-hossen-webp-optimizer'],
        ['fa-credit-card','bKash WooCommerce Gateway','Production-ready bKash payment gateway — Bangladesh\'s largest mobile payment. IPN verification, upgrade-safe hooks.',
         '','https://github.com/iamsaddamhossen/custom-woocommerce-bkash-payment-gateway-plugin'],
      ] as [$ico,$title,$desc,$wp,$gh]): ?>
                <div
                    style="background:var(--bg-card);border:1px solid var(--border);border-radius:var(--r-xl);padding:1.625rem;display:flex;gap:1.125rem;align-items:flex-start">
                    <div style="width:44px;height:44px;flex-shrink:0;background:var(--accent-bg);border:1px solid var(--accent-bdr);border-radius:var(--r-md);display:flex;align-items:center;justify-content:center;font-size:1.125rem;color:var(--accent)"
                        aria-hidden="true">
                        <i class="fas <?php echo esc_attr($ico); ?>"></i>
                    </div>
                    <div style="min-width:0">
                        <h3 style="font-size:.9375rem;margin-bottom:.3125rem"><?php echo esc_html($title); ?></h3>
                        <p style="font-size:.8375rem;line-height:1.7;margin-bottom:.75rem">
                            <?php echo esc_html($desc); ?></p>
                        <div style="display:flex;gap:.4375rem;flex-wrap:wrap">
                            <?php if ($wp): ?><a href="<?php echo esc_url($wp); ?>" target="_blank"
                                rel="noopener noreferrer" class="btn btn-ghost btn-sm"><i class="fab fa-wordpress"
                                    aria-hidden="true"></i> WordPress.org</a><?php endif; ?>
                            <?php if ($gh): ?><a href="<?php echo esc_url($gh); ?>" target="_blank"
                                rel="noopener noreferrer" class="btn btn-ghost btn-sm"><i class="fab fa-github"
                                    aria-hidden="true"></i> GitHub</a><?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ═══ BLOG ══════════════════════════════════════════════════════ -->
    <section class="section" aria-labelledby="blog-h">
        <div class="container">
            <div class="sec-hd flex">
                <div>
                    <div class="label">Blog</div>
                    <h2 id="blog-h">WordPress development insights</h2>
                    <p>Plugin architecture, WooCommerce internals, and performance deep-dives.</p>
                </div>
                <a href="<?php echo esc_url(home_url('/blog')); ?>" class="btn btn-ghost btn-sm">All Articles <i
                        class="fas fa-arrow-right" aria-hidden="true"></i></a>
            </div>
            <div class="blog-grid">
                <?php
      $bq = new WP_Query(['post_type'=>'post','posts_per_page'=>3,'ignore_sticky_posts'=>true]);
      if ($bq->have_posts()): while ($bq->have_posts()): $bq->the_post(); ?>
                <article class="blog-card reveal">
                    <div class="blog-thumb">
                        <?php if (has_post_thumbnail()): the_post_thumbnail('medium_large');
          else: ?><div style="width:100%;aspect-ratio:16/9;background:var(--bg-2);display:flex;align-items:center;justify-content:center;font-size:1.75rem;color:var(--ink-4)">
                            <i class="fas fa-pen-nib" aria-hidden="true"></i>
                        </div><?php endif; ?>
                    </div>
                    <div class="blog-body">
                        <div class="blog-cat">
                            <?php $c=get_the_category(); echo $c ? esc_html($c[0]->name) : 'WordPress'; ?></div>
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <p><?php echo wp_trim_words(get_the_excerpt(),20,'…'); ?></p>
                        <div class="blog-meta" style="margin-top:auto;padding-top:.875rem">
                            <span><?php echo get_the_date('M j, Y'); ?></span>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="read-more">Read article <i class="fas fa-arrow-right"
                                aria-hidden="true"></i></a>
                    </div>
                </article>
                <?php endwhile; wp_reset_postdata();
      else: saddam_portfolio_placeholder_posts(); endif; ?>
            </div>
        </div>
    </section>

    <!-- ═══ CTA ═══════════════════════════════════════════════════════ -->
    <section class="cta-section" aria-labelledby="cta-h">
        <div class="cta-in">
            <div class="label">Let's Build</div>
            <h2 id="cta-h">Ready to start a project?</h2>
            <p>Full-time remote roles and freelance projects welcome. I reply within 24 hours with real questions, not a
                template.</p>
            <div class="btn-grp" style="justify-content:center">
                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-primary btn-lg">
                    <i class="fas fa-paper-plane" aria-hidden="true"></i> Start a Conversation
                </a>
                <a href="https://www.upwork.com/freelancers/~016d4dac9eb588f3e7" target="_blank"
                    rel="noopener noreferrer" class="btn btn-ghost btn-lg">
                    Upwork Profile <i class="fas fa-external-link-alt" aria-hidden="true"></i>
                </a>
            </div>
            <p class="cta-email">Or email: <a href="mailto:saddam.wp007@gmail.com">saddam.wp007@gmail.com</a></p>
        </div>
    </section>

</main>
<?php get_footer(); ?>