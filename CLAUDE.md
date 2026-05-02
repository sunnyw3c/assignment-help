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

**1. Public marketing site** — Static/near-static pages with SEO content. Each service type has its own controller that returns hard-coded data arrays (no DB reads). Routes follow the pattern `/{service-name}-help` (e.g., `/essay-writing-help`, `/homework-help`, `/programming-help`).

**2. Order flow** — `GET/POST /order` via `OrderController`. Creates an `Assignment` record with polymorphic `File` attachments. Success page at `/order/success/{assignment}` requires auth.

### Service Data: Two Patterns

- **Programming services** (`/programming-help`, `/programming-help/{slug}`): `ServiceController` — data is hard-coded in the controller as PHP arrays, never stored in DB. Three top-level language slugs (`php-programming-help`, `java-programming-help`, `python-programming-help`) also match the catch-all `/{slug}` route at the bottom of `web.php`.
- **Assignment services** (`/assignment-help`, `/assignment-help/{slug}`): `AssignmentServiceController` — reads from `services` and `service_details` DB tables. `/math-assignment-help` is a named alias that maps to this controller with `slug=math-assignment-help`.

### Key Models & Relationships
```
User         → hasMany Assignments (as student)
             → writer profile fields: photo, title, bio, expertise (JSON array),
               rating, experience_years, completed_projects, is_available
Assignment   → belongsTo User, Service
             → hasMany AssignmentFiles (legacy), Messages
             → morphMany Files (current polymorphic system)
             → fields: status, tutor_id, tutor_deadline, payment_status,
               amount_paid, amount_due, order_number
Service      → hasOne ServiceDetail, hasMany Assignments
File         → morphTo fileable (polymorphic — works with any model)
```

`File` (polymorphic) is the preferred attachment system. `AssignmentFile` is legacy, kept for backward compatibility.

### Roles & Permissions

Uses **Spatie Laravel Permission**. The `User` model has the `HasRoles` trait. Roles: `admin`, `manager`, `writer`, `support`, `executive`.

The custom `RequireRole` middleware (`role:admin,manager,...`) is used on web routes. Admin API routes use `middleware(['auth:sanctum', 'role:...'])`.

### Admin API (`routes/api.php`)

Token-based (Laravel Sanctum). All routes are under the `/admin` prefix:

- `POST /api/admin/login` — public, returns Sanctum token
- All other routes require `auth:sanctum` + a valid staff role
- `GET /api/admin/stats` — dashboard stats
- `GET|PATCH /api/admin/orders` — order management (status, writer assignment, payment)
- `GET|PATCH /api/admin/users` — user management (admin + manager only)
- `GET|POST /api/admin/writers` — writer profiles (create/update: admin + manager only)
- `GET|POST /api/admin/messages` — messaging per assignment
- `POST /api/admin/mail/send` — send a `PromotionalEmail` mailable to any address (admin + manager only)
- `GET /api/writers` — public writers list (for `/experts` page)

### Student API (under `web.php`, `auth` middleware, `/api` prefix)

- `GET /api/assignments` — list user's assignments
- `POST /api/assignments/{assignment}/upload-file` — polymorphic file upload
- `GET|POST /api/assignments/{assignment}/messages` — messaging

### Database
SQLite by default. Queue, session, and cache all use the database driver.

### Frontend
Tailwind CSS + Alpine.js + Vite. Livewire 4 is installed; `resources/views/livewire/` contains a `budget-calculator` component (Blade-only, no PHP Livewire class — rendered as a standard Blade partial).

### Layouts & Partials
- `resources/views/layouts/app.blade.php` — authenticated layout
- `resources/views/layouts/guest.blade.php` — public layout
- `resources/views/partials/navbar.blade.php` + `footer.blade.php` — shared across public pages
