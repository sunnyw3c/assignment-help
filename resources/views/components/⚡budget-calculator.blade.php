<?php

use Livewire\Component;
use Livewire\Attributes\Computed;

new class extends Component {
    public $pages = 1;
    public $academicLevel = 'high-school';
    public $deadline = '7-days';
    public $subject = 'general';
    public $discount = 0.40; // 40% off all orders

    // Price per page based on academic level
    public $levelPrices = [
        'high-school' => 15,
        'undergraduate' => 20,
        'masters' => 30,
        'phd' => 45,
    ];

    // Urgency multipliers based on deadline
    public $urgencyMultipliers = [
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

    // Subject complexity multipliers
    public $subjectMultipliers = [
        'general' => 1.0,
        'programming' => 1.3,
        'engineering' => 1.2,
        'law' => 1.2,
        'nursing' => 1.15,
        'business' => 1.1,
    ];

    // Volume discount tiers (pages => discount percentage)
    public $volumeDiscounts = [
        1 => 0,      // 1 page: no extra discount
        2 => 0.05,   // 2 pages: 5% off
        3 => 0.10,   // 3 pages: 10% off
        5 => 0.15,   // 5+ pages: 15% off
        8 => 0.20,   // 8+ pages: 20% off
        10 => 0.25,  // 10+ pages: 25% off
        15 => 0.30,  // 15+ pages: 30% off
        20 => 0.35,  // 20+ pages: 35% off
        30 => 0.40,  // 30+ pages: 40% off
        50 => 0.45,  // 50+ pages: 45% off
    ];

    public function updatedPages($value)
    {
        if ($value < 1) {
            $this->pages = 1;
        } elseif ($value > 100) {
            $this->pages = 100;
        }
    }

    public function incrementPages()
    {
        if ($this->pages < 100) {
            $this->pages++;
        }
        $this->dispatch('pages-updated', pages: $this->pages);
    }

    public function decrementPages()
    {
        if ($this->pages > 1) {
            $this->pages--;
        }
        $this->dispatch('pages-updated', pages: $this->pages);
    }

    #[Computed]
    public function basePrice()
    {
        return $this->levelPrices[$this->academicLevel] ?? 20;
    }

    #[Computed]
    public function urgencyMultiplier()
    {
        return $this->urgencyMultipliers[$this->deadline] ?? 1.0;
    }

    #[Computed]
    public function subjectMultiplier()
    {
        return $this->subjectMultipliers[$this->subject] ?? 1.0;
    }

    #[Computed]
    public function volumeDiscount()
    {
        $discount = 0;
        foreach ($this->volumeDiscounts as $minPages => $rate) {
            if ($this->pages >= $minPages) {
                $discount = $rate;
            }
        }
        return $discount;
    }

    #[Computed]
    public function totalDiscount()
    {
        // Combine base discount (40%) with volume discount
        // Using: 1 - (1 - baseDiscount) * (1 - volumeDiscount)
        return 1 - (1 - $this->discount) * (1 - $this->volumeDiscount);
    }

    #[Computed]
    public function totalPrice()
    {
        $price = $this->basePrice * $this->pages * $this->urgencyMultiplier * $this->subjectMultiplier;
        return round($price, 2);
    }

    #[Computed]
    public function discountedPrice()
    {
        return round($this->totalPrice * (1 - $this->totalDiscount), 2);
    }

    #[Computed]
    public function pricePerPage()
    {
        return round($this->discountedPrice / $this->pages, 2);
    }

    #[Computed]
    public function discountAmount()
    {
        return round($this->totalPrice - $this->discountedPrice, 2);
    }

    #[Computed]
    public function savings()
    {
        $standardPrice = $this->levelPrices['undergraduate'] * $this->pages * 1.5;
        $savings = $standardPrice - $this->totalPrice;
        return $savings > 0 ? round($savings, 2) : 0;
    }
};
?>

<div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-2xl shadow-xl p-8 border-2 border-blue-100">
    <div class="text-center mb-8">
        <div class="inline-flex items-center gap-2 bg-blue-600 text-white px-4 py-2 rounded-full mb-4">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path
                    d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z" />
                <path fill-rule="evenodd"
                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z"
                    clip-rule="evenodd" />
            </svg>
            <span class="font-bold">Instant Price Calculator</span>
        </div>
        <h3 class="text-3xl font-bold text-gray-900 mb-2">Calculate Your Assignment Cost</h3>
        <p class="text-gray-600">Adjust the options below to see real-time pricing</p>
    </div>

    <div class="grid md:grid-cols-2 gap-6 mb-8">
        <!-- Left Column -->
        <div class="space-y-6">
            <!-- Number of Pages -->
            <div>
                <label class="block text-sm font-bold text-gray-700 mb-3">Number of Pages</label>
                <div class="flex items-center gap-4">
                    <button type="button" wire:click="decrementPages"
                        class="w-12 h-12 bg-white border-2 border-gray-300 hover:border-blue-500 hover:bg-blue-50 rounded-lg font-bold text-xl transition-colors active:scale-95">
                        -
                    </button>
                    <div class="flex-1 relative">
                        <div class="w-full px-4 py-3 text-center border-2 border-gray-300 rounded-lg bg-white">
                            <div class="text-3xl font-bold text-gray-900">{{ $pages }}</div>
                            {{-- <div class="text-sm text-gray-600 mt-1">
                                {{ $pages === 1 ? 'page' : 'pages' }} ≈ {{ number_format($pages * 275) }} words
                            </div> --}}
                        </div>
                    </div>
                    <button type="button" wire:click="incrementPages"
                        class="w-12 h-12 bg-white border-2 border-gray-300 hover:border-blue-500 hover:bg-blue-50 rounded-lg font-bold text-xl transition-colors active:scale-95">
                        +
                    </button>
                </div>
                <p class="text-xs text-gray-500 mt-2">{{ $pages }} {{ $pages === 1 ? 'page' : 'pages' }} ≈
                    {{ number_format($pages * 275) }} words | Click + or - to adjust pages</p>
                @if ($this->volumeDiscount > 0)
                    <p class="text-xs text-green-600 font-semibold mt-1">Volume discount: +{{ number_format($this->volumeDiscount * 100, 0) }}% extra off!</p>
                @else
                    <p class="text-xs text-blue-600 mt-1">Add more pages to unlock volume discounts!</p>
                @endif
            </div>

            <!-- Academic Level -->
            <div>
                <label class="block text-sm font-bold text-gray-700 mb-3">Academic Level</label>
                <select wire:model.live="academicLevel"
                    class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:border-blue-500 focus:ring-2 focus:ring-blue-200 font-semibold">
                    <option value="high-school">High School - ${{ $levelPrices['high-school'] }}/page</option>
                    <option value="undergraduate">Undergraduate - ${{ $levelPrices['undergraduate'] }}/page</option>
                    <option value="masters">Master's - ${{ $levelPrices['masters'] }}/page</option>
                    <option value="phd">PhD/Doctoral - ${{ $levelPrices['phd'] }}/page</option>
                </select>
            </div>
        </div>

        <!-- Right Column -->
        <div class="space-y-6">
            <!-- Deadline -->
            <div>
                <label class="block text-sm font-bold text-gray-700 mb-3">Deadline</label>
                <select wire:model.live="deadline"
                    class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:border-blue-500 focus:ring-2 focus:ring-blue-200 font-semibold">
                    <option value="3-hours">3 Hours (Urgent) +150%</option>
                    <option value="6-hours">6 Hours +100%</option>
                    <option value="12-hours">12 Hours +80%</option>
                    <option value="24-hours">24 Hours +50%</option>
                    <option value="2-days">2 Days +30%</option>
                    <option value="3-days">3 Days +20%</option>
                    <option value="5-days">5 Days +10%</option>
                    <option value="7-days">7 Days (Standard)</option>
                    <option value="14-days">14 Days -10%</option>
                    <option value="30-days">30 Days -20%</option>
                </select>
            </div>

            <!-- Subject -->
            <div>
                <label class="block text-sm font-bold text-gray-700 mb-3">Subject Type</label>
                <select wire:model.live="subject"
                    class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:border-blue-500 focus:ring-2 focus:ring-blue-200 font-semibold">
                    <option value="general">General/Essays</option>
                    <option value="business">Business (+10%)</option>
                    <option value="nursing">Nursing (+15%)</option>
                    <option value="engineering">Engineering (+20%)</option>
                    <option value="law">Law (+20%)</option>
                    <option value="programming">Programming (+30%)</option>
                </select>
            </div>
        </div>
    </div>

    <!-- Price Display -->
    <div class="bg-white rounded-xl p-6 border-2 border-blue-200 mb-6">
        <div class="flex items-center justify-between mb-4">
            <div>
                <span class="text-lg font-semibold text-gray-700">Estimated Total:</span>
                <span class="ml-2 inline-flex items-center px-3 py-1 rounded-full text-sm font-bold bg-red-500 text-white">
                    {{ number_format($this->totalDiscount * 100, 0) }}% OFF
                </span>
            </div>
            <div class="text-right">
                <div class="text-lg text-gray-400 line-through" wire:loading.class="opacity-50"
                    wire:target="pages,academicLevel,deadline,subject">
                    ${{ number_format($this->totalPrice, 2) }}
                </div>
                <div class="text-4xl font-bold text-green-600" wire:loading.class="opacity-50"
                    wire:target="pages,academicLevel,deadline,subject">
                    ${{ number_format($this->discountedPrice, 2) }}
                </div>
                <div class="text-sm text-gray-500">
                    ${{ number_format($this->pricePerPage, 2) }} per page
                </div>
            </div>
        </div>

        <!-- Price Breakdown -->
        <div class="border-t-2 border-gray-100 pt-4 space-y-2 text-sm">
            <div class="flex justify-between text-gray-600">
                <span>Base price ({{ $pages }} {{ $pages === 1 ? 'page' : 'pages' }}):</span>
                <span class="font-semibold">${{ number_format($this->basePrice * $pages, 2) }}</span>
            </div>
            @if ($this->urgencyMultiplier !== 1.0)
                <div class="flex justify-between text-gray-600">
                    <span>Deadline adjustment:</span>
                    <span
                        class="font-semibold {{ $this->urgencyMultiplier > 1.0 ? 'text-orange-600' : 'text-green-600' }}">
                        {{ $this->urgencyMultiplier > 1.0 ? '+' : '' }}{{ number_format(($this->urgencyMultiplier - 1.0) * 100, 0) }}%
                    </span>
                </div>
            @endif
            @if ($this->subjectMultiplier !== 1.0)
                <div class="flex justify-between text-gray-600">
                    <span>Subject complexity:</span>
                    <span class="font-semibold text-orange-600">
                        +{{ number_format(($this->subjectMultiplier - 1.0) * 100, 0) }}%
                    </span>
                </div>
            @endif
            <div class="flex justify-between text-green-600 font-semibold border-t border-gray-200 pt-2 mt-2">
                <span>Base Discount (40% OFF):</span>
                <span>-{{ number_format($this->discount * 100, 0) }}%</span>
            </div>
            @if ($this->volumeDiscount > 0)
                <div class="flex justify-between text-green-600 font-semibold">
                    <span>Volume Discount ({{ $pages }}+ pages):</span>
                    <span>-{{ number_format($this->volumeDiscount * 100, 0) }}%</span>
                </div>
            @endif
            <div class="flex justify-between text-green-700 font-bold bg-green-50 -mx-2 px-2 py-1 rounded">
                <span>Total Savings:</span>
                <span>-${{ number_format($this->discountAmount, 2) }} ({{ number_format($this->totalDiscount * 100, 0) }}% OFF)</span>
            </div>
        </div>

        @if ($this->savings > 0)
            <div class="mt-4 p-3 bg-green-50 border border-green-200 rounded-lg">
                <div class="flex items-center gap-2 text-green-700">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                            clip-rule="evenodd" />
                    </svg>
                    <span class="font-bold">You save ${{ number_format($this->savings, 2) }} with early
                        planning!</span>
                </div>
            </div>
        @endif
    </div>

    <!-- Action Buttons -->
    <div class="grid md:grid-cols-2 gap-4">
        <a href="{{ route('services.assignment.index') }}"
            class="px-6 py-4 bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white rounded-xl font-bold text-center transition-all transform hover:scale-105 shadow-lg">
            Get Started Now
        </a>
        <button wire:click="$refresh"
            class="px-6 py-4 bg-white hover:bg-gray-50 border-2 border-gray-300 text-gray-700 rounded-xl font-bold transition-all">
            Recalculate
        </button>
    </div>

    <!-- Features -->
    <div class="mt-6 pt-6 border-t-2 border-blue-100">
        <div class="grid grid-cols-3 gap-4 text-center text-sm">
            <div>
                <div class="text-blue-600 font-bold">✓</div>
                <div class="text-gray-600">Plagiarism Free</div>
            </div>
            <div>
                <div class="text-blue-600 font-bold">✓</div>
                <div class="text-gray-600">On-Time Delivery</div>
            </div>
            <div>
                <div class="text-blue-600 font-bold">✓</div>
                <div class="text-gray-600">24/7 Support</div>
            </div>
        </div>
    </div>

    <!-- Loading Indicator -->
    <div wire:loading wire:target="pages,academicLevel,deadline,subject"
        class="absolute inset-0 bg-white/50 rounded-2xl flex items-center justify-center">
        <div class="text-center">
            <svg class="animate-spin h-12 w-12 text-blue-600 mx-auto mb-2" xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                    stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor"
                    d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                </path>
            </svg>
            <span class="text-blue-600 font-semibold">Calculating...</span>
        </div>
    </div>
</div>
