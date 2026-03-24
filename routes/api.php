<?php

use App\Http\Controllers\Api\Admin\AuthController;
use App\Http\Controllers\Api\Admin\MessageController;
use App\Http\Controllers\Api\Admin\OrderController;
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
        });

        // Messages
        Route::get('/messages', [MessageController::class, 'index']);
        Route::get('/messages/unread-count', [MessageController::class, 'unreadCount']);
        Route::get('/messages/{assignment}', [MessageController::class, 'show']);
        Route::post('/messages/{assignment}', [MessageController::class, 'reply']);

    });
});
