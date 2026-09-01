<?php

use App\Http\Controllers\Api\Admin\AuthController;
use App\Http\Controllers\Api\Admin\CmsController;
use App\Http\Controllers\Api\Admin\MailController;
use App\Http\Controllers\Api\Admin\MessageController;
use App\Http\Controllers\Api\Admin\OrderController;
use App\Http\Controllers\Api\Admin\ServiceAdminController;
use App\Http\Controllers\Api\Admin\StatsController;
use App\Http\Controllers\Api\Admin\UserController;
use Illuminate\Support\Facades\Route;

// Public: writers list for /experts page
Route::get('/writers', [\App\Http\Controllers\Api\WriterController::class, 'index']);

// Admin API routes
Route::prefix('admin')->group(function () {

    // Public: login
    Route::post('/login', [AuthController::class, 'login']);

    // Protected: require valid Sanctum token + staff role
    Route::middleware(['auth:sanctum', 'role:admin,manager,writer,support,executive'])->group(function () {

        Route::post('/logout', [AuthController::class, 'logout']);
        Route::get('/me', [AuthController::class, 'me']);

        // Dashboard stats
        Route::get('/stats', [StatsController::class, 'index']);

        // Orders
        Route::get('/orders', [OrderController::class, 'index']);
        Route::get('/orders/{assignment}', [OrderController::class, 'show']);
        Route::patch('/orders/{assignment}/status', [OrderController::class, 'updateStatus']);
        Route::patch('/orders/{assignment}/assign', [OrderController::class, 'assignWriter']);
        Route::patch('/orders/{assignment}/payment', [OrderController::class, 'updatePayment']);

        // Users — admin + manager only
        Route::middleware('role:admin,manager')->group(function () {
            Route::get('/users', [UserController::class, 'index']);
            Route::get('/users/{user}', [UserController::class, 'show']);
            Route::patch('/users/{user}', [UserController::class, 'update']);
            Route::patch('/users/{user}/role', [UserController::class, 'updateRole']);
        });

        // Writers
        Route::get('/writers', [UserController::class, 'writers']);
        Route::get('/writers/{user}', [UserController::class, 'showWriter']);

        // Writer create/update — admin + manager only
        Route::middleware('role:admin,manager')->group(function () {
            Route::post('/writers', [UserController::class, 'storeWriter']);
            Route::post('/writers/{user}', [UserController::class, 'updateWriter']);

            // Mail
            Route::post('/mail/send', [MailController::class, 'send']);
        });

        // Messages
        Route::get('/messages', [MessageController::class, 'index']);
        Route::get('/messages/unread-count', [MessageController::class, 'unreadCount']);
        Route::get('/messages/{assignment}', [MessageController::class, 'show']);
        Route::post('/messages/{assignment}', [MessageController::class, 'reply']);

        // CMS — admin + manager may edit content; the panel only shows the
        // Pages section to admins, but the API is the real gate.
        Route::middleware('role:admin,manager')->group(function () {
            Route::get('/cms/section-types', [CmsController::class, 'sectionTypes']);

            Route::get('/cms/pages', [CmsController::class, 'pages']);
            Route::post('/cms/pages', [CmsController::class, 'createPage']);
            Route::put('/cms/pages/{slug}', [CmsController::class, 'updatePage']);
            Route::delete('/cms/pages/{slug}', [CmsController::class, 'deletePage']);

            // Fixed segments are declared before the {page} wildcard, or
            // "sections" and "pages" would be swallowed as page slugs.
            Route::put('/cms/sections/{id}', [CmsController::class, 'updateSection']);
            Route::patch('/cms/sections/{id}/toggle', [CmsController::class, 'toggleSection']);
            Route::delete('/cms/sections/{id}', [CmsController::class, 'deleteSection']);
            Route::post('/cms/sections/reorder/{page}', [CmsController::class, 'reorderSections']);

            Route::get('/cms/{page}/sections', [CmsController::class, 'sections']);
            Route::post('/cms/{page}/sections', [CmsController::class, 'addSection']);
            Route::get('/cms/{page}/meta', [CmsController::class, 'meta']);
            Route::put('/cms/{page}/meta', [CmsController::class, 'updateMeta']);
            Route::get('/cms/{page}/revisions', [CmsController::class, 'revisions']);

            // Assignment services
            Route::get('/services-admin', [ServiceAdminController::class, 'index']);
            Route::post('/services-admin', [ServiceAdminController::class, 'store']);
            Route::get('/services-admin/{id}', [ServiceAdminController::class, 'show']);
            Route::put('/services-admin/{id}', [ServiceAdminController::class, 'update']);
            Route::put('/services-admin/{id}/details', [ServiceAdminController::class, 'updateDetails']);
        });

    });
});
