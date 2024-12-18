<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Edit Budaya</title>
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
        <a class="navbar-brand brand-logo me-5" href="{{ url ('/adminbudaya') }}" >
            <img src="{{ asset('beranda/img/logo/logo_header.png') }}" alt="Logo Kabupaten Sleman" style="width: 110 px; height: 52px;">
          </a>
          <a class="navbar-brand brand-logo-mini" href="{{ url('/adminbudaya') }}">
            <img src="{{ asset('beranda/img/logo/logo kabupaten sleman.png') }}"  alt="Logo Kabupaten Sleman" style="width: 100 px; height: 40px;">
          </a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="icon-menu"></span>
          </button>
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
              <a class="nav-link" href="{{ asset('/adminbudaya') }}">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Dashboard</span>
              </a>
          </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/kelolabudaya') }}">
                <i class="mdi mdi-shape-plus menu-icon"></i>
                <span class="menu-title">Kelola Budaya</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/kelolaagenda') }}">
                <i class="mdi mdi-calendar-plus menu-icon"></i>
                <span class="menu-title">Kelola Agenda</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/kelolahomepagebudaya') }}">
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
                        <li class="breadcrumb-item"><a href="{{ url('/kelolabudaya') }}">Kelola Budaya</a></li>
                        <li class="breadcrumb-item"><a href="#"> Edit Budaya</a></li>
                    </ol>
                </nav>
    <div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Formulir Edit Budaya</h4>
            <p class="card-description">Ubah Budaya dengan mengedit kolom formulir di bawah ini</p>

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

            {{-- Form untuk mengupdate budaya --}}
            <form action="/updateBudaya/{{ $budaya->id }}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')

                {{-- Nama Budaya --}}
                <div class="form-group">
                    <label for="nama_budaya">Nama Budaya</label>
                    <input type="text" name="nama_budaya" class="form-control" value="{{ old('nama_budaya', $budaya->nama_budaya) }}" placeholder="contoh: 'Karawitan Miguyoh Rasa'" required>
                </div>

                {{-- Nama Desa Budaya --}}
                <div class="form-group">
                    <label for="nama_desa_budaya">Nama Desa Budaya</label>
                    <input type="text" name="nama_desa_budaya" class="form-control" value="{{ old('nama_desa_budaya', $budaya->nama_desa_budaya) }}" placeholder="contoh: 'Desa Budaya Gentan'" required>
                </div>

                {{-- Alamat --}}
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" class="form-control" value="{{ old('alamat', $budaya->alamat) }}" placeholder="Alamat" required>
                </div>

                {{-- Harga Minimum --}}
                <div class="form-group">
                    <label for="harga_min">Harga Minimum (optional)</label>
                    <div class="input-group">
                        <span class="input-group-text">Rp</span>
                        <input type="text" name="harga_min" class="form-control rounded" value="{{ old('harga_min', $budaya->harga_min) }}" placeholder="Masukkan harga minimum" oninput="formatCurrency(this)">
                    </div>
                </div>

                {{-- Harga Maksimum --}}
                <div class="form-group">
                    <label for="harga_max">Harga Maksimum (optional)</label>
                    <div class="input-group">
                        <span class="input-group-text">Rp</span>
                        <input type="text" name="harga_max" class="form-control rounded" value="{{ old('harga_max', $budaya->harga_max) }}" placeholder="Masukkan harga maksimum" oninput="formatCurrency(this)">
                        
                    </div>
                </div>

                {{-- Link Youtube --}}
                <div class="form-group">
                    <label for="link_youtube">Link Youtube</label>
                    <input type="url" name="link_youtube" class="form-control" value="{{ old('link_youtube', $budaya->link_youtube) }}" placeholder="Masukkan Link Youtube" pattern="https://.*" required>
                    <small class="form-text text-muted">Masukkan link Youtube yang valid, mulai dengan "https://".</small>
                </div>

                {{-- Nomor WhatsApp --}}
                <div class="form-group">
                    <label for="nomor_whatsapp">Nomor WhatsApp Aktif</label>
                    <input type="text" name="nomor_whatsapp" class="form-control" value="{{ old('nomor_whatsapp', $budaya->nomor_whatsapp) }}" placeholder="Masukkan Nomor WhatsApp" required>
                </div>

                {{-- Deskripsi --}}
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea name="deskripsi" class="form-control" id="deskripsi" rows="5" required>{{ old('deskripsi', $budaya->deskripsi) }}</textarea>
                </div>

                {{-- Foto Card --}}
                <div class="form-group">
                    <label>Unggah Foto Card</label>

                    <!-- Menampilkan Foto yang Sudah Ada (dengan opsi hapus) -->
                    @if ($budaya->foto_card)
                    <div id="existing-photos" style="margin-bottom: 15px;">
                        <div class="photo-preview" style="display: inline-block; margin-right: 10px; position: relative;">
                            <!-- Gambar diatur block untuk memastikan berada di bawah label -->
                            <img src="{{ asset('storage/' . $budaya->foto_card) }}" alt="Foto Card" width="100" >
                            <button type="button" class="btn-close remove-photo" aria-label="Close" 
                                    style="position: absolute; top: 5px; right: 5px; background-color: white; border: none; border-radius: 50%; padding: 2px 6px; cursor: pointer; color: red;" 
                                    data-foto="{{ $budaya->foto_card }}">
                                &times;
                            </button>
                            <input type="hidden" name="existing_photos[]" value="{{ $budaya->foto_card }}">
                        </div>
                    @endif

                    <!-- Field untuk Upload Gambar Baru -->
                    <input type="file" name="foto_card" class="file-upload-default">
                    <div class="input-group col-xs-12 d-flex align-items-center">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Ukuran 300 x 150 px">
                        <span class="input-group-append ms-2">
                            <button class="file-upload-browse btn btn-primary" type="button">Unggah</button>
                        </span>
                    </div>
                </div>

                
                {{-- Foto Slider --}}
                <div class="form-group">
                    <label>Unggah Foto-Foto Kebudayaan</label>

                    <!-- Menampilkan Foto yang Sudah Ada (dengan opsi hapus) -->
                    @if (!empty($budaya->foto_slider) && is_array(json_decode($budaya->foto_slider, true)))
                        <div id="existing-photos" style="margin-bottom: 15px;">
                            @foreach (json_decode($budaya->foto_slider, true) as $foto)
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

                    <!-- Field untuk Upload Gambar Baru -->
                    <input type="file" name="foto_slider[]" class="file-upload-default" multiple>
                    <div class="input-group col-xs-12 d-flex align-items-center">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Silahkan Upload Lebih dari 1 Foto">
                        <span class="input-group-append ms-2">
                            <button class="file-upload-browse btn btn-primary" type="button">Unggah</button>
                        </span>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary me-2">Submit</button>
                <a href="{{ url('/kelolabudaya') }}" class="btn btn-light">Kembali</a>
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
    <script src="{{ asset('admin/assets/js/photoManager.js') }}"></script>             
    <!-- End custom js for this page-->
</body>
</html>
