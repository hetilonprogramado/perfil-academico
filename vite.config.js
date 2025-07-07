import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        vue(),
        laravel({
            input: [
                'resources/assets/vendor/css/core.css',
                'resources/assets/css/demo.css',
                'resources/js/app.js',
                'resources/assets/vendor/fonts/iconify-icons.css',
                'resources/assets/vendor/libs/node-waves/node-waves.css',
                'resources/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css',
                'resources/assets/vendor/libs/apex-charts/apex-charts.css',
                'resources/assets/vendor/js/helpers.js',
                'resources/assets/js/config.js',
                'resources/assets/vendor/libs/jquery/jquery.js',
                'resources/assets/vendor/libs/popper/popper.js',
                'resources/assets/vendor/js/bootstrap.js',
                'resources/assets/vendor/libs/node-waves/node-waves.js',
                'resources/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js',
                'resources/assets/vendor/js/menu.js',
                'resources/assets/vendor/libs/apex-charts/apexcharts.js',
                'resources/assets/js/main.js',
                'resources/assets/js/dashboards-analytics.js',
                'resources/assets/vendor/css/pages/page-account-settings.css',
                'resources/assets/vendor/css/pages/page-auth.css',
                'resources/assets/vendor/css/pages/page-icons.css',
                'resources/assets/vendor/css/pages/page-misc.css'
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
    resolve: {
        alias: {
            vue: 'vue/dist/vue.esm-bundler.js',
        },
    },
});
