<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ReviewController extends Controller
{
    /**
     * Display a listing of verified student reviews and testimonials.
     */
    public function index(Request $request)
    {
        $reviews = $this->loadReviews();

        $totalReviews = count($reviews);
        $perPage = 9;
        $initialReviews = array_slice($reviews, 0, $perPage);

        // Calculate aggregate statistics
        $avgRating = $totalReviews > 0
            ? round(array_sum(array_column($reviews, 'rating')) / $totalReviews, 1)
            : 4.9;

        $stats = [
            'total' => $totalReviews,
            'average_rating' => $avgRating,
            'satisfaction' => '98%',
            'happy_students' => '10,000+',
            'expert_writers' => '50+',
        ];

        return view('reviews', [
            'reviews' => $reviews,
            'initialReviews' => $initialReviews,
            'totalReviews' => $totalReviews,
            'stats' => $stats,
            'perPage' => $perPage,
        ]);
    }

    /**
     * Load reviews from database, falling back to JSON repository.
     */
    protected function loadReviews(): array
    {
        try {
            $dbReviews = Review::approved()
                ->orderBy('date', 'desc')
                ->orderBy('id', 'desc')
                ->get()
                ->map(function ($rev) {
                    return [
                        'id' => $rev->id,
                        'name' => $rev->name,
                        'course' => $rev->course ?: 'Undergraduate Student',
                        'rating' => (int) $rev->rating,
                        'date' => $rev->date ? $rev->date->format('Y-m-d') : now()->toDateString(),
                        'review' => $rev->review,
                        'service' => $rev->service ?: 'Assignment Help',
                    ];
                })
                ->toArray();

            if (! empty($dbReviews)) {
                return $dbReviews;
            }
        } catch (\Throwable $e) {
            // Fall back to JSON file below
        }

        // Fallback to reviews.json
        $jsonPath = public_path('data/reviews.json');
        if (File::exists($jsonPath)) {
            $data = json_decode(File::get($jsonPath), true);
            if (! empty($data['reviews']) && is_array($data['reviews'])) {
                return $data['reviews'];
            }
        }

        return [];
    }
}
