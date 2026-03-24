<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;

class WriterController extends Controller
{
    public function index()
    {
        $writers = User::role('writer')
            ->where('is_available', true)
            ->select('id', 'name', 'photo', 'title', 'bio', 'expertise',
                     'rating', 'experience_years', 'completed_projects')
            ->get()
            ->map(function ($writer) {
                return [
                    'id'                 => $writer->id,
                    'name'               => $writer->name,
                    'photo'              => $writer->photo ? asset('storage/' . $writer->photo) : null,
                    'title'              => $writer->title ?? 'Expert Writer',
                    'bio'                => $writer->bio ?? '',
                    'expertise'          => $writer->expertise ?? [],
                    'specialization'     => $writer->expertise[0] ?? 'General',
                    'rating'             => $writer->rating ?? 5.0,
                    'experience_years'   => $writer->experience_years ?? 0,
                    'experience'         => ($writer->experience_years ?? 0) . '+ years',
                    'completed_projects' => $writer->completed_projects ?? 0,
                    'availability'       => 'Available Now',
                ];
            });

        return response()->json(['writers' => $writers]);
    }
}
