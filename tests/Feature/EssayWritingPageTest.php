<?php

namespace Tests\Feature;

use Database\Seeders\AssignmentServicesSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class EssayWritingPageTest extends TestCase
{
    use RefreshDatabase;

    public function test_essay_writing_help_page_loads_successfully(): void
    {
        $this->seed(AssignmentServicesSeeder::class);

        $response = $this->withoutVite()->get('/essay-writing-help');

        $response->assertOk();
        $response->assertSee('Essay writing help built around');
        $response->assertSee('What our essay writing service can help with');
        $response->assertSee('Essay writing help FAQs');
    }
}
