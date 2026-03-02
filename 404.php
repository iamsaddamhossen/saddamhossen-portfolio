<?php get_header(); ?>
<main id="primary" class="site-main">
<div class="error404-wrap">
  <div class="error404-code" aria-hidden="true">404</div>
  <h1 style="margin-bottom:.625rem">Page not found</h1>
  <p style="max-width:380px;margin:0 auto 1.75rem">The page you're looking for doesn't exist or may have moved.</p>
  <div class="btn-grp" style="justify-content:center">
    <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-primary"><i class="fas fa-home" aria-hidden="true"></i> Go Home</a>
    <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-ghost">Contact Me</a>
  </div>
</div>
</main>
<?php get_footer(); ?>
