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
        $response->assertSee('Professional Essay Writing Service USA');
        $response->assertSee('Structured PEEL/TEEL Writing');
        $response->assertSee('Frequently Asked Questions');
    }
}
