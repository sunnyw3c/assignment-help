<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ResearchPaperController extends Controller
{
    public function index()
    {
        $service = Service::with('details')
            ->where('slug', 'research-paper')
            ->where('is_active', true)
            ->firstOrFail();

        $details = $service->details;

        return view('research-paper.index', compact('service', 'details'));
    }
}
