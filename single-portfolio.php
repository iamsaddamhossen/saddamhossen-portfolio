<?php get_header(); ?>
<main id="primary" class="site-main">
<?php while (have_posts()): the_post();
  $techs  = saddam_portfolio_get_technologies();
  $metric = get_post_meta(get_the_ID(), 'project_metric', true);
  $github = get_post_meta(get_the_ID(), 'project_github', true);
  $live   = get_post_meta(get_the_ID(), 'project_live_url', true);
  $cat    = get_the_terms(get_the_ID(), 'portfolio_category');
?>

<section style="padding:calc(70px + 4rem) 0 3rem;background:var(--bg-soft);border-bottom:1px solid var(--border);">
  <div class="container" style="max-width:900px;">
    <div class="eyebrow"><?php echo ($cat && !is_wp_error($cat)) ? esc_html($cat[0]->name) : 'Project'; ?></div>
    <h1 style="margin:.75rem 0 1.25rem;"><?php the_title(); ?></h1>
    <?php if (has_excerpt()): ?>
    <p style="font-size:1.0625rem;color:var(--text-muted);max-width:640px;line-height:1.8;"><?php the_excerpt(); ?></p>
    <?php endif; ?>
    <?php if ($techs): ?>
    <div style="display:flex;flex-wrap:wrap;gap:.375rem;margin-top:1.25rem;">
      <?php foreach ($techs as $t): ?><span class="badge"><?php echo esc_html($t); ?></span><?php endforeach; ?>
    </div>
    <?php endif; ?>
    <div style="display:flex;gap:.75rem;margin-top:1.75rem;flex-wrap:wrap;">
      <?php if ($github): ?><a href="<?php echo esc_url($github); ?>" target="_blank" rel="noopener" class="btn btn-outline btn-sm"><i class="fab fa-github"></i> GitHub</a><?php endif; ?>
      <?php if ($live): ?><a href="<?php echo esc_url($live); ?>" target="_blank" rel="noopener" class="btn btn-primary btn-sm"><i class="fas fa-external-link-alt"></i> Live Site</a><?php endif; ?>
    </div>
  </div>
</section>

<?php if (has_post_thumbnail()): ?>
<div style="max-width:960px;margin:2.5rem auto;padding:0 clamp(1.25rem,4vw,2.5rem);">
  <div style="border-radius:var(--r-xl);overflow:hidden;border:1px solid var(--border);"><?php the_post_thumbnail('large'); ?></div>
</div>
<?php endif; ?>

<div class="container" style="max-width:900px;padding-bottom:5rem;">
  <?php if ($metric): ?>
  <div class="results-row" style="margin-bottom:3rem;">
    <div class="result-box"><span class="result-num"><?php echo esc_html($metric); ?></span><div class="result-lbl">Key Result</div></div>
  </div>
  <?php endif; ?>
  <div class="entry-content" style="max-width:700px;"><?php the_content(); ?></div>
  <nav class="post-nav" style="max-width:700px;">
    <?php $prev = get_previous_post(false, '', 'portfolio_category'); if ($prev): ?>
    <div><div class="pn-label">← Previous</div><a href="<?php echo get_permalink($prev); ?>" class="pn-title"><?php echo get_the_title($prev); ?></a></div>
    <?php endif; $next = get_next_post(false, '', 'portfolio_category'); if ($next): ?>
    <div class="pn-next"><div class="pn-label">Next →</div><a href="<?php echo get_permalink($next); ?>" class="pn-title"><?php echo get_the_title($next); ?></a></div>
    <?php endif; ?>
  </nav>
</div>

<section class="section cta-section" style="padding:clamp(4rem,8vw,6rem) 0;">
  <div class="container"><div class="cta-inner">
    <h2>Interested in working together?</h2>
    <p>Let's talk about your project.</p>
    <div class="btn-group" style="justify-content:center;">
      <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Contact Me</a>
    </div>
  </div></div>
</section>

<?php endwhile; ?>
</main>
<?php get_footer(); ?>
