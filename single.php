<?php get_header(); ?>
<main id="primary" class="site-main">
<?php while (have_posts()): the_post(); ?>
<section class="page-title-section" aria-labelledby="post-h-<?php the_ID(); ?>">
  <div class="container-sm" style="position:relative;z-index:1">
    <?php $cats=get_the_category(); if ($cats): ?><div class="blog-cat"><?php echo esc_html($cats[0]->name); ?></div><?php endif; ?>
    <h1 id="post-h-<?php the_ID(); ?>"><?php the_title(); ?></h1>
    <p style="margin-top:.5rem;font-family:var(--f-mono);font-size:.75rem;color:var(--ink-3)">
      <?php echo get_the_date(); ?> &middot; <?php echo esc_html(get_the_author()); ?>
    </p>
  </div>
</section>
<div class="post-content">
  <div class="entry-content"><?php the_content(); ?></div>
  <nav class="post-nav" aria-label="Post navigation">
    <?php $prev=get_previous_post(); if ($prev): ?>
    <a href="<?php echo get_permalink($prev); ?>" class="post-nav-link">
      <div class="pnl-dir"><i class="fas fa-arrow-left" aria-hidden="true"></i> Previous</div>
      <div class="pnl-title"><?php echo esc_html(get_the_title($prev)); ?></div>
    </a>
    <?php endif; $next=get_next_post(); if ($next): ?>
    <a href="<?php echo get_permalink($next); ?>" class="post-nav-link" style="text-align:right">
      <div class="pnl-dir">Next <i class="fas fa-arrow-right" aria-hidden="true"></i></div>
      <div class="pnl-title"><?php echo esc_html(get_the_title($next)); ?></div>
    </a>
    <?php endif; ?>
  </nav>
</div>
<?php endwhile; ?>
</main>
<?php get_footer(); ?>
