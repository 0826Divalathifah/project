<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Tambah Wisata</title>
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
          
    <div class="breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ url('/kelolawisata') }}">Kelola Wisata</a></li>
                        <li class="breadcrumb-item"><a href="#"> Tambah Wisata</a></li>
                    </ol>
                </nav>

    <div class="col-12 grid-margin stretch-card">
    <div class="card">
        <form id="formTambahWisata" action="#" method="POST" enctype="multipart/form-data">
            @csrf 
            <div class="card-body">
                <h4 class="card-title">Formulir Tambah Wisata</h4>
                <p class="card-description">Lengkapi kolom formulir di bawah ini</p>

                <!-- Input Nama Wisata -->
                <div class="form-group">
                    <label for="namaWisata">Nama Wisata</label>
                    <input type="text" class="form-control" id="namaWisata" name="nama_wisata" placeholder="Masukkan nama wisata" required>
                </div>

                <!-- Input Harga (opsional) -->
                <div class="mb-3">
                    <label for="hargaWisata" class="form-label">Harga Tiket Masuk (opsional)</label>
                    <div class="input-group">
                        <span class="input-group-text">Rp</span>
                        <input type="text" class="form-control rounded" id="hargaWisata" name="harga" aria-label="Harga" placeholder="Masukkan harga" oninput="formatCurrency(this)">
                    </div>
                </div>

                <!-- Input URL Google Maps -->
                <div class="form-group">
                    <label for="mapsLink">Link Google Maps</label>
                    <input type="url" class="form-control" id="mapsLink" name="maps_link" placeholder="Masukkan Link Google Maps" pattern="https://.*" required>
                    <small class="form-text text-muted">Masukkan link Google Maps yang valid, mulai dengan "https://".</small>
                </div>

                <!-- Input Deskripsi -->
                <div class="form-group">
                    <label for="deskripsiWisata">Deskripsi Wisata</label>
                    <textarea class="form-control" id="deskripsiWisata" name="deskripsi" rows="5" placeholder="Masukkan deskripsi wisata" required></textarea>
                </div>

                <!-- Input Foto Card -->
                <div class="form-group">
                    <label>Unggah Foto Card Wisata (Ukuran 300 x 150 px)</label>
                    <input type="file" name="foto_card" class="file-upload-default" required>
                    <div class="input-group col-xs-12 d-flex align-items-center">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Unggah foto card" required>
                        <span class="input-group-append ms-2">
                            <button class="file-upload-browse btn btn-primary" type="button">Unggah</button>
                        </span>
                    </div>
                </div>

                <!-- Input Foto Wisata -->
                <div class="form-group">
                    <label>Unggah Foto-Foto Wisata</label>
                    <input type="file" name="foto_wisata[]" class="file-upload-default" id="fileInput" multiple required>
                    <div class="input-group col-xs-12 d-flex align-items-center">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Silahkan Upload Lebih dari 1 Foto" required>
                        <span class="input-group-append ms-2">
                            <button class="file-upload-browse btn btn-primary" type="button">Unggah</button>
                        </span>
                    </div>
                </div>

                <!-- Input Dinamis untuk Hari dan Jam Kunjung -->
                <div class="form-group">
                    <label>Waktu Kunjung</label>
                    <div id="waktuKunjungWrapper">
                        <div class="input-group mb-3 waktu-kunjung">
                            <select class="form-control me-2" name="hari[]" required>
                                <option value="">Pilih Hari</option>
                                <option value="Setiap Hari">Setiap Hari</option>
                                <option value="Senin">Senin</option>
                                <option value="Selasa">Selasa</option>
                                <option value="Rabu">Rabu</option>
                                <option value="Kamis">Kamis</option>
                                <option value="Jumat">Jumat</option>
                                <option value="Sabtu">Sabtu</option>
                                <option value="Minggu">Minggu</option>
                            </select>
                            <input type="time" class="form-control me-2" name="jam_mulai[]" required>
                            <span class="input-group-text">s/d</span>
                            <input type="time" class="form-control ms-2" name="jam_selesai[]" required>
                            <button type="button" class="btn btn-danger btn-sm ms-2 removeWaktuKunjung">Hapus</button>
                        </div>
                    </div>
                    <button type="button" class="btn btn-inverse-primary btn-fw" id="addWaktuKunjung">Tambah Waktu Kunjung</button>
                </div>

                <!-- Submit Button -->
                <button type="submit" id="submitWisata" class="btn btn-primary me-2">Submit</button>
            </div>
        </form>
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
    <script src="{{ asset('admin/assets/js/waktuKunjung.js') }}"></script>
    <!-- End custom js for this page-->
</body>
</html>