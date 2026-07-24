<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Database\Seeders\AssignmentServicesSeeder;
use Tests\TestCase;

class LawAssignmentPageTest extends TestCase
{
    use RefreshDatabase;

    public function test_law_assignment_help_page_loads_successfully(): void
    {
        $this->seed(AssignmentServicesSeeder::class);

        $response = $this->get('/law-assignment-help');

        $response->assertStatus(200);
        $response->assertSee('Law Assignment Help');
        $response->assertSee('IRAC');
        $response->assertSee('Bluebook');
        $response->assertSee('Westlaw');
        $response->assertSee('law_assignment_hero_banner.png');
        $response->assertSee('schema.org/FAQPage');
        $response->assertSee('Marcus Sterling');
    }
}
