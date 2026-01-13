<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class LiteratureReviewController extends Controller
{
    public function index()
    {
        $service = Service::with('details')
            ->where('slug', 'literature-review')
            ->where('is_active', true)
            ->firstOrFail();

        $details = $service->details;

        return view('literature-review.index', compact('service', 'details'));
    }
}
