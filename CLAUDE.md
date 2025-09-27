# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

This is a Laravel 12 application for an assignment help/tutoring service. Students can submit assignment requests with details like subject, title, deadline, page count, file uploads, description, and budget. The application uses Laravel Breeze for authentication.

## Development Commands

### Environment Setup
- Copy environment file: `cp .env.example .env`
- Generate application key: `php artisan key:generate`
- Create SQLite database: `touch database/database.sqlite`
- Run migrations: `php artisan migrate`

### Development Server
- Start all services (server + queue + frontend): `composer dev`
- Individual services:
  - Laravel server: `php artisan serve`
  - Queue worker: `php artisan queue:listen --tries=1`
  - Frontend development: `npm run dev`
  - Frontend build: `npm run build`

### Testing
- Run all tests: `composer test` or `php artisan test`
- Run tests with configuration cleared: The composer test script automatically clears config before running tests
- Tests use in-memory SQLite database for isolation

### Code Quality
- Format code: `vendor/bin/pint` (Laravel Pint for PHP code formatting)
- The project uses Pest for testing framework

## Architecture Overview

### Database Structure
- **Users table**: Standard Laravel user authentication (via Laravel Breeze)
- **Assignments table**: Core entity storing assignment requests with fields:
  - subject, title, deadline, pages, file_path, description, budget
  - Uses nullable file uploads stored in `storage/app/public/assignments/`

### Application Structure
- **Models**: `Assignment` model with fillable attributes for mass assignment
- **Controllers**:
  - `AssignmentController`: Handles assignment creation and storage
  - `HomeController`: Landing page
  - Auth controllers from Laravel Breeze
- **Routes**: Simple web routes with authenticated sections for profile management
- **Views**: Blade templates with auth views, assignment forms, and dashboard

### File Storage
- Assignment files uploaded to `storage/app/public/assignments/`
- Supports PDF, DOC, DOCX, and ZIP file formats
- File storage uses Laravel's public disk configuration

### Frontend Stack
- **CSS Framework**: Tailwind CSS with forms plugin
- **JavaScript**: Alpine.js for interactivity
- **Build Tool**: Vite with Laravel plugin
- **Bundling**: Uses Vite for asset compilation and hot reload

### Authentication
- Uses Laravel Breeze for complete authentication scaffolding
- Includes registration, login, password reset, email verification
- Profile management with update/delete functionality

## Key Configuration
- **Database**: SQLite by default (see .env.example)
- **Queue**: Database driver for background jobs
- **Session**: Database storage
- **Cache**: Database storage
- **File Storage**: Local disk with public disk for uploads
- **Mail**: Log driver for development (check logs for emails)

## Development Notes
- The application uses PHP 8.2+ and Laravel 12
- PSR-4 autoloading for App\, Database\Factories\, Database\Seeders\
- Tests located in tests/ directory with Feature and Unit test suites
- Uses concurrently package to run multiple development processes simultaneously