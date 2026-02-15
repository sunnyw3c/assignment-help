import React from 'react';
import { createRoot } from 'react-dom/client';
import CreativeHero from './components/ui/CreativeHero';

const container = document.getElementById('creative-hero-root');

if (container) {
    const root = createRoot(container);
    root.render(<CreativeHero />);
}
