<?php get_header(); ?>
<main id="primary" class="site-main">

<section class="page-title-section">
  <div class="container-sm">
    <div class="eyebrow">Portfolio</div>
    <h1 style="margin:.75rem 0 1rem;">Projects built with real code</h1>
    <p style="font-size:1.0625rem;color:var(--ink-3);line-height:1.8;">Real problems. Real solutions. Measurable outcomes. No stock screenshots, no lorem ipsum.</p>
  </div>
</section>

<section class="section-sm" style="padding-top:3rem;">
  <div class="container">
    <?php
    $cats = get_terms(['taxonomy'=>'portfolio_category','hide_empty'=>true]);
    if (!empty($cats) && !is_wp_error($cats)): ?>
    <div class="filter-bar">
      <button class="f-btn active" data-filter="*">All Projects</button>
      <?php foreach ($cats as $c): ?>
      <button class="f-btn" data-filter=".<?php echo esc_attr($c->slug); ?>"><?php echo esc_html($c->name); ?></button>
      <?php endforeach; ?>
    </div>
    <?php endif; ?>
    <div class="proj-grid">
      <?php if (have_posts()): while (have_posts()): the_post();
        get_template_part('template-parts/content', 'portfolio');
      endwhile;
      the_posts_pagination(['prev_text'=>'← Previous','next_text'=>'Next →']);
      else: saddam_portfolio_default_projects(); endif; ?>
    </div>
  </div>
</section>

<section class="section cta-section" style="padding:clamp(4rem,8vw,6rem) 0;">
  <div class="container"><div class="cta-inner">
    <h2>Have a project in mind?</h2>
    <p>Let's talk scope, timeline, and budget. Reply within 24 hours.</p>
    <div class="btn-group" style="justify-content:center;">
      <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Get In Touch</a>
    </div>
  </div></div>
</section>

</main>
<?php get_footer(); ?>
