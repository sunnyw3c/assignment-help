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

<div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">

    <div class="px-6 pt-6 pb-0 md:px-8 md:pt-8">
        <div class="flex items-center justify-between mb-6 pb-5 border-b border-slate-100">
            <div>
                <h3 class="text-slate-900 font-semibold text-base leading-none">Instant Price Calculator</h3>
                <p class="text-slate-400 text-sm mt-1">Adjust options below to see your price</p>
            </div>
            <div class="flex items-center gap-1.5 text-xs text-emerald-600 font-medium">
                <span class="relative flex h-2 w-2">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-60"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-500"></span>
                </span>
                Live updates
            </div>
        </div>
    </div>

    <div class="p-6 md:p-8 pt-4 md:pt-4">

        {{-- ─── Subject Type Chips ─── --}}
        <div class="mb-7">
            <p class="text-xs font-semibold text-slate-500 uppercase tracking-wider mb-3">Subject Type</p>
            <div class="flex flex-wrap gap-2">
                @php
                    $subjects = [
                        'general'     => ['icon' => '📝', 'label' => 'General'],
                        'programming' => ['icon' => '💻', 'label' => 'Programming'],
                        'business'    => ['icon' => '📊', 'label' => 'Business'],
                        'nursing'     => ['icon' => '🏥', 'label' => 'Nursing'],
                        'engineering' => ['icon' => '⚙️', 'label' => 'Engineering'],
                        'law'         => ['icon' => '⚖️', 'label' => 'Law'],
                    ];
                @endphp
                @foreach($subjects as $key => $info)
                    <button
                        wire:click="$set('subject', '{{ $key }}')"
                        type="button"
                        class="flex items-center gap-1.5 px-3.5 py-1.5 rounded-lg text-sm font-medium border transition-all duration-150
                            {{ $subject === $key
                                ? 'bg-violet-600 border-violet-600 text-white'
                                : 'bg-white border-slate-200 text-slate-600 hover:border-slate-300 hover:bg-slate-50' }}">
                        <span>{{ $info['icon'] }}</span>
                        <span>{{ $info['label'] }}</span>
                    </button>
                @endforeach
            </div>
        </div>

        <div class="grid md:grid-cols-2 gap-7">

            {{-- ─── Left column ─── --}}
            <div class="space-y-6">

                {{-- Academic Level - visual cards 2x2 --}}
                <div>
                    <p class="text-xs font-semibold text-slate-500 uppercase tracking-wider mb-3">Academic Level</p>
                    <div class="grid grid-cols-2 gap-2">
                        @php
                            $levels = [
                                'high-school'   => ['icon' => '🏫', 'label' => 'High School'],
                                'undergraduate' => ['icon' => '🎓', 'label' => 'Undergrad'],
                                'masters'       => ['icon' => '📚', 'label' => "Master's"],
                                'phd'           => ['icon' => '🔬', 'label' => 'PhD'],
                            ];
                        @endphp
                        @foreach($levels as $lKey => $lInfo)
                            <button
                                wire:click="$set('academicLevel', '{{ $lKey }}')"
                                type="button"
                                class="relative p-3 rounded-xl border text-left transition-all duration-150
                                    {{ $academicLevel === $lKey
                                        ? 'border-violet-500 bg-violet-50 ring-1 ring-violet-500/20'
                                        : 'border-slate-200 bg-white hover:border-slate-300 hover:bg-slate-50' }}">
                                @if($academicLevel === $lKey)
                                    <div class="absolute top-2 right-2 w-4 h-4 bg-violet-600 rounded-full flex items-center justify-center">
                                        <svg class="w-2.5 h-2.5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                                        </svg>
                                    </div>
                                @endif
                                <span class="text-xl block mb-1">{{ $lInfo['icon'] }}</span>
                                <p class="font-semibold text-slate-800 text-xs leading-tight">{{ $lInfo['label'] }}</p>
                                <p class="text-violet-600 font-semibold text-sm mt-0.5">${{ $levelPrices[$lKey] }}<span class="font-normal text-slate-400 text-xs">/pg</span></p>
                            </button>
                        @endforeach
                    </div>
                </div>

                {{-- Pages counter --}}
                <div>
                    <div class="flex items-center justify-between mb-3">
                        <p class="text-xs font-semibold text-slate-500 uppercase tracking-wider">Number of Pages</p>
                        <span class="text-xs text-slate-400">≈ {{ number_format($pages * 275) }} words</span>
                    </div>
                    <div class="flex items-center gap-3 bg-slate-50 rounded-xl p-2 border border-slate-200">
                        <button
                            wire:click="decrementPages"
                            type="button"
                            class="w-10 h-10 flex items-center justify-center rounded-lg bg-white border border-slate-200 text-slate-500 hover:bg-slate-100 transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"/>
                            </svg>
                        </button>
                        <div class="flex-1 text-center">
                            <span class="text-3xl font-bold text-slate-900 tabular-nums">{{ $pages }}</span>
                            <span class="text-slate-400 ml-1.5 text-sm">{{ $pages === 1 ? 'page' : 'pages' }}</span>
                        </div>
                        <button
                            wire:click="incrementPages"
                            type="button"
                            class="w-10 h-10 flex items-center justify-center rounded-lg bg-white border border-slate-200 text-slate-500 hover:bg-slate-100 transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                            </svg>
                        </button>
                    </div>
                </div>

                {{-- Deadline grid --}}
                <div>
                    <p class="text-xs font-semibold text-slate-500 uppercase tracking-wider mb-3">Deadline</p>
                    <div class="grid grid-cols-2 gap-2">
                        @php
                            $deadlines = [
                                '3-hours'  => ['label' => '3 Hours',  'hot' => true],
                                '6-hours'  => ['label' => '6 Hours',  'hot' => true],
                                '12-hours' => ['label' => '12 Hours', 'hot' => true],
                                '24-hours' => ['label' => '24 Hours', 'hot' => true],
                                '2-days'   => ['label' => '2 Days',   'hot' => false],
                                '3-days'   => ['label' => '3 Days',   'hot' => false],
                                '5-days'   => ['label' => '5 Days',   'hot' => false],
                                '7-days'   => ['label' => '7 Days',   'hot' => false],
                                '14-days'  => ['label' => '14 Days',  'hot' => false],
                                '30-days'  => ['label' => '30 Days',  'hot' => false],
                            ];
                        @endphp
                        @foreach($deadlines as $dKey => $dInfo)
                            <button
                                wire:click="$set('deadline', '{{ $dKey }}')"
                                type="button"
                                class="relative py-2 px-3 rounded-lg text-sm font-medium border transition-all duration-150 text-center
                                    {{ $deadline === $dKey
                                        ? 'border-violet-500 bg-violet-50 text-violet-700 ring-1 ring-violet-500/20'
                                        : 'border-slate-200 bg-white text-slate-600 hover:border-slate-300 hover:bg-slate-50' }}">
                                {{ $dInfo['label'] }}
                                @if($dInfo['hot'])
                                    <span class="absolute -top-1 -right-1 w-2.5 h-2.5 bg-red-500 rounded-full border-2 border-white"></span>
                                @endif
                            </button>
                        @endforeach
                    </div>
                    <p class="text-xs text-slate-400 mt-2 flex items-center gap-1.5">
                        <span class="w-1.5 h-1.5 bg-red-400 rounded-full inline-block"></span>
                        Rush fee applies for deadlines under 24 hours
                    </p>
                </div>

            </div>

            {{-- ─── Right column: price panel ─── --}}
            <div class="flex flex-col gap-4">

                {{-- Price card --}}
                <div class="flex-1 bg-slate-50 border border-slate-200 rounded-2xl p-6 flex flex-col">

                    <p class="text-xs font-semibold text-slate-500 uppercase tracking-wider mb-4">Estimated Total</p>

                    {{-- Big price --}}
                    <div class="flex items-start gap-0.5 mb-1" wire:loading.class="opacity-40" wire:target="pages,academicLevel,deadline,subject">
                        <span class="text-slate-400 text-xl font-medium mt-1.5">$</span>
                        <span class="text-5xl font-bold text-slate-900 leading-none tracking-tight tabular-nums">{{ number_format($this->discountedPrice, 0) }}</span>
                        @php $cents = substr(number_format($this->discountedPrice, 2), -2); @endphp
                        <span class="text-slate-400 text-xl font-medium mt-1.5">.{{ $cents }}</span>
                    </div>

                    {{-- Crossed out + savings badge --}}
                    <div class="flex items-center gap-2 mb-5">
                        <span class="text-slate-400 line-through text-sm">${{ number_format($this->totalPrice, 2) }}</span>
                        <span class="bg-emerald-50 border border-emerald-200 text-emerald-700 text-xs font-semibold px-2 py-0.5 rounded-md">
                            Save {{ $this->totalDiscountPercent }}%
                        </span>
                    </div>

                    {{-- Breakdown rows --}}
                    <div class="space-y-2.5 border-t border-slate-200 pt-4 mb-5 flex-1">
                        <div class="flex justify-between text-sm">
                            <span class="text-slate-500">Price per page</span>
                            <span class="text-slate-800 font-medium">${{ number_format($this->pricePerPage, 2) }}</span>
                        </div>
                        <div class="flex justify-between text-sm">
                            <span class="text-slate-500">Pages</span>
                            <span class="text-slate-800 font-medium">{{ $pages }} page{{ $pages > 1 ? 's' : '' }}</span>
                        </div>
                        <div class="flex justify-between text-sm">
                            <span class="text-slate-500">Seasonal discount</span>
                            <span class="text-emerald-600 font-medium">-{{ number_format($this->discount * 100, 0) }}%</span>
                        </div>
                        @if($this->volumeDiscount > 0)
                            <div class="flex justify-between text-sm">
                                <span class="text-slate-500">Volume discount</span>
                                <span class="text-emerald-600 font-medium">-{{ number_format($this->volumeDiscount * 100, 0) }}%</span>
                            </div>
                        @endif
                        <div class="flex justify-between text-sm border-t border-slate-200 pt-2.5 mt-1">
                            <span class="text-slate-500">You save</span>
                            <span class="text-emerald-600 font-semibold">${{ number_format($this->discountAmount, 2) }}</span>
                        </div>
                    </div>

                    {{-- CTA --}}
                    <a href="{{ route('services.assignment.index') }}"
                        class="group flex items-center justify-center gap-2 w-full py-3 bg-violet-600 hover:bg-violet-700 rounded-xl text-white font-semibold text-sm transition-colors">
                        Proceed to Order
                        <svg class="w-4 h-4 group-hover:translate-x-0.5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                    <p class="text-center text-slate-400 text-xs mt-2">No payment required yet</p>
                </div>

                {{-- Guarantee badges --}}
                <div class="grid grid-cols-3 gap-2">
                    <div class="bg-white rounded-xl p-3 text-center border border-slate-200">
                        <span class="text-xl block mb-1">🛡️</span>
                        <p class="text-xs font-medium text-slate-600 leading-tight">Plagiarism Free</p>
                    </div>
                    <div class="bg-white rounded-xl p-3 text-center border border-slate-200">
                        <span class="text-xl block mb-1">🔐</span>
                        <p class="text-xs font-medium text-slate-600 leading-tight">100% Private</p>
                    </div>
                    <div class="bg-white rounded-xl p-3 text-center border border-slate-200">
                        <span class="text-xl block mb-1">↩️</span>
                        <p class="text-xs font-medium text-slate-600 leading-tight">Free Revisions</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
