import './bootstrap';

const immersiveSelector = [
    '[data-parallax]',
    '.gradient-follow',
    '.btn-magnetic',
    '.ripple-effect',
    '.text-reveal',
    '.stagger-item',
    '.image-reveal',
    '.page-transition',
    '.card-3d-hover',
].join(',');

const loadImmersiveInteractions = () => {
    if (document.querySelector(immersiveSelector)) {
        import('./immersive');
    }
};

if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', loadImmersiveInteractions, { once: true });
} else {
    loadImmersiveInteractions();
}

// Livewire 3 handles Alpine discovery and start automatically.
// Only import/assign if you need to extend Alpine globally.
import Alpine from 'alpinejs';
window.Alpine = Alpine;
// Alpine.start(); // Removed to prevent multiple instances warning
