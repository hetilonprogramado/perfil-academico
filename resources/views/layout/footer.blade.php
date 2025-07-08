<!-- Core JS -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite([
        'resources/assets/vendor/libs/jquery/jquery.js',
        'resources/assets/vendor/libs/popper/popper.js',
        'resources/assets/vendor/js/bootstrap.js',
        'resources/assets/vendor/libs/node-waves/node-waves.js',
        'resources/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js',
        'resources/assets/vendor/js/menu.js',
        'resources/assets/vendor/libs/apex-charts/apexcharts.js',
        'resources/assets/js/main.js',
        'resources/assets/js/dashboards-analytics.js'
    ])
    @endif

  </body>
</html>
