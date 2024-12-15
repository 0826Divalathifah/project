<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Kalurahan</title>

    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <!-- endinject -->

    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/datatables.net-bs5/dataTables.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/js/select.dataTables.min.css') }}">
    
    <!-- End plugin css for this page -->

    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/style.css') }}">
    <!-- endinject -->

    <link rel="shortcut icon" href="{{ asset('admin/assets/images/favicon.png') }}">
  </head>
  <div class="container-scroller">
<!-- partial:../../partials/_navbar.html -->
<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <a class="navbar-brand brand-logo me-5" href="{{ url ('/adminkalurahan') }}" >
            <img src="{{ asset('themewagon/img/logo/logo_header.png') }}" alt="Logo Kabupaten Sleman" style="width: 110 px; height: 52px;">
          </a>
          <a class="navbar-brand brand-logo-mini" href="{{ url('/adminkalurahan') }}">
            <img src="{{ asset('themewagon/img/logo/logo kabupaten sleman.png') }}"  alt="Logo Kabupaten Sleman" style="width: 100 px; height: 40px;">
          </a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="icon-menu"></span>
          </button>
          
          <ul class="navbar-nav navbar-nav-right">
          <div class="header-right1 d-flex align-items-center justify-content-center">
    <!-- Social -->
    <div class="header-social d-flex align-items-center">
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="nav-link d-flex align-items-center mx-3" style="background: none; border: none; cursor: pointer;">
            <i class="ti-power-off text-primary" style="font-size: 24px; margin-right: 10px;"></i>
            <span style="font-size: 16px;">Logout</span>
        </button>
    </form>
</div>
</div>    
    <li class="nav-item nav-settings d-none d-lg-flex">
        <a class="nav-link" href="#">
            <i class="mdi mdi-arrow-up-bold-circle-outline"></i>
        </a>
    </li>
</ul>

<button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
    <span class="icon-menu"></span>
</button>

  </div>
