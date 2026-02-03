/**
 * Immersive Interactions
 * Inspired by modern interactive web experiences
 */

// Smooth Scroll Implementation (Lenis-inspired)
class SmoothScroll {
    constructor() {
        this.scrollY = window.scrollY;
        this.targetY = window.scrollY;
        this.ease = 0.1;
        this.isRunning = false;
    }

    start() {
        if (this.isRunning) return;
        this.isRunning = true;
        this.update();
    }

    update() {
        if (!this.isRunning) return;

        this.targetY = window.scrollY;
        this.scrollY += (this.targetY - this.scrollY) * this.ease;

        if (Math.abs(this.targetY - this.scrollY) < 0.5) {
            this.scrollY = this.targetY;
        }

        requestAnimationFrame(() => this.update());
    }

    stop() {
        this.isRunning = false;
    }
}

// Scroll Progress Indicator
function initScrollProgress() {
    const progressBar = document.createElement('div');
    progressBar.className = 'scroll-progress';
    document.body.appendChild(progressBar);

    const updateProgress = () => {
        const scrollHeight = document.documentElement.scrollHeight - window.innerHeight;
        const scrolled = window.scrollY;
        const progress = (scrolled / scrollHeight) * 100;
        progressBar.style.transform = `scaleX(${progress / 100})`;
    };

    window.addEventListener('scroll', updateProgress, { passive: true });
    updateProgress();
}

// Parallax Effect
function initParallax() {
    const parallaxElements = document.querySelectorAll('[data-parallax]');

    if (parallaxElements.length === 0) return;

    const updateParallax = () => {
        const scrollY = window.scrollY;

        parallaxElements.forEach(el => {
            const speed = parseFloat(el.dataset.parallax) || 0.5;
            const rect = el.getBoundingClientRect();
            const elementTop = rect.top + scrollY;
            const offset = (scrollY - elementTop) * speed;

            el.style.transform = `translateY(${offset}px)`;
        });
    };

    window.addEventListener('scroll', updateParallax, { passive: true });
    updateParallax();
}

// Gradient Follow Cursor Effect
function initGradientFollow() {
    const elements = document.querySelectorAll('.gradient-follow');

    elements.forEach(el => {
        el.addEventListener('mousemove', (e) => {
            const rect = el.getBoundingClientRect();
            const x = ((e.clientX - rect.left) / rect.width) * 100;
            const y = ((e.clientY - rect.top) / rect.height) * 100;

            el.style.setProperty('--mouse-x', `${x}%`);
            el.style.setProperty('--mouse-y', `${y}%`);
        });
    });
}

// Magnetic Button Effect (Enhanced) - Desktop only
function initMagneticButtons() {
    // Disable on touch devices
    if ('ontouchstart' in window || navigator.maxTouchPoints > 0) {
        return;
    }

    const magneticButtons = document.querySelectorAll('.btn-magnetic');

    magneticButtons.forEach(btn => {
        btn.addEventListener('mousemove', (e) => {
            const rect = btn.getBoundingClientRect();
            const x = e.clientX - rect.left - rect.width / 2;
            const y = e.clientY - rect.top - rect.height / 2;

            const moveX = x * 0.3;
            const moveY = y * 0.3;

            btn.style.transform = `translate(${moveX}px, ${moveY}px) scale(1.05)`;
        });

        btn.addEventListener('mouseleave', () => {
            btn.style.transform = 'translate(0, 0) scale(1)';
        });
    });
}

// Intersection Observer for Animations
function initScrollAnimations() {
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -100px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                // Optionally unobserve after animation
                // observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    // Observe elements with animation classes
    const animatedElements = document.querySelectorAll(
        '.text-reveal, .stagger-item, .image-reveal, .page-transition, .card-3d-hover'
    );

    animatedElements.forEach(el => {
        observer.observe(el);
    });
}

// Ripple Effect on Click
function initRippleEffect() {
    const rippleElements = document.querySelectorAll('.ripple-effect');

    rippleElements.forEach(el => {
        el.addEventListener('click', function(e) {
            const ripple = document.createElement('span');
            const rect = this.getBoundingClientRect();

            const size = Math.max(rect.width, rect.height);
            const x = e.clientX - rect.left - size / 2;
            const y = e.clientY - rect.top - size / 2;

            ripple.style.width = ripple.style.height = `${size}px`;
            ripple.style.left = `${x}px`;
            ripple.style.top = `${y}px`;
            ripple.classList.add('ripple-animation');

            this.appendChild(ripple);

            setTimeout(() => ripple.remove(), 600);
        });
    });
}

