<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Tambah Budaya</title>
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
              <a class="nav-link" href="{{ asset('/adminbudaya') }}">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Dashboard</span>
              </a>
          </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/kelolabudaya') }}">
                <i class="mdi mdi-home menu-icon"></i>
                <span class="menu-title">Kelola Budaya</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/kelolahomepage') }}">
                <i class="mdi mdi-home menu-icon"></i>
                <span class="menu-title">Kelola Home Page</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/laporanbudaya') }}">
                <i class="icon-paper menu-icon"></i>
                <span class="menu-title">Laporan Admin Budaya</span>
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
                        <li class="breadcrumb-item"><a href="{{ url('/kelolabudaya') }}">Kelola Budaya</a></li>
                        <li class="breadcrumb-item"><a href="#"> Tambah Budaya</a></li>
                    </ol>
                </nav>
    <div class="col-12 grid-margin stretch-card">
    <div class="card">
        <form id="formTambah" action="{{ url ('/tambahbudaya') }}" method="POST" enctype="multipart/form-data">
            @csrf 
            <div class="card-body">
                <h4 class="card-title">Formulir Tambah Budaya</h4>
                <p class="card-description"> Lengkapi kolom formulir di bawah ini </p>
                
                <div class="form-group">
                    <label>Pilih Budaya</label>
                    <select name="budaya" class="js-example-basic-single w-100" required>
                        <option value="">Pilih Budaya</option>
                        <option value="AL">Kesenian</option>
                        <option value="WY">Adat Istiadat</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="exampleInputName1">Nama Budaya</label>
                    <input type="text" name="nama_budaya" class="form-control" placeholder="contoh: 'Karawitan Miguyoh Rasa'" required>
                </div>
                
                <div class="form-group">
                    <label for="exampleInputName1">Alamat</label>
                    <input type="text" name="alamat" class="form-control" placeholder="Alamat" required>
                </div>

                <div class="mb-3">
                    <label for="hargaBudaya" class="form-label">Harga</label>
                    <div class="input-group">
                        <span class="input-group-text">Rp</span>
                        <input type="text" name="harga" class="form-control rounded" aria-label="Harga" placeholder="Masukkan harga" oninput="formatCurrency(this)" required>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="youtubeLink">Link Youtube</label>
                    <input type="url" name="youtube_link" class="form-control" placeholder="Masukkan Link Youtube" pattern="https://.*" required>
                    <small class="form-text text-muted">Masukkan link Youtube yang valid, mulai dengan "https://".</small>
                </div>
                
                <div class="form-group">
                    <label for="whatsappNumber">Nomor WhatsApp Aktif</label>
                    <input type="number" name="whatsapp_number" class="form-control" placeholder="Masukkan Nomor WhatsApp" min="0" required>
                </div>

                <div class="form-group">
                    <label for="mapsLink">Link Google Maps</label>
                    <input type="url" name="maps_link" class="form-control" placeholder="Masukkan Link Google Maps" pattern="https://.*" required>
                    <small class="form-text text-muted">Masukkan link Google Maps yang valid, mulai dengan "https://".</small>
                </div>

                <div class="form-group">
                    <label for="exampleTextarea1">Deskripsi</label>
                    <textarea name="deskripsi" class="form-control" id="exampleTextarea1" rows="5" required></textarea>
                </div>

                <div class="form-group">
                    <label>Unggah Foto Card</label>
                    <input type="file" name="img[]" class="file-upload-default" required>
                    <div class="input-group col-xs-12 d-flex align-items-center">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Ukuran 300 x 150 px">
                        <span class="input-group-append ms-2">
                            <button class="file-upload-browse btn btn-primary" type="button">Unggah</button>
                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label>Unggah Foto-Foto Kebudayaan</label>
                    <input type="file" name="img[]" class="file-upload-default" id="fileInput" multiple required>
                    <div class="input-group col-xs-12 d-flex align-items-center">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Silahkan Upload Lebih dari 1 Foto">
                        <span class="input-group-append ms-2">
                            <button class="file-upload-browse btn btn-primary" type="button">Unggah</button>
                        </span>
                    </div>
                </div>

                <button type="submit" id="submit" class="btn btn-primary me-2">Submit</button>
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

    <!-- End custom js for this page-->
</body>
</html>