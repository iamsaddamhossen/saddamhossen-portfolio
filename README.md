# Saddam Hossen Portfolio

Custom Twenty Twenty-Five child theme for [saddamhossen.dev](https://saddamhossen.dev)

## Overview

Personal portfolio website showcasing WordPress plugin development, WooCommerce extensions,
and performance optimization projects.

## Features

- Custom header with navigation
- Custom footer with social links
- Portfolio custom post type
- FSE (Full Site Editing) templates
- Performance optimized
- Mobile responsive

## Structure

```
twentytwentyfive-child/
├── parts/           # Template parts (header, footer)
├── templates/       # Full page templates
├── patterns/        # Block patterns
├── assets/          # CSS, JS, images
├── style.css        # Theme stylesheet
├── functions.php    # Theme functions
└── theme.json       # Theme configuration
```

## Development

### Local Setup

```bash
# Clone repository
git clone https://github.com/iamsaddamhossen/saddamhossen-portfolio.git

# Copy to WordPress themes directory
cp -r saddamhossen-portfolio /path/to/wordpress/wp-content/themes/twentytwentyfive-child

# Activate in WordPress admin
wp theme activate twentytwentyfive-child
```

### Deployment

**Method 1: Git Pull on Server**

```bash
ssh username@saddamhossen.dev
cd /public_html/wp-content/themes/twentytwentyfive-child/
git pull origin main
```

**Method 2: FTP Upload**
Upload changed files via FileZilla to:
`/public_html/wp-content/themes/twentytwentyfive-child/`

## Requirements

- WordPress 6.7+
- PHP 8.0+
- Twenty Twenty-Five parent theme

## Author

**Saddam Hossen**

- Website: [saddamhossen.dev](https://saddamhossen.dev)
- GitHub: [@iamsaddamhossen](https://github.com/iamsaddamhossen)
- Email: saddam.wp007@gmail.com

## License

GPL-2.0-or-later
