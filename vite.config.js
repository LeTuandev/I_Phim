import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/sass/client.scss',
                'resources/sass/client/comming_soon.scss',

                'resources/js/app.js'
            ],
            refresh: true,
        }),
    ],
});