</nav>
     <!-- partial -->
     <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="{{ asset('/adminkalurahan') }}">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Dashboard</span>
              </a>
          </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/kelolaadmin') }}">
                <i class="mdi mdi-shape-plus menu-icon"></i>
                <span class="menu-title">Kelola Admin</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/kelolafeedback') }}">
                  <i class="mdi mdi-comment-text menu-icon"></i>
                  <span class="menu-title">Kelola Feedback</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/kelolahomepage') }}">
                <i class="mdi mdi-home menu-icon"></i>
                <span class="menu-title">Kelola Home Page</span>
              </a>
            </li>
        </nav>

       <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-md-12 grid-margin">
                <div class="row">
                  <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                    <h3 class="font-weight-bold">Selamat Datang,</h3>
                    <p id="currentDateTime"></p>
                  </div>
                 
                </div>
              </div>
            </div>
            
            <div class="col-md-12 grid-margin transparent">
            <div class="row">

                  <div class="col-md-6 mb-4 stretch-card transparent">
                    <div class="card card-tale">
                      <div class="card-body">
                        <p class="mb-4">Total Kunjungan Desa Budaya</p>
                        <p class="fs-30 mb-2">{{ $totalVisitsDesaBudaya }}</p>
                        <p>kali</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4 stretch-card transparent">
                    <div class="card card-dark-blue">
                      <div class="card-body">
                        <p class="mb-4">Total Kunjungan Desa Preneur</p>
                        <p class="fs-30 mb-2">{{ $totalVisitsDesaPreneur }}</p>
                        <p>kali</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                    <div class="card card-light-blue">
                      <div class="card-body">
                        <p class="mb-4">Total Kunjungan Desa Prima</p>
                        <p class="fs-30 mb-2">{{ $totalVisitsDesaPrima }}</p>
                        <p>kali</p>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6 stretch-card transparent">
                    <div class="card card-light-danger">
                      <div class="card-body">
                        <p class="mb-4">Total Kunjungan Desa Wisata</p>
                        <p class="fs-30 mb-2">{{ $totalVisitsDesaWisata }}</p>
                        <p>kali</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
              <!-- Chart for Jumlah Kunjungan Website Desa Mandiri Budaya -->
              <div class="col-md-6 grid-margin stretch-card">
                  <div class="card">
                      <div class="card-body">
                          <div class="d-flex justify-content-between align-items-center">
                              <p class="card-title"> Kunjungan Website Desa Mandiri Budaya</p>
                              <select id="filter" class="form-select w-25">
                                  <option value="daily" {{ $filter == 'daily' ? 'selected' : '' }}>Harian</option>
                                  <option value="weekly" {{ $filter == 'weekly' ? 'selected' : '' }}>Mingguan</option>
                                  <option value="monthly" {{ $filter == 'monthly' ? 'selected' : '' }}>Bulanan</option>
                                  <option value="yearly" {{ $filter == 'yearly' ? 'selected' : '' }}>Tahunan</option>
                              </select>
                          </div>
                          <!-- Elemen untuk chart Jumlah Kunjungan Website Desa Mandiri Budaya -->
                          <canvas id="totalChart" height="150" 
                              data-labels="{{ implode(',', $labels) }}" 
                              data-data="{{ implode(',', $data) }}">
                          </canvas>
                      </div>
                  </div>
              </div>

              <div class="col-6 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <p class="card-title mb-3">Data Admin</p>
            <div class="table-responsive">
                <table class="table table-striped table-borderless table-hover">
                    <thead>
                        <tr>
                            <th>Nama Lengkap</th>
                            <th>Email</th>
                            <th>Role</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($admins as $admin)
                            <tr>
                                <td>{{ $admin->name }}</td>
                                <td>{{ $admin->email }}</td>
                                <td>{{ ucfirst(str_replace('_', ' ', $admin->role)) }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="text-center">Tidak ada admin yang tersedia.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

        </div>
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card position-relative">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-12 col-xl-3 d-flex flex-column justify-content-start">
                        <div class="ml-xl-4 mt-3">
                          <p class="card-title">Detail Laporan</p>
                          <p class="mb-2 mb-xl-0">
                            Menampilkan data jumlah budaya yang tersedia di Desa Budaya, produk unggulan di Desa Preneur dan Desa Prima, serta destinasi wisata menarik di Desa Wisata untuk memberikan informasi lengkap dan memudahkan eksplorasi lebih lanjut.
                          </p>
                        </div>
                      </div>
                      <div class="col-md-12 col-xl-9">
                        <div class="row">
                          <div class="col-md-6 border-right">
                            <div class="table-responsive mb-3 mb-md-0 mt-3">
                            <table class="table table-borderless report-table">
                              <tr>
                                  <td class="text-muted">Desa Budaya</td>
                                  <td class="w-100 px-0">
                                      <div class="progress progress-md mx-4">
                                          <div class="progress-bar" role="progressbar" 
                                              style="width: {{ $totalBudaya }}%; background-color: #4B49AC;" 
                                              aria-valuenow="{{ $totalBudaya }}" aria-valuemin="0" aria-valuemax="100"></div>
                                      </div>
                                  </td>
                                  <td>
                                      <h5 class="font-weight-bold mb-0">{{ $totalBudaya }}</h5>
                                  </td>
                              </tr>
                              <tr>
                                  <td class="text-muted">Desa Preneur</td>
                                  <td class="w-100 px-0">
                                      <div class="progress progress-md mx-4">
                                          <div class="progress-bar" role="progressbar" 
                                              style="width: {{ $totalPreneur }}%; background-color: #FFC100;" 
                                              aria-valuenow="{{ $totalPreneur }}" aria-valuemin="0" aria-valuemax="100"></div>
                                      </div>
                                  </td>
                                  <td>
                                      <h5 class="font-weight-bold mb-0">{{ $totalPreneur }}</h5>
                                  </td>
                              </tr>
                              <tr>
                                  <td class="text-muted">Desa Prima</td>
                                  <td class="w-100 px-0">
                                      <div class="progress progress-md mx-4">
                                          <div class="progress-bar" role="progressbar" 
                                              style="width: {{ $totalPrima }}%; background-color: #248AFD;" 
                                              aria-valuenow="{{ $totalPrima }}" aria-valuemin="0" aria-valuemax="100"></div>
                                      </div>
                                  </td>
                                  <td>
                                      <h5 class="font-weight-bold mb-0">{{ $totalPrima }}</h5>
                                  </td>
                              </tr>
                              <tr>
                                  <td class="text-muted">Desa Wisata</td>
                                  <td class="w-100 px-0">
                                      <div class="progress progress-md mx-4">
                                          <div class="progress-bar" role="progressbar" 
                                              style="width: {{ $totalWisata }}%; background-color: #FF5733;" 
                                              aria-valuenow="{{ $totalWisata }}" aria-valuemin="0" aria-valuemax="100"></div>
                                      </div>
                                  </td>
                                  <td>
                                      <h5 class="font-weight-bold mb-0">{{ $totalWisata }}</h5>
                                  </td>
                              </tr>
                          </table>

                            </div>
                          </div>
                          <div class="col-md-6 mt-3">
                            <div class="daoughnutchart-wrapper">
                              <canvas id="north-america-chart"></canvas>
                            </div>
                            <div id="north-america-chart-legend"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <p class="card-title">Data Desa Budaya</p>
                        <div class="table-responsive" style="max-height: 200px; overflow-y: auto;">
                            <table id="example" class="display expandable-table" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Budaya</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($budaya as $index => $item)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $item->nama_budaya }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="2" class="text-center">Tidak ada budaya yang tersedia.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <p class="card-title">Data Desa Preneur</p>
                        <div class="table-responsive" style="max-height: 200px; overflow-y: auto;">
                            <table id="example" class="display expandable-table" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Produk</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($preneur as $index => $item)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $item->nama_produk }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="2" class="text-center">Tidak ada produk yang tersedia.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="row">
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <p class="card-title">Data Desa Prima</p>
                        <div class="table-responsive" style="max-height: 200px; overflow-y: auto;">
                            <table id="example" class="display expandable-table" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Produk</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($prima as $index => $item)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $item->nama_produk }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="2" class="text-center">Tidak ada produk yang tersedia.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <p class="card-title">Data Desa Wisata</p>
                        <div class="table-responsive" style="max-height: 200px; overflow-y: auto;">
                            <table id="example" class="display expandable-table" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Wisata</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($wisata as $index => $item)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $item->nama_wisata }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="2" class="text-center">Tidak ada wisata yang tersedia.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            </div>
                       

            
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
    
