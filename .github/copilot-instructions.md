# Copilot Instructions for Assignment Help Online

This document provides essential context for AI agents working with this codebase.

## Project Architecture

- **Stack**: Laravel 12 (PHP 8.2+) application with Laravel Breeze authentication
- **Database**: SQLite by default, with migrations in `database/migrations/`
- **Frontend**: Tailwind CSS + Alpine.js, built with Vite
- **Key Models**:
  - `User` (Laravel default with Breeze extensions)
  - `Assignment` (Core business model for assignment requests)

## Development Workflow

### Setup Commands
```bash
composer install
cp .env.example .env
php artisan key:generate
touch database/database.sqlite
php artisan migrate
npm install
```

### Development Server
Use `composer dev` to start all services concurrently:
- Laravel server
- Queue worker (for background jobs)
- Vite dev server (for frontend assets)

### Testing
- Run tests with `composer test` (uses in-memory SQLite)
- Tests are written using Pest framework in `tests/` directory

## Key Integration Points

### File Storage
- Assignment uploads go to `storage/app/public/assignments/`
- Configured via `config/filesystems.php` using public disk
- Supported formats: PDF, DOC, DOCX, ZIP

### Queue System
- Uses database queue driver for background jobs
- Queue worker must be running: `php artisan queue:listen --tries=1`

## Common Patterns

### Form Handling
- Assignment creation flow in `AssignmentController`
- File validation and storage in `app/Http/Requests/StoreAssignmentRequest.php`
- Flash messages used for user feedback

### View Structure
- Layouts in `resources/views/layouts/`
- Components in `resources/views/components/`
- Page templates in `resources/views/`

### Authentication
- Uses Laravel Breeze scaffolding
- Profile management in `resources/views/profile/`
- Auth routes in `routes/auth.php`

## Development Standards
- PHP formatting via Laravel Pint
- PSR-4 autoloading for `App\`, `Database\`, and `Tests\` namespaces
- Tailwind classes for styling (no custom CSS)
