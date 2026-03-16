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

<div class="bg-white rounded-3xl shadow-xl border border-slate-200/80 overflow-hidden">

    {{-- ─── Top gradient bar ─── --}}
    <div class="bg-gradient-to-r from-violet-600 via-indigo-600 to-blue-600 px-6 py-4 flex items-center justify-between">
        <div class="flex items-center gap-3">
            <div class="w-9 h-9 bg-white/20 rounded-xl flex items-center justify-center backdrop-blur-sm">
                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 11h.01M12 11h.01M15 11h.01M4 19h16a2 2 0 002-2V7a2 2 0 00-2-2H4a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
            </div>
            <div>
                <p class="text-white font-bold text-sm leading-none">Price Calculator</p>
                <p class="text-violet-200 text-xs mt-0.5">Updates instantly as you adjust</p>
            </div>
        </div>
        <div class="flex items-center gap-2 bg-white/15 backdrop-blur-sm rounded-full px-3.5 py-1.5">
            <span class="relative flex h-2 w-2">
                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-300 opacity-80"></span>
                <span class="relative inline-flex rounded-full h-2 w-2 bg-green-400"></span>
            </span>
            <span class="text-white text-xs font-semibold tracking-wide">Live</span>
        </div>
    </div>

    <div class="p-6 md:p-8">

        {{-- ─── Subject Type Chips ─── --}}
        <div class="mb-7">
            <p class="text-[11px] font-black text-slate-400 uppercase tracking-widest mb-3">What do you need?</p>
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
                        class="flex items-center gap-1.5 px-4 py-2 rounded-xl text-sm font-semibold border-2 transition-all duration-200
                            {{ $subject === $key
                                ? 'bg-violet-600 border-violet-600 text-white shadow-lg shadow-violet-400/30 scale-[1.03]'
                                : 'bg-slate-50 border-slate-200 text-slate-600 hover:border-violet-300 hover:bg-violet-50' }}">
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
                    <p class="text-[11px] font-black text-slate-400 uppercase tracking-widest mb-3">Academic Level</p>
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
                                class="relative p-3 rounded-xl border-2 text-left transition-all duration-200
                                    {{ $academicLevel === $lKey
                                        ? 'border-violet-500 bg-violet-50 shadow-sm'
                                        : 'border-slate-200 bg-white hover:border-violet-200 hover:bg-slate-50' }}">
                                @if($academicLevel === $lKey)
                                    <div class="absolute top-2 right-2 w-4 h-4 bg-violet-600 rounded-full flex items-center justify-center">
                                        <svg class="w-2.5 h-2.5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                                        </svg>
                                    </div>
                                @endif
                                <span class="text-xl block mb-1">{{ $lInfo['icon'] }}</span>
                                <p class="font-bold text-slate-800 text-xs leading-tight">{{ $lInfo['label'] }}</p>
                                <p class="text-violet-600 font-black text-sm mt-0.5">${{ $levelPrices[$lKey] }}<span class="font-medium text-slate-400 text-xs">/pg</span></p>
                            </button>
                        @endforeach
                    </div>
                </div>

                {{-- Pages counter --}}
                <div>
                    <div class="flex items-center justify-between mb-3">
                        <p class="text-[11px] font-black text-slate-400 uppercase tracking-widest">Number of Pages</p>
                        <span class="text-xs text-slate-400 font-medium">≈ {{ number_format($pages * 275) }} words</span>
                    </div>
                    <div class="flex items-center gap-3 bg-slate-50 rounded-2xl p-2 border-2 border-slate-200 focus-within:border-violet-300 transition-colors">
                        <button
                            wire:click="decrementPages"
                            type="button"
                            class="w-11 h-11 flex items-center justify-center rounded-xl bg-white border border-slate-200 text-slate-500 hover:bg-red-50 hover:text-red-500 hover:border-red-200 shadow-sm transition-all">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M20 12H4"/>
                            </svg>
                        </button>
                        <div class="flex-1 text-center">
                            <span class="text-4xl font-black text-slate-900 tabular-nums">{{ $pages }}</span>
                            <span class="text-slate-400 font-medium ml-1.5 text-sm">{{ $pages === 1 ? 'page' : 'pages' }}</span>
                        </div>
                        <button
                            wire:click="incrementPages"
                            type="button"
                            class="w-11 h-11 flex items-center justify-center rounded-xl bg-white border border-slate-200 text-slate-500 hover:bg-green-50 hover:text-green-500 hover:border-green-200 shadow-sm transition-all">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 4v16m8-8H4"/>
                            </svg>
                        </button>
                    </div>
                </div>

                {{-- Deadline grid --}}
                <div>
                    <p class="text-[11px] font-black text-slate-400 uppercase tracking-widest mb-3">Deadline</p>
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
                                class="relative py-2 px-3 rounded-xl text-sm font-semibold border-2 transition-all duration-200 text-center
                                    {{ $deadline === $dKey
                                        ? 'border-violet-500 bg-violet-50 text-violet-700'
                                        : 'border-slate-200 bg-white text-slate-600 hover:border-violet-200 hover:bg-slate-50' }}">
                                {{ $dInfo['label'] }}
                                @if($dInfo['hot'])
                                    <span class="absolute -top-1.5 -right-1.5 w-3.5 h-3.5 bg-red-500 rounded-full border-2 border-white flex items-center justify-center">
                                        <svg class="w-2 h-2 text-white" fill="currentColor" viewBox="0 0 20 20"><path d="M10 1a9 9 0 100 18A9 9 0 0010 1z"/></svg>
                                    </span>
                                @endif
                            </button>
                        @endforeach
                    </div>
                    <p class="text-xs text-red-500 font-medium mt-2 flex items-center gap-1">
                        <span class="w-2 h-2 bg-red-500 rounded-full inline-block"></span>
                        Rush fee applies for deadlines under 24 hours
                    </p>
                </div>

            </div>

            {{-- ─── Right column: price panel ─── --}}
            <div class="flex flex-col gap-4">

                {{-- Price card --}}
                <div class="flex-1 bg-gradient-to-br from-violet-600 via-indigo-600 to-blue-700 rounded-2xl p-6 text-white relative overflow-hidden">
                    {{-- Background blob --}}
                    <div class="absolute -top-10 -right-10 w-40 h-40 bg-white/5 rounded-full blur-2xl pointer-events-none"></div>
                    <div class="absolute -bottom-8 -left-8 w-32 h-32 bg-indigo-900/30 rounded-full blur-xl pointer-events-none"></div>

                    <p class="text-violet-200 text-[11px] font-black uppercase tracking-widest mb-5">Estimated Total</p>

                    {{-- Big price --}}
                    <div class="flex items-start gap-1 mb-2" wire:loading.class="opacity-50" wire:target="pages,academicLevel,deadline,subject">
                        <span class="text-violet-200 text-2xl font-bold mt-1">$</span>
                        <span class="text-6xl font-black leading-none tracking-tight tabular-nums">{{ number_format($this->discountedPrice, 0) }}</span>
                        @php $cents = substr(number_format($this->discountedPrice, 2), -2); @endphp
                        <span class="text-violet-200 text-xl font-bold mt-1">.{{ $cents }}</span>
                    </div>

                    {{-- Crossed out + savings badge --}}
                    <div class="flex items-center gap-3 mb-6">
                        <span class="text-violet-300 line-through text-base">${{ number_format($this->totalPrice, 2) }}</span>
                        <span class="bg-green-400/20 border border-green-400/40 text-green-300 text-xs font-black px-2.5 py-0.5 rounded-lg">
                            SAVE {{ $this->totalDiscountPercent }}% — ${{ number_format($this->discountAmount, 2) }}
                        </span>
                    </div>

                    {{-- Breakdown rows --}}
                    <div class="space-y-2 border-t border-white/15 pt-4 mb-6">
                        <div class="flex justify-between text-sm">
                            <span class="text-violet-300">Price per page</span>
                            <span class="text-white font-bold">${{ number_format($this->pricePerPage, 2) }}</span>
                        </div>
                        <div class="flex justify-between text-sm">
                            <span class="text-violet-300">Pages</span>
                            <span class="text-white font-bold">{{ $pages }} page{{ $pages > 1 ? 's' : '' }}</span>
                        </div>
                        <div class="flex justify-between text-sm">
                            <span class="text-violet-300">Seasonal discount</span>
                            <span class="text-green-300 font-bold">-{{ number_format($this->discount * 100, 0) }}%</span>
                        </div>
                        @if($this->volumeDiscount > 0)
                            <div class="flex justify-between text-sm">
                                <span class="text-violet-300">Volume discount</span>
                                <span class="text-green-300 font-bold">-{{ number_format($this->volumeDiscount * 100, 0) }}%</span>
                            </div>
                        @endif
                    </div>

                    {{-- CTA --}}
                    <a href="{{ route('services.assignment.index') }}"
                        class="group flex items-center justify-center gap-2 w-full py-3.5 bg-white rounded-xl text-violet-700 font-bold text-sm hover:bg-violet-50 transition-all hover:scale-[1.02] active:scale-95 shadow-lg shadow-black/20">
                        Proceed to Order
                        <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                    <p class="text-center text-violet-300 text-xs mt-2.5 font-medium">No payment required yet</p>
                </div>

                {{-- Guarantee badges --}}
                <div class="grid grid-cols-3 gap-2">
                    <div class="bg-slate-50 rounded-2xl p-3 text-center border border-slate-100 hover:border-violet-200 hover:bg-violet-50/50 transition-colors">
                        <span class="text-2xl block mb-1.5">🛡️</span>
                        <p class="text-xs font-bold text-slate-700 leading-tight">Plagiarism Free</p>
                    </div>
                    <div class="bg-slate-50 rounded-2xl p-3 text-center border border-slate-100 hover:border-violet-200 hover:bg-violet-50/50 transition-colors">
                        <span class="text-2xl block mb-1.5">🔐</span>
                        <p class="text-xs font-bold text-slate-700 leading-tight">100% Private</p>
                    </div>
                    <div class="bg-slate-50 rounded-2xl p-3 text-center border border-slate-100 hover:border-violet-200 hover:bg-violet-50/50 transition-colors">
                        <span class="text-2xl block mb-1.5">↩️</span>
                        <p class="text-xs font-bold text-slate-700 leading-tight">Free Revisions</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
