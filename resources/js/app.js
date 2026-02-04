import './bootstrap';
import './immersive';

// Livewire 3 handles Alpine discovery and start automatically.
// Only import/assign if you need to extend Alpine globally.
import Alpine from 'alpinejs';
window.Alpine = Alpine;
// Alpine.start(); // Removed to prevent multiple instances warning
