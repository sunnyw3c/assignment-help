<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class EssayWritingController extends Controller
{
    /**
     * Display the essay writing service page.
     */
    public function index()
    {
        $service = Service::with('details')
            ->where('slug', 'essay-writing')
            ->where('is_active', true)
            ->firstOrFail();

        $details = $service->details;

        return view('essay-writing.index', compact('service', 'details'));
    }

    /**
     * Display specific essay type sub-service page.
     */
    public function show($slug)
    {
        $service = Service::with('details')
            ->where('slug', 'essay-writing')
            ->where('is_active', true)
            ->firstOrFail();

        $details = $service->details;

        // Check for custom view, otherwise use generic
        $customViews = [
            'argumentative' => 'essay-writing.argumentative',
        ];

        $view = $customViews[$slug] ?? 'essay-writing.index';

        return view($view, compact('service', 'details'));
    }
}
