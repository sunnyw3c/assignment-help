<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Response;

class SitemapController extends Controller
{
    public function index(): Response
    {
        $assignmentSlugs = Service::active()->ordered()->pluck('slug')->toArray();
        $xml = view('sitemap', ['urls' => $this->buildUrls($assignmentSlugs)])->render();

        return response($xml, 200)->header('Content-Type', 'application/xml');
    }

    private function buildUrls(array $assignmentSlugs): array
    {
        $today = now()->toDateString();
        $urls = [];

        // Priority 1.0 — Home
        $urls[] = ['loc' => url('/'), 'lastmod' => $today, 'changefreq' => 'daily', 'priority' => '1.0'];

        // Priority 0.9 — Top-level service pages
        foreach ([
            '/essay-writing-help',
            '/research-paper-help',
            '/homework-help',
            '/thesis-dissertation-help',
            '/programming-help',
            '/assignment-help',
            '/case-study-help',
            '/lab-report-help',
            '/literature-review-help',
            '/presentation-design-help',
            '/proofreading-editing-help',
        ] as $path) {
            $urls[] = ['loc' => url($path), 'lastmod' => $today, 'changefreq' => 'weekly', 'priority' => '0.9'];
        }

        // Priority 0.9 — programming-help sub-pages (all service types + languages, from ServiceController)
        foreach ([
            'web-development', 'mobile-app', 'algorithms', 'database',
            'machine-learning', 'debugging', 'api-development', 'devops',
            'game-development', 'cybersecurity', 'desktop-app',
            'cloud-computing', 'testing-qa', 'php-help', 'java-help', 'python-help',
        ] as $slug) {
            $urls[] = ['loc' => url("/programming-help/{$slug}"), 'lastmod' => $today, 'changefreq' => 'monthly', 'priority' => '0.9'];
        }

        // Priority 0.9 — assignment-help sub-pages (dynamic from services DB table)
        foreach ($assignmentSlugs as $slug) {
            $urls[] = ['loc' => url("/assignment-help/{$slug}"), 'lastmod' => $today, 'changefreq' => 'monthly', 'priority' => '0.9'];
        }

        // Priority 0.9 — essay-writing sub-page with custom view
        $urls[] = ['loc' => url('/essay-writing-help/argumentative'), 'lastmod' => $today, 'changefreq' => 'monthly', 'priority' => '0.9'];

        // Priority 0.8 — trust/conversion pages
        foreach ([
            '/how-it-works',
            '/pricing',
            '/faq',
            '/reviews',
            '/experts',
            '/about',
            '/services',
        ] as $path) {
            $urls[] = ['loc' => url($path), 'lastmod' => $today, 'changefreq' => 'weekly', 'priority' => '0.8'];
        }

        // Priority 0.3 — legal pages
        foreach (['/privacy-policy', '/terms-of-service'] as $path) {
            $urls[] = ['loc' => url($path), 'lastmod' => $today, 'changefreq' => 'yearly', 'priority' => '0.3'];
        }

        return $urls;
    }
}
