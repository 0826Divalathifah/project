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
        <a class="navbar-brand brand-logo me-5" href="{{ url ('/adminbudaya') }}" >
            <img src="{{ asset('themewagon/img/logo/logo_header.png') }}" alt="Logo Kabupaten Sleman" style="width: 110 px; height: 52px;">
          </a>
          <a class="navbar-brand brand-logo-mini" href="{{ url('/adminbudaya') }}">
            <img src="{{ asset('themewagon/img/logo/logo kabupaten sleman.png') }}"  alt="Logo Kabupaten Sleman" style="width: 100 px; height: 40px;">
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
        <div class="col-md-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
              <p class="card-title">Kelola Budaya</p>
              <a href="{{ url('tambahbudaya') }}" class="btn btn-primary">Tambah Budaya</a>
            </div>

            <div id="messages" style="display: none;">
                <!-- Pesan sukses dari session -->
                @if(session('success'))
                    <div data-success="{{ session('success') }}"></div>
                @endif

                <!-- Pesan error dari session -->
                @if(session('error'))
                    <div data-error="{{ session('error') }}"></div>
                @endif
            </div>

            <div class="table-responsive">
                <table class="table table-striped table-borderless">
                    <thead>
                        <tr>
                            <th>Nama Budaya</th>
                            <th>Nama Desa Budaya</th>
                            <th>Alamat</th>
                            <th>Kisaran Harga</th>
                            <th>Link Youtube</th>
                            <th>Nomor WhatsApp</th>
                            <th>Deskripsi</th>
                            <th>Foto Card</th>
                            <th>Foto Slider</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($budaya as $item)
                    <tr>
                        <td>{{ $item->nama_budaya }}</td>
                        <td>{{ $item->nama_desa_budaya }}</td>
                        <td>{{ \Illuminate\Support\Str::limit($item->alamat, 20, '...') }}</td>
                        <td>Rp {{ $item->harga_min }} - Rp {{ $item->harga_max }}</td>
                        <td><a href="{{ $item->link_youtube }}">Lihat Video</a></td>
                        <td><a href="https://wa.me/{{ $item->nomor_whatsapp }}">Hubungi</a></td>
                        <td>{{ \Illuminate\Support\Str::limit($item->deskripsi, 20, '...') }}</td>
                        
                        <!-- Foto Card -->
                        <td><img src="{{ asset('storage/' . $item->foto_card) }}" alt="Foto Card" width="100"></td>

                        <!-- Foto Slider -->
                        <td>
                            @if (!empty($item->foto_slider) && is_array(json_decode($item->foto_slider, true)))
                                @foreach (json_decode($item->foto_slider, true) as $index => $foto)
                                    @if ($index < 3) <!-- Tampilkan hanya 3 foto pertama -->
                                        <img src="{{ asset('storage/' . $foto) }}" alt="Foto Slider" width="100" style="margin-bottom: 5px;">
                                    @endif
                                @endforeach
                                @if (count(json_decode($item->foto_slider, true)) > 3)
                                    <p>...dan lainnya</p> <!-- Indikasi ada lebih banyak foto -->
                                @endif
                            @else
                                <p>Tidak ada foto slider</p>
                            @endif
                        </td>
                       
                        <!-- Tombol Edit dan Hapus -->
                        <td>
                            <!-- Tombol Edit -->
                            <a href="{{ url('/editBudaya/' . $item->id) }}" class="btn btn-primary btn-sm">Edit</a>

                            <!-- Tombol Hapus -->
                            <form id="delete-form-{{ $item->id }}" action="{{ url('hapusBudaya/' . $item->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-danger btn-sm" onclick="confirmDelete({{ $item->id }}, 'budaya')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
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
