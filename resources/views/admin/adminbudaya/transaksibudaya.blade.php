<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Transaksi</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <!-- endinject -->
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
              <a class="nav-link" href="{{ asset('/adminbudaya') }}">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#budaya" aria-expanded="false" aria-controls="ui-basic">
                <i class="mdi mdi-shape-plus menu-icon"></i>
                <span class="menu-title">Kelola Budaya</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="budaya">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="{{ url('/kelolabudaya') }}">Kelola Budaya</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{ url('/transaksibudaya') }}">Kelola Home Page</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/laporanbudaya') }}">
                <i class="icon-paper menu-icon"></i>
                <span class="menu-title">Laporan Admin Budaya</span>
              </a>
            </li>
          </ul>
        </nav>

        
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">

            <div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Tabel Transaksi Penyewaan Budaya</h4>
      <p class="card-description"> Konfirmasi Pesanan </p>
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th> ID Pesanan </th>
              <th> Nama Pengguna </th>
              <th> Budaya </th>
              <th> Tanggal Penyewaan </th>
              <th> Status Pembayaran </th>
              <th> Konfirmasi Admin </th>
              <th> Jumlah Pembayaran </th>
              <th> Status Pembayaran </th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td> 001 </td>
              <td> John Doe </td>
              <td> Jathilan </td>
              <td> 15 Oktober 2024 </td>
              <td> Lunas </td>
              <td>
                <div class="dropdown">
                  <button class="btn btn-warning btn-sm dropdown-toggle" type="button" id="dropdownMenuSizeButton3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Diproses
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuSizeButton3">
                    <a class="dropdown-item" href="#" onclick="updateButton('btn-primary', 'Diterima')">Diterima </a>
                    <a class="dropdown-item" href="#" onclick="updateButton('btn-danger', 'Ditolak')">Ditolak </a>
                  </div>
                </div>
              </td>
              <td> Rp 1.500.000 </td>
              <td>  
                <div class="dropdown">
                <label class="badge badge-danger btn-sm dropdown-toggle" type="label" id="dropdownMenuSizeButton3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Belum Bayar 
                <div class="dropdown-menu" aria-labelledby="dropdownMenuSizeButton3">
                          <a class="dropdown-item" href="#" onclick="updateButton('badge-primary', 'Diterima')">Sudah Bayar</a>
                </div>
                </dv>
            </tr>
            <tr>
              <td> 002 </td>
              <td> Jane Smith </td>
              <td> Kethoprak </td>
              <td> 20 Oktober 2024 </td>
              <td> Belum Dibayar </td>
              <td>
                <div class="dropdown">
                  <button class="btn btn-warning btn-sm dropdown-toggle" type="button" id="dropdownMenuSizeButton3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Diproses
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuSizeButton3">
                    <a class="dropdown-item" href="#" onclick="updateButton('btn-primary', 'Diterima')">Diterima </a>
                    <a class="dropdown-item" href="#" onclick="updateButton('btn-danger', 'Ditolak')">Ditolak </a>
                  </div>
                </div>
              </td>
              <td> Rp 2.000.000 </td>
            </tr>
          </tbody>
        </table>
      </div>
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
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('admin/assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('admin/assets/js/template.js') }}"></script>
    <script src="{{ asset('admin/assets/js/settings.js') }}"></script>
    <script src="{{ asset('admin/assets/js/todolist.js') }}"></script>
    <script src="{{ asset('admin/assets/js/dropdownbutton.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <!-- End custom js for this page-->
  </body>
</html>