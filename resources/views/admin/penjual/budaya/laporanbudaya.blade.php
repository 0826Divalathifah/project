<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Laporan Budaya</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <!-- endinject -->  

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
            <img src="{{ asset('themewagon/img/logo/logo_header.png') }}" class="me-2" alt="logo" />
          </a>
          <a class="navbar-brand brand-logo-mini" href="{{ url('/penjual') }}">
            <img src="{{ asset('themewagon/img/logo/logo_header.png') }}" alt="logo" />
          </a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="icon-menu"></span>
          </button>
          <ul class="navbar-nav mr-lg-2">
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
          </ul>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
                <i class="icon-bell mx-0"></i>
                <span class="count"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-success">
                      <i class="ti-info-alt mx-0"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal">Application Error</h6>
                    <p class="font-weight-light small-text mb-0 text-muted"> Just now </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-warning">
                      <i class="ti-settings mx-0"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal">Settings</h6>
                    <p class="font-weight-light small-text mb-0 text-muted"> Private message </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-info">
                      <i class="ti-user mx-0"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal">New user registration</h6>
                    <p class="font-weight-light small-text mb-0 text-muted"> 2 days ago </p>
                  </div>
                </a>
              </div>
            </li>
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
                <img src="{{ asset('admin/assets/images/faces/face28.jpg') }}" alt="profile" />
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item">
                  <i class="ti-settings text-primary"></i> Settings </a>
                <a class="dropdown-item">
                  <i class="ti-power-off text-primary"></i> Logout </a>
              </div>
            </li>
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
              <a class="nav-link" href="{{ asset('/penjual') }}">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#budaya" aria-expanded="false" aria-controls="ui-basic">
                <i class="icon-layout menu-icon"></i>
                <span class="menu-title">Desa Budaya</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="budaya">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="{{ url('/kelolabudaya') }}">Kelola Budaya</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{ url('/transaksibudaya') }}">Transaksi</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{ url('/laporanbudaya') }}">Laporan</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#preneur" aria-expanded="false" aria-controls="ui-basic">
                <i class="icon-layout menu-icon"></i>
                <span class="menu-title">Desa Preneur</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="preneur">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="{{ url('/kelolapreneur') }}">Kelola Preneur</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{ url('/transaksipreneur') }}">Transaksi</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{ url('/laporanpreneur') }}">Laporan</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#prima" aria-expanded="false" aria-controls="ui-basic">
                <i class="icon-layout menu-icon"></i>
                <span class="menu-title">Desa Prima</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="prima">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="{{ url('/kelolaprima') }}">Kelola Prima</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{ url('/transaksiprima') }}">Transaksi</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{ url('/laporanprima') }}">Laporan</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#wisata" aria-expanded="false" aria-controls="ui-basic">
                <i class="icon-layout menu-icon"></i>
                <span class="menu-title">Desa Wisata</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="wisata">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="{{ url('/kelolawisata') }}">Kelola Wisata</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{ url('/transaksiwisata') }}">Transaksi</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{ url('/laporanwisata') }}">Laporan</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/laporanpenjual') }}">
                <i class="icon-paper menu-icon"></i>
                <span class="menu-title">Laporan Penjual</span>
              </a>
            </li>
          </ul>
        </nav>

    <div class="main-panel">
    <div class="content-wrapper">
    <div class="col-md-12 grid-margin transparent">
    <div class="col-md-12 grid-margin transparent"> 
    <div class="row">
        <!-- Card 1 -->
        <div class="col-md-3 mb-4 stretch-card transparent">
            <div class="card card-tale">
                <div class="card-body">
                    <p class="mb-4">Total Penjualan</p>
                    <p class="fs-30 mb-2">4006</p>
                    <p>10.00% (30 days)</p>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-3 mb-4 stretch-card transparent">
            <div class="card card-dark-blue">
                <div class="card-body">
                    <p class="mb-4">Total Pendapatan</p>
                    <p class="fs-30 mb-2">15.678.907</p>
                    <p>22.00% (30 days)</p>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="col-md-3 mb-4 stretch-card transparent">
            <div class="card card-light-blue">
                <div class="card-body">
                    <p class="mb-4">Total Produk</p>
                    <p class="fs-30 mb-2">50</p>
                    <p>2.00% (30 days)</p>
                </div>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="col-md-3 mb-4 stretch-card transparent">
            <div class="card card-light-danger">
                <div class="card-body">
                    <p class="mb-4">Total Transaksi</p>
                    <p class="fs-30 mb-2">567</p>
                    <p>0.22% (30 days)</p>
                </div>
            </div>
        </div>
  </div>
</div>
<div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <p class="card-title">GrafikPenjualan</p>
                      <a href="#" class="text-info">View all</a>
                    </div>
                    <p class="font-weight-500">The total number of sessions within the date range. It is the period time a user is actively engaged with your website, page or app, etc</p>
                    <div id="sales-chart-legend" class="chartjs-legend mt-4 mb-2"></div>
                    <canvas id="sales-chart"></canvas>
                  </div>
                </div>
              </div>


          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    
    <!-- plugins:js -->
    <script src="{{ asset('admin/assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->

    <!-- inject:js -->
    <script src="{{ asset('admin/assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('admin/assets/js/template.js') }}"></script>
    <script src="{{ asset('admin/assets/js/settings.js') }}"></script>
    <script src="{{ asset('admin/assets/js/todolist.js') }}"></script>
    <!-- endinject -->

    <!-- Plugin js for this page -->
    <script src="{{ asset('admin/assets/vendors/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/datatables.net/jquery.dataTables.js') }}"></script>
    <script src="assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
    <script src="{{ asset('admin/assets/vendors/datatables.net-bs5/dataTables.bootstrap5.js') }}"></script>
    <script src="{{ asset('admin/assets/js/dataTables.select..min.js') }}"></script>

    <!-- Custom js for this page-->
    <script src="{{ asset('admin/assets/js/jquery.cookie.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/js/dashboard.js') }}"></script>
    <!-- End custom js for this page-->

    <!-- Plugin js for this page , untuk dropdown navbar-->
    <script src="{{ asset('admin/assets/vendors/typeahead.js/typeahead.bundle.min.js') }}"></script>
    <!-- End plugin js for this page -->

 
  </body>
</html>