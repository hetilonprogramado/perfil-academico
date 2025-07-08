<script>
    import '@assets/vendor/js/helpers.js';
    import '@assets/js/config.js';
    import '@assets/vendor/libs/jquery/jquery.js';
    import '@assets/vendor/libs/popper/popper.js';
    import '@assets/vendor/js/bootstrap.js';
    import '@assets/vendor/libs/node-waves/node-waves.js';
    import '@assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js';
    import '@assets/vendor/js/menu.js';
    import '@assets/js/main.js';
    import '@assets/vendor/fonts/iconify-icons.css';
    import '@assets/vendor/libs/node-waves/node-waves.css';
    import '@assets/vendor/css/core.css';
    import '@assets/css/demo.css';
    import '@assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css';
    import '@assets/vendor/libs/apex-charts/apex-charts.css';
    import '@assets/vendor/js/helpers.js';
    import '@assets/js/config.js';
    import '@assets/vendor/libs/jquery/jquery.js';
    import '@assets/vendor/libs/popper/popper.js';
    import '@assets/vendor/js/bootstrap.js';
    import '@assets/vendor/libs/node-waves/node-waves.js';
    import '@assets/vendor/js/menu.js';
    import '@assets/vendor/libs/apex-charts/apexcharts.js';
    import '@assets/js/main.js';
    import '@assets/js/dashboards-analytics.js';
    import '@assets/vendor/css/pages/page-account-settings.css';
    import '@assets/vendor/css/pages/page-auth.css';
    import '@assets/vendor/css/pages/page-icons.css';
    import '@assets/vendor/css/pages/page-misc.css';
</script>

<template>
    <!-- Navbar -->

    <nav
        class="layout-navbar container-xxl navbar-detached navbar navbar-expand-xl align-items-center bg-navbar-theme"
        id="layout-navbar">
        <div class="layout-menu-toggle navbar-nav align-items-xl-center me-4 me-xl-0    d-xl-none">
            <a class="nav-item nav-link px-0 me-xl-6" href="javascript:void(0)">
            <i class="icon-base ri ri-menu-line icon-md"></i>
           </a>
        </div>

        <div class="navbar-nav-right d-flex align-items-center justify-content-end" id="navbar-collapse">
            <!-- Search -->
            <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                    <i class="icon-base ri ri-search-line icon-lg lh-0"></i>
                    <input
                        type="text"
                        class="form-control border-0 shadow-none"
                        placeholder="Pesquisar..."
                        aria-label="Pesquisar..." 
                    />
                </div>
            </div>
            <!-- /Search -->

            <ul class="navbar-nav flex-row align-items-center ms-md-auto">

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                    <a
                        class="nav-link dropdown-toggle hide-arrow p-0"
                        href="javascript:void(0);"
                        data-bs-toggle="dropdown">
                        <div class="avatar avatar-online">
                            <img src="../assets/img/avatars/1.png" alt="alt" class="rounded-circle" />
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a class="dropdown-item" href="#">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 me-3">
                                        <div class="avatar avatar-online">
                                            <img src="../assets/img/avatars/1.png" alt="alt" class="w-px-40 h-auto rounded-circle" />
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="mb-0">John Doe</h6>
                                        <small class="text-body-secondary">Admin</small>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <div class="dropdown-divider my-1"></div>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <i class="icon-base ri ri-user-line icon-md me-3"></i>
                                <span>Meu perfil</span>
                            </a>
                        </li>
                        <li>
                            <div class="dropdown-divider my-1"></div>
                        </li>
                        <li>
                            <div class="d-grid px-4 pt-2 pb-1">
                                <a class="btn btn-danger d-flex" href="javascript:void(0);">
                                <small class="align-middle">Sair</small>
                                <i class="ri ri-logout-box-r-line ms-2 ri-xs"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
                <!--/ User -->
            </ul>
        </div>
    </nav>

    <!-- / Navbar -->
</template>