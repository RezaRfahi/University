import { defineConfig } from 'vite';
import laravel, { refreshPaths } from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/css/adminlte.css',
                'resources/css/adminlte.min.css',
                'resources/css/bootstrap-rtl.min.css',
                'resources/css/custom-style.css',
                'resources/js/jquey/jquery.js',
                'resources/js/jquey/jquery.min.js',
            ],
            refresh: [
                ...refreshPaths,
                'app/Http/Livewire/**',
            ],
        }),
    ],
});
