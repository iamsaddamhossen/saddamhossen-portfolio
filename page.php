<?php get_header(); ?>
<main id="primary" class="site-main">
<?php while (have_posts()): the_post(); ?>
<section class="page-title-section" aria-labelledby="page-h-<?php the_ID(); ?>">
  <div class="container-sm" style="position:relative;z-index:1">
    <div class="eyebrow">Page</div>
    <h1 id="page-h-<?php the_ID(); ?>"><?php the_title(); ?></h1>
  </div>
</section>
<div class="post-content">
  <div class="entry-content"><?php the_content(); ?></div>
</div>
<?php endwhile; ?>
</main>
<?php get_footer(); ?>
