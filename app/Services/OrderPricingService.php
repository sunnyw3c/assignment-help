<?php

namespace App\Services;

use App\Models\Assignment;
use Carbon\CarbonInterface;
use Illuminate\Support\Carbon;

/**
 * Single source of truth for order pricing.
 *
 * The order form (resources/views/livewire/order/order-form-component.blade.php)
 * and the student "edit my brief" endpoint both price through this class so a
 * quote cannot drift between placing an order and amending it.
 */
class OrderPricingService
{
    /** Base price per page, by academic level. */
    public const LEVEL_PRICES = [
        'high-school' => 15,
        'undergraduate' => 20,
        'masters' => 30,
        'phd' => 45,
    ];

    /** Deadline urgency multipliers, keyed by the order form's deadline slug. */
    public const URGENCY_MULTIPLIERS = [
        '3-hours' => 2.5,
        '6-hours' => 2.0,
        '12-hours' => 1.8,
        '24-hours' => 1.5,
        '2-days' => 1.3,
        '3-days' => 1.2,
        '5-days' => 1.1,
        '7-days' => 1.0,
        '14-days' => 0.9,
        '30-days' => 0.8,
    ];

    public const SUBJECT_MULTIPLIERS = [
        'general' => 1.0,
        'programming' => 1.3,
        'engineering' => 1.2,
        'law' => 1.2,
        'nursing' => 1.15,
        'business' => 1.1,
    ];

    /** Volume discount tiers: minimum pages => discount rate. */
    public const VOLUME_DISCOUNTS = [
        1 => 0,
        2 => 0.05,
        3 => 0.10,
        5 => 0.15,
        8 => 0.20,
        10 => 0.25,
        15 => 0.30,
        20 => 0.35,
        30 => 0.40,
        50 => 0.45,
    ];

    /** Standing welcome discount applied to every order. */
    public const BASE_DISCOUNT = 0.40;

    public const WORDS_PER_PAGE_DOUBLE = 250;
    public const WORDS_PER_PAGE_SINGLE = 500;

    /**
     * Price an order from its raw parts.
     *
     * @return array{list: float, total: float, discount_rate: float, saving: float}
     */
    public function quote(
        string $academicLevel,
        int $pages,
        string $subject,
        string $spacing = 'double',
        ?string $deadlineSlug = null,
    ): array {
        $base = self::LEVEL_PRICES[strtolower($academicLevel)] ?? 20;
        $subjectMultiplier = self::SUBJECT_MULTIPLIERS[strtolower($subject)] ?? 1.0;
        $urgencyMultiplier = self::URGENCY_MULTIPLIERS[$deadlineSlug] ?? 1.0;
        $spacingMultiplier = $spacing === 'single' ? 2.0 : 1.0;

        $list = $base * max(1, $pages) * $urgencyMultiplier * $subjectMultiplier * $spacingMultiplier;

        $discountRate = 1 - (1 - self::BASE_DISCOUNT) * (1 - $this->volumeDiscount($pages));
        $total = $list * (1 - $discountRate);

        return [
            'list' => round($list, 2),
            'total' => round($total, 2),
            'discount_rate' => round($discountRate, 4),
            'saving' => round($list - $total, 2),
        ];
    }

    /**
     * Re-price an existing assignment after the student amends it.
     *
     * Spacing is not persisted, so rather than guessing it we anchor on the
     * price the customer was actually quoted: the order's stored budget is
     * reproduced from its current attributes, and any residual factor (spacing,
     * a manual adjustment, a legacy rate) is carried forward as a multiplier.
     * An unchanged order therefore always re-prices to exactly what it cost.
     */
    public function quoteForAssignment(Assignment $assignment, array $overrides = []): array
    {
        $pages = (int) ($overrides['pages'] ?? $assignment->pages ?: 1);
        $level = (string) ($overrides['academic_level'] ?? $assignment->academic_level ?? 'undergraduate');
        $subject = (string) ($overrides['subject'] ?? $assignment->subject ?? 'general');

        $slug = $this->deadlineSlug($assignment);
        $quote = $this->quote($level, $pages, $subject, 'double', $slug);

        $factor = $this->storedPriceFactor($assignment, $slug);

        return [
            'list' => round($quote['list'] * $factor, 2),
            'total' => round($quote['total'] * $factor, 2),
            'discount_rate' => $quote['discount_rate'],
            'saving' => round($quote['saving'] * $factor, 2),
        ];
    }

    /**
     * Ratio between what the order actually cost and what the current formula
     * says its existing attributes should cost. Keeps bespoke pricing intact.
     */
    private function storedPriceFactor(Assignment $assignment, ?string $slug): float
    {
        $budget = (float) $assignment->budget;

        if ($budget <= 0) {
            return 1.0;
        }

        $baseline = $this->quote(
            (string) ($assignment->academic_level ?? 'undergraduate'),
            max(1, (int) $assignment->pages),
            (string) ($assignment->subject ?? 'general'),
            'double',
            $slug,
        )['total'];

        if ($baseline <= 0) {
            return 1.0;
        }

        return $budget / $baseline;
    }

    public function wordsPerPage(string $spacing): int
    {
        return $spacing === 'single' ? self::WORDS_PER_PAGE_SINGLE : self::WORDS_PER_PAGE_DOUBLE;
    }

    /**
     * Map a stored deadline back onto the nearest urgency tier.
     *
     * Orders persist an absolute datetime rather than the form's slug, so the
     * remaining lead time is measured from when the order was created to keep
     * the tier stable as the deadline approaches.
     */
    public function deadlineSlug(Assignment $assignment): ?string
    {
        if (! $assignment->deadline) {
            return null;
        }

        $from = $assignment->created_at ? Carbon::parse($assignment->created_at) : Carbon::now();
        $deadline = Carbon::parse($assignment->deadline);

        if ($deadline->lessThanOrEqualTo($from)) {
            return '3-hours';
        }

        $hours = $from->diffInHours($deadline, absolute: true);

        return match (true) {
            $hours <= 3 => '3-hours',
            $hours <= 6 => '6-hours',
            $hours <= 12 => '12-hours',
            $hours <= 24 => '24-hours',
            $hours <= 48 => '2-days',
            $hours <= 72 => '3-days',
            $hours <= 120 => '5-days',
            $hours <= 168 => '7-days',
            $hours <= 336 => '14-days',
            default => '30-days',
        };
    }

    public function volumeDiscount(int $pages): float
    {
        $discount = 0.0;

        foreach (self::VOLUME_DISCOUNTS as $minPages => $rate) {
            if ($pages >= $minPages) {
                $discount = $rate;
            }
        }

        return $discount;
    }
}
