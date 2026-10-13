<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jsonPath = public_path('data/reviews.json');
        if (! File::exists($jsonPath)) {
            return;
        }

        $data = json_decode(File::get($jsonPath), true);
        if (empty($data['reviews'])) {
            return;
        }

        foreach ($data['reviews'] as $item) {
            Review::firstOrCreate(
                [
                    'name' => $item['name'],
                    'service' => $item['service'] ?? 'Assignment Help',
                ],
                [
                    'course' => $item['course'] ?? null,
                    'rating' => (int) ($item['rating'] ?? 5),
                    'date' => $item['date'] ?? now()->toDateString(),
                    'review' => $item['review'] ?? '',
                    'is_approved' => true,
                    'is_featured' => ((int) ($item['rating'] ?? 5)) >= 5,
                ]
            );
        }
    }
}
