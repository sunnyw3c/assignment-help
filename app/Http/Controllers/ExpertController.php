<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ExpertController extends Controller
{
    /**
     * Display a listing of verified academic tutors/experts.
     */
    public function index(Request $request)
    {
        $experts = $this->loadExperts();

        $totalExperts = count($experts);
        $specializations = array_values(array_unique(array_filter(array_column($experts, 'specialization'))));
        sort($specializations);

        // Pre-slice first batch (9) for instant Server-Side Rendering (0ms FOEC)
        $perPage = 9;
        $initialExperts = array_slice($experts, 0, $perPage);

        return view('experts', [
            'experts' => $experts,
            'initialExperts' => $initialExperts,
            'totalExperts' => $totalExperts,
            'specializations' => $specializations,
            'perPage' => $perPage,
        ]);
    }

    /**
     * Load expert profiles combining database writers and verified profile repository.
     */
    protected function loadExperts(): array
    {
        $allExperts = [];
        $existingEmails = [];

        // 1. Fetch active approved writers from the database
        try {
            $dbWriters = User::role('writer')
                ->where('is_available', true)
                ->get()
                ->map(function ($writer) {
                    $subjects = is_array($writer->expertise) ? $writer->expertise : [];
                    $specialization = ! empty($subjects) ? $subjects[0] : 'Academic Research';

                    return [
                        'id' => $writer->id,
                        'name' => $writer->name,
                        'email' => $writer->email,
                        'title' => $writer->title ?: 'Verified Academic Specialist',
                        'specialization' => $specialization,
                        'subjects' => ! empty($subjects) ? $subjects : ['Academic Writing', 'Research', 'Editing'],
                        'experience' => ($writer->experience_years ?: 10).'+ years',
                        'completedProjects' => $writer->completed_projects ?: 350,
                        'rating' => (float) ($writer->rating ?: 4.9),
                        'bio' => $writer->bio ?: 'Experienced academic writer and subject matter specialist dedicated to student success and quality research.',
                        'education' => 'Master\'s / PhD Accredited',
                        'availability' => 'Available',
                        'photo' => $this->formatPhotoUrl($writer->photo, $writer->name),
                    ];
                })
                ->toArray();

            foreach ($dbWriters as $writer) {
                $allExperts[] = $writer;
                if (! empty($writer['email'])) {
                    $existingEmails[strtolower($writer['email'])] = true;
                }
            }
        } catch (\Throwable $e) {
            // Log or continue to fallback repository
        }

        // 2. Load verified profile dataset from experts.json
        $jsonPath = public_path('data/experts.json');
        if (File::exists($jsonPath)) {
            $jsonContent = File::get($jsonPath);
            $decoded = json_decode($jsonContent, true);
            if (! empty($decoded['experts']) && is_array($decoded['experts'])) {
                foreach ($decoded['experts'] as $item) {
                    $allExperts[] = [
                        'id' => $item['id'] ?? count($allExperts) + 1,
                        'name' => $item['name'] ?? 'Academic Expert',
                        'title' => $item['title'] ?? 'PhD Academic Specialist',
                        'specialization' => $item['specialization'] ?? 'General Academic',
                        'subjects' => $item['subjects'] ?? ['Academic Writing', 'Research'],
                        'experience' => $item['experience'] ?? '10+ years',
                        'completedProjects' => $item['completedProjects'] ?? 400,
                        'rating' => (float) ($item['rating'] ?? 4.9),
                        'bio' => $item['bio'] ?? '',
                        'education' => $item['education'] ?? 'Advanced Degree',
                        'availability' => $item['availability'] ?? 'Available',
                        'photo' => $this->formatPhotoUrl($item['photo'] ?? null, $item['name'] ?? 'Expert'),
                    ];
                }
            }
        }

        return $allExperts;
    }

    /**
     * Resolve a photo URL or generate a distinct deterministic avatar placeholder.
     */
    protected function formatPhotoUrl(?string $photo, string $name): string
    {
        if (! empty($photo)) {
            if (str_starts_with($photo, 'http://') || str_starts_with($photo, 'https://') || str_starts_with($photo, '//')) {
                return $photo;
            }

            return asset('storage/'.ltrim($photo, '/'));
        }

        // Distinct colors for each individual placeholder
        $palette = ['6366f1', '8b5cf6', 'ec4899', '06b6d4', '10b981', 'f59e0b', '3b82f6', '14b8a6', 'f43f5e', '84cc16'];
        $color = $palette[abs(crc32($name)) % count($palette)];

        return 'https://ui-avatars.com/api/?name='.urlencode($name).'&background='.$color.'&color=ffffff&size=128&bold=true';
    }
}
