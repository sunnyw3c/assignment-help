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

it('does not expose the obsolete combined thesis dissertation assignment URL', function () {
    $this->seed(AssignmentServicesSeeder::class);

    $this->assertDatabaseMissing('services', ['slug' => 'thesis-dissertation']);
    $this->get('/assignment-help/thesis-dissertation')->assertNotFound();

    $servicesPage = $this->withoutVite()->get('/services');

    $servicesPage
        ->assertOk()
        ->assertDontSee('/assignment-help/thesis-dissertation', false)
        ->assertDontSee('Thesis & Dissertation Help');

    view()->flushState();
    app('livewire')->flushState();
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

it('publishes explicit dimensions for every image on the PHP service page', function () {
    $response = $this->withoutVite()->get('/programming-help/php');

    $response->assertOk();

    $document = new DOMDocument;
    @$document->loadHTML($response->getContent());

    $imagesWithoutDimensions = [];

    foreach ($document->getElementsByTagName('img') as $image) {
        if (! $image->hasAttribute('width') || ! $image->hasAttribute('height')) {
            $imagesWithoutDimensions[] = $image->getAttribute('src');
        }
    }

    expect($imagesWithoutDimensions)->toBe([]);
});

it('associates every PHP service form select with a label', function () {
    $response = $this->withoutVite()->get('/programming-help/php');

    $response->assertOk();

    $document = new DOMDocument;
    @$document->loadHTML($response->getContent());
    $xpath = new DOMXPath($document);
    $unlabelledSelects = [];

    foreach ($document->getElementsByTagName('select') as $select) {
        $id = $select->getAttribute('id');
        $labels = $id === '' ? null : $xpath->query(sprintf('//label[@for="%s"]', $id));

        if ($id === '' || $labels === false || $labels->length === 0) {
            $unlabelledSelects[] = $id ?: $select->getAttribute('name');
        }
    }

    expect($unlabelledSelects)->toBe([]);
});

it('keeps the PHP service critical rendering path lean', function () {
    $response = $this->withoutVite()->get('/programming-help/php');

    $response->assertOk();

    $html = $response->getContent();
    $document = new DOMDocument;
    @$document->loadHTML($html);

    expect($document->getElementsByTagName('option')->length)->toBeLessThan(100)
        ->and($html)->toContain('data-critical-css')
        ->and($html)->toContain('subjects-v1.json')
        ->and($html)->not->toContain('/vendor/livewire/livewire');
});

it('uses distinct responsive images for PHP page illustrations', function () {
    $response = $this->withoutVite()->get('/programming-help/php');

    $response->assertOk()
        ->assertSee('images/php_hero_banner.webp', false)
        ->assertSee('images/php_code_execution.webp', false)
        ->assertSee('images/php_ecosystem_map.webp', false)
        ->assertSee('images/php_expert_tutor.webp', false);
});
