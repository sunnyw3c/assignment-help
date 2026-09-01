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
        // Must stay >= es2019. Alpine's reactivity is built on Proxy, and
        // esbuild's es2015 target rewrites the getters/spread it relies on into
        // forms the proxy no longer intercepts. Alpine then starts cleanly and
        // throws nothing, but every x-data component evaluates to an empty
        // object, so x-text bindings render blank.
        target: 'es2020',
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
