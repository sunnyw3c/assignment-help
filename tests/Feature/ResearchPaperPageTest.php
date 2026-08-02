<?php

namespace Tests\Feature;

use Database\Seeders\AssignmentServicesSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ResearchPaperPageTest extends TestCase
{
    use RefreshDatabase;

    public function test_research_paper_help_page_loads_successfully(): void
    {
        $this->seed(AssignmentServicesSeeder::class);

        $response = $this->withoutVite()->get('/research-paper-help');

        $response->assertOk();
        $response->assertSee('Research paper help built around');
        $response->assertSee('What our research paper service can help with');
        $response->assertSee('Research paper help FAQs');
        $response->assertSee('research-paper-help-student.jpg', false);
        $response->assertDontSee('0% AI');
        $response->assertDontSee('Dr. Robert Chen');

        $html = $response->getContent();

        expect(substr_count($html, 'rel="canonical"'))->toBe(1)
            ->and(substr_count($html, '<h1'))->toBe(1)
            ->and($html)->toContain('research-paper-help-og.jpg')
            ->and($html)->not->toContain('FAQPage');

        $document = new \DOMDocument;
        @$document->loadHTML($html);

        foreach ($document->getElementsByTagName('img') as $image) {
            expect($image->hasAttribute('width'))->toBeTrue()
                ->and($image->hasAttribute('height'))->toBeTrue();
        }
    }
}
