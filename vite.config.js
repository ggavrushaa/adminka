import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.sass',
                'resources/css/index.sass',
                'resources/css/blog.sass',
                'resources/css/case.sass',
                'resources/css/form.sass',
                'resources/css/services.sass',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
});


