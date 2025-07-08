<!doctype html>

<html
  lang="{{ str_replace('_', '-', app()->getLocale()) }}"
  class="layout-menu-fixed layout-compact"
  data-template="vertical-menu-template-free">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <meta name="robots" content="noindex, nofollow" />

    <title>Kaizen - Dashboard</title>

    <meta name="description" content="Sistema de gerenciamento administrativo e financeiro." />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{asset('assets/img/favicon/favicon.ico')}}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&ampdisplay=swap"
      rel="stylesheet" />
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite([
        'resources/assets/vendor/fonts/iconify-icons.css',
        'resources/assets/vendor/libs/node-waves/node-waves.css',
        'resources/assets/vendor/css/core.css',
        'resources/assets/css/demo.css',
        'resources/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css',
        'resources/assets/vendor/libs/apex-charts/apex-charts.css',
        'resources/assets/vendor/js/helpers.js',
        'resources/assets/js/config.js'
        ])
    @endif