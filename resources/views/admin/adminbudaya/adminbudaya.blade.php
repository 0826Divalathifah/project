<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Desa Budaya</title>

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
          <a class="navbar-brand brand-logo me-5" href="{{ url ('/adminbudaya') }}" >
              <img src="{{ asset('themewagon/img/logo/logo_header.png') }}" alt="Logo Kabupaten Sleman" style="width: 110 px; height: 52px;">
            </a>
            <a class="navbar-brand brand-logo-mini" href="{{ url('/adminbudaya') }}">
              <img src="{{ asset('themewagon/img/logo/logo kabupaten sleman.png') }}"  alt="Logo Kabupaten Sleman" style="width: 100 px; height: 40px;">
            </a>
          </div>
          <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="icon-menu"></span>
            </button>
            <!--<ul class="navbar-nav mr-lg-2">
              <li class="nav-item nav-search d-none d-lg-block">
                <div class="input-group">
                  <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                    <span class="input-group-text" id="search">
                      <i class="icon-search"></i>
                    </span>
                  </div>
                  <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
                </div>
              </li>
            </ul>-->

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
              <a class="nav-link" href="{{ asset('/adminbudaya') }}">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Dashboard</span>
              </a>
          </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/kelolabudaya') }}">
                <i class="mdi mdi-shape-plus menu-icon"></i>
                <span class="menu-title">Kelola Budaya</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/kelolaagenda') }}">
                <i class="mdi mdi-calendar-plus menu-icon"></i>
                <span class="menu-title">Kelola Agenda</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/kelolahomepagebudaya') }}">
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
                    <h3 class="font-weight-bold">Selamat Datang, </h3>
                    <p id="currentDateTime"></p>
                  </div>
                  <!--<div class="col-12 col-xl-4">
                    <div class="justify-content-end d-flex">
                      <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                        <button class="btn btn-sm btn-light bg-white dropdown-toggle" type="button" id="dropdownMenuDate2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                          <i class="mdi mdi-calendar"></i> Today (10 Jan 2021) </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
                          <a class="dropdown-item" href="#">January - March</a>
                          <a class="dropdown-item" href="#">March - June</a>
                          <a class="dropdown-item" href="#">June - August</a>
                          <a class="dropdown-item" href="#">August - November</a>
                        </div>
                      </div>
                    </div>
                  </div>-->
                </div>
              </div>
            </div>
    <div class="col-md-12 grid-margin transparent">
    <div class="row">
        <!-- Card 1 -->
        <div class="col-md-4 mb-4 stretch-card transparent">
            <div class="card card-tale">
                <div class="card-body">
                    <p class="mb-4">Total Budaya</p>
                    <p class="fs-30 mb-2">{{ $totalBudaya }}</p>
                    <p>Budaya</p>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-4 mb-4 stretch-card transparent">
            <div class="card card-dark-blue">
                <div class="card-body">
                    <p class="mb-4">Total Agenda</p>
                    <p class="fs-30 mb-2">{{ $totalAgenda }}</p>
                    <p>Agenda</p>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="col-md-4 mb-4 stretch-card transparent">
            <div class="card card-light-blue">
                <div class="card-body">
                <p class="mb-4">Total Kunjungan Desa Budaya</p>
                <p class="fs-30 mb-2">{{ $totalVisitsDesaBudaya }}</p>
                <p>kali</p>
                </div>
            </div>
        </div>

        <!-- Card 4 
        <div class="col-md-3 mb-4 stretch-card transparent">
            <div class="card card-light-danger">
                <div class="card-body">
                    <p class="mb-4">Total Transaksi</p>
                    <p class="fs-30 mb-2">567</p>
                    <p>0.22% (30 days)</p>
                </div>
            </div>
        </div>-->
  </div>
