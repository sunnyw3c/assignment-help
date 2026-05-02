# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

Laravel 12 assignment help / tutoring service. Students submit assignment orders; the public side is a marketing site with SEO landing pages for specific service types.

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
Tests use **Pest** (not PHPUnit directly).
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

### Three Distinct Sides

**1. Public marketing site** — Static/near-static pages with SEO content. Each service type has a dedicated controller that returns hard-coded data arrays (no DB reads). Routes are at `/essay-writing-help`, `/research-paper-help`, `/homework-help`, etc.

**2. Order flow** — `GET/POST /order` via `OrderController`. Creates an `Assignment` record; optional file stored via polymorphic `File` model. Success page at `/order/success/{assignment}` requires auth.

**3. Admin REST API** — `routes/api.php` under the `/api/admin` prefix. Consumed by a **separate admin app** at `d:\LOCALHOST\assignment-help-online-admin` (not in this repo). The admin app has no DB connection — it authenticates via `POST /api/admin/login`, receives a Sanctum token, and calls all other endpoints with that token.

### Service Data: Two Patterns

- **Programming services** (`/programming-help`, `/programming-help/{slug}`): `ServiceController` — data hard-coded in the controller as PHP arrays, never in the database.
- **Assignment services** (`/assignment-help`, `/assignment-help/{slug}`): `AssignmentServiceController` — reads from the `services` and `service_details` DB tables. Two slugs use custom views: `math-assignment-help` → `assignment-services.math-problem-solving`, `law-assignment` → `assignment-services.law-assignment`.

### Role-Based Access (Spatie Permission)

Five staff roles: `admin`, `manager`, `writer`, `support`, `executive`. Roles are enforced on admin API routes via the `role:` middleware. The `AdminDashboardController` (`app/Http/Controllers/Admin/`) returns role-specific stats and renders `resources/views/admin/dashboard/{role}.blade.php`. Only `admin` and `manager` can manage users/writers.

### Business Logic

`App\Services\LegacyBusinessService` — price calculation using a currency × deadline-days matrix (USD/AUD/GBP/SGD/NZD), tutor payout (15% of price), and order number generation (`YYMMDD + rand(4) + userID`). Used by `AssignmentServiceController::calculatePrice()`.

### Key Models & Relationships
```
User         → hasMany Assignments; writer-profile fields: photo, bio, expertise (JSON array),
               rating, experience_years, completed_projects, is_available
Assignment   → belongsTo User, Service
             → hasMany AssignmentFiles (legacy), Messages
             → morphMany Files (current polymorphic system)
Service      → hasOne ServiceDetail, hasMany Assignments
File         → morphTo fileable (polymorphic — works with any model)
```

`AssignmentFile` is a legacy model kept for backward compatibility. Use `File` (morphMany) for all new file uploads.

### Database
SQLite by default. Queue, session, and cache all use the database driver.

### Frontend
Tailwind CSS + Alpine.js + Vite. Livewire 4 is installed; `resources/views/livewire/` contains a `budget-calculator` component (Blade-only, no PHP Livewire class — rendered as a standard Blade partial). Components prefixed with `⚡` in `resources/views/components/` are Alpine.js interactive components.

### API Routes

**`routes/web.php`** — auth-guarded student API under `/api` prefix:
- `GET /api/assignments` — list user's assignments
- `POST /api/assignments/{assignment}/upload-file` — polymorphic file upload
- `GET|POST /api/assignments/{assignment}/messages` — messaging

**`routes/api.php`** — admin REST API under `/api/admin` prefix, Sanctum token auth:
- Public: `GET /api/writers`, `POST /api/admin/login`
- Protected (all staff roles): `/me`, `/stats`, `/orders`, `/messages`
- Restricted to admin/manager: `/users`, `/writers` (write operations)

### Route Ordering

The catch-all `Route::get('/{slug}', ...)` for language-specific pages (`php-programming-help`, etc.) **must stay last** in `web.php` to avoid matching other routes.

### Layouts & Partials
- `resources/views/layouts/app.blade.php` — authenticated layout
- `resources/views/layouts/guest.blade.php` — public layout
- `resources/views/partials/navbar.blade.php` + `footer.blade.php` — shared across public pages
