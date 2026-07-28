<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class AssignmentServiceController extends Controller
{
    /**
     * Legacy database-driven URLs that duplicate dedicated SEO landing pages.
     *
     * Keeping these URLs as permanent redirects consolidates indexing signals
     * instead of serving two self-canonical versions of the same service.
     */
    private const CANONICAL_ROUTES = [
        'essay-writing' => 'services.essay-writing.index',
        'research-paper' => 'services.research-paper.index',
        'homework-help' => 'services.homework-help.index',
        'thesis-dissertation' => 'services.thesis-dissertation.index',
        'lab-report' => 'services.lab-report.index',
        'case-study' => 'services.case-study.index',
        'literature-review' => 'services.literature-review.index',
        'presentation-design' => 'services.presentation-design.index',
        'proofreading-editing' => 'services.proofreading-editing.index',
        'math-problem-solving' => 'services.homework-help.math',
        'law-assignment' => 'services.law-assignment.index',
    ];

    /**
     * Display a listing of assignment help services.
     */
    public function index()
    {
        $services = Service::with('details')
            ->active()
            ->ordered()
            ->get();

        return view('assignment-services.index', compact('services'));
    }

    /**
     * Display the specified assignment service.
     */
    public function show($slug)
    {
        if (isset(self::CANONICAL_ROUTES[$slug])) {
            return redirect()->route(self::CANONICAL_ROUTES[$slug], status: 301);
        }

        $service = Service::with('details')
            ->where('slug', $slug)
            ->where('is_active', true)
            ->firstOrFail();

        $details = $service->details;

        return view('assignment-services.show', compact('service', 'details'));
    }

    /**
     * Calculate price based on pages and academic level.
     */
    public function calculatePrice(Request $request)
    {
        $request->validate([
            'service_id' => 'required|exists:services,id',
            'pages' => 'required|integer|min:1',
            'academic_level' => 'required|string',
            'urgency_hours' => 'required|integer',
        ]);

        $service = Service::findOrFail($request->service_id);

        // Base price calculation
        $basePrice = $service->base_price_per_page * $request->pages;

        // Academic level multiplier
        $levelMultipliers = [
            'high-school' => 1.0,
            'college' => 1.2,
            'university' => 1.4,
            'masters' => 1.8,
            'phd' => 2.5,
        ];

        $levelMultiplier = $levelMultipliers[$request->academic_level] ?? 1.0;

        // Urgency multiplier
        $urgencyMultiplier = 1.0;
        if ($request->urgency_hours <= 6) {
            $urgencyMultiplier = 2.0;
        } elseif ($request->urgency_hours <= 12) {
            $urgencyMultiplier = 1.7;
        } elseif ($request->urgency_hours <= 24) {
            $urgencyMultiplier = 1.4;
        } elseif ($request->urgency_hours <= 48) {
            $urgencyMultiplier = 1.2;
        }

        $finalPrice = $basePrice * $levelMultiplier * $urgencyMultiplier;

        return response()->json([
            'base_price' => number_format($basePrice, 2),
            'level_multiplier' => $levelMultiplier,
            'urgency_multiplier' => $urgencyMultiplier,
            'final_price' => number_format($finalPrice, 2),
            'price_per_page' => number_format($finalPrice / $request->pages, 2),
        ]);
    }
}
