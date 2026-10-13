<?php

use Illuminate\Support\Facades\Route;

// Self-serve registration is currently disabled — the first order creates the
// account instead (see OrderController::store). The routes in routes/auth.php
// are commented out; re-enable these tests alongside them.

test('registration screen is not reachable', function () {
    $this->get('/register')->assertNotFound();
});

test('registration cannot be posted', function () {
    $this->post('/register', [
        'name' => 'Test User',
        'email' => 'test@example.com',
        'password' => 'password',
        'password_confirmation' => 'password',
    ])->assertNotFound();

    $this->assertGuest();
});

test('the register route is not defined', function () {
    expect(Route::has('register'))->toBeFalse();
});
