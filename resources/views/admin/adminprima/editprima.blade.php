<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Edit Prima</title>
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
              <a class="nav-link" href="{{ asset('/adminprima') }}">
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
    <div class="row">     
    <!--<div class="breadcrumb">
      <nav aria-label="breadcrumb">
          <ol class="breadcrumb justify-content-center">
              <li class="breadcrumb-item"><a href="{{ url('/kelolaprima') }}">Kelola prima</a></li>
              <li class="breadcrumb-item"><a href="#"> Edit Prima</a></li>
          </ol>
      </nav>
    </div>-->
    <div class="col-12 grid-margin stretch-card">
      <div class="card">
      <form action="{{ url('updateprima/' . $produk->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

          <div class="card-body">
              <h4 class="card-title">Formulir Edit Produk</h4>
              <p class="card-description">Perbarui kolom formulir di bawah ini</p>

              <!-- Input Kategori -->
              <div class="form-group">
                  <label>Pilih Kategori</label>
                  <select name="kategori_produk" class="form-control w-100" required>
                      <option value="">Pilih Kategori</option>
                      <option value="makanan" {{ $produk->kategori_produk == 'makanan' ? 'selected' : '' }}>Makanan dan Minuman</option>
                      <option value="kerajinan" {{ $produk->kategori_produk == 'kerajinan' ? 'selected' : '' }}>Kerajinan dan Aksesoris</option>
                  </select>
              </div>

              <!-- Input Nama Produk -->
              <div class="form-group">
                  <label for="namaProduk">Nama Produk</label>
                  <input type="text" class="form-control" id="namaProduk" name="nama_produk" value="{{ $produk->nama_produk }}" required>
              </div>

              <!-- Input Harga -->
              <div class="form-group">
                  <label for="hargaPrima">Harga</label>
                  <div class="input-group">
                      <span class="input-group-text">Rp</span>
                      <input type="text" class="form-control" id="hargaPrima" name="harga_produk" value="{{$produk->harga_produk }}" oninput="formatCurrency(this)" required>
                  </div>
              </div>

              <!-- Input Nomor WhatsApp -->
              <div class="form-group">
                  <label for="whatsappNumber">Nomor WhatsApp Aktif</label>
                  <input type="tel" class="form-control" id="whatsappNumber" name="nomor_whatsapp" value="{{ $produk->nomor_whatsapp }}" required>
              </div>

              <!-- Input Deskripsi -->
              <div class="form-group">
                  <label for="deskripsi">Deskripsi</label>
                  <textarea class="form-control" id="deskripsi" name="deskripsi" rows="5" required>{{ $produk->deskripsi }}</textarea>
              </div>

              <!-- Input Foto Card -->
              <div class="form-group">
                  <label>Unggah Foto Card (Opsional)</label>
                  <input type="file" name="foto_card" class="form-control" accept="image/*">
                  @if($produk->foto_card)
                      <p class="mt-2">Foto Card Saat Ini:</p>
                      <img src="{{ asset('storage/' . $produk->foto_card) }}" alt="Foto Card" style="width: 150px; height: auto;">
                  @endif
              </div>

              <!-- Input Foto Produk -->
              <div class="form-group">
                  <label>Unggah Foto Produk (Opsional)</label>
                  <input type="file" name="foto_produk[]" class="form-control" multiple accept="image/*">
                  @if($produk->foto_produk)
                      <p class="mt-2">Foto Produk Sebelumnya:</p>
                      <div class="d-flex flex-wrap">
                          @foreach (json_decode($produk->foto_produk, true) as $foto)
                              <img src="{{ asset('storage/' . $foto) }}" alt="Foto Produk" class="me-2 mb-2" style="width: 100px; height: 100px; object-fit: cover; border: 1px solid #ddd;">
                          @endforeach
                      </div>
                  @endif
              </div>

              <!-- Tombol Submit -->
              <button type="submit" class="btn btn-primary">Update</button>
          </div>
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
    <!-- End custom js for this page-->
</body>
</html>