</div>
<div class="row">
  <div class="col-md-6 grid-margin stretch-card">
      <div class="card">
          <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                  <p class="card-title">Jumlah Kunjungan Desa Budaya</p>
                  <select id="filter" class="form-select w-25" data-desa="Desa Budaya">
                      <option value="daily" {{ $filter == 'daily' ? 'selected' : '' }}>Harian</option>
                      <option value="weekly" {{ $filter == 'weekly' ? 'selected' : '' }}>Mingguan</option>
                      <option value="monthly" {{ $filter == 'monthly' ? 'selected' : '' }}>Bulanan</option>
                      <option value="yearly" {{ $filter == 'yearly' ? 'selected' : '' }}>Tahunan</option>
                  </select>
              </div>
              <!-- Elemen untuk menyimpan data -->
              <canvas id="desaBudayaChart" height="150" 
                  data-labels="{{ implode(',', $labels) }}" 
                  data-data="{{ implode(',', $data) }}">
              </canvas>
          </div>
      </div>
  </div>

  <div class="col-md-6 grid-margin stretch-card">
      <div class="card">
          <div class="card-body">
              <div class="d-flex justify-content-between">
                  <p class="card-title">Jumlah Agenda</p>
                  <a href="{{ url('/kelolaagenda') }}" class="text-info">View all</a>
              </div>

              <!-- Dropdown Filter -->
              <form method="GET" action="{{ url('/adminbudaya') }}" id="filterForm">
                  <div class="row mb-3">
                      <div class="col-md-6">
                          <select name="year" class="form-control" onchange="document.getElementById('filterForm').submit();">
                              @for ($i = 2024; $i <= date('Y'); $i++)
                                  <option value="{{ $i }}" {{ request('year') == $i ? 'selected' : '' }}>{{ $i }}</option>
                              @endfor
                          </select>
                      </div>
                      <div class="col-md-6">
                          <select name="month" class="form-control" onchange="document.getElementById('filterForm').submit();">
                              <option value="">Semua Bulan</option>
                              @foreach (range(1, 12) as $m)
                                  <option value="{{ $m }}" {{ request('month') == $m ? 'selected' : '' }}>
                                      {{ Carbon\Carbon::create()->month($m)->format('F') }}
                                  </option>
                              @endforeach
                          </select>
                      </div>
                  </div>
              </form>

              <div id="sales-chart-legend" class="chartjs-legend mt-4 mb-2"></div>
              <canvas id="sales-chart" 
                  data-agenda-labels="{{ json_encode($agendaLabels) }}" 
                  data-agenda-totals="{{ json_encode($agendaTotals) }}">
              </canvas>
          </div>
      </div>
  </div>

      
<div class="row">
  <div class="col-12 grid-margin stretch-card">
      <div class="card">
          <div class="card-body">
            <p class="card-title mb-10">Daftar Agenda Yang Akan Datang</p>
            <div class="table-responsive">
                <table class="table table-striped table-borderless">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Acara</th>
                            <th>Tanggal Acara</th>
                        </tr>
                    </thead>
                    <tbody>
                      @forelse($agendaComing as $index => $agenda)
                          <tr>
                              <td>{{ $index + 1 }}</td>
                              <td>{{ $agenda->nama_acara }}</td>
                              <td>{{ \Carbon\Carbon::parse($agenda->tanggal_acara)->format('d M Y') }}</td>
                          </tr>
                      @empty
                          <tr>
                              <td colspan="3" class="text-center">Tidak ada agenda yang akan datang.</td>
                          </tr>
                      @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
          
<div class= "row">
  <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
          <div class="card-body">
          <div class="d-flex justify-content-between">
              <p class="card-title mb-10">Daftar Budaya</p>
              <a href="{{ url('/kelolabudaya') }}" class="text-info">View all</a>
          </div>
                <div class="table-responsive">
                  <table id="example" class="display expandable-table" style="width:100%" >
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
<script src="{{ asset('admin/assets/js/dashboard.js') }}"></script>
<script src="{{ asset('admin/assets/js/datetime.js') }}"></script>



<!-- End custom js for this page-->
</body>
</html>
