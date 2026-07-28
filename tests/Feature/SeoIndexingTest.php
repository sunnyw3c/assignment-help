<?php

use Database\Seeders\AssignmentServicesSeeder;

it('permanently redirects duplicate assignment service URLs to canonical landing pages', function (
    string $legacyPath,
    string $canonicalRoute,
) {
    $response = $this->get($legacyPath);

    $response
        ->assertStatus(301)
        ->assertRedirect(route($canonicalRoute));
})->with([
    ['/assignment-help/essay-writing', 'services.essay-writing.index'],
    ['/assignment-help/research-paper', 'services.research-paper.index'],
    ['/assignment-help/homework-help', 'services.homework-help.index'],
    ['/assignment-help/thesis-dissertation', 'services.thesis-dissertation.index'],
    ['/assignment-help/lab-report', 'services.lab-report.index'],
    ['/assignment-help/case-study', 'services.case-study.index'],
    ['/assignment-help/literature-review', 'services.literature-review.index'],
    ['/assignment-help/presentation-design', 'services.presentation-design.index'],
    ['/assignment-help/proofreading-editing', 'services.proofreading-editing.index'],
    ['/assignment-help/math-problem-solving', 'services.homework-help.math'],
    ['/assignment-help/law-assignment', 'services.law-assignment.index'],
]);

it('returns a real 404 for unsupported essay subpages', function () {
    $this->get('/essay-writing-help/not-a-real-service')->assertNotFound();
});

it('publishes a single self-referencing canonical on the reviews page', function () {
    $response = $this->withoutVite()->get('/reviews');

    $response->assertOk();

    $html = $response->getContent();

    expect(substr_count($html, 'rel="canonical"'))->toBe(1)
        ->and($html)->toContain('href="'.route('reviews').'"');
});

it('publishes one canonical on the supported essay subpage', function () {
    $this->seed(AssignmentServicesSeeder::class);

    $response = $this->withoutVite()->get('/essay-writing-help/argumentative');

    $response->assertOk();

    expect(substr_count($response->getContent(), 'rel="canonical"'))->toBe(1);
});
