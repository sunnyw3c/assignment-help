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

// Alpine components call window.axios inside x-init, so axios has to be on the
// window before Alpine.start() runs — otherwise the two dynamic imports race and
// x-init throws on an undefined window.axios.
const axiosReady = document.documentElement.hasAttribute('data-axios')
    ? import('./bootstrap')
    : Promise.resolve();

// Livewire includes Alpine on opted-in pages. Other pages only download Alpine
// when their rendered markup actually contains an Alpine component. The [x-data]
// probe has to wait for the body to exist — this bundle is a module in <head>,
// so at top level the component markup has not been parsed yet.
const startAlpine = () => {
    if (window.Alpine) return;
    if (document.documentElement.hasAttribute('data-livewire')) return;
    if (!document.querySelector('[x-data]')) return;

    Promise.all([axiosReady, import('alpinejs')])
        .then(([, { default: Alpine }]) => {
            window.Alpine = Alpine;
            Alpine.start();
        })
        .catch((error) => {
            // Pages whose entire body sits inside <template x-if> render blank
            // when this import fails, so make the cause visible rather than
            // leaving a silently empty page.
            console.error('Alpine failed to load; interactive content will not render.', error);
        });
};

if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', startAlpine, { once: true });
} else {
    startAlpine();
}

// A dynamic import that fails once (stale chunk hash after a deploy, a dropped
// connection) never retries on its own. Give it one more chance after load.
window.addEventListener('load', () => {
    if (!window.Alpine) startAlpine();
});
