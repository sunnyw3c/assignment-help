<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class CaseStudyController extends Controller
{
    public function index()
    {
        $service = Service::with('details')
            ->where('slug', 'case-study')
            ->where('is_active', true)
            ->firstOrFail();

        $details = $service->details;

        return view('case-study.index', compact('service', 'details'));
    }
}
