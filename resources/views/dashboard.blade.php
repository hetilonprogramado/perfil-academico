@include('layout.header')
  <body id="app">
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        @include('layout.sidebar')

        <!-- Layout container -->
        <div class="layout-page">
          @include('layout.navbar')

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
@include('layout.footer')