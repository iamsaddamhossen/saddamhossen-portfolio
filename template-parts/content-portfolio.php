<?php
$techs  = saddam_portfolio_get_technologies();
$metric = get_post_meta(get_the_ID(), 'project_metric', true);
$github = get_post_meta(get_the_ID(), 'project_github', true);
$live   = get_post_meta(get_the_ID(), 'project_live_url', true);
$cat    = get_the_terms(get_the_ID(), 'portfolio_category');
$cn     = ($cat && !is_wp_error($cat)) ? $cat[0]->name : '';
?>
<div class="proj-card reveal">
  <div class="proj-img">
    <?php if (has_post_thumbnail()):
      ?><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('saddam-portfolio-medium'); ?></a><?php
    else: ?>
      <div class="proj-ph"><i class="fas fa-code"></i></div>
    <?php endif; ?>
    <?php if ($metric): ?>
    <div class="proj-metric"><i class="fas fa-chart-line"></i> <?php echo esc_html($metric); ?></div>
    <?php endif; ?>
  </div>
  <div class="proj-body">
    <?php if ($cn): ?><div class="proj-cat"><?php echo esc_html($cn); ?></div><?php endif; ?>
    <h3 class="proj-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    <p class="proj-desc"><?php echo esc_html(saddam_portfolio_get_excerpt(null, 22)); ?></p>
    <?php if ($techs): ?>
    <div class="proj-tags">
      <?php foreach ($techs as $t): ?><span class="badge"><?php echo esc_html($t); ?></span><?php endforeach; ?>
    </div>
    <?php endif; ?>
    <div class="proj-foot">
      <div class="proj-links">
        <?php if ($github): ?><a href="<?php echo esc_url($github); ?>" target="_blank" rel="noopener" class="proj-lnk primary"><i class="fab fa-github"></i> GitHub</a><?php endif; ?>
        <?php if ($live): ?><a href="<?php echo esc_url($live); ?>" target="_blank" rel="noopener" class="proj-lnk"><i class="fas fa-external-link-alt"></i> Live</a><?php endif; ?>
        <a href="<?php the_permalink(); ?>" class="proj-lnk"><i class="fas fa-arrow-right"></i> Details</a>
      </div>
    </div>
  </div>
</div>
