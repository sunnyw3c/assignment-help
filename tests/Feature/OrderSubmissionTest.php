<?php

use App\Models\Assignment;
use App\Models\User;
use App\Services\OrderSubmissionService;

function orderPayload(array $overrides = []): array
{
    return array_merge([
        'source' => 'creative_hero',
        'email' => 'student@example.com',
        'country_code' => '+1',
        'phone' => '5551234567',
        'service_type' => 'Writing',
        'subject' => 'Essay Writing',
        'title' => 'Writing Help - Essay Writing',
        'deadline' => now()->addDays(2)->format('Y-m-d H:i:s'),
        'pages' => 2,
        'word_count' => 500,
        'description' => 'Need help with an essay.',
        'difficulty' => 'Undergraduate',
    ], $overrides);
}

test('new visitor order creates user logs them in and redirects to dashboard details', function () {
    $response = $this->post(route('order.store'), orderPayload([
        'email' => 'New.Student@Example.com',
    ]));

    $user = User::where('email', 'new.student@example.com')->first();
    $assignment = Assignment::first();

    expect($user)->not->toBeNull()
        ->and($assignment)->not->toBeNull()
        ->and($assignment->user_id)->toBe($user->id)
        ->and(json_decode($assignment->specific_requirements, true)['contact_phone'])->toBe('+1 5551234567');

    $this->assertAuthenticatedAs($user);
    $response->assertRedirect(route('dashboard.details', $assignment->order_number));
});

test('creative hero form submits page count', function () {
    $this->get('/')
        ->assertOk()
        ->assertSee('name="pages"', false)
        ->assertSee('data-pages-input', false)
        ->assertSee('name="phone"', false)
        ->assertSee('name="country_code"', false);
});

test('existing logged out user order is held until login', function () {
    $user = User::factory()->create([
        'email' => 'existing@example.com',
    ]);

    $response = $this->post(route('order.store'), orderPayload([
        'email' => $user->email,
    ]));

    $response->assertRedirect(route('login'));
    $response->assertSessionHas(OrderSubmissionService::PENDING_ORDER_SESSION_KEY);
    $this->assertGuest();
    $this->assertDatabaseCount('assignments', 0);

    $loginResponse = $this->post(route('login'), [
        'email' => $user->email,
        'password' => 'password',
    ]);

    $assignment = Assignment::first();

    expect($assignment)->not->toBeNull()
        ->and($assignment->user_id)->toBe($user->id);

    $this->assertAuthenticatedAs($user);
    $loginResponse->assertRedirect(route('dashboard.details', $assignment->order_number));
});

test('logged in user order is submitted immediately', function () {
    $user = User::factory()->create();

    $response = $this->actingAs($user)->post(route('order.store'), orderPayload([
        'email' => null,
    ]));

    $assignment = Assignment::first();

    expect($assignment)->not->toBeNull()
        ->and($assignment->user_id)->toBe($user->id);

    $response->assertRedirect(route('dashboard.details', $assignment->order_number));
});
