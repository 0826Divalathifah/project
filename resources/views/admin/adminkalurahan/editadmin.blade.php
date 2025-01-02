<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Edit Admin</title>
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
        <a class="navbar-brand brand-logo me-5" href="{{ url ('/adminkalurahan') }}" >
            <img src="{{ asset('beranda/img/logo/logo_header.png') }}" alt="Logo Kabupaten Sleman" style="width: 110 px; height: 52px;">
          </a>
          <a class="navbar-brand brand-logo-mini" href="{{ url('/adminkalurahan') }}">
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
              <a class="nav-link" href="{{ asset('/adminkalurahan') }}">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Dashboard</span>
              </a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="{{ url('/kelolaadmin') }}">
                <i class="mdi mdi-shape-plus menu-icon"></i>
                <span class="menu-title">Kelola Admin</span>
              </a>
            </li>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/kelolafeedback') }}">
                  <i class="mdi mdi-comment-text menu-icon"></i>
                  <span class="menu-title">Kelola Feedback</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/kelolahomepage') }}">
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
                <li class="breadcrumb-item"><a href="{{ url('/kelolaadmin') }}">Kelola Admin</a></li>
                <li class="breadcrumb-item"><a href="#"> Edit Admin</a></li>
            </ol>
        </nav>
        <div class="col-12 grid-margin stretch-card">
    <div class="card">
    <form id="formEdit" action="{{ url('/updateAdmin/' . $users->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT') <!-- Ini untuk menggunakan HTTP PUT method, yang menunjukkan bahwa ini adalah update -->
    <!-- form content -->
<div class="card-body">
    <h4 class="card-title">Formulir Edit Admin</h4>
    <p class="card-description">Lengkapi kolom formulir di bawah ini</p>

    <!-- Notifikasi Sukses -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Notifikasi Error -->
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Input Nama Admin -->
    <div class="form-group">
        <label for="name">Nama Admin</label>
        <input type="text" name="name" class="form-control" placeholder="Masukkan Nama Admin" value="{{ old('name', $users->name) }}" required>
    </div>

    <!-- Input Email Admin -->
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control" placeholder="Masukkan Email" value="{{ old('email', $users->email) }}" required>
    </div>

    <!-- Input Role Admin -->
    <div class="form-group">
        <label for="role">Peran Admin</label>
        <select name="role" class="form-control" required>
            <option value="super_admin" {{ old('role', $users->role) == 'super_admin' ? 'selected' : '' }}>Admin Kalurahan (Super Admin)</option>
            <option value="admin_budaya" {{ old('role', $users->role) == 'admin_budaya' ? 'selected' : '' }}>Admin Desa Budaya</option>
            <option value="admin_preneur" {{ old('role', $users->role) == 'admin_preneur' ? 'selected' : '' }}>Admin Desa Preneur</option>
            <option value="admin_prima" {{ old('role', $users->role) == 'admin_prima' ? 'selected' : '' }}>Admin Desa Prima</option>
            <option value="admin_wisata" {{ old('role', $users->role) == 'admin_wisata' ? 'selected' : '' }}>Admin Desa Wisata</option>
        </select>
    </div>

    <!-- Input Password Admin -->
    <div class="form-group">
        <label for="password">Kata Sandi</label>
        <div class="input-group">
            <input type="password" name="password" id="password" class="form-control" placeholder="Kosongkan jika tidak ingin mengubah password">
            <span class="input-group-text" onclick="togglePassword('password', 'togglePasswordIcon')">
                <i class="fa fa-eye" id="togglePasswordIcon"></i>
            </span>
        </div>
        <small class="text-muted">Kosongkan jika tidak ingin mengubah kata sandi</small>
    </div>

    <!-- Input Konfirmasi Password Admin -->
    <div class="form-group">
        <label for="password_confirmation">Konfirmasi Kata Sandi</label>
        <div class="input-group">
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Konfirmasi Kata Sandi">
            <span class="input-group-text" onclick="togglePassword('password_confirmation', 'togglePasswordConfirmationIcon')">
                <i class="fa fa-eye" id="togglePasswordConfirmationIcon"></i>
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
    <script src="{{ asset('admin/assets/js/password.js') }}"></script>
    <!-- End custom js for this page-->
</body>
</html>