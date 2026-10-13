<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * List all reviews with search and filtering.
     */
    public function index(Request $request)
    {
        $query = Review::query()->latest('id');

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                    ->orWhere('course', 'like', "%{$search}%")
                    ->orWhere('service', 'like', "%{$search}%")
                    ->orWhere('review', 'like', "%{$search}%");
            });
        }

        if ($request->filled('rating')) {
            $query->where('rating', (int) $request->rating);
        }

        if ($request->has('is_approved') && $request->is_approved !== '') {
            $query->where('is_approved', filter_var($request->is_approved, FILTER_VALIDATE_BOOLEAN));
        }

        $perPage = (int) $request->get('per_page', 20);

        return response()->json($query->paginate($perPage));
    }

    /**
     * Store a newly created review.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'course' => 'nullable|string|max:255',
            'rating' => 'required|integer|min:1|max:5',
            'date' => 'nullable|date',
            'review' => 'required|string|min:5',
            'service' => 'nullable|string|max:255',
            'avatar' => 'nullable|string|max:1000',
            'is_approved' => 'nullable|boolean',
            'is_featured' => 'nullable|boolean',
        ]);

        $validated['date'] = $validated['date'] ?? now()->toDateString();
        $validated['service'] = $validated['service'] ?? 'Assignment Help';
        $validated['is_approved'] = $request->has('is_approved') ? (bool) $request->is_approved : true;
        $validated['is_featured'] = $request->has('is_featured') ? (bool) $request->is_featured : false;

        $review = Review::create($validated);

        return response()->json($review, 201);
    }

    /**
     * Display the specified review.
     */
    public function show(Review $review)
    {
        return response()->json($review);
    }

    /**
     * Update the specified review.
     */
    public function update(Request $request, Review $review)
    {
        $validated = $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'course' => 'nullable|string|max:255',
            'rating' => 'sometimes|required|integer|min:1|max:5',
            'date' => 'nullable|date',
            'review' => 'sometimes|required|string|min:5',
            'service' => 'nullable|string|max:255',
            'avatar' => 'nullable|string|max:1000',
            'is_approved' => 'nullable|boolean',
            'is_featured' => 'nullable|boolean',
        ]);

        $review->update($validated);

        return response()->json($review->fresh());
    }

    /**
     * Remove the specified review.
     */
    public function destroy(Review $review)
    {
        $review->delete();

        return response()->json([
            'message' => 'Review deleted successfully.',
        ]);
    }

    /**
     * Toggle approval status of the specified review.
     */
    public function toggleApproval(Review $review)
    {
        $review->update([
            'is_approved' => ! $review->is_approved,
        ]);

        return response()->json([
            'message' => 'Review approval status updated.',
            'is_approved' => (bool) $review->is_approved,
            'review' => $review->fresh(),
        ]);
    }
}
