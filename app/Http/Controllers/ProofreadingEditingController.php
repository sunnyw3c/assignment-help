<?php

namespace App\Http\Controllers;

use App\Models\Service;

class ProofreadingEditingController extends Controller
{
    public function index()
    {
        $service = Service::with('details')
            ->where('slug', 'proofreading-editing')
            ->where('is_active', true)
            ->firstOrFail();

        $details = $service->details;

        return view('proofreading-editing.index', compact('service', 'details'));
    }
}
