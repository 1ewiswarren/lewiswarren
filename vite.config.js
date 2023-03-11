import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
          '@': '/src',
        },
        extensions: ['.svg'], // Add .svg extension here
    },
    optimizeDeps: {
        include: ['@iconify/iconify'],
    },
    build: {
        assetsInlineLimit: 0,
        rollupOptions: {
            output: {
                manualChunks: {
                    // Define chunk for SVG files
                    'assets/svg/*.svg': ['svg'],
                },
            },
        },
    },
});