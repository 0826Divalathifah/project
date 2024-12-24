<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Kelola Homepage</title>
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
        <a class="navbar-brand brand-logo me-5" href="{{ url ('/adminkalurahan') }}" >
            <img src="{{ asset('themewagon/img/logo/logo_header.png') }}" alt="Logo Kabupaten Sleman" style="width: 110 px; height: 52px;">
          </a>
          <a class="navbar-brand brand-logo-mini" href="{{ url('/adminklurahan') }}">
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
    <div class="row"></div>

<!-- Kelola Beranda -->
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Kelola Beranda</h4>
                <form class="forms-sample" action="{{ url('/update-homepage-kalurahan') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!-- Edit Banner -->
                    <div class="form-group">
                        <label for="bannerImage">Edit Banner</label>
                        <input type="file" name="gambar_banner" class="form-control" id="gambarBanner" accept="image/*">
                        @if(isset($homepageData->gambar_banner))
                            <div class="mt-2">
                                <img src="{{ asset('storage/'. $homepageData->gambar_banner) }}" alt="Current Banner" width="100">
                              </div>
                        @endif
                    </div>
                    
                    <!-- Edit Deskripsi -->
                    <div class="form-group">
                        <label for="indexDescription">Edit Deskripsi</label>
                        <textarea 
                            class="form-control" 
                            name="deskripsi_index" 
                            id="indexDescription" 
                            rows="4" 
                            placeholder="Deskripsi..."
                            required>{{ old('deskripsi_index', $homepageData->deskripsi ?? '') }}</textarea>
                    </div>
                    
                    <!-- Tombol Simpan -->
                    <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Kelola Menu Tentang Kami -->
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Kelola Halaman Tentang Kami</h4>
    <form action="{{ url('/update-homepage-tentangkami') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
                    <label for="bannerImage">Edit Banner</label>
                    <input type="file" name="banner_image" class="form-control" id="bannerImage" accept="image/*">
                    @if(isset($tentangKamiData->banner_image))
                        <div class="mt-2">
                            <img src="{{ asset('storage/' . $tentangKamiData->banner_image) }}" alt="Current Banner" width="100">
                        </div>
                    @endif
                </div>

    <div class="form-group mt-3">
        <label>Deskripsi</label>
        <textarea name="deskripsi" class="form-control" rows="5">{{ old('deskripsi', $tentangKamiData->deskripsi ?? '') }}</textarea>
    </div>

    <div class="form-group mt-3">
        <label>Upload Slider Images</label>
        <input type="file" name="slider_images[]" class="form-control" accept="image/*" multiple id="slider-input">
    </div>

    <!-- Menampilkan Gambar Slider -->
    <div class="row mt-3" id="slider-preview">
        @if(isset($tentangKamiData->slider_images))
            @php
                $sliderImages = json_decode($tentangKamiData->slider_images, true);
            @endphp
            @if(is_array($sliderImages) && count($sliderImages) > 0)
                @foreach($sliderImages as $image)
                    <div class="col-md-3 photo-preview mb-3" id="photo-{{ md5($image) }}">
                        <div class="position-relative">
                            <img src="{{ asset('storage/' . $image) }}" alt="Slider Image" class="img-thumbnail" style="height: 150px; object-fit: cover;">
                            <button type="button" class="btn btn-danger btn-sm remove-photo position-absolute top-0 end-0" data-foto="{{ $image }}">
                                &times;
                            </button>
                        </div>
                    </div>
                @endforeach
            @endif
        @endif
    </div>

    <!-- Input Hidden untuk Gambar yang Dihapus -->
    <div id="hapus-foto-container"></div>

    <button type="submit" class="btn btn-primary mt-3">Simpan</button>
</form>

<script>
// Tambahkan gambar yang dihapus ke form
document.querySelectorAll('.remove-photo').forEach(button => {
    button.addEventListener('click', function() {
        let imageToRemove = this.getAttribute('data-foto');

        // Tambahkan input hidden untuk gambar yang dihapus
        let hapusFotoContainer = document.getElementById('hapus-foto-container');
        let hiddenInput = document.createElement('input');
        hiddenInput.type = 'hidden';
        hiddenInput.name = 'hapus_foto_slider[]';
        hiddenInput.value = imageToRemove;
        hapusFotoContainer.appendChild(hiddenInput);

        // Hapus elemen gambar dari tampilan
        let photoPreview = document.getElementById('photo-' + md5(imageToRemove));
        if (photoPreview) {
            photoPreview.remove();
        }
    });
});

// Menampilkan gambar baru yang diupload sebelum submit
document.getElementById('slider-input').addEventListener('change', function(e) {
    let sliderPreview = document.getElementById('slider-preview');
    let files = e.target.files;

    Array.from(files).forEach(file => {
        let reader = new FileReader();

        reader.onload = function(event) {
            let col = document.createElement('div');
            col.className = 'col-md-3 photo-preview mb-3';
            col.innerHTML = `
                <div class="position-relative">
                    <img src="${event.target.result}" alt="New Slider Image" class="img-thumbnail" style="height: 150px; object-fit: cover;">
                </div>
            `;
            sliderPreview.appendChild(col);
        };

        reader.readAsDataURL(file);
    });
});

// Fungsi hash untuk md5
function md5(string) {
    return string.split('').reduce(function(a, b) {
        a = ((a << 5) - a) + b.charCodeAt(0);
        return a & a;
    }, 0);
}
</script>


</div>
</div>
</div>



<!-- Kelola Menu Kontak -->
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Kelola Menu Kontak</h4>
                <form class="forms-sample" action="{{ url('/update-homepage-kontak') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <!-- Edit Banner -->
                  <div class="form-group">
                      <label for="bannerImage">Edit Banner</label>
                      <input type="file" name="banner_image" class="form-control" id="bannerImage" accept="image/*">
                      @if(isset($kontakData->banner_image))
                          <div class="mt-2">
                              <img src="{{ asset('storage/' . $kontakData->banner_image) }}" alt="Current Banner" width="100">
                          </div>
                      @endif
                  </div>
                  
                  <!-- Tombol Simpan -->
                  <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                </form>
            </div>
        </div>
    </div>


</div>
</div>
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