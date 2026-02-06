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

<div class="relative group">
    <!-- Decorative Glow -->
    <div class="absolute -inset-1 bg-gradient-to-r from-blue-600 via-purple-600 to-pink-600 rounded-3xl opacity-25 group-hover:opacity-50 blur-xl transition-all duration-500"></div>

    <!-- Main Container -->
    <div class="relative bg-white/90 backdrop-blur-xl rounded-3xl p-6 md:p-10 shadow-2xl border border-white/50">
        
        <!-- Header -->
        <div class="text-center mb-10">
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-blue-50 border border-blue-100 mb-4">
                <span class="relative flex h-2.5 w-2.5">
                  <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                  <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-blue-500"></span>
                </span>
                <span class="text-blue-700 font-bold text-xs uppercase tracking-wider">Live Estimate</span>
            </div>
            <h3 class="text-3xl font-black text-gray-900 mb-2">Calculate Your Price</h3>
            <p class="text-gray-600">Get an instant quote with our transparent pricing tool.</p>
        </div>

        <div class="grid md:grid-cols-2 gap-8 lg:gap-12">
            <!-- Left Column: Inputs -->
            <div class="space-y-8">
                <!-- Page Counter -->
                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-3 uppercase tracking-wide">Paper Length</label>
                    <div class="flex items-center gap-4 bg-white p-2 rounded-2xl border-2 border-gray-100 shadow-sm">
                        <button type="button" wire:click="decrementPages"
                            class="w-12 h-12 flex items-center justify-center rounded-xl bg-gray-50 text-gray-600 hover:bg-red-50 hover:text-red-600 transition-colors duration-200">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M20 12H4"/></svg>
                        </button>
                        
                        <div class="flex-1 text-center">
                            <div class="text-2xl font-black text-gray-900 leading-none">{{ $pages }}</div>
                            <div class="text-xs font-bold text-gray-400 uppercase tracking-wider mt-1">{{ $pages === 1 ? 'Page' : 'Pages' }}</div>
                        </div>

                        <button type="button" wire:click="incrementPages"
                            class="w-12 h-12 flex items-center justify-center rounded-xl bg-gray-50 text-gray-600 hover:bg-green-50 hover:text-green-600 transition-colors duration-200">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 4v16m8-8H4"/></svg>
                        </button>
                    </div>
                    <div class="text-center mt-2 text-xs font-medium text-gray-400">
                        ≈ {{ number_format($pages * 275) }} words
                    </div>
                </div>

                <!-- Academic Level -->
                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-3 uppercase tracking-wide">Academic Level</label>
                    <div class="relative">
                        <select wire:model.live="academicLevel"
                            class="w-full appearance-none bg-white/50 border-2 border-gray-200 rounded-xl px-4 py-3.5 pr-10 font-bold text-gray-700 focus:outline-none focus:border-purple-500 focus:ring-4 focus:ring-purple-500/10 transition-all cursor-pointer hover:border-purple-300">
                            <option value="high-school">High School</option>
                            <option value="undergraduate">Undergraduate</option>
                            <option value="masters">Master's Degree</option>
                            <option value="phd">PhD / Doctoral</option>
                        </select>
                        <div class="absolute inset-y-0 right-0 flex items-center px-4 pointer-events-none text-gray-500">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/></svg>
                        </div>
                    </div>
                </div>

                <!-- Deadline -->
                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-3 uppercase tracking-wide">Deadline</label>
                    <div class="relative">
                        <select wire:model.live="deadline"
                            class="w-full appearance-none bg-white/50 border-2 border-gray-200 rounded-xl px-4 py-3.5 pr-10 font-bold text-gray-700 focus:outline-none focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 transition-all cursor-pointer hover:border-blue-300">
                            <option value="3-hours">3 Hours (Urgent)</option>
                            <option value="6-hours">6 Hours</option>
                            <option value="12-hours">12 Hours</option>
                            <option value="24-hours">24 Hours</option>
                            <option value="2-days">2 Days</option>
                            <option value="3-days">3 Days</option>
                            <option value="5-days">5 Days</option>
                            <option value="7-days">7 Days</option>
                            <option value="14-days">14 Days</option>
                            <option value="30-days">30 Days</option>
                        </select>
                        <div class="absolute inset-y-0 right-0 flex items-center px-4 pointer-events-none text-gray-500">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/></svg>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Summary & CTA -->
            <div class="flex flex-col justify-between bg-white rounded-2xl p-6 md:p-8 shadow-sm border border-gray-100 relative overflow-hidden">
                <!-- Background Decoration -->
                <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-blue-500/5 to-purple-500/5 rounded-bl-full pointer-events-none"></div>

                <div>
                    <label class="block text-sm font-bold text-gray-400 mb-4 uppercase tracking-wide">Estimated Total</label>
                    
                    <div class="flex items-baseline gap-2 mb-2">
                        <span class="text-5xl md:text-6xl font-black text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600 tracking-tight"
                              wire:loading.class="opacity-50" wire:target="pages,academicLevel,deadline,subject">
                            ${{ number_format($this->discountedPrice, 2) }}
                        </span>
                    </div>

                    <div class="flex items-center gap-3 mb-8">
                        <span class="text-lg font-bold text-gray-400 line-through decoration-2 decoration-red-400/50">${{ number_format($this->totalPrice, 2) }}</span>
                        <span class="px-2.5 py-1 rounded-lg bg-green-100 text-green-700 text-xs font-black uppercase tracking-wide">
                            Save {{ number_format($this->discountAmount, 2) }}
                        </span>
                    </div>

                    <!-- Breakdown -->
                    <div class="space-y-3 mb-8">
                        <div class="flex justify-between items-center text-sm">
                            <span class="text-gray-500 font-medium">Price per page</span>
                            <span class="font-bold text-gray-700">${{ number_format($this->pricePerPage, 2) }}</span>
                        </div>
                        <div class="flex justify-between items-center text-sm">
                            <span class="text-gray-500 font-medium">Seasonal Discount</span>
                            <span class="font-bold text-green-600">-{{ number_format($this->discount * 100, 0) }}%</span>
                        </div>
                        @if ($this->volumeDiscount > 0)
                        <div class="flex justify-between items-center text-sm">
                            <span class="text-gray-500 font-medium">Volume Discount</span>
                            <span class="font-bold text-green-600">-{{ number_format($this->volumeDiscount * 100, 0) }}%</span>
                        </div>
                        @endif
                    </div>
                </div>

                <!-- CTA -->
                <div class="mt-auto space-y-3">
                    <a href="{{ route('services.assignment.index') }}" 
                       class="group relative block w-full py-4 px-6 rounded-xl overflow-hidden font-black text-center text-white transition-all hover:scale-[1.02] shadow-xl hover:shadow-2xl hover:shadow-purple-500/20">
                        <div class="absolute inset-0 bg-gradient-to-r from-blue-600 via-purple-600 to-pink-600 transition-transform group-hover:scale-105"></div>
                        <span class="relative flex items-center justify-center gap-2">
                            Proceed to Order
                            <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </span>
                    </a>
                    
                    <div class="text-center">
                        <span class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">
                            No Payment Required Yet
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Features Footer -->
        <div class="mt-8 pt-6 border-t border-gray-100 flex flex-wrap justify-center gap-6 md:gap-12 text-sm text-gray-500 font-medium">
            <div class="flex items-center gap-2">
                <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                <span>Plagiarism-Free</span>
            </div>
            <div class="flex items-center gap-2">
                <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                <span>Confidential</span>
            </div>
            <div class="flex items-center gap-2">
                <svg class="w-5 h-5 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                <span>Fast Delivery</span>
            </div>
        </div>
    </div>
</div>
