<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ThesisDissertationPageTest extends TestCase
{
    use RefreshDatabase;

    public function test_thesis_page_has_unique_masters_focused_content(): void
    {
        $response = $this->withoutVite()->get('/thesis-help');

        $response->assertOk();
        $response->assertSee('A strong thesis follows one');
        $response->assertSee('Master’s thesis proposal');
        $response->assertSee('Thesis help FAQs');
        $response->assertSee(route('services.dissertation.index'), false);
        $response->assertSee(route('order', ['service_type' => 'thesis']), false);
        $response->assertSee('name="service_type" value="thesis"', false);
        $response->assertDontSee('assignment_service=', false);
        $response->assertDontSee('FAQPage');

        $this->assertValidSeoDocument($response->getContent(), route('services.thesis.index'));
    }

    public function test_dissertation_page_has_unique_doctoral_focused_content(): void
    {
        $response = $this->withoutVite()->get('/dissertation-help');

        $response->assertOk();
        $response->assertSee('A dissertation is a contribution');
        $response->assertSee('Committee milestone map');
        $response->assertSee('Dissertation help FAQs');
        $response->assertSee(route('services.thesis.index'), false);
        $response->assertSee(route('order', ['service_type' => 'dissertation']), false);
        $response->assertSee('name="service_type" value="dissertation"', false);
        $response->assertDontSee('assignment_service=', false);
        $response->assertDontSee('FAQPage');

        $this->assertValidSeoDocument($response->getContent(), route('services.dissertation.index'));
    }

    public function test_xml_sitemap_contains_the_specialist_pages(): void
    {
        $response = $this->get('/sitemap.xml');

        $response->assertOk();
        $response->assertSee(url('/thesis-help'), false);
        $response->assertSee(url('/dissertation-help'), false);
    }

    public function test_obsolete_combined_service_is_not_created_by_the_seeder(): void
    {
        $this->seed(\Database\Seeders\AssignmentServicesSeeder::class);

        $this->assertDatabaseMissing('services', ['slug' => 'thesis-dissertation']);
    }

    private function assertValidSeoDocument(string $html, string $canonical): void
    {
        expect(substr_count($html, 'rel="canonical"'))->toBe(1)
            ->and(substr_count($html, '<h1'))->toBe(1)
            ->and($html)->toContain('href="'.$canonical.'"')
            ->and($html)->not->toContain('+1-800-555-0199');

        $document = new \DOMDocument;
        @$document->loadHTML($html);
        $xpath = new \DOMXPath($document);

        expect($document->getElementsByTagName('title')->length)->toBe(1)
            ->and($xpath->query('//meta[@name="description"]')->length)->toBe(1)
            ->and($xpath->query('//script[@type="application/ld+json"]')->length)->toBeGreaterThanOrEqual(2);

        foreach ($xpath->query('//script[@type="application/ld+json"]') as $script) {
            expect(json_decode($script->textContent, true, 512, JSON_THROW_ON_ERROR))->toBeArray();
        }
    }
}
