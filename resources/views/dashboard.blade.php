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

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->
        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="index.html" class="app-brand-link">
              <span class="app-brand-logo demo me-1">
                <span class="text-primary">
                  <svg width="30" height="24" viewBox="0 0 250 196" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M12.3002 1.25469L56.655 28.6432C59.0349 30.1128 60.4839 32.711 60.4839 35.5089V160.63C60.4839 163.468 58.9941 166.097 56.5603 167.553L12.2055 194.107C8.3836 196.395 3.43136 195.15 1.14435 191.327C0.395485 190.075 0 188.643 0 187.184V8.12039C0 3.66447 3.61061 0.0522461 8.06452 0.0522461C9.56056 0.0522461 11.0271 0.468577 12.3002 1.25469Z"
                      fill="currentColor" />
                    <path
                      opacity="0.077704"
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M0 65.2656L60.4839 99.9629V133.979L0 65.2656Z"
                      fill="black" />
                    <path
                      opacity="0.077704"
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M0 65.2656L60.4839 99.0795V119.859L0 65.2656Z"
                      fill="black" />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M237.71 1.22393L193.355 28.5207C190.97 29.9889 189.516 32.5905 189.516 35.3927V160.631C189.516 163.469 191.006 166.098 193.44 167.555L237.794 194.108C241.616 196.396 246.569 195.151 248.856 191.328C249.605 190.076 250 188.644 250 187.185V8.09597C250 3.64006 246.389 0.027832 241.935 0.027832C240.444 0.027832 238.981 0.441882 237.71 1.22393Z"
                      fill="currentColor" />
                    <path
                      opacity="0.077704"
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M250 65.2656L189.516 99.8897V135.006L250 65.2656Z"
                      fill="black" />
                    <path
                      opacity="0.077704"
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M250 65.2656L189.516 99.0497V120.886L250 65.2656Z"
                      fill="black" />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M12.2787 1.18923L125 70.3075V136.87L0 65.2465V8.06814C0 3.61223 3.61061 0 8.06452 0C9.552 0 11.0105 0.411583 12.2787 1.18923Z"
                      fill="currentColor" />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M12.2787 1.18923L125 70.3075V136.87L0 65.2465V8.06814C0 3.61223 3.61061 0 8.06452 0C9.552 0 11.0105 0.411583 12.2787 1.18923Z"
                      fill="white"
                      fill-opacity="0.15" />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M237.721 1.18923L125 70.3075V136.87L250 65.2465V8.06814C250 3.61223 246.389 0 241.935 0C240.448 0 238.99 0.411583 237.721 1.18923Z"
                      fill="currentColor" />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M237.721 1.18923L125 70.3075V136.87L250 65.2465V8.06814C250 3.61223 246.389 0 241.935 0C240.448 0 238.99 0.411583 237.721 1.18923Z"
                      fill="white"
                      fill-opacity="0.3" />
                  </svg>
                </span>
              </span>
              <span class="app-brand-text demo menu-text fw-semibold ms-2">Materio</span>
            </a>

          </div>

          <div class="menu-inner-shadow"></div>

            <ul class="menu-inner py-1">
                <!-- Dashboards -->
                <li class="menu-header mt-7">
                    <span class="menu-header-text">Principal</span>
                </li>
                <li class="menu-item active open">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon icon-base ri ri-home-smile-line"></i>
                        <div data-i18n="Dashboards">Dashboards</div>
                        <div class="badge text-bg-danger rounded-pill ms-auto">5</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item active">
                            <a href="index.html" class="menu-link">
                                <div data-i18n="Analytics">Analytics</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a
                                href="https://demos.themeselection.com/materio-bootstrap-html-admin-template/html/vertical-menu-template/app-email.html"
                                target="_blank"
                                class="menu-link">
                                <i class="menu-icon icon-base ri ri-mail-open-line"></i>
                                <div data-i18n="Email">Email</div>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar-detached navbar navbar-expand-xl align-items-center bg-navbar-theme"
            id="layout-navbar">
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-4 me-xl-0 d-xl-none">
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
                    aria-label="Pesquisar..." />
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

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row gy-6">
                <!-- Congratulations card -->
                <div class="col-md-12 col-lg-4">
                  <div class="card">
                    <div class="card-body text-nowrap">
                      <h5 class="card-title mb-0 flex-wrap text-nowrap">Congratulations Norris! 🎉</h5>
                      <p class="mb-2">Best seller of the month</p>
                      <h4 class="text-primary mb-0">$42.8k</h4>
                      <p class="mb-2">78% of target 🚀</p>
                      <a href="javascript:;" class="btn btn-sm btn-primary">View Sales</a>
                    </div>
                    <img
                      src="{{asset('assets/img/illustrations/trophy.png')}}"
                      class="position-absolute bottom-0 end-0 me-5 mb-5"
                      width="83"
                      alt="view sales" />
                  </div>
                </div>
                <!--/ Congratulations card -->

                <!-- Transactions -->
                <div class="col-lg-8">
                  <div class="card h-100">
                    <div class="card-header">
                      <div class="d-flex align-items-center justify-content-between">
                        <h5 class="card-title m-0 me-2">Meus progressos</h5>
                        <div class="dropdown">
                          <button
                            class="btn text-body-secondary p-0"
                            type="button"
                            id="transactionID"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false">
                            <i class="icon-base ri ri-more-2-line icon-24px"></i>
                          </button>
                          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                            <a class="dropdown-item" href="javascript:void(0);">Share</a>
                            <a class="dropdown-item" href="javascript:void(0);">Update</a>
                          </div>
                        </div>
                      </div>
                      <p class="small mb-0"><span class="h6 mb-0">Resumo dos principais indicadores</span> 😎 do mês </p>
                    </div>
                    <div class="card-body pt-lg-10">
                      <div class="row g-6">
                        <div class="col-md-3 col-6">
                          <div class="d-flex align-items-center">
                            <div class="avatar">
                              <div class="avatar-initial bg-primary rounded shadow-xs">
                                <i class="icon-base ri ri-pie-chart-2-line icon-24px"></i>
                              </div>
                            </div>
                            <div class="ms-3">
                              <p class="mb-0">Vendas</p>
                              <h5 class="mb-0">245k</h5>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-3 col-6">
                          <div class="d-flex align-items-center">
                            <div class="avatar">
                              <div class="avatar-initial bg-success rounded shadow-xs">
                                <i class="icon-base ri ri-group-line icon-24px"></i>
                              </div>
                            </div>
                            <div class="ms-3">
                              <p class="mb-0">Clientes</p>
                              <h5 class="mb-0">12.5k</h5>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-3 col-6">
                          <div class="d-flex align-items-center">
                            <div class="avatar">
                              <div class="avatar-initial bg-warning rounded shadow-xs">
                                <i class="icon-base ri ri-macbook-line icon-24px"></i>
                              </div>
                            </div>
                            <div class="ms-3">
                              <p class="mb-0">Comissão</p>
                              <h5 class="mb-0">1.54k</h5>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-3 col-6">
                          <div class="d-flex align-items-center">
                            <div class="avatar">
                              <div class="avatar-initial bg-info rounded shadow-xs">
                                <i class="icon-base ri ri-money-dollar-circle-line icon-24px"></i>
                              </div>
                            </div>
                            <div class="ms-3">
                              <p class="mb-0">Vales</p>
                              <h5 class="mb-0">$88k</h5>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--/ Transactions -->

                <!-- Total Earnings -->
                <div class="col-xl-6 col-md-6">
                  <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="card-title m-0 me-2">Ranking de vendas</h5>
                      <div class="dropdown">
                        <button
                          class="btn text-body-secondary p-0"
                          type="button"
                          id="totalEarnings"
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false">
                          <i class="icon-base ri ri-more-2-line icon-24px"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="totalEarnings">
                          <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                          <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                          <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                        </div>
                      </div>
                    </div>
                    <div class="card-body pt-lg-8">
                      <div class="mb-5 mb-lg-12">
                        <div class="d-flex align-items-center">
                          <h3 class="mb-0">$24,895</h3>
                          <span class="text-success ms-2">
                            <i class="icon-base ri ri-arrow-up-s-line icon-sm"></i>
                            <span>10%</span>
                          </span>
                        </div>
                        <p class="mb-0">Compared to $84,325 last year</p>
                      </div>
                      <ul class="p-0 m-0">
                        <li class="d-flex mb-6">
                          <div class="avatar flex-shrink-0 bg-lightest rounded me-3">
                            <img src="../assets/img/icons/misc/zipcar.png" alt="zipcar" />
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <h6 class="mb-0">Zipcar</h6>
                              <p class="mb-0">Vuejs, React & HTML</p>
                            </div>
                            <div>
                              <h6 class="mb-2">$24,895.65</h6>
                              <div class="progress bg-label-primary" style="height: 4px">
                                <div
                                  class="progress-bar bg-primary"
                                  style="width: 75%"
                                  role="progressbar"
                                  aria-valuenow="75"
                                  aria-valuemin="0"
                                  aria-valuemax="100"></div>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex mb-6">
                          <div class="avatar flex-shrink-0 bg-lightest rounded me-3">
                            <img src="../assets/img/icons/misc/bitbank.png" alt="bitbank" />
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <h6 class="mb-0">Bitbank</h6>
                              <p class="mb-0">Sketch, Figma & XD</p>
                            </div>
                            <div>
                              <h6 class="mb-2">$8,6500.20</h6>
                              <div class="progress bg-label-info" style="height: 4px">
                                <div
                                  class="progress-bar bg-info"
                                  style="width: 75%"
                                  role="progressbar"
                                  aria-valuenow="75"
                                  aria-valuemin="0"
                                  aria-valuemax="100"></div>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex">
                          <div class="avatar flex-shrink-0 bg-lightest rounded me-3">
                            <img src="../assets/img/icons/misc/aviato.png" alt="aviato" />
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <h6 class="mb-0">Aviato</h6>
                              <p class="mb-0">HTML & Angular</p>
                            </div>
                            <div>
                              <h6 class="mb-2">$1,2450.80</h6>
                              <div class="progress bg-label-secondary" style="height: 4px">
                                <div
                                  class="progress-bar bg-secondary"
                                  style="width: 75%"
                                  role="progressbar"
                                  aria-valuenow="75"
                                  aria-valuemin="0"
                                  aria-valuemax="100"></div>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-xl-6 col-md-6">
                  <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="card-title m-0 me-2">Recorrências</h5>
                      <div class="dropdown">
                        <button
                          class="btn text-body-secondary p-0"
                          type="button"
                          id="totalEarnings"
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false">
                          <i class="icon-base ri ri-more-2-line icon-24px"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="totalEarnings">
                          <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                          <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                          <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                        </div>
                      </div>
                    </div>
                    <div class="card-body pt-lg-8">
                      <div class="mb-5 mb-lg-12">
                        <div class="d-flex align-items-center">
                          <h3 class="mb-0">$24,895</h3>
                          <span class="text-success ms-2">
                            <i class="icon-base ri ri-arrow-up-s-line icon-sm"></i>
                            <span>10%</span>
                          </span>
                        </div>
                        <p class="mb-0">Compared to $84,325 last year</p>
                      </div>
                      <ul class="p-0 m-0">
                        <li class="d-flex mb-6">
                          <div class="avatar flex-shrink-0 bg-lightest rounded me-3">
                            <img src="../assets/img/icons/misc/zipcar.png" alt="zipcar" />
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <h6 class="mb-0">Zipcar</h6>
                              <p class="mb-0">Vuejs, React & HTML</p>
                            </div>
                            <div>
                              <h6 class="mb-2">$24,895.65</h6>
                              <div class="progress bg-label-primary" style="height: 4px">
                                <div
                                  class="progress-bar bg-primary"
                                  style="width: 75%"
                                  role="progressbar"
                                  aria-valuenow="75"
                                  aria-valuemin="0"
                                  aria-valuemax="100"></div>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex mb-6">
                          <div class="avatar flex-shrink-0 bg-lightest rounded me-3">
                            <img src="../assets/img/icons/misc/bitbank.png" alt="bitbank" />
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <h6 class="mb-0">Bitbank</h6>
                              <p class="mb-0">Sketch, Figma & XD</p>
                            </div>
                            <div>
                              <h6 class="mb-2">$8,6500.20</h6>
                              <div class="progress bg-label-info" style="height: 4px">
                                <div
                                  class="progress-bar bg-info"
                                  style="width: 75%"
                                  role="progressbar"
                                  aria-valuenow="75"
                                  aria-valuemin="0"
                                  aria-valuemax="100"></div>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex">
                          <div class="avatar flex-shrink-0 bg-lightest rounded me-3">
                            <img src="../assets/img/icons/misc/aviato.png" alt="aviato" />
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <h6 class="mb-0">Aviato</h6>
                              <p class="mb-0">HTML & Angular</p>
                            </div>
                            <div>
                              <h6 class="mb-2">$1,2450.80</h6>
                              <div class="progress bg-label-secondary" style="height: 4px">
                                <div
                                  class="progress-bar bg-secondary"
                                  style="width: 75%"
                                  role="progressbar"
                                  aria-valuenow="75"
                                  aria-valuemin="0"
                                  aria-valuemax="100"></div>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!--/ Total Earnings -->

                <!-- Four Cards -->
                <div class="col-xl-12 col-md-6">
                  <div class="card">
                    <!-- Total Profit line chart -->
                    <div class="col-sm-12">
                      <div class="card h-100">
                        <div class="card-header pb-0">
                          <h4 class="mb-0">$86.4k</h4>
                        </div>
                        <div class="card-body">
                          <div id="totalProfitLineChart" class="mb-3"></div>
                          <h6 class="text-center mb-0">Vendas por mês</h6>
                        </div>
                      </div>
                    </div>
                    <!--/ Total Profit line chart -->
                  </div>
                </div>
                <!--/ four cards -->

                <!-- Hoverable Table rows -->
                <div class="col-xl-12 col-md-6">
                    <div class="card">
                        <h5 class="card-header">Transferências</h5>
                        <div class="table-responsive text-nowrap">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Project</th>
                                <th>Client</th>
                                <th>Users</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                            <tr>
                                <td>
                                <i class="icon-base ri ri-suitcase-2-line icon-22px text-danger me-3"></i>
                                <span>Tours Project</span>
                                </td>
                                <td>Albert Cook</td>
                                <td>
                                <ul class="list-unstyled m-0 avatar-group d-flex align-items-center">
                                    <li
                                    data-bs-toggle="tooltip"
                                    data-popup="tooltip-custom"
                                    data-bs-placement="top"
                                    class="avatar avatar-xs pull-up"
                                    title="Lilian Fuller">
                                    <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                                    </li>
                                    <li
                                    data-bs-toggle="tooltip"
                                    data-popup="tooltip-custom"
                                    data-bs-placement="top"
                                    class="avatar avatar-xs pull-up"
                                    title="Sophia Wilkerson">
                                    <img src="../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle" />
                                    </li>
                                    <li
                                    data-bs-toggle="tooltip"
                                    data-popup="tooltip-custom"
                                    data-bs-placement="top"
                                    class="avatar avatar-xs pull-up"
                                    title="Christina Parker">
                                    <img src="../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle" />
                                    </li>
                                </ul>
                                </td>
                                <td>
                                <span class="badge rounded-pill bg-label-primary me-1">Active</span>
                                </td>
                                <td>
                                <div class="dropdown">
                                    <button
                                    type="button"
                                    class="btn p-0 dropdown-toggle hide-arrow shadow-none"
                                    data-bs-toggle="dropdown">
                                    <i class="icon-base ri ri-more-2-line icon-18px"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0);">
                                        <i class="icon-base ri ri-pencil-line icon-18px me-1"></i>
                                        Edit</a
                                    >
                                    <a class="dropdown-item" href="javascript:void(0);">
                                        <i class="icon-base ri ri-delete-bin-6-line icon-18px me-1"></i>
                                        Delete</a
                                    >
                                    </div>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <i class="icon-base ri ri-basketball-fill icon-22px text-info me-3"></i>
                                <span>Sports Project</span>
                                </td>
                                <td>Barry Hunter</td>
                                <td>
                                <ul class="list-unstyled m-0 avatar-group d-flex align-items-center">
                                    <li
                                    data-bs-toggle="tooltip"
                                    data-popup="tooltip-custom"
                                    data-bs-placement="top"
                                    class="avatar avatar-xs pull-up"
                                    title="Lilian Fuller">
                                    <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                                    </li>
                                    <li
                                    data-bs-toggle="tooltip"
                                    data-popup="tooltip-custom"
                                    data-bs-placement="top"
                                    class="avatar avatar-xs pull-up"
                                    title="Sophia Wilkerson">
                                    <img src="../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle" />
                                    </li>
                                    <li
                                    data-bs-toggle="tooltip"
                                    data-popup="tooltip-custom"
                                    data-bs-placement="top"
                                    class="avatar avatar-xs pull-up"
                                    title="Christina Parker">
                                    <img src="../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle" />
                                    </li>
                                </ul>
                                </td>
                                <td>
                                <span class="badge rounded-pill bg-label-success me-1">Completed</span>
                                </td>
                                <td>
                                <div class="dropdown">
                                    <button
                                    type="button"
                                    class="btn p-0 dropdown-toggle hide-arrow shadow-none"
                                    data-bs-toggle="dropdown">
                                    <i class="icon-base ri ri-more-2-line icon-18px"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0);">
                                        <i class="icon-base ri ri-pencil-line icon-18px me-1"></i>
                                        Edit</a
                                    >
                                    <a class="dropdown-item" href="javascript:void(0);">
                                        <i class="icon-base ri ri-delete-bin-6-line icon-18px me-1"></i>
                                        Delete</a
                                    >
                                    </div>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <i class="icon-base ri ri-leaf-fill icon-22px text-success me-3"></i>
                                <span>Greenhouse Project</span>
                                </td>
                                <td>Trevor Baker</td>
                                <td>
                                <ul class="list-unstyled m-0 avatar-group d-flex align-items-center">
                                    <li
                                    data-bs-toggle="tooltip"
                                    data-popup="tooltip-custom"
                                    data-bs-placement="top"
                                    class="avatar avatar-xs pull-up"
                                    title="Lilian Fuller">
                                    <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                                    </li>
                                    <li
                                    data-bs-toggle="tooltip"
                                    data-popup="tooltip-custom"
                                    data-bs-placement="top"
                                    class="avatar avatar-xs pull-up"
                                    title="Sophia Wilkerson">
                                    <img src="../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle" />
                                    </li>
                                    <li
                                    data-bs-toggle="tooltip"
                                    data-popup="tooltip-custom"
                                    data-bs-placement="top"
                                    class="avatar avatar-xs pull-up"
                                    title="Christina Parker">
                                    <img src="../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle" />
                                    </li>
                                </ul>
                                </td>
                                <td>
                                <span class="badge rounded-pill bg-label-info me-1">Scheduled</span>
                                </td>
                                <td>
                                <div class="dropdown">
                                    <button
                                    type="button"
                                    class="btn p-0 dropdown-toggle hide-arrow shadow-none"
                                    data-bs-toggle="dropdown">
                                    <i class="icon-base ri ri-more-2-line icon-18px"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0);">
                                        <i class="icon-base ri ri-pencil-line icon-18px me-1"></i>
                                        Edit</a
                                    >
                                    <a class="dropdown-item" href="javascript:void(0);">
                                        <i class="icon-base ri ri-delete-bin-6-line icon-18px me-1"></i>
                                        Delete</a
                                    >
                                    </div>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <i class="icon-base ri ri-bank-fill icon-22px text-primary me-3"></i>
                                <span>Bank Project</span>
                                </td>
                                <td>Jerry Milton</td>
                                <td>
                                <ul class="list-unstyled m-0 avatar-group d-flex align-items-center">
                                    <li
                                    data-bs-toggle="tooltip"
                                    data-popup="tooltip-custom"
                                    data-bs-placement="top"
                                    class="avatar avatar-xs pull-up"
                                    title="Lilian Fuller">
                                    <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                                    </li>
                                    <li
                                    data-bs-toggle="tooltip"
                                    data-popup="tooltip-custom"
                                    data-bs-placement="top"
                                    class="avatar avatar-xs pull-up"
                                    title="Sophia Wilkerson">
                                    <img src="../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle" />
                                    </li>
                                    <li
                                    data-bs-toggle="tooltip"
                                    data-popup="tooltip-custom"
                                    data-bs-placement="top"
                                    class="avatar avatar-xs pull-up"
                                    title="Christina Parker">
                                    <img src="../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle" />
                                    </li>
                                </ul>
                                </td>
                                <td>
                                <span class="badge rounded-pill bg-label-warning me-1">Pending</span>
                                </td>
                                <td>
                                <div class="dropdown">
                                    <button
                                    type="button"
                                    class="btn p-0 dropdown-toggle hide-arrow shadow-none"
                                    data-bs-toggle="dropdown">
                                    <i class="icon-base ri ri-more-2-line icon-18px"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0);">
                                        <i class="icon-base ri ri-pencil-line icon-18px me-1"></i>
                                        Edit</a
                                    >
                                    <a class="dropdown-item" href="javascript:void(0);">
                                        <i class="icon-base ri ri-delete-bin-6-line icon-18px me-1"></i>
                                        Delete</a
                                    >
                                    </div>
                                </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
              <!--/ Hoverable Table rows -->
              </div>
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl">
                <div
                  class="footer-container d-flex align-items-center justify-content-between py-4 flex-md-row flex-column">
                  <div class="mb-2 mb-md-0">
                    &#169;
                    <script>
                      document.write(new Date().getFullYear());
                    </script>
                    , made with ❤️ by
                    <a href="https://perfilti.com/" target="_blank" class="footer-link fw-medium"
                      >Perfil TI</a
                    >
                  </div>
                  <div class="d-none d-lg-inline-block">

                    <a
                      href="#"
                      target="_blank"
                      class="footer-link me-4"
                      >Vídeo treinamento</a
                    >

                    <a
                      href="#"
                      target="_blank"
                      class="footer-link"
                      >Manutenção</a
                    >
                  </div>
                </div>
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->


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
