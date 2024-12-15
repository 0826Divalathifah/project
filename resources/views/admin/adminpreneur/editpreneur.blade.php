<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Edit Preneur</title>
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
        <a class="nav-link"  href="{{ url('/adminpreneur') }}">
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
        <a class="nav-link" href="{{ url('/laporanprima') }}">
          <i class="icon-paper menu-icon"></i>
          <span class="menu-title">Laporan Desa Prima</span>
        </a>
      </li>-->
    </nav>
    <div class="main-panel">
    <div class="content-wrapper">
    <div class="row">   
      <div class="breadcrumb">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="{{ url('/kelolapreneur') }}">Kelola Preneur</a></li>
                <li class="breadcrumb-item"><a href="#"> Edit Preneur</a></li>
            </ol>
        </nav>

    <div class="col-12 grid-margin stretch-card">
      <div class="card">
      <form action="{{ url('updatePreneur', $preneur->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')<!-- Tambahkan metode PUT untuk update -->
            <div class="card-body">
                <h4 class="card-title">Formulir Edit Produk</h4>
                <p class="card-description">Perbarui kolom formulir di bawah ini</p>

                {{-- Notifikasi berhasil atau error --}}
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- Input Kategori -->
              <div class="form-group">
                  <label>Pilih Kategori</label>
                  <select name="kategori_produk" class="form-control w-100" required>
                      <option value="">Pilih Kategori</option>
                      <option value="makanan" {{ old('kategori_produk', $preneur->kategori_produk) == 'makanan' ? 'selected' : '' }}>Makanan dan Minuman</option>
                      <option value="kerajinan" {{ old('kategori_produk', $preneur->kategori_produk) == 'kerajinan' ? 'selected' : '' }}>Kerajinan dan Aksesoris</option>
                  </select>
              </div>
              <!-- Input Nama Produk -->
              <div class="form-group">
                  <label for="nama_produk">Nama Produk</label>
                  <input type="text" class="form-control" id="namaProduk" name="nama_produk" value="{{ old('nama_produk', $preneur->nama_produk) }}" required>
              </div>

              <!-- Input Harga -->
              <div class="form-group">
                  <label for="harga_produk">Harga</label>
                  <div class="input-group">
                      <span class="input-group-text">Rp</span>
                      <input type="text" class="form-control" name="harga_produk" value="{{ old('harga_produk', $preneur->harga_produk) }}" oninput="formatCurrency(this)" required>
                  </div>
              </div>

              <!-- Input Nomor WhatsApp -->
              <div class="form-group">
                  <label for="nomor_whatsapp">Nomor WhatsApp Aktif</label>
                  <input type="tel" class="form-control" id="whatsappNumber" name="nomor_whatsapp" value="{{ old('nomor_whatsapp', $preneur->nomor_whatsapp) }}" placeholder="Masukkan Nomor WhatsApp" required>
              </div>

              <!-- Input Deskripsi -->
              <div class="form-group">
                  <label for="deskripsi">Deskripsi</label>
                  <textarea class="form-control" id="deskripsi" name="deskripsi" rows="5" required>{{ old('deskripsi', $preneur->deskripsi) }}</textarea>
              </div>

              <!-- Input Foto Card -->
              <div class="form-group">
                  <label>Unggah Foto Card</label>
                  @if ($preneur->foto_card)
                      <div style="margin-bottom: 15px;">
                          <img src="{{ asset('storage/' . $preneur->foto_card) }}" alt="Foto Card" width="100" style="display: block; margin-bottom: 10px;">
                          <input type="hidden" name="existing_foto_card" value="{{ $preneur->foto_card }}">
                      </div>
                  @endif
                  <input type="file" name="foto_card" class="file-upload-default">
                  <div class="input-group col-xs-12 d-flex align-items-center">
                      <input type="text" class="form-control file-upload-info" disabled placeholder="Ukuran 300 x 150 px">
                      <span class="input-group-append ms-2">
                          <button class="file-upload-browse btn btn-primary" type="button">Unggah</button>
                      </span>
                  </div>
              </div>

              <!-- Input Foto Slider -->
              <div class="form-group">
                  <label>Unggah Foto Slider</label>
                  @if (!empty($preneur->foto_slider) && is_array(json_decode($preneur->foto_slider, true)))
                      <div id="existing-photos" style="margin-bottom: 15px;">
                          @foreach (json_decode($preneur->foto_slider, true) as $foto)
                              <div class="photo-preview" style="display: inline-block; margin-right: 10px; position: relative;">
                                  <img src="{{ asset('storage/' . $foto) }}" alt="Foto Slider" width="100">
                                  <button type="button" class="btn-close remove-photo" aria-label="Close" 
                                          style="position: absolute; top: 5px; right: 5px; background-color: white; border: none; border-radius: 50%; padding: 2px 6px; cursor: pointer; color: red;"
                                          data-foto="{{ $foto }}"></button>
                                  <input type="hidden" name="existing_photos[]" value="{{ $foto }}">
                              </div>
                          @endforeach
                      </div>
                  @endif
                  <input type="file" name="foto_slider[]" class="file-upload-default" multiple>
                  <div class="input-group col-xs-12 d-flex align-items-center">
                      <input type="text" class="form-control file-upload-info" disabled placeholder="Silahkan Upload Lebih dari 1 Foto">
                      <span class="input-group-append ms-2">
                          <button class="file-upload-browse btn btn-primary" type="button">Unggah</button>
                      </span>
                  </div>
              </div>

              <!-- Tombol Submit -->
              <button type="submit" class="btn btn-primary">Update</button>
              <a href="{{ url('/kelolapreneur') }}" class="btn btn-light">Kembali</a>
          </form>
        <script>
            function formatCurrency(input) {
                let value = input.value.replace(/\D/g, ''); // Hapus semua karakter non-digit
                input.value = value; // Set nilai input hanya angka
            }
        </script>

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
    <script src="{{ asset('admin/assets/js/varianProduk.js') }}"></script>
    <script src="{{ asset('admin/assets/js/photoManager.js') }}"></script> 
    <!-- End custom js for this page-->
</body>
</html>