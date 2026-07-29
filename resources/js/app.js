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

if (document.documentElement.hasAttribute('data-axios')) {
    import('./bootstrap');
}

// Livewire includes Alpine on opted-in pages. Other pages only download Alpine
// when their rendered markup actually contains an Alpine component.
if (!document.documentElement.hasAttribute('data-livewire') && document.querySelector('[x-data]')) {
    import('alpinejs').then(({ default: Alpine }) => {
        window.Alpine = Alpine;
        Alpine.start();
    });
}
