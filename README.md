# Saddam Portfolio — Custom WordPress Theme

A performance-first, custom WordPress portfolio theme built from scratch.

## Features
- Custom Portfolio CPT with `portfolio_category` and `portfolio_tag` taxonomies
- Gutenberg-ready with `show_in_rest: true` on all CPTs
- Zero jQuery — vanilla JS only
- Main JS loaded with `defer` attribute via `script_loader_tag` filter
- `wp-block-library` CSS removed (not used on frontend)
- Emoji scripts disabled
- Preconnect hints for Google Fonts and cdnjs
- Schema.org Person markup on homepage
- Open Graph + Twitter Card meta tags
- Contact form with `wp_mail()` — no plugin required
- 404 page
- SEO-friendly permalink structure

## Theme Structure
```
saddam-portfolio/
├── front-page.php          # Homepage
├── page-about.php          # About page
├── page-services.php       # Services page
├── page-contact.php        # Contact page
├── archive-portfolio.php   # Portfolio archive
├── single-portfolio.php    # Single project
├── index.php               # Blog index
├── single.php              # Single post
├── 404.php                 # 404 error page
├── functions.php           # Theme setup, enqueue, hooks
├── inc/
│   ├── custom-post-types.php   # Portfolio CPT + taxonomies
│   ├── template-functions.php  # Helper functions, fallbacks
│   └── customizer.php          # Theme Customizer options
├── assets/
│   ├── css/main.css            # All styles (1058 lines)
│   └── js/main.js              # Vanilla JS (scroll, menu, form)
└── template-parts/
    └── content-portfolio.php   # Portfolio card partial
```

## Core Web Vitals Optimizations
- `wp-block-library` CSS dequeued (saves ~50KB)
- Emoji scripts removed
- Main JS deferred
- Preconnect to fonts.googleapis.com and fonts.gstatic.com
- Inter + Bricolage Grotesque loaded with `display=swap`
- No render-blocking scripts
- Image sizes registered for srcset support

## Installation
1. Upload theme folder to `/wp-content/themes/`
2. Activate in WordPress Admin → Appearance → Themes
3. Go to Appearance → Menus → create Primary Menu with: Home, About, Portfolio, Services, Blog, Contact, Hire Me
4. Go to Settings → Reading → set Front page to static "Home" page
5. Add your OG image at `assets/images/og-image.jpg` (1200×630px)

## Author
Saddam Hossen — saddam.wp007@gmail.com — https://saddamhossen.dev
