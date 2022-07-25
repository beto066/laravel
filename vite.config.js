import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel([
            'resources/css/index.css',
            'resources/js/app.js',
        ]),
    ],
});
