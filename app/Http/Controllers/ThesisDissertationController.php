<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ThesisDissertationController extends Controller
{
    /**
     * Display the thesis and dissertation service page.
     */
    public function index()
    {
        $service = Service::with('details')
            ->where('slug', 'thesis-dissertation')
            ->where('is_active', true)
            ->firstOrFail();

        $details = $service->details;

        return view('thesis-dissertation.index', compact('service', 'details'));
    }

    /**
     * Display specific thesis/dissertation sub-service page.
     */
    public function show($slug)
    {
        $service = Service::with('details')
            ->where('slug', 'thesis-dissertation')
            ->where('is_active', true)
            ->firstOrFail();

        $details = $service->details;

        // Check for custom view, otherwise use generic
        $customViews = [
            // Add custom views as needed
        ];

        $view = $customViews[$slug] ?? 'thesis-dissertation.index';

        return view($view, compact('service', 'details'));
    }
}
