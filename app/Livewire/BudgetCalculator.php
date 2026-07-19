<?php

namespace App\Livewire;

use Livewire\Attributes\Computed;
use Livewire\Component;

class BudgetCalculator extends Component
{
    public int $pages = 1;

    public string $academicLevel = 'high-school';

    public string $deadline = '7-days';

    public float $discount = 0.40;

    private const LEVEL_PRICES = [
        'high-school' => 15,
        'undergraduate' => 20,
        'masters' => 30,
        'phd' => 45,
    ];

    private const URGENCY_MULTIPLIERS = [
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

    private const VOLUME_DISCOUNTS = [
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

    public function updatedPages(mixed $value): void
    {
        $this->pages = max(1, min(100, (int) $value));
    }

    public function incrementPages(): void
    {
        $this->pages = min(100, $this->pages + 1);
    }

    public function decrementPages(): void
    {
        $this->pages = max(1, $this->pages - 1);
    }

    #[Computed]
    public function basePrice(): float
    {
        return (float) (self::LEVEL_PRICES[$this->academicLevel] ?? self::LEVEL_PRICES['undergraduate']);
    }

    #[Computed]
    public function urgencyMultiplier(): float
    {
        return (float) (self::URGENCY_MULTIPLIERS[$this->deadline] ?? 1);
    }

    #[Computed]
    public function volumeDiscount(): float
    {
        $discount = 0;

        foreach (self::VOLUME_DISCOUNTS as $minimumPages => $rate) {
            if ($this->pages >= $minimumPages) {
                $discount = $rate;
            }
        }

        return $discount;
    }

    #[Computed]
    public function totalDiscount(): float
    {
        return 1 - (1 - $this->discount) * (1 - $this->volumeDiscount);
    }

    #[Computed]
    public function totalPrice(): float
    {
        return round($this->basePrice * $this->pages * $this->urgencyMultiplier, 2);
    }

    #[Computed]
    public function discountedPrice(): float
    {
        return round($this->totalPrice * (1 - $this->totalDiscount), 2);
    }

    #[Computed]
    public function pricePerPage(): float
    {
        return round($this->discountedPrice / max(1, $this->pages), 2);
    }

    #[Computed]
    public function discountAmount(): float
    {
        return round($this->totalPrice - $this->discountedPrice, 2);
    }

    #[Computed]
    public function nextVolumeTier(): ?array
    {
        foreach (self::VOLUME_DISCOUNTS as $minimumPages => $rate) {
            if ($minimumPages > $this->pages) {
                return [
                    'pages' => $minimumPages,
                    'remaining' => $minimumPages - $this->pages,
                    'discount' => (int) round($rate * 100),
                ];
            }
        }

        return null;
    }

    public function render()
    {
        return view('livewire.budget-calculator');
    }
}
