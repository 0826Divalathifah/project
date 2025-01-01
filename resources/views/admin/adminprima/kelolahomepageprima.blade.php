<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Kelola Home Page Prima</title>
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
    <link rel="stylesheet" href="{{ asset('admin/assets/css/custom.css') }}">
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
                      <img src="{{ asset('beranda/img/logo/logo_header.png') }}" alt="Logo Kabupaten Sleman" style="width: 110 px; height: 52px;">
                    </a>
                    <a class="navbar-brand brand-logo-mini" href="{{ url('/penjual') }}">
                      <img src="{{ asset('beranda/img/logo/logo kabupaten sleman.png') }}"  alt="Logo Kabupaten Sleman" style="width: 100 px; height: 40px;">
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
                  <!-- Icon Power -->
                  <a class="nav-link d-flex align-items-center mx-3" href="#">
                      <i class="ti-power-off text-primary" style="font-size: 24px; margin-right: 10px;"></i>
                      <span style="font-size: 16px;">Logout</span>
                  </a>
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
                  <a class="nav-link"  href="{{ url('/adminprima') }}">
                    <i class="icon-grid menu-icon"></i>
                    <span class="menu-title">Dashboard</span>
                  </a>
              </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('/kelolaprima') }}">
                    <i class="mdi mdi-shape-plus menu-icon"></i>
                    <span class="menu-title">Kelola Produk</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('/kelolahomepageprima') }}">
                    <i class="mdi mdi-home menu-icon"></i>
                    <span class="menu-title">Kelola Home Page</span>
                  </a>
                </li>
                <!--<li class="nav-item">
                  <a class="nav-link" href="{{ url('/laporanprima') }}">
                    <i class="icon-paper menu-icon"></i>
                    <span class="menu-title">Laporan Desa Prima</span>
                  </a>
                </li>-->
            </nav>
            <!-- partial -->
          <div class="main-panel">
          <div class="content-wrapper">
          <div class="row"></div>

          <!-- Kelola Banner -->
          <div class="col-12 grid-margin stretch-card">
              <div class="card">
              <div class="card-body">
                <h4 class="card-title">Kelola Banner Desa Prima</h4>
                <div class="card-body">
                  <form class="forms-sample" action="{{ url('/updateBannerPrima') }}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <!-- Tampilkan Error Secara Statis -->
                      @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <!-- Tampilkan Sukses atau Error dengan SweetAlert -->
                            <div id="messages" style="display: none;">
                                @if(session('success'))
                                    <div data-success="{{ session('success') }}"></div>
                                @endif
                                @if(session('error'))
                                    <div data-error="{{ session('error') }}"></div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="bannerImage">Edit Banner</label>
                                <input type="file" name="banner_image" class="form-control" id="bannerImage" accept="image/*">
                            </div>
                      
                      <!-- Preview Gambar yang Tersimpan -->
                      @if(isset($homepageData) && isset($homepageData->gambar_banner))
                          <div class="form-group">
                              <img src="{{ asset('storage/'.$homepageData->gambar_banner) }}" alt="Current Banner" width="300" class="mt-2">
                          </div>
                      @else
                          <div class="form-group">
                              <p>Belum ada gambar banner yang diunggah untuk desa Prima.</p>
                          </div>
                      @endif

                      <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                  </form>
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
