<?php

namespace App\Services;

use Carbon\Carbon;

class LegacyBusinessService
{
    /**
     * Generate custom order ID in legacy format: YYMMDD + Random(4) + UserID
     */
    public function generateOrderNumber(int $userId): string
    {
        $random = str_pad(rand(0, 9999), 4, '0', STR_PAD_LEFT);
        return date('ymd') . $random . $userId;
    }

    /**
     * Calculate price based on legacy pricing matrix
     */
    public function calculatePrice(string $currency, int $pageCount, string $deadline): float
    {
        $deadlineDays = $this->parseDeadlineDays($deadline);
        
        // Cap deadline days at 10 as per legacy logic
        $cappedDays = min($deadlineDays, 10);

        $prices = [
            'USD' => [0 => 25, 1 => 22, 2 => 20, 3 => 18, 4 => 15, 5 => 15, 6 => 15, 7 => 12, 8 => 12, 9 => 12, 10 => 9],
            'AUD' => [0 => 25, 1 => 23, 2 => 21, 3 => 19, 4 => 16, 5 => 16, 6 => 16, 7 => 13, 8 => 13, 9 => 13, 10 => 10],
            'GBP' => [0 => 18, 1 => 16, 2 => 14, 3 => 13, 4 => 12, 5 => 12, 6 => 12, 7 => 10, 8 => 10, 9 => 10, 10 => 8],
            'SGD' => [0 => 25, 1 => 23, 2 => 21, 3 => 19, 4 => 16, 5 => 16, 6 => 16, 7 => 13, 8 => 13, 9 => 13, 10 => 10],
            'NZD' => [0 => 25, 1 => 23, 2 => 21, 3 => 19, 4 => 16, 5 => 16, 6 => 16, 7 => 13, 8 => 13, 9 => 13, 10 => 10],
        ];

        $currency = strtoupper($currency);
        $rate = $prices[$currency][$cappedDays] ?? ($prices['USD'][$cappedDays] ?? 15);

        return (float) $rate * $pageCount;
    }

    /**
     * Calculate tutor payout (legacy: 15% of payment or word count based)
     */
    public function calculateTutorPayout(float $price, string $currency, int $wordCount): float
    {
        // Simple 15% rule as a baseline from legacy
        // (Legacy also had complex subject-based rules, keeping it simple for now)
        $payout = $price * 0.15;
        
        // Ensure reasonable minimum or word count logic integration if needed later
        return round($payout, 2);
    }

    /**
     * Parse deadline string (e.g. '7-days', '3-hours') into days count
     */
    private function parseDeadlineDays(string $deadline): int
    {
        if (str_contains($deadline, 'hours')) {
            return 0; // Legacy treated less than a day as '0' in the array
        }
        
        if (str_contains($deadline, 'days')) {
            return (int) $deadline;
        }

        return 7; // Default
    }
}
