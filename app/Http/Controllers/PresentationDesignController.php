<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class PresentationDesignController extends Controller
{
    public function index()
    {
        $service = Service::with('details')
            ->where('slug', 'presentation-design')
            ->where('is_active', true)
            ->firstOrFail();

        $details = $service->details;

        return view('presentation-design.index', compact('service', 'details'));
    }
}
