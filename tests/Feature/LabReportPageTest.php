<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Database\Seeders\AssignmentServicesSeeder;
use Tests\TestCase;

class LabReportPageTest extends TestCase
{
    use RefreshDatabase;

    public function test_lab_report_help_page_loads_successfully()
    {
        $this->seed(AssignmentServicesSeeder::class);

        $response = $this->get('/lab-report-help');

        $response->assertStatus(200);
        $response->assertSee('Lab Report Help');
        $response->assertSee('images/lab_report_hero_banner.png');
        $response->assertSee('images/lab_data_analysis_preview.png');
        $response->assertSee('images/science_tutors_lab.png');
        $response->assertSee('schema.org/FAQPage');
        $response->assertSee('Dr. Robert Vance');
    }
}
