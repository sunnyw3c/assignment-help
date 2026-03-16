# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

Laravel 12 assignment help / tutoring service. Students submit assignment orders; the public side is a marketing site with many SEO landing pages for specific service types.

## Development Commands

### Environment Setup
```bash
cp .env.example .env
php artisan key:generate
touch database/database.sqlite
php artisan migrate
```

### Running the App
- **All services (recommended):** `composer dev` — runs server, queue worker, and Vite concurrently
- **Individual:** `php artisan serve` | `npm run dev` | `php artisan queue:listen --tries=1`

### Testing
```bash
composer test                        # clears config, then runs all tests
php artisan test --filter=TestName   # run a single test
php artisan test tests/Feature/ProfileTest.php  # run a specific file
```

### Code Quality
```bash
vendor/bin/pint   # format PHP (Laravel Pint)
```

## Architecture

### Two Distinct Sides

**1. Public marketing site** — Static/near-static pages with SEO content. Each service type has its own controller that returns hard-coded data arrays (no DB reads). Routes are at `/essay-writing`, `/research-paper`, `/homework-help`, etc.

**2. Order flow** — `GET/POST /order` via `OrderController`. Creates an `Assignment` record with polymorphic `File` attachments. Success page at `/order/success/{assignment}` requires auth.

### Service Data: Two Patterns

- **Programming services** (`/programming`, `/programming/{slug}`): `ServiceController` — data is hard-coded in the controller as PHP arrays, never stored in the database.
- **Assignment services** (`/assignment`, `/assignment/{slug}`): `AssignmentServiceController` — reads from the `services` and `service_details` DB tables. Two slug overrides use custom views (`math-problem-solving`, `law-assignment`).

### Key Models & Relationships
```
User         → hasMany Assignments
Assignment   → belongsTo User, Service
             → hasMany AssignmentFiles (legacy), Messages
             → morphMany Files (current polymorphic system)
Service      → hasOne ServiceDetail, hasMany Assignments
File         → morphTo fileable (polymorphic — works with any model)
```

The `File` model is the preferred file attachment system. `AssignmentFile` is a legacy model kept for backward compatibility.

### Database
SQLite by default. Queue, session, and cache all use the database driver.

### Frontend
Tailwind CSS + Alpine.js + Vite. Livewire 4 is installed; `resources/views/livewire/` contains a `budget-calculator` component (Blade-only, no PHP Livewire class — rendered as a standard Blade partial in this codebase).

### Authenticated API Routes
Under `web.php` with `auth` middleware, prefixed `/api`:
- `GET /api/assignments` — list user's assignments
- `POST /api/assignments/{assignment}/upload-file` — polymorphic file upload
- `GET|POST /api/assignments/{assignment}/messages` — messaging

### Layouts & Partials
- `resources/views/layouts/app.blade.php` — authenticated layout
- `resources/views/layouts/guest.blade.php` — public layout
- `resources/views/partials/navbar.blade.php` + `footer.blade.php` — shared across public pages
