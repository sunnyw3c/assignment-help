<?php

namespace App\Http\Controllers;

use App\Models\Service;

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
        $customViews = [
            'argumentative' => 'essay-writing.argumentative',
        ];

        abort_unless(isset($customViews[$slug]), 404);

        $service = Service::with('details')
            ->where('slug', 'essay-writing')
            ->where('is_active', true)
            ->firstOrFail();

        $details = $service->details;

        return view($customViews[$slug], compact('service', 'details'));
    }
}
