import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/business-brochure.scss',
                'resources/js/business-brochure.js',
                'resources/sass/financial-coffee.scss',
                'resources/js/financial-coffee.js'
            ],
            refresh: true,
        }),
    ],
});
