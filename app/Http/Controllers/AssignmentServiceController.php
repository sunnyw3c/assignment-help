<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class AssignmentServiceController extends Controller
{
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
        $service = Service::with('details')
            ->where('slug', $slug)
            ->where('is_active', true)
            ->firstOrFail();

        $details = $service->details;

        // Check for custom view, otherwise use generic
        $customViews = [
            'math-problem-solving' => 'assignment-services.math-problem-solving',
        ];

        $view = $customViews[$slug] ?? 'assignment-services.show';

        return view($view, compact('service', 'details'));
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
