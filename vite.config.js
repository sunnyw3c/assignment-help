import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    build: {
        // Performance optimizations for TBT reduction
        cssCodeSplit: true,
        sourcemap: false,
        minify: 'esbuild',
        target: 'es2015',
        // Reduce chunk size to minimize main thread blocking
        rollupOptions: {
            output: {
                // Aggressive code splitting for smaller chunks
                manualChunks: (id) => {
                    // Split vendor code
                    if (id.includes('node_modules')) {
                        if (id.includes('alpinejs')) {
                            return 'alpine';
                        }
                        if (id.includes('axios')) {
                            return 'axios';
                        }
                        return 'vendor';
                    }
                },
                // Smaller chunk size for better parallel loading
                experimentalMinChunkSize: 5000,
                assetFileNames: (assetInfo) => {
                    let extType = assetInfo.name.split('.').at(1);
                    if (/png|jpe?g|svg|gif|tiff|bmp|ico/i.test(extType)) {
                        extType = 'img';
                    }
                    return `assets/${extType}/[name]-[hash][extname]`;
                },
                chunkFileNames: 'assets/js/[name]-[hash].js',
                entryFileNames: 'assets/js/[name]-[hash].js',
            },
        },
        // Smaller chunks reduce TBT
        chunkSizeWarningLimit: 400,
    },
    // Optimize dependencies
    optimizeDeps: {
        include: ['alpinejs'],
    },
});