// Page Transition Effect
function initPageTransitions() {
    // Add fade-in animation to page on load
    document.body.style.opacity = '0';

    window.addEventListener('load', () => {
        setTimeout(() => {
            document.body.style.transition = 'opacity 0.7s cubic-bezier(0.25, 0.46, 0.45, 0.94)';
            document.body.style.opacity = '1';
        }, 100);
    });

    // Handle navigation links
    const links = document.querySelectorAll('a:not([target="_blank"])');

    links.forEach(link => {
        link.addEventListener('click', (e) => {
            const href = link.getAttribute('href');

            // Only apply to internal links
            if (href && !href.startsWith('#') && !href.startsWith('http')) {
                e.preventDefault();

                document.body.style.opacity = '0';

                setTimeout(() => {
                    window.location.href = href;
                }, 400);
            }
        });
    });
}

// Smooth Anchor Scrolling
function initSmoothAnchors() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            if (href === '#') return;

            e.preventDefault();

            const target = document.querySelector(href);
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
}

// Enhanced Form Inputs
function initEnhancedInputs() {
    const inputs = document.querySelectorAll('.input-modern');

    inputs.forEach(input => {
        // Add focus class to parent
        input.addEventListener('focus', () => {
            input.closest('.form-group')?.classList.add('is-focused');
        });

        input.addEventListener('blur', () => {
            input.closest('.form-group')?.classList.remove('is-focused');
        });
    });
}

// Detect device type
function isMobileDevice() {
    return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ||
           window.innerWidth < 768;
}

function isTouchDevice() {
    return 'ontouchstart' in window || navigator.maxTouchPoints > 0;
}

// Touch-optimized ripple effect
function initTouchRipple() {
    if (!isTouchDevice()) return;

    const rippleElements = document.querySelectorAll('.ripple-effect');

    rippleElements.forEach(el => {
        el.addEventListener('touchstart', function(e) {
            const ripple = document.createElement('span');
            const rect = this.getBoundingClientRect();

            const touch = e.touches[0];
            const size = Math.max(rect.width, rect.height);
            const x = touch.clientX - rect.left - size / 2;
            const y = touch.clientY - rect.top - size / 2;

            ripple.style.width = ripple.style.height = `${size}px`;
            ripple.style.left = `${x}px`;
            ripple.style.top = `${y}px`;
            ripple.classList.add('ripple-animation');

            this.appendChild(ripple);

            setTimeout(() => ripple.remove(), 600);
        }, { passive: true });
    });
}

// Mobile-optimized parallax
function initMobileParallax() {
    if (!isMobileDevice()) {
        initParallax();
        return;
    }

    // Simpler parallax for mobile devices
    const parallaxElements = document.querySelectorAll('[data-parallax]');

    if (parallaxElements.length === 0) return;

    parallaxElements.forEach(el => {
        el.style.transform = 'translateY(0)';
    });
}

// Viewport-based optimizations
function initViewportOptimizations() {
    // Reduce animations on small screens
    if (window.innerWidth < 640) {
        document.documentElement.style.setProperty('--animation-duration', '0.4s');
    }

    // Handle orientation changes
    window.addEventListener('orientationchange', () => {
        setTimeout(() => {
            window.scrollTo(0, window.scrollY + 1);
            window.scrollTo(0, window.scrollY - 1);
        }, 100);
    });

    // Handle window resize
    let resizeTimer;
    window.addEventListener('resize', () => {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(() => {
            // Reinitialize if needed
            if (window.innerWidth < 768 && !isMobileDevice()) {
                initMobileParallax();
            }
        }, 250);
    }, { passive: true });
}

// Initialize all interactions
function initImmersiveExperience() {
    // Check if user prefers reduced motion
    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    const isMobile = isMobileDevice();
    const isTouch = isTouchDevice();

    // Viewport optimizations (always run)
    initViewportOptimizations();

    if (!prefersReducedMotion) {
        initScrollProgress();

        // Use mobile-optimized parallax
        initMobileParallax();

        // Only enable magnetic buttons on desktop with mouse
        if (!isMobile && !isTouch) {
            initMagneticButtons();
        }

        initScrollAnimations();

        // Simpler page transitions on mobile
        if (!isMobile) {
            initPageTransitions();
        }
    }

    // Always init these (they respect reduced motion internally)
    initGradientFollow();
    initRippleEffect();
    initSmoothAnchors();
    initEnhancedInputs();

    // Touch-specific features
    if (isTouch) {
        initTouchRipple();
    }
}

// Run when DOM is ready
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initImmersiveExperience);
} else {
    initImmersiveExperience();
}

// Export for use in Alpine.js components if needed
window.ImmersiveUI = {
    initScrollProgress,
    initParallax,
    initGradientFollow,
    initMagneticButtons,
    initScrollAnimations,
    initRippleEffect
};
