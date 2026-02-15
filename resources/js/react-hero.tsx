import React from 'react';
import { createRoot } from 'react-dom/client';
import { Hero } from './components/Hero';

const container = document.getElementById('hero-root');

if (container) {
    const orderRoute = container.getAttribute('data-order-route') || '/order';
    const servicesRoute = container.getAttribute('data-services-route') || '/services';
    const root = createRoot(container);
    root.render(<Hero orderRoute={orderRoute} servicesRoute={servicesRoute} />);
}