<!-- plugins:js -->
<script src="{{ asset('admin/assets/vendors/js/vendor.bundle.base.js') }}"></script>
<!-- endinject -->
 <!-- Plugin js for this page -->
<script src="{{ asset('admin/assets/vendors/chart.js/chart.umd.js') }}"></script>
<script src="{{ asset('admin/assets/vendors/datatables.net/jquery.dataTables.js') }}"></script>
<script src="assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
<script src="{{ asset('admin/assets/vendors/datatables.net-bs5/dataTables.bootstrap5.js') }}"></script>
<script src="{{ asset('admin/assets/js/dataTables.select..min.js') }}"></script>

<!-- Custom js for this page-->
<script src="{{ asset('admin/assets/js/off-canvas.js') }}"></script>
<script src="{{ asset('admin/assets/js/template.js') }}"></script>
<script src="{{ asset('admin/assets/js/settings.js') }}"></script>
<script src="{{ asset('admin/assets/js/todolist.js') }}"></script>

<!-- Custom js for this page-->
<script src="{{ asset('admin/assets/js/jquery.cookie.js') }}" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{ asset('admin/assets/js/dashboard.js') }}"></script>
<script src="{{ asset('admin/assets/js/datetime.js') }}"></script>
<script src="{{ asset('admin/assets/js/formValidation.js') }}"></script>
<script src="{{ asset('admin/assets/js/feedback.js') }}"></script>

<script>
    const dataCounts = {
        budaya: {{ $totalBudaya }},
        preneur: {{ $totalPreneur }},
        prima: {{ $totalPrima }},
        wisata: {{ $totalWisata }},
    };
</script>
<script>
  const northAmericaChartData = {
        labels: ["Desa Budaya", "Desa Preneur", "Desa Prima", "Desa Wisata"],
        datasets: [{
            data: [{{ $totalBudaya }}, {{ $totalPreneur }}, {{ $totalPrima }}, {{ $totalWisata }}],
            backgroundColor: ["#4B49AC", "#FFC100", "#248AFD", "#FF5733"],
            borderColor: "rgba(0,0,0,0)"
        }]
  };
</script>

<!-- End custom js for this page-->
</body>
</html>
