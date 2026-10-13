<?php

use App\Models\User;
use Laravel\Sanctum\Sanctum;
use Spatie\Permission\Models\Role;

beforeEach(function () {
    Role::firstOrCreate(['name' => 'admin']);
    Role::firstOrCreate(['name' => 'manager']);
    Role::firstOrCreate(['name' => 'writer']);
    Role::firstOrCreate(['name' => 'student']);
});

function createAdmin(): User
{
    $admin = User::factory()->create([
        'email' => 'admin_'.uniqid().'@example.com',
    ]);
    $admin->assignRole('admin');

    return $admin;
}

it('allows admin to create, update, toggle availability, and delete expert writers via API', function () {
    $admin = createAdmin();
    Sanctum::actingAs($admin);

    // 1. Create a writer
    $response = $this->postJson('/api/admin/writers', [
        'name' => 'Test Expert',
        'email' => 'expert_'.uniqid().'@example.com',
        'password' => 'password123',
        'title' => 'PhD in Artificial Intelligence',
        'bio' => 'Experienced researcher and tutor.',
        'expertise' => ['Machine Learning', 'Python'],
        'rating' => 4.9,
        'experience_years' => 12,
        'completed_projects' => 300,
        'is_available' => true,
    ]);

    $response->assertStatus(201);
    $writerId = $response->json('id');
    expect($writerId)->not->toBeNull();

    // 2. Update writer
    $updateResponse = $this->patchJson("/api/admin/writers/{$writerId}", [
        'title' => 'Distinguished Professor of AI',
    ]);
    $updateResponse->assertStatus(200);
    expect($updateResponse->json('title'))->toBe('Distinguished Professor of AI');

    // 3. Toggle availability
    $toggleResponse = $this->patchJson("/api/admin/writers/{$writerId}/availability");
    $toggleResponse->assertStatus(200);
    expect($toggleResponse->json('is_available'))->toBeFalse();

    // 4. Delete writer
    $deleteResponse = $this->deleteJson("/api/admin/writers/{$writerId}");
    $deleteResponse->assertStatus(200);
    $this->assertDatabaseMissing('users', ['id' => $writerId]);
});

it('allows admin to create, list, update, toggle approval, and delete reviews via API', function () {
    $admin = createAdmin();
    Sanctum::actingAs($admin);

    // 1. Create a review
    $response = $this->postJson('/api/admin/reviews', [
        'name' => 'Alice Walker',
        'course' => 'Biomedical Science, Senior',
        'rating' => 5,
        'service' => 'Lab Report Help',
        'review' => 'Incredible attention to detail on my biochemical assay methodology section!',
        'is_approved' => true,
    ]);

    $response->assertStatus(201);
    $reviewId = $response->json('id');
    expect($reviewId)->not->toBeNull();

    // 2. List reviews
    $listResponse = $this->getJson('/api/admin/reviews?search=Alice');
    $listResponse->assertStatus(200);
    $found = collect($listResponse->json('data'))->contains('id', $reviewId);
    expect($found)->toBeTrue();

    // 3. Update review
    $updateResponse = $this->patchJson("/api/admin/reviews/{$reviewId}", [
        'rating' => 4,
    ]);
    $updateResponse->assertStatus(200);
    expect($updateResponse->json('rating'))->toBe(4);

    // 4. Toggle approval
    $toggleResponse = $this->patchJson("/api/admin/reviews/{$reviewId}/toggle-approval");
    $toggleResponse->assertStatus(200);
    expect($toggleResponse->json('is_approved'))->toBeFalse();

    // 5. Delete review
    $deleteResponse = $this->deleteJson("/api/admin/reviews/{$reviewId}");
    $deleteResponse->assertStatus(200);
    $this->assertDatabaseMissing('reviews', ['id' => $reviewId]);
});

it('forbids non-admin users from managing reviews', function () {
    $student = User::factory()->create();
    $student->assignRole('student');
    Sanctum::actingAs($student);

    $response = $this->postJson('/api/admin/reviews', [
        'name' => 'Unauthorized',
        'rating' => 5,
        'review' => 'Should fail with 403 forbidden.',
    ]);

    $response->assertStatus(403);
});
