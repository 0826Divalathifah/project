<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Edit Wisata</title>
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
        <a class="navbar-brand brand-logo me-5" href="{{ url ('/adminwiata') }}" >
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
                        <li class="breadcrumb-item"><a href="#"> Edit Wisata</a></li>
                    </ol>
                </nav>
                <div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Formulir Edit Wisata</h4>
            <p class="card-description">Ubah Wisata dengan mengedit kolom formulir di bawah ini</p>

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

            {{-- Form untuk mengupdate wisata --}}
            <form action="/updateWisata/{{ $wisata->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                {{-- Nama Wisata --}}
                <div class="form-group">
                    <label for="namaWisata">Nama Wisata</label>
                    <input type="text" class="form-control" id="namaWisata" name="nama_wisata" value="{{ old('nama_wisata', $wisata->nama_wisata) }}" placeholder="Masukkan nama wisata" required>
                </div>

                {{-- Harga Masuk (Optional) --}}
                <div class="mb-3">
                    <label for="hargaWisata" class="form-label">Harga Tiket Masuk (opsional)</label>
                    <div class="input-group">
                        <span class="input-group-text">Rp</span>
                        <input type="text" class="form-control rounded" id="hargaWisata" name="harga_masuk" value="{{ old('harga_masuk', $wisata->harga_masuk) }}" aria-label="Harga" placeholder="Masukkan harga" oninput="formatCurrency(this)">
                    </div>
                </div>
                
                {{-- Alamat --}}
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" value="{{ old('alamat', $wisata->alamat) }}" placeholder="Masukkan alamat wisata" required>
                </div>

                {{-- Desripsi --}}
                <div class="form-group">
                    <label for="deskripsiWisata">Deskripsi Wisata</label>
                    <textarea class="form-control" id="deskripsiWisata" name="deskripsi" rows="5" placeholder="Masukkan deskripsi wisata" required>{{ old('deskripsi', $wisata->deskripsi) }}</textarea>
                </div>

                {{-- Foto Card --}}
                <div class="form-group">
                    <label>Unggah Foto Card Wisata</label>

                    <!-- Menampilkan Foto yang Sudah Ada (dengan opsi hapus) -->
                    @if ($wisata->foto_card)
                    <div id="existing-photos" style="margin-bottom: 15px;">
                        <div class="photo-preview" style="display: inline-block; margin-right: 10px; position: relative;">
                            <img src="{{ asset('storage/' . $wisata->foto_card) }}" alt="Foto Card Wisata" width="100">
                            <button type="button" class="btn-close remove-photo" aria-label="Close" 
                                    style="position: absolute; top: 5px; right: 5px; background-color: white; border: none; border-radius: 50%; padding: 2px 6px; cursor: pointer; color: red;" 
                                    data-foto="{{ $wisata->foto_card }}">
                                &times;
                            </button>
                            <input type="hidden" name="existing_photos[]" value="{{ $wisata->foto_card }}">
                        </div>
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

                {{-- Foto Brosur --}}
                <div class="form-group">
                    <label>Unggah Foto Brosur Wisata(Optional)</label>

                    <!-- Menampilkan Foto yang Sudah Ada (dengan opsi hapus) -->
                    @if ($wisata->brosur)
                    <div id="existing-photos" style="margin-bottom: 15px;">
                        <div class="photo-preview" style="display: inline-block; margin-right: 10px; position: relative;">
                            <img src="{{ asset('storage/' . $wisata->brosur) }}" alt="brosur" width="100">
                            <button type="button" class="btn-close remove-photo" aria-label="Close" 
                                    style="position: absolute; top: 5px; right: 5px; background-color: white; border: none; border-radius: 50%; padding: 2px 6px; cursor: pointer; color: red;" 
                                    data-foto="{{ $wisata->brosur }}">
                                &times;
                            </button>
                            <input type="hidden" name="existing_photos[]" value="{{ $wisata->brosur }}">
                        </div>
                    </div>
                    @endif

                    <!-- Field untuk Upload Gambar Baru -->
                    <input type="file" name="brosur" class="file-upload-default">
                    <div class="input-group col-xs-12 d-flex align-items-center">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Ukuran 300 x 150 px">
                        <span class="input-group-append ms-2">
                            <button class="file-upload-browse btn btn-primary" type="button">Unggah</button>
                        </span>
                    </div>
                </div>

                {{-- Foto Slider --}}
                <div class="form-group">
                    <label>Unggah Foto-Foto Wisata</label>

                    <!-- Menampilkan Foto yang Sudah Ada (dengan opsi hapus) -->
                    @if (!empty($wisata->foto_wisata) && is_array(json_decode($wisata->foto_wisata, true)))
                        <div id="existing-photos" style="margin-bottom: 15px;">
                            @foreach (json_decode($wisata->foto_wisata, true) as $foto)
                                <div class="photo-preview" style="display: inline-block; margin-right: 10px; position: relative;">
                                    <!-- Thumbnail Gambar -->
                                    <img src="{{ asset('storage/' . $foto) }}" alt="Foto Wisata" width="100" style="border: 1px solid #ddd; padding: 5px; border-radius: 5px;">
                                    
                                    <!-- Tombol Hapus -->
                                    <button type="button" class="btn-close remove-photo" aria-label="Close" 
                                            style="position: absolute; top: 5px; right: 5px; background-color: white; border: none; border-radius: 50%; padding: 2px 6px; cursor: pointer; color: red;"
                                            data-foto="{{ $foto }}"></button>
                                    
                                    <!-- Input Hidden untuk Gambar yang Ada -->
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

            {{-- Jam Kunjung --}}
            <div class="form-group">
                <label>Waktu Kunjung</label>
                <div id="waktuKunjungWrapper">
                    @php
                        $waktuKunjung = json_decode($wisata->waktu_kunjung, true);
                    @endphp

                    @if(!empty($waktuKunjung))
                        @foreach ($waktuKunjung as $kunjung)
                            <div class="input-group mb-3 waktu-kunjung">
                                <select class="form-control me-2" name="hari[]" required>
                                    <option value="">Pilih Hari</option>
                                    <option value="Setiap Hari" {{ $kunjung['hari'] == 'Setiap Hari' ? 'selected' : '' }}>Setiap Hari</option>
                                    <option value="Senin" {{ $kunjung['hari'] == 'Senin' ? 'selected' : '' }}>Senin</option>
                                    <option value="Selasa" {{ $kunjung['hari'] == 'Selasa' ? 'selected' : '' }}>Selasa</option>
                                    <option value="Rabu" {{ $kunjung['hari'] == 'Rabu' ? 'selected' : '' }}>Rabu</option>
                                    <option value="Kamis" {{ $kunjung['hari'] == 'Kamis' ? 'selected' : '' }}>Kamis</option>
                                    <option value="Jumat" {{ $kunjung['hari'] == 'Jumat' ? 'selected' : '' }}>Jumat</option>
                                    <option value="Sabtu" {{ $kunjung['hari'] == 'Sabtu' ? 'selected' : '' }}>Sabtu</option>
                                    <option value="Minggu" {{ $kunjung['hari'] == 'Minggu' ? 'selected' : '' }}>Minggu</option>
                                </select>
                                <input type="time" class="form-control me-2" name="jam_buka[]" value="{{ $kunjung['jam_buka'] }}" required>
                                <span class="input-group-text">s/d</span>
                                <input type="time" class="form-control ms-2" name="jam_tutup[]" value="{{ $kunjung['jam_tutup'] }}" required>
                                <button type="button" class="btn btn-danger btn-sm ms-2 removeWaktuKunjung">Hapus</button>
                            </div>
                        @endforeach
                    @else
                        <!-- Jika tidak ada data, tampilkan satu input kosong -->
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
                    @endif
                </div>
                <button type="button" class="btn btn-inverse-primary btn-fw" id="addWaktuKunjung">Tambah Waktu Kunjung</button>
            </div>
                <button type="submit" class="btn btn-primary me-2">Submit</button>
                <a href="{{ url('/kelolawisata') }}" class="btn btn-light">Kembali</a>
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
    <script src="{{ asset('admin/assets/js/waktuKunjung.js') }}"></script>
    <!-- End custom js for this page-->
</body>
</html>