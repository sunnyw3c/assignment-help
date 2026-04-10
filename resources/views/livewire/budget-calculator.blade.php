<?php

use Livewire\Component;
use Livewire\Attributes\Computed;

new class extends Component {
    public $pages = 1;
    public $academicLevel = 'undergraduate';
    public $deadline = '7-days';
    public $subject = 'general';
    public $discount = 0.40;

    public $levelPrices = [
        'high-school'   => 15,
        'undergraduate' => 20,
        'masters'       => 30,
        'phd'           => 45,
    ];

    public $urgencyMultipliers = [
        '3-hours'  => 2.5,
        '6-hours'  => 2.0,
        '12-hours' => 1.8,
        '24-hours' => 1.5,
        '2-days'   => 1.3,
        '3-days'   => 1.2,
        '5-days'   => 1.1,
        '7-days'   => 1.0,
        '14-days'  => 0.9,
        '30-days'  => 0.8,
    ];

    public $subjectMultipliers = [
        'general'     => 1.0,
        'programming' => 1.3,
        'engineering' => 1.2,
        'law'         => 1.2,
        'nursing'     => 1.15,
        'business'    => 1.1,
    ];

    public $volumeDiscounts = [
        1  => 0,
        2  => 0.05,
        3  => 0.10,
        5  => 0.15,
        8  => 0.20,
        10 => 0.25,
        15 => 0.30,
        20 => 0.35,
        30 => 0.40,
        50 => 0.45,
    ];

    public function updatedPages($value)
    {
        if ($value < 1)        $this->pages = 1;
        elseif ($value > 100)  $this->pages = 100;
    }

    public function incrementPages()
    {
        if ($this->pages < 100) $this->pages++;
        $this->dispatch('pages-updated', pages: $this->pages);
    }

    public function decrementPages()
    {
        if ($this->pages > 1) $this->pages--;
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
            if ($this->pages >= $minPages) $discount = $rate;
        }
        return $discount;
    }

    #[Computed]
    public function totalDiscount()
    {
        return 1 - (1 - $this->discount) * (1 - $this->volumeDiscount);
    }

    #[Computed]
    public function totalPrice()
    {
        return round($this->basePrice * $this->pages * $this->urgencyMultiplier * $this->subjectMultiplier, 2);
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
    public function totalDiscountPercent()
    {
        return round($this->totalDiscount * 100, 0);
    }
};
?>

