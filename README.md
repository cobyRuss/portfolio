# Russel Tristan L. Marzo - Developer Portfolio

A personal developer portfolio built with Laravel, featuring responsive design and modern UI.

## Features

- Hero section with profile introduction
- Education and background information
- Technical skills with progress indicators
- Certifications and eligibility display
- Contact information with clickable links
- Fully responsive design

## Tech Stack

- **Framework:** Laravel 13
- **Frontend:** Blade templates, CSS3
- **Database:** MySQL (for sessions/cache on production)
- **Deployment:** InfinityFree Hosting

## Local Development

```bash
# Clone the repository
git clone https://github.com/cobyRuss/portfolio-app.git
cd portfolio-app

# Install dependencies
composer install

# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate

# Run development server
php artisan serve
```

## Deployment to InfinityFree

1. Create an InfinityFree account and set up a PHP hosting account
2. Upload all files EXCEPT `vendor/` and `node_modules/` to the `htdocs/` directory
3. Create a MySQL database in the InfinityFree control panel
4. Update `.env` with your database credentials and APP_URL
5. Run `php artisan key:generate` on the server (or set APP_KEY manually)
6. Ensure the root `.htaccess` routes to `public/`

## Git Commit History

This project follows incremental commit practices:
- Each commit represents a logical unit of work
- Commit messages accurately describe changes
- No single "final upload" commit

## AI Collaboration

This project was developed with AI assistance. All AI interactions are documented in `PROMPT_LOG.md`.

## Author

**Russel Tristan L. Marzo**
- Email: coby.2339@gmail.com
- GitHub: [cobyRuss](https://github.com/cobyRuss)
- Phone: 0935 759 1816

## Course Information

- **Course:** Integrative Programming
- **Instructor:** Adrian D. Baruela
- **Institution:** Data Center College of the Philippines - Bangued
- **Activity:** Developer Portfolio with AI Collaboration (Activity 3)
