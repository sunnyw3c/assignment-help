<?php

use Livewire\Component;
use Livewire\Attributes\Reactive;

new class extends Component
{
    public $count = 0;

    public function increment()
    {
        $this->count++;
    }

    public function decrement()
    {
        $this->count--;
    }
};
?>

<div class="p-6 bg-white rounded-lg shadow-md">
    <h3 class="text-xl font-bold mb-4">Livewire Counter Example</h3>

    <div class="flex items-center gap-4">
        <button wire:click="decrement" class="px-4 py-2 bg-red-500 hover:bg-red-600 text-white rounded-lg transition-colors">
            -
        </button>

        <span class="text-3xl font-bold">{{ $count }}</span>

        <button wire:click="increment" class="px-4 py-2 bg-green-500 hover:bg-green-600 text-white rounded-lg transition-colors">
            +
        </button>
    </div>

    <p class="mt-4 text-sm text-gray-600">Click the buttons to increment or decrement the counter!</p>
</div>