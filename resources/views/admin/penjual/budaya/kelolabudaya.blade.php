<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Kelola Budaya</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <!-- endinject -->


    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/select2/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
 
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
        <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
              <p class="card-title">Kelola Produk</p>
              <a href="{{ url('tambahbudaya') }}" class="btn btn-primary">Tambah Budaya</a>
            </div>
              <div class="table-responsive">
                <table class="table table-striped table-borderless">
                  <thead>
                    <tr>
                    <th>Nama Produk</th>
                  <th>Kategori</th>
                  <th>Alamat</th>
                  <th>Kisaran Harga</th>
                  <th>Link Youtube</th>
                  <th>Nomor WhatsApp</th>
                  <th>Link Google Maps</th>
                  <th>Deskripsi</th>
                  <th>Foto Card</th>
                  <th>Foto Slider</th>
                  <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                  <tr>
                  <td>Produk 1</td>
                  <td>Makanan</td>
                  <td>Jl. Contoh No. 1</td>
                  <td>Rp 50.000 - Rp 100.000</td>
                  <td><a href="#">Lihat Video</a></td>
                  <td><a href="https://wa.me/628xxxxxxx">Hubungi</a></td>
                  <td><a href="https://goo.gl/maps/xxxx">Lihat Peta</a></td>
                  <td>Deskripsi singkat produk 1</td>
                  <td><img src="path/to/foto-card.jpg" alt="Foto Card" width="100"></td>
                  <td><img src="path/to/foto-slider.jpg" alt="Foto Slider" width="100"></td>
                  <td>
                      <button class="btn btn-primary btn-sm">Edit</button>
                      <button class="btn btn-danger btn-sm">Hapus</button>
                  </td>
              </tr>
              <tr>
                  <td>Produk 1</td>
                  <td>Makanan</td>
                  <td>Jl. Contoh No. 1</td>
                  <td>Rp 50.000 - Rp 100.000</td>
                  <td><a href="#">Lihat Video</a></td>
                  <td><a href="https://wa.me/628xxxxxxx">Hubungi</a></td>
                  <td><a href="https://goo.gl/maps/xxxx">Lihat Peta</a></td>
                  <td>Deskripsi singkat produk 1</td>
                  <td><img src="path/to/foto-card.jpg" alt="Foto Card" width="100"></td>
                  <td><img src="path/to/foto-slider.jpg" alt="Foto Slider" width="100"></td>
                  <td>
                      <button class="btn btn-primary btn-sm">Edit</button>
                      <button class="btn btn-danger btn-sm">Hapus</button>
                  </td>
                  </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

    </div>
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

    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('admin/assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('admin/assets/vendors/typeahead.js/typeahead.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/select2/select2.min.js') }}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('admin/assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('admin/assets/js/template.js') }}"></script>
    <script src="{{ asset('admin/assets/js/settings.js') }}"></script>
    <script src="{{ asset('admin/assets/js/todolist.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{ asset('admin/assets/js/file-upload.js') }}"></script>
    <script src="{{ asset('admin/assets/js/typeahead.js') }}"></script>
    <script src="{{ asset('admin/assets/js/select2.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('admin/assets/js/formValidation.js') }}"></script>
    <!-- End custom js for this page-->

</body>
</html>