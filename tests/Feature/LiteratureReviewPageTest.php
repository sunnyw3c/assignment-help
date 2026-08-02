<?php

namespace Tests\Feature;

use Database\Seeders\AssignmentServicesSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LiteratureReviewPageTest extends TestCase
{
    use RefreshDatabase;

    public function test_literature_review_help_page_loads_with_valid_seo_markup(): void
    {
        $this->seed(AssignmentServicesSeeder::class);

        $response = $this->withoutVite()->get('/literature-review-help');

        $response->assertOk();
        $response->assertSee('Literature review help that maps');
        $response->assertSee('Common literature review types are not interchangeable');
        $response->assertSee('PRISMA improves reporting');
        $response->assertSee('Literature review help FAQs');
        $response->assertSee('literature-review-synthesis-board-768.jpg', false);
        $response->assertSee('George Mason University Writing Center');
        $response->assertDontSee('0% AI');
        $response->assertDontSee('Dr. Eleanor Vance');

        $html = $response->getContent();

        expect(substr_count($html, 'rel="canonical"'))->toBe(1)
            ->and(substr_count($html, '<h1'))->toBe(1)
            ->and($html)->toContain('literature-review-help-og.jpg')
            ->and($html)->not->toContain('FAQPage')
            ->and($html)->not->toContain('+1-800-555-0199');

        $document = new \DOMDocument;
        @$document->loadHTML($html);
        $xpath = new \DOMXPath($document);

        expect($document->getElementsByTagName('title')->length)->toBe(1)
            ->and($xpath->query('//meta[@name="description"]')->length)->toBe(1)
            ->and($xpath->query('//meta[@property="og:image"]')->length)->toBe(1);

        foreach ($document->getElementsByTagName('img') as $image) {
            expect($image->hasAttribute('width'))->toBeTrue()
                ->and($image->hasAttribute('height'))->toBeTrue();
        }

        foreach ($xpath->query('//script[@type="application/ld+json"]') as $script) {
            expect(json_decode($script->textContent, true, 512, JSON_THROW_ON_ERROR))->toBeArray();
        }
    }
}
