<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Desa Preneur</title>

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
  <body>
  <div class="container-scroller">
<!-- partial:../../partials/_navbar.html -->
<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <a class="navbar-brand brand-logo me-5" href="{{ url ('/penjual') }}" >
            <img src="{{ asset('themewagon/img/logo/logo_header.png') }}" alt="Logo Kabupaten Sleman" style="width: 110 px; height: 52px;">
          </a>
          <a class="navbar-brand brand-logo-mini" href="{{ url('/penjual') }}">
            <img src="{{ asset('themewagon/img/logo/logo kabupaten sleman.png') }}"  alt="Logo Kabupaten Sleman" style="width: 100 px; height: 40px;">
          </a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="icon-menu"></span>
          </button>
          <ul class="navbar-nav mr-lg-2">
            <!--<li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
              <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                <span class="input-group-text" id="search">
                  <i class="icon-search"></i>
                </span>
              </div>
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
            </div>
          </li>-->
          </ul>
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
              <a class="nav-link" href="{{ asset('/adminpreneur') }}">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Dashboard</span>
              </a>
          </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/kelolapreneur') }}">
                <i class="mdi mdi-shape-plus menu-icon"></i>
                <span class="menu-title">Kelola Produk</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/kelolahomepagepreneur') }}">
                <i class="mdi mdi-home menu-icon"></i>
                <span class="menu-title">Kelola Home Page</span>
              </a>
            </li>
            <!--<li class="nav-item">
              <a class="nav-link" href="{{ url('/laporanpreneur') }}">
                <i class="icon-paper menu-icon"></i>
                <span class="menu-title">Laporan Desa Preneur</span>
              </a>
            </li>-->
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
                          <div class="row justify-content-center">

                        <!-- Card 1 --> 
                          <div class="col-lg-6 col-md-12 mb-4">
                          <div class="card shadow-sm border-0 rounded">
                              <div class="card-body d-flex align-items-center">
                                  <!-- Background Icon -->
                                  <div class="col-4 background-icon d-flex align-items-center justify-content-center">
                                  <i class="mdi mdi-archive-outline text-primary" style="font-size: 48px;"></i>
                                  </div>
                                  <!-- Text Content -->
                                  <div>
                                      <h5 class="card-title mb-2 text-primary">Total Produk</h5>
                                      <h2 class="mb-0">{{ $totalPreneur }}</h2>
                                      <p class="text-muted">Produk yang Tersedia</p>
                                  </div>
                              </div>
                          </div>
                      </div>

                      <!-- Card 2 -->
                      <div class="col-lg-6 col-md-12 mb-4">
                          <div class="card shadow-sm border-0 rounded">
                              <div class="card-body d-flex align-items-center">
                                  <!-- Background Icon -->
                                  <div class="col-4 background-icon d-flex align-items-center justify-content-center">
                                      <i class="mdi mdi-web text-primary" style="font-size: 48px;"></i>
                                  </div>
                                  <!-- Text Content -->
                                  <div>
                                      <h5 class="card-title mb-2 text-primary">Total Kunjungan Website</h5>
                                      <h2 class="mb-0">{{ $totalVisitsDesaPreneur }}</h2>
                                      <p class="text-muted">Jumlah kunjungan</p>
                                  </div>
                              </div>
                          </div>
                    </div>
                </div>
            </div>

            <div class="row">
              <div class="col-md-7 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                    <p class="card-title">Jumlah Kunjungan Desa Preneur</p>
                    <select id="filter" class="form-select w-25" data-desa="Desa Preneur">
                    <option value="daily" {{ $filter == 'daily' ? 'selected' : '' }}>Harian</option>
                    <option value="weekly" {{ $filter == 'weekly' ? 'selected' : '' }}>Mingguan</option>
                    <option value="monthly" {{ $filter == 'monthly' ? 'selected' : '' }}>Bulanan</option>
                    <option value="yearly" {{ $filter == 'yearly' ? 'selected' : '' }}>Tahunan</option>
                    </select>
                  </div>
                  <!-- Elemen untuk menyimpan data -->
                  <canvas id="desaPreneurChart" height="150" 
                      data-labels="{{ implode(',', $labels) }}" 
                      data-data="{{ implode(',', $data) }}"></canvas>
                  </div>
                </div>
              </div>

              <div class="col-md-5 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <p class="card-title mb-10">Daftar Produk preneur</p>
                <a href="{{ url('/kelolaproduk') }}" class="text-info">View all</a>
            </div>
            <div class="table-responsive">
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
<!-- content-wrapper ends -->
<!-- partial -->
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
<script>
    const dataDesa = @json($dataDesa);
</script>
<!-- End custom js for this page-->
</body>
</html>
