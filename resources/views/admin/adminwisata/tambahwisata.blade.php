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
        <a class="navbar-brand brand-logo me-5" href="{{ url ('/adminwisata') }}" >
            <img src="{{ asset('beranda/img/logo/logo_header.png') }}" alt="Logo Kabupaten Sleman" style="width: 110 px; height: 52px;">
          </a>
          <a class="navbar-brand brand-logo-mini" href="{{ url('/adminwisata') }}">
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
              <a class="nav-link" href="{{ asset('/adminwisata') }}">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Dashboard</span>
              </a>
          </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/kelolawisata') }}">
                <i class="mdi mdi-shape-plus menu-icon"></i>
                <span class="menu-title">Kelola Wisata</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/kelolahomepagewisata') }}">
                <i class="mdi mdi-home menu-icon"></i>
                <span class="menu-title">Kelola Home Page</span>
              </a>
            </li>
           <!-- <li class="nav-item">
              <a class="nav-link" href="{{ url('/laporanbudaya') }}">
                <i class="icon-paper menu-icon"></i>
                <span class="menu-title">Laporan Admin Budaya</span>
              </a>
            </li>-->
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
    <form id="formTambahWisata" action="{{ url('/simpanWisata') }}" method="POST" enctype="multipart/form-data">
            @csrf 
            <div class="card-body">
                <h4 class="card-title">Formulir Tambah Wisata</h4>
                <p class="card-description">Lengkapi kolom formulir di bawah ini</p>

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
                        <input type="text" class="form-control rounded" id="hargaWisata" name="harga_masuk" aria-label="Harga" placeholder="Masukkan harga" oninput="formatCurrency(this)">
                    </div>
                </div>

                <!-- Input Alamat -->
                <div class="form-group">
                  <label for="alamat">Alamat</label>
                  <input type="text" class="form-control" id="alamat" name="alamat" value="{{ old('alamat') }}" placeholder="Masukkan alamat wisata" required>
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

                <!-- Input Foto Brosur -->
                <div class="form-group">
                    <label>Unggah Foto Brosur Wisata (Optional)</label>
                    <input type="file" name="brosur" class="file-upload-default" required>
                    <div class="input-group col-xs-12 d-flex align-items-center">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Unggah foto brosur jika ada" >
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
                            <input type="time" class="form-control me-2" name="jam_buka[]" required>
                            <span class="input-group-text">s/d</span>
                            <input type="time" class="form-control ms-2" name="jam_tutup[]" required>
                            <button type="button" class="btn btn-danger btn-sm ms-2 removeWaktuKunjung">Hapus</button>
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary mt-2" id="addWaktuKunjung">Tambah Waktu Kunjung</button>
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