{{-- Light card matching the screenshot design --}}
<div style="background: linear-gradient(145deg, #ffffff 0%, #f0f2ff 100%); border-radius: 1.75rem; padding: 2rem 2rem 1.5rem; position: relative;">

    {{-- ─── Live Estimate Badge ─── --}}
    <div class="flex justify-center mb-4">
        <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-widest" style="background: #eff0ff; color: #4f46e5; border: 1px solid #c7d2fe;">
            <span class="w-1.5 h-1.5 rounded-full inline-block" style="background: #4f46e5;"></span>
            Live Estimate
        </div>
    </div>

    {{-- ─── Heading ─── --}}
    <div class="text-center mb-6">
        <h3 class="font-black mb-1" style="color: #0f172a; font-size: 1.6rem;">Calculate Your Price</h3>
        <p class="text-sm" style="color: #94a3b8;">Get an instant quote with our transparent pricing tool.</p>
    </div>

    {{-- ─── Two Column Layout ─── --}}
    <div class="grid md:grid-cols-2 gap-6 mb-6">

        {{-- LEFT: Inputs --}}
        <div class="space-y-5">

            {{-- Paper Length --}}
            <div>
                <p class="text-xs font-bold uppercase tracking-widest mb-2" style="color: #94a3b8;">Paper Length</p>
                <div class="flex items-center rounded-xl overflow-hidden" style="background: #f1f3ff; border: 1px solid #e0e4ff;">
                    <button wire:click="decrementPages" type="button"
                        class="flex items-center justify-center hover:opacity-60 transition-opacity"
                        style="width: 52px; height: 64px; color: #64748b; font-size: 1.4rem; font-weight: 300;">
                        −
                    </button>
                    <div class="flex-1 text-center py-2" wire:loading.class="opacity-40" wire:target="pages">
                        <div class="font-black" style="color: #0f172a; font-size: 1.8rem; line-height: 1.1;">{{ $pages }}</div>
                        <div class="text-xs font-semibold uppercase tracking-widest mt-0.5" style="color: #94a3b8;">{{ $pages === 1 ? 'Page' : 'Pages' }}</div>
                    </div>
                    <button wire:click="incrementPages" type="button"
                        class="flex items-center justify-center hover:opacity-80 transition-opacity"
                        style="width: 52px; height: 64px; color: #64748b; font-size: 1.4rem; font-weight: 300;">
                        +
                    </button>
                </div>
                <p class="text-xs mt-1.5 text-right" style="color: #94a3b8;">≈ {{ number_format($pages * 275) }} words</p>
            </div>

            {{-- Academic Level --}}
            <div>
                <p class="text-xs font-bold uppercase tracking-widest mb-2" style="color: #94a3b8;">Academic Level</p>
                <div class="relative">
                    <select wire:model.live="academicLevel"
                        class="w-full text-sm font-medium rounded-xl px-4 py-3.5 appearance-none focus:outline-none cursor-pointer"
                        style="background: #f1f3ff; border: 1px solid #e0e4ff; color: #0f172a;">
                        <option value="high-school">High School</option>
                        <option value="undergraduate">Undergraduate</option>
                        <option value="masters">Master's</option>
                        <option value="phd">PhD</option>
                    </select>
                    <div class="absolute right-4 top-1/2 -translate-y-1/2 pointer-events-none" style="color: #94a3b8;">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </div>
                </div>
            </div>

            {{-- Deadline --}}
            <div>
                <p class="text-xs font-bold uppercase tracking-widest mb-2" style="color: #94a3b8;">Deadline</p>
                <div class="relative">
                    <select wire:model.live="deadline"
                        class="w-full text-sm font-medium rounded-xl px-4 py-3.5 appearance-none focus:outline-none cursor-pointer"
                        style="background: #f1f3ff; border: 1px solid #e0e4ff; color: #0f172a;">
                        <option value="3-hours">3 Hours</option>
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
                    <div class="absolute right-4 top-1/2 -translate-y-1/2 pointer-events-none" style="color: #94a3b8;">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        {{-- RIGHT: Price Panel --}}
        <div class="flex flex-col rounded-2xl p-5" style="background: #ffffff; box-shadow: 0 4px 24px rgba(79,70,229,0.1);">

            {{-- Estimated Total label --}}
            <p class="text-xs font-bold uppercase tracking-widest mb-2" style="color: #94a3b8;">Estimated Total</p>

            {{-- Big Price --}}
            <div wire:loading.class="opacity-40" wire:target="pages,academicLevel,deadline">
                <div class="font-black leading-none mb-1" style="color: #4f46e5; font-size: 3rem;">
                    ${{ number_format($this->discountedPrice, 2) }}
                </div>
                <div class="flex items-center gap-2 mb-4">
                    <span class="line-through text-sm font-medium" style="color: #94a3b8;">${{ number_format($this->totalPrice, 2) }}</span>
                    <span class="text-xs font-bold px-2.5 py-1 rounded-full" style="background: #dcfce7; color: #16a34a;">
                        SAVE {{ number_format($this->discountAmount, 2) }}
                    </span>
                </div>

                {{-- Breakdown --}}
                <div class="space-y-2 pt-3 mb-5 flex-1" style="border-top: 1px solid #f1f5f9;">
                    <div class="flex items-center justify-between text-sm">
                        <span style="color: #64748b;">Price per page</span>
                        <span class="font-semibold" style="color: #0f172a;">${{ number_format($this->pricePerPage, 2) }}</span>
                    </div>
                    <div class="flex items-center justify-between text-sm">
                        <span style="color: #64748b;">Seasonal Discount</span>
                        <span class="font-semibold" style="color: #16a34a;">-{{ number_format($this->discount * 100, 0) }}%</span>
                    </div>
                    @if($this->volumeDiscount > 0)
                    <div class="flex items-center justify-between text-sm">
                        <span style="color: #64748b;">Volume Discount</span>
                        <span class="font-semibold" style="color: #16a34a;">-{{ number_format($this->volumeDiscount * 100, 0) }}%</span>
                    </div>
                    @endif
                </div>
            </div>

            {{-- CTA --}}
            <a href="{{ route('order') }}"
                class="group flex items-center justify-center gap-2 w-full font-bold text-white transition-all duration-300 hover:opacity-90 mt-auto"
                style="background: linear-gradient(135deg, #4f46e5, #ec4899); border-radius: 0.875rem; padding: 0.875rem 1.25rem; font-size: 0.95rem; box-shadow: 0 6px 20px rgba(79,70,229,0.35);">
                Proceed to Order
                <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
            <p class="text-center mt-2 text-xs font-semibold uppercase tracking-wider" style="color: #94a3b8;">No Payment Required Yet</p>
        </div>
    </div>

    {{-- ─── Trust Badges ─── --}}
    <div class="flex items-center justify-center gap-8">
        <div class="flex items-center gap-2">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="color: #16a34a;">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
            <span class="text-sm font-medium" style="color: #64748b;">Plagiarism-Free</span>
        </div>
        <div class="flex items-center gap-2">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="color: #0ea5e9;">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
            </svg>
            <span class="text-sm font-medium" style="color: #64748b;">Confidential</span>
        </div>
        <div class="flex items-center gap-2">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="color: #8b5cf6;">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
            </svg>
            <span class="text-sm font-medium" style="color: #64748b;">Fast Delivery</span>
        </div>
    </div>

</div>
