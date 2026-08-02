<?php

namespace Tests\Feature;

use Database\Seeders\AssignmentServicesSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProofreadingEditingPageTest extends TestCase
{
    use RefreshDatabase;

    public function test_proofreading_and_editing_help_page_loads_successfully(): void
    {
        $this->seed(AssignmentServicesSeeder::class);

        $response = $this->withoutVite()->get('/proofreading-editing-help');

        $response->assertOk();
        $response->assertSee('Academic editing that starts at');
        $response->assertSee('Four levels of academic editing');
        $response->assertSee('Proofreading and editing help FAQs');
        $response->assertSee('proofreading-editing-help-manuscript.jpg', false);
        $response->assertSee('proofreading-editing-help-manuscript-768.jpg', false);
        $response->assertSee('Purdue Online Writing Lab');
        $response->assertDontSee('0% AI');
        $response->assertDontSee('Dr. Claire Montgomery');
        $response->assertDontSee('+1-800-555-0199');

        $html = $response->getContent();

        expect(substr_count($html, 'rel="canonical"'))->toBe(1)
            ->and(substr_count($html, '<h1'))->toBe(1)
            ->and($html)->toContain('proofreading-editing-help-og.jpg')
            ->and($html)->not->toContain('FAQPage');

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
