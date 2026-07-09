<?php

use Livewire\Attributes\Computed;
use Livewire\Component;

new class extends Component
{
    public $pages = 5;

    public $academicLevel = 'undergraduate';

    public $deadline = '7-days';

    public $needContent = false;

    public $needSEO = false;

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

    public function updatedPages($value)
    {
        if ($value < 1) {
            $this->pages = 1;
        }
        if ($value > 100) {
            $this->pages = 100;
        }
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
    public function addonsCost()
    {
        $cost = 0;
        if ($this->needContent) {
            $cost += $this->pages * 50;
        }
        if ($this->needSEO) {
            $cost += $this->pages * 50;
        }

        return $cost;
    }

    #[Computed]
    public function totalPrice()
    {
        $price = $this->basePrice * $this->pages * $this->urgencyMultiplier;

        return round($price + $this->addonsCost, 2);
    }

    #[Computed]
    public function discountedPrice()
    {
        $discount = 0.40;
        if ($this->pages >= 20) {
            $discount = 0.45;
        } elseif ($this->pages >= 10) {
            $discount = 0.43;
        } elseif ($this->pages >= 5) {
            $discount = 0.42;
        }

        return round($this->totalPrice * (1 - $discount), 2);
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
    public function agencyCost()
    {
        $perPage = 400;

        return 8000 + ($this->pages - 1) * $perPage;
    }

    #[Computed]
    public function freelancerCost()
    {
        $perPage = 200;

        return 3000 + ($this->pages - 1) * $perPage;
    }
};
?>

<div class="relative group" x-data="{ activeTab: 'calculator' }">
    <!-- Animated gradient border -->
    <div class="absolute -inset-[1px] rounded-[1.75rem] bg-gradient-to-r from-red-600/20 via-rose-600/20 to-pink-600/20 opacity-0 group-hover:opacity-100 blur-sm transition-all duration-700"></div>
    
    <!-- Main card -->
    <div class="relative bg-white dark:bg-slate-900/90 backdrop-blur-2xl border border-slate-200 dark:border-white/10 rounded-[1.75rem] overflow-hidden shadow-2xl">
        <!-- Decorative orbs -->
        <div class="absolute -top-24 -right-24 w-48 h-48 bg-red-500/5 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-24 -left-24 w-48 h-48 bg-rose-500/5 rounded-full blur-3xl"></div>
        
        <!-- Tab switcher -->
        <div class="relative flex items-center gap-1 p-2 bg-slate-100 dark:bg-white/5 border-b border-slate-200 dark:border-white/5">
            <button type="button" @click="activeTab = 'calculator'" 
                class="flex-1 py-2.5 px-4 rounded-xl text-xs font-bold uppercase tracking-wider transition-all duration-300"
                :class="activeTab === 'calculator' ? 'bg-red-50 text-red-600 dark:bg-red-500/20 dark:text-red-300 shadow-sm' : 'text-slate-500 hover:text-slate-700 dark:hover:text-slate-300'">
                Calculator
            </button>
            <button type="button" @click="activeTab = 'compare'" 
                class="flex-1 py-2.5 px-4 rounded-xl text-xs font-bold uppercase tracking-wider transition-all duration-300"
                :class="activeTab === 'compare' ? 'bg-red-50 text-red-600 dark:bg-red-500/20 dark:text-red-300 shadow-sm' : 'text-slate-500 hover:text-slate-700 dark:hover:text-slate-300'">
                Compare Pricing
            </button>
        </div>

        <!-- Calculator Panel -->
        <div x-show="activeTab === 'calculator'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100">
            <div class="p-6 md:p-8">
                <div class="flex items-center gap-3 mb-7">
                    <div class="w-9 h-9 rounded-xl bg-gradient-to-br from-red-500 to-rose-600 flex items-center justify-center shadow-lg shadow-red-500/20 animate-[pulse_3s_ease-in-out_infinite]">
                        <svg class="w-4.5 h-4.5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                    <div>
                        <h3 class="text-base font-bold text-slate-900 dark:text-white">Instant Estimate</h3>
                        <p class="text-[11px] text-slate-500">Adjust options below — price updates live</p>
                    </div>
                </div>

                <div class="grid md:grid-cols-2 gap-x-8 gap-y-6">
                    <!-- Left col -->
                    <div class="space-y-6">
                        <!-- Level -->
                        <div class="p-4 rounded-xl bg-slate-50 dark:bg-white/[0.02] border border-slate-200 dark:border-white/5 transition-all duration-300 hover:border-slate-300 dark:hover:border-white/10 hover:bg-slate-100 dark:hover:bg-white/[0.03]">
                            <div class="flex items-center gap-2 mb-3">
                                <span class="w-0.5 h-4 bg-red-500 rounded-full"></span>
                                <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wider">Academic Level</span>
                            </div>
                            <div class="grid grid-cols-2 gap-2">
                                <label class="relative flex items-center gap-2.5 p-2.5 rounded-lg cursor-pointer transition-all duration-200" 
                                       :class="$wire.academicLevel === 'high-school' ? 'bg-red-500/10 border border-red-500/20' : 'bg-slate-50 dark:bg-white/[0.02] border border-slate-200 dark:border-white/5 hover:bg-slate-100 dark:hover:bg-white/5'">
                                    <input type="radio" name="al" value="high-school" wire:model.live="academicLevel" class="hidden">
                                    <span class="w-4 h-4 rounded-full border-2 flex items-center justify-center flex-shrink-0 transition-all"
                                          :class="$wire.academicLevel === 'high-school' ? 'border-red-400' : 'border-slate-600'">
                                        <span class="w-1.5 h-1.5 rounded-full transition-all" 
                                              :class="$wire.academicLevel === 'high-school' ? 'bg-red-400 scale-100' : 'scale-0'"></span>
                                    </span>
                                    <span class="text-xs font-semibold text-slate-600 dark:text-slate-300">School</span>
                                </label>
                                <label class="relative flex items-center gap-2.5 p-2.5 rounded-lg cursor-pointer transition-all duration-200"
                                       :class="$wire.academicLevel === 'undergraduate' ? 'bg-red-500/10 border border-red-500/20' : 'bg-slate-50 dark:bg-white/[0.02] border border-slate-200 dark:border-white/5 hover:bg-slate-100 dark:hover:bg-white/5'">
                                    <input type="radio" name="al" value="undergraduate" wire:model.live="academicLevel" class="hidden">
                                    <span class="w-4 h-4 rounded-full border-2 flex items-center justify-center flex-shrink-0 transition-all"
                                          :class="$wire.academicLevel === 'undergraduate' ? 'border-red-400' : 'border-slate-600'">
                                        <span class="w-1.5 h-1.5 rounded-full transition-all" 
                                              :class="$wire.academicLevel === 'undergraduate' ? 'bg-red-400 scale-100' : 'scale-0'"></span>
                                    </span>
                                    <span class="text-xs font-semibold text-slate-600 dark:text-slate-300">College</span>
                                </label>
                                <label class="relative flex items-center gap-2.5 p-2.5 rounded-lg cursor-pointer transition-all duration-200"
                                       :class="$wire.academicLevel === 'masters' ? 'bg-red-500/10 border border-red-500/20' : 'bg-slate-50 dark:bg-white/[0.02] border border-slate-200 dark:border-white/5 hover:bg-slate-100 dark:hover:bg-white/5'">
                                    <input type="radio" name="al" value="masters" wire:model.live="academicLevel" class="hidden">
                                    <span class="w-4 h-4 rounded-full border-2 flex items-center justify-center flex-shrink-0 transition-all"
                                          :class="$wire.academicLevel === 'masters' ? 'border-red-400' : 'border-slate-600'">
                                        <span class="w-1.5 h-1.5 rounded-full transition-all" 
                                              :class="$wire.academicLevel === 'masters' ? 'bg-red-400 scale-100' : 'scale-0'"></span>
                                    </span>
                                    <span class="text-xs font-semibold text-slate-600 dark:text-slate-300">Master</span>
                                </label>
                                <label class="relative flex items-center gap-2.5 p-2.5 rounded-lg cursor-pointer transition-all duration-200"
                                       :class="$wire.academicLevel === 'phd' ? 'bg-red-500/10 border border-red-500/20' : 'bg-slate-50 dark:bg-white/[0.02] border border-slate-200 dark:border-white/5 hover:bg-slate-100 dark:hover:bg-white/5'">
                                    <input type="radio" name="al" value="phd" wire:model.live="academicLevel" class="hidden">
                                    <span class="w-4 h-4 rounded-full border-2 flex items-center justify-center flex-shrink-0 transition-all"
                                          :class="$wire.academicLevel === 'phd' ? 'border-red-400' : 'border-slate-600'">
                                        <span class="w-1.5 h-1.5 rounded-full transition-all" 
                                              :class="$wire.academicLevel === 'phd' ? 'bg-red-400 scale-100' : 'scale-0'"></span>
                                    </span>
                                    <span class="text-xs font-semibold text-slate-600 dark:text-slate-300">PhD</span>
                                </label>
                            </div>
                        </div>

                        <!-- Add-ons -->
                        <div class="p-4 rounded-xl bg-slate-50 dark:bg-white/[0.02] border border-slate-200 dark:border-white/5 transition-all duration-300 hover:border-slate-300 dark:hover:border-white/10 hover:bg-slate-100 dark:hover:bg-white/[0.03]">
                            <div class="flex items-center gap-2 mb-3">
                                <span class="w-0.5 h-4 bg-red-500 rounded-full"></span>
                                <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wider">Add-ons</span>
                            </div>
                            <div class="space-y-2.5">
                                <label class="flex items-center justify-between cursor-pointer group p-2 rounded-lg hover:bg-slate-100 dark:hover:bg-white/5 transition-all">
                                    <div class="flex items-center gap-3">
                                        <input type="checkbox" wire:model.live="needContent" class="hidden">
                                        <span class="w-4.5 h-4.5 rounded border-2 flex items-center justify-center flex-shrink-0 transition-all duration-200"
                                              :class="$wire.needContent ? 'bg-red-500 border-red-500' : 'border-slate-600 group-hover:border-slate-400'">
                                            <svg x-show="$wire.needContent" class="w-2.5 h-2.5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M5 13l4 4L19 7"/></svg>
                                        </span>
                                        <span class="text-xs text-slate-500 dark:text-slate-400 group-hover:text-slate-700 dark:group-hover:text-slate-200 transition-colors">Content / Research help</span>
                                    </div>
                                    <span class="text-[10px] font-bold text-red-400" x-show="$wire.needContent">+${{ $pages * 50 }}</span>
                                    <span class="text-[10px] text-slate-600 font-medium" x-show="!$wire.needContent">+$50/pg</span>
                                </label>
                                <label class="flex items-center justify-between cursor-pointer group p-2 rounded-lg hover:bg-slate-100 dark:hover:bg-white/5 transition-all">
                                    <div class="flex items-center gap-3">
                                        <input type="checkbox" wire:model.live="needSEO" class="hidden">
                                        <span class="w-4.5 h-4.5 rounded border-2 flex items-center justify-center flex-shrink-0 transition-all duration-200"
                                              :class="$wire.needSEO ? 'bg-red-500 border-red-500' : 'border-slate-600 group-hover:border-slate-400'">
                                            <svg x-show="$wire.needSEO" class="w-2.5 h-2.5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M5 13l4 4L19 7"/></svg>
                                        </span>
                                        <span class="text-xs text-slate-500 dark:text-slate-400 group-hover:text-slate-700 dark:group-hover:text-slate-200 transition-colors">Plagiarism report & proofreading</span>
                                    </div>
                                    <span class="text-[10px] font-bold text-red-400" x-show="$wire.needSEO">+${{ $pages * 50 }}</span>
                                    <span class="text-[10px] text-slate-600 font-medium" x-show="!$wire.needSEO">+$50/pg</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Right col -->
                    <div class="space-y-6">
                        <!-- Pages -->
                        <div class="p-4 rounded-xl bg-slate-50 dark:bg-white/[0.02] border border-slate-200 dark:border-white/5 transition-all duration-300 hover:border-slate-300 dark:hover:border-white/10 hover:bg-slate-100 dark:hover:bg-white/[0.03]">
                            <div class="flex items-center justify-between mb-3">
                                <div class="flex items-center gap-2">
                                    <span class="w-0.5 h-4 bg-red-500 rounded-full"></span>
                                    <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wider">Pages</span>
                                </div>
                                <div class="flex items-center gap-1.5">
                                    <span class="text-lg font-black text-slate-900 dark:text-white tabular-nums transition-all duration-300" wire:loading.class="opacity-50">{{ $pages }}</span>
                                    <span class="text-[10px] text-slate-500 font-medium">{{ $pages === 1 ? 'page' : 'pages' }}</span>
                                </div>
                            </div>
                            <div class="relative pt-1">
                                <input type="range" min="1" max="30" step="1" wire:model.live="pages"
                                    class="w-full h-1.5 appearance-none rounded-full outline-none cursor-pointer
                                           [&::-webkit-slider-thumb]:appearance-none [&::-webkit-slider-thumb]:w-4 [&::-webkit-slider-thumb]:h-4 [&::-webkit-slider-thumb]:rounded-full [&::-webkit-slider-thumb]:bg-white [&::-webkit-slider-thumb]:shadow-[0_0_12px_rgba(239,68,68,0.4)] [&::-webkit-slider-thumb]:cursor-pointer [&::-webkit-slider-thumb]:border-2 [&::-webkit-slider-thumb]:border-red-500
                                           [&::-moz-range-thumb]:w-4 [&::-moz-range-thumb]:h-4 [&::-moz-range-thumb]:rounded-full [&::-moz-range-thumb]:bg-white [&::-moz-range-thumb]:border-2 [&::-moz-range-thumb]:border-red-500 [&::-moz-range-thumb]:cursor-pointer"
                                    style="background: linear-gradient(to right, #ef4444 {{ ($pages / 30) * 100 }}%, rgba(255,255,255,0.05) {{ ($pages / 30) * 100 }}%);">
                                <div class="flex justify-between mt-1.5">
                                    <span class="text-[10px] text-slate-600">1</span>
                                    <span class="text-[10px] text-slate-600">~{{ number_format($pages * 250) }} words</span>
                                    <span class="text-[10px] text-slate-600">30</span>
                                </div>
                            </div>
                        </div>

                        <!-- Deadline -->
                        <div class="p-4 rounded-xl bg-slate-50 dark:bg-white/[0.02] border border-slate-200 dark:border-white/5 transition-all duration-300 hover:border-slate-300 dark:hover:border-white/10 hover:bg-slate-100 dark:hover:bg-white/[0.03]">
                            <div class="flex items-center gap-2 mb-3">
                                <span class="w-0.5 h-4 bg-red-500 rounded-full"></span>
                                <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wider">Deadline</span>
                            </div>
                            <div class="space-y-1.5">
                                <label class="flex items-center justify-between p-2.5 rounded-lg cursor-pointer transition-all duration-200"
                                       :class="$wire.deadline === '24-hours' ? 'bg-red-500/10 border border-red-500/20' : 'hover:bg-slate-100 dark:hover:bg-white/5 border border-transparent'">
                                    <div class="flex items-center gap-2.5">
                                        <input type="radio" name="dl" value="24-hours" wire:model.live="deadline" class="hidden">
                                        <span class="w-3.5 h-3.5 rounded-full border-2 flex items-center justify-center flex-shrink-0 transition-all"
                                              :class="$wire.deadline === '24-hours' ? 'border-red-400' : 'border-slate-600'">
                                            <span class="w-1.5 h-1.5 rounded-full transition-all" 
                                                  :class="$wire.deadline === '24-hours' ? 'bg-red-400 scale-100' : 'scale-0'"></span>
                                        </span>
                                        <span class="text-xs text-slate-400">Urgent (24h)</span>
                                    </div>
                                    <span class="text-[10px] font-bold" :class="$wire.deadline === '24-hours' ? 'text-red-400' : 'text-slate-600'">+$100/pg</span>
                                </label>
                                <label class="flex items-center justify-between p-2.5 rounded-lg cursor-pointer transition-all duration-200"
                                       :class="$wire.deadline === '3-days' ? 'bg-red-500/10 border border-red-500/20' : 'hover:bg-slate-100 dark:hover:bg-white/5 border border-transparent'">
                                    <div class="flex items-center gap-2.5">
                                        <input type="radio" name="dl" value="3-days" wire:model.live="deadline" class="hidden">
                                        <span class="w-3.5 h-3.5 rounded-full border-2 flex items-center justify-center flex-shrink-0 transition-all"
                                              :class="$wire.deadline === '3-days' ? 'border-red-400' : 'border-slate-600'">
                                            <span class="w-1.5 h-1.5 rounded-full transition-all" 
                                                  :class="$wire.deadline === '3-days' ? 'bg-red-400 scale-100' : 'scale-0'"></span>
                                        </span>
                                        <span class="text-xs text-slate-400">Express (3 days)</span>
                                    </div>
                                    <span class="text-[10px] font-bold" :class="$wire.deadline === '3-days' ? 'text-red-400' : 'text-slate-600'">+$25/pg</span>
                                </label>
                                <label class="flex items-center justify-between p-2.5 rounded-lg cursor-pointer transition-all duration-200"
                                       :class="$wire.deadline === '7-days' ? 'bg-red-500/10 border border-red-500/20' : 'hover:bg-slate-100 dark:hover:bg-white/5 border border-transparent'">
                                    <div class="flex items-center gap-2.5">
                                        <input type="radio" name="dl" value="7-days" wire:model.live="deadline" class="hidden">
                                        <span class="w-3.5 h-3.5 rounded-full border-2 flex items-center justify-center flex-shrink-0 transition-all"
                                              :class="$wire.deadline === '7-days' ? 'border-red-400' : 'border-slate-600'">
                                            <span class="w-1.5 h-1.5 rounded-full transition-all" 
                                                  :class="$wire.deadline === '7-days' ? 'bg-red-400 scale-100' : 'scale-0'"></span>
                                        </span>
                                        <span class="text-xs text-slate-400">Regular</span>
                                    </div>
                                    <span class="text-[10px] text-slate-600">Free</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Price bar -->
                <div class="mt-6 p-5 rounded-xl bg-gradient-to-r from-red-600/10 via-rose-600/10 to-pink-600/10 border border-slate-200 dark:border-white/5 relative overflow-hidden group/price">
                    <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/[0.02] to-transparent -translate-x-full group-hover/price:translate-x-full transition-all duration-1000"></div>
                    <div class="relative flex items-center justify-between flex-wrap gap-4">
                        <div>
                            <div class="text-[10px] text-slate-500 font-bold uppercase tracking-wider mb-1">Your Price</div>
                            <div class="flex items-baseline gap-2.5" wire:loading.class="opacity-50">
                                <span class="text-3xl md:text-4xl font-black text-slate-900 dark:text-white tracking-tight">${{ number_format($this->discountedPrice, 2) }}</span>
                                <span class="text-sm text-slate-600 line-through font-bold">${{ number_format($this->totalPrice, 2) }}</span>
                                <span class="px-2 py-0.5 rounded-md bg-emerald-500/15 text-emerald-400 text-[10px] font-black border border-emerald-500/10">Save ${{ number_format($this->discountAmount, 2) }}</span>
                            </div>
                            <div class="text-[10px] text-slate-600 mt-1">${{ number_format($this->pricePerPage, 2) }} per page</div>
                        </div>
                        <a href="{{ route('services.assignment.index') }}" 
                           class="group/btn relative inline-flex items-center gap-2 px-6 py-3 rounded-xl overflow-hidden font-black text-sm text-white transition-all hover:scale-105 active:scale-95">
                            <div class="absolute inset-0 bg-gradient-to-r from-red-600 to-rose-600 transition-transform group-hover/btn:scale-105"></div>
                            <span class="relative flex items-center gap-2">
                                Get This Price
                                <svg class="w-3.5 h-3.5 group-hover/btn:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Compare Panel -->
        <div x-show="activeTab === 'compare'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100">
            <div class="p-6 md:p-8">
                <div class="flex items-center gap-3 mb-7">
                    <div class="w-9 h-9 rounded-xl bg-gradient-to-br from-red-500 to-rose-600 flex items-center justify-center shadow-lg shadow-red-500/20">
                        <svg class="w-4.5 h-4.5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
                    </div>
                    <div>
                        <h3 class="text-base font-bold text-slate-900 dark:text-white">Price Comparison</h3>
                        <p class="text-[11px] text-slate-500">See how we stack up against alternatives</p>
                    </div>
                </div>

                <div class="grid sm:grid-cols-3 gap-4">
                    <div class="p-5 rounded-xl bg-slate-50 dark:bg-white/5 border border-slate-200 dark:border-white/5 group/card hover:bg-slate-100 dark:hover:bg-white/10 hover:-translate-y-1 transition-all duration-500">
                        <div class="flex items-center gap-2 mb-3">
<div class="w-8 h-8 rounded-lg bg-slate-100 dark:bg-slate-700 flex items-center justify-center">
                                <svg class="w-4 h-4 text-slate-500 dark:text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                                </div>
                                <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">Agency</span>
                        </div>
                        <div class="text-3xl font-black text-slate-900 dark:text-white mb-1">${{ number_format($this->agencyCost) }}</div>
                        <div class="flex items-center gap-1 text-[11px] text-slate-500">
                            <svg class="w-3 h-3 text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"/></svg>
                            Overpriced, slow
                        </div>
                    </div>
                    <div class="p-5 rounded-xl bg-slate-50 dark:bg-white/5 border border-slate-200 dark:border-white/5 group/card hover:bg-slate-100 dark:hover:bg-white/10 hover:-translate-y-1 transition-all duration-500">
                        <div class="flex items-center gap-2 mb-3">
<div class="w-8 h-8 rounded-lg bg-slate-100 dark:bg-slate-700 flex items-center justify-center">
                                <svg class="w-4 h-4 text-slate-500 dark:text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                                </div>
                                <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">Freelancer</span>
                        </div>
                        <div class="text-3xl font-black text-slate-900 dark:text-white mb-1">${{ number_format($this->freelancerCost) }}</div>
                        <div class="flex items-center gap-1 text-[11px] text-slate-500">
                            <svg class="w-3 h-3 text-amber-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L4.082 16.5c-.77.833.192 2.5 1.732 2.5z"/></svg>
                            Unreliable, risky
                        </div>
                    </div>
                    <div class="p-5 rounded-xl bg-gradient-to-br from-red-600/20 via-rose-600/20 to-pink-600/20 border border-red-500/20 group/card hover:-translate-y-1 transition-all duration-500 relative overflow-hidden">
                        <div class="absolute -top-6 -right-6 w-16 h-16 bg-red-500/10 rounded-full blur-xl"></div>
                        <div class="relative">
                            <div class="flex items-center gap-2 mb-3">
                                <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-red-500 to-rose-600 flex items-center justify-center">
                                    <svg class="w-4 h-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                                </div>
                                <span class="text-xs font-bold text-red-300 uppercase tracking-wider">We Got You</span>
                            </div>
                            <div class="text-3xl font-black text-slate-900 dark:text-white mb-1">${{ number_format($this->discountedPrice, 2) }}</div>
                            <div class="flex items-center gap-1 text-[11px] text-emerald-400">
                                <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                                Best value, trusted
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-6 p-4 rounded-xl bg-slate-50 dark:bg-white/5 border border-slate-200 dark:border-white/5 text-center">
                    <p class="text-xs text-slate-400">You save <span class="text-emerald-400 font-bold">${{ number_format($this->discountAmount, 2) }}</span> compared to regular pricing. 
                        <a href="{{ route('services.assignment.index') }}" class="text-red-400 font-bold hover:text-red-300 transition-colors underline underline-offset-2">Lock in this price →</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
