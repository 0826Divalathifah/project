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
    <link rel="stylesheet" href="{{ asset('themewagon/css/fontawesome-all.min.css') }}">
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
            <img src="{{ asset('themewagon/img/logo/logo_header.png') }}" class="me-2" alt="logo" />
          </a>
          <a class="navbar-brand brand-logo-mini" href="{{ url('/penjual') }}">
            <img src="{{ asset('themewagon/img/logo/logo_header.png') }}" alt="logo" />
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
                  <li class="nav-item"> <a class="nav-link" href="{{ url('/tambahbudaya') }}">Tambah Kesenian</a></li>
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
                  <li class="nav-item"> <a class="nav-link" href="{{ url('/tambahpreneur') }}">Tambah Produk</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{ url('/transaksipreneur') }}">Transaksi</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{ url('/laporanpreneur') }}">Laporan</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#primer" aria-expanded="false" aria-controls="ui-basic">
                <i class="icon-layout menu-icon"></i>
                <span class="menu-title">Desa Primer</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="primer">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="{{ url('/tambahprimer') }}">Tambah Produk</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{ url('/transaksiprimer') }}">Transaksi dan Pemesanan</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{ url('/laporanprimer') }}">Laporan</a></li>
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
                  <li class="nav-item"> <a class="nav-link" href="{{ url('/tambahwisata') }}">Tambah Wisata</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{ url('/transaksiwisata') }}">Transaksi dan Pemesanan</a></li>
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
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="card-title">Kelola Produk</p>
                            <!-- Trigger Modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahBudayaModal">
                              Tambah Budaya
                            </button>
                        </div>

                        <div class="row mt-3">
                            <div class="col-12">
                                <div class="table-responsive">
                                    <table id="example" class="display expandable-table" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Nama Produk</th>
                                                <th>Kategori</th>
                                                <th>Alamat</th>
                                                <th>Kisaran Harga</th>
                                                <th>Premium</th>
                                                <th>Status</th>
                                                <th>Updated at</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Tambah Produk -->
        <div class="modal fade" id="tambahBudayaModal" tabindex="-1" aria-labelledby="tambahBudayaModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content rounded-lg shadow-sm">
      <!-- Modal Header -->
      <div class="modal-header  text-white rounded-top">
      <h4 class="card-title" id="tambahBudayaModalLabel">Formulir Tambah Budaya</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <!-- Modal Body with Form -->
      <div class="modal-body">
        <form id="formTambahBudaya" action="#" method="POST">
          <div class="mb-3">
            <label for="budayaSelect" class="form-label">Pilih Budaya</label>
            <select id="budayaSelect" class="form-select js-example-basic-single w-100">
              <option value="AL">Kesenian</option>
              <option value="WY">Adat Istiadat</option>
            </select>
          </div>

          <div class="mb-3">
            <label for="namaBudaya" class="form-label">Nama Budaya</label>
            <input type="text" class="form-control rounded" id="namaBudaya" placeholder="contoh: 'Karawitan Miguyoh Rasa'">
          </div>

          <div class="mb-3">
            <label for="alamatBudaya" class="form-label">Alamat</label>
            <input type="text" class="form-control rounded" id="alamatBudaya" placeholder="Alamat">
          </div>

          <div class="mb-3">
  <label for="hargaBudaya" class="form-label">Harga</label>
  <div class="input-group">
    <span class="input-group-text">Rp</span>
    <input type="text" class="form-control rounded" id="hargaBudaya" aria-label="Harga" placeholder="Masukkan harga" oninput="formatCurrency(this)">
  </div>
</div>

<script>
  function formatCurrency(input) {
    // Menghapus semua karakter yang bukan angka
    let value = input.value.replace(/\D/g, '');
    
    // Mengubah angka menjadi format dengan titik setiap 3 digit
    if (value) {
      value = Number(value).toLocaleString('id-ID'); // Format untuk ID
      input.value = value;
    }
  }
</script>


          <div class="mb-3">
            <label for="youtubeLink" class="form-label">Link Youtube</label>
            <input type="url" class="form-control rounded" id="youtubeLink" placeholder="Masukkan Link Youtube" pattern="https://.*" required>
            <small class="form-text text-muted">Masukkan link Youtube yang valid, mulai dengan "https://".</small>
          </div>

          <div class="mb-3">
            <label for="whatsappNumber" class="form-label">Nomor WhatsApp Aktif</label>
            <input type="number" class="form-control rounded" id="whatsappNumber" placeholder="Masukkan Nomor WhatsApp" min="0" required>
          </div>

          <div class="mb-3">
            <label for="deskripsiBudaya" class="form-label">Deskripsi</label>
            <textarea class="form-control rounded" id="deskripsiBudaya" rows="4" placeholder="Deskripsi Budaya"></textarea>
          </div>

          <div class="mb-3">
            <label for="fotoBudaya" class="form-label">Unggah Foto Card</label>
            <input type="file" class="form-control rounded" id="fotoBudaya">
          </div>

          <div class="mb-3">
            <label for="fotoLainBudaya" class="form-label">Unggah Foto-Foto Kebudayaan</label>
            <input type="file" class="form-control rounded" id="fotoLainBudaya" multiple>
          </div>

          <!-- Submit Button -->
          <button type="submit" class="btn btn-primary w-100">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>




        <div class="row">
        <div class="col-12 grid-margin stretch-card">
        <div class="card">
        <form id="formTambahBudaya" action="#" method="POST">
          <div class="card-body">
            <h4 class="card-title">Formulir Tambah Budaya</h4>
            <p class="card-description"> Lengkapi kolom formulir di bawah ini </p>
            <form class="forms-sample">
            <div class="form-group">
              <label>Pilih Budaya</label>
              <select class="js-example-basic-single w-100">
                <option value="AL">Kesenian</option>
                <option value="WY">Adat Istiadat</option>
              </select>
            </div>
              <div class="form-group">
                <label for="exampleInputName1">Nama Budaya</label>
                <input type="text" class="form-control" id="exampleInputName1" placeholder="contoh:'Karawitan Miguyoh Rasa' ">
              </div>
              <div class="form-group">
                <label for="exampleInputName1">Alamat</label>
                <input type="text" class="form-control" id="exampleInputName1" placeholder="Alamat ">
              </div>
              <div class="form-group">
              <label for="exampleInputName1">Harga</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">Rp</span>
                </div>
                <input type="text" class="form-control form-control-sm" aria-label="Amount (to the nearest rupiah)">
              </div>
            </div>
            <div class="form-group">
              <label for="youtubeLink">Link Youtube</label>
              <input type="url" class="form-control" id="youtubeLink" placeholder="Masukkan Link Youtube" pattern="https://.*" required>
              <small class="form-text text-muted">Masukkan link Youtube yang valid, mulai dengan "https://".</small>
          </div>
          <div class="form-group">
              <label for="whatsappNumber">Nomor WhatsApp Aktif</label>
              <input type="number" class="form-control" id="whatsappNumber" placeholder="Masukkan Nomor WhatsApp" min="0" required>
          </div>
              <div class="form-group">
                <label for="exampleTextarea1">Deskripsi</label>
                <textarea class="form-control" id="exampleTextarea1" rows="5"></textarea>
              </div>
              <div class="form-group">
                <label>Unggah Foto Card</label>
                <input type="file" name="img[]" class="file-upload-default">
                <div class="input-group col-xs-12 d-flex align-items-center">
                  <input type="text" class="form-control file-upload-info" disabled placeholder="Ukuran 300 x 150 px">
                  <span class="input-group-append ms-2">
                    <button class="file-upload-browse btn btn-primary" type="button">Unggah</button>
                  </span>
                </div>
              </div>
              <div class="form-group">
                <label>Unggah Foto-Foto Kebudayaan</label>
                <input type="file" name="img[]" class="file-upload-default" id="fileInput" multiple>
                <div class="input-group col-xs-12 d-flex align-items-center">
                  <input type="text" class="form-control file-upload-info" disabled placeholder="Silahkan Upload Lebih dari 1 Foto">
                  <span class="input-group-append ms-2">
                    <button class="file-upload-browse btn btn-primary" type="button">Unggah</button>
                  </span>
                </div>
              </div>
              <button type="submit" id="submit" class="btn btn-primary me-2">Submit</button>
            </form>
          </div>
        </div>
      </div>

          <footer class="footer">
  <div class="d-sm-flex justify-content-center justify-content-sm-between">
    <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2023. Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ms-1"></i></span>
  </div>
</footer>
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
    <!-- End custom js for this page-->

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.querySelector("#submit").addEventListener("click", () => {
            const form = document.querySelector("#formTambahBudaya");

            // Cek apakah form valid
            if (!form.checkValidity()) {
                // Jika tidak valid, tampilkan pesan kesalahan
                Swal.fire({
                    title: "Perhatian!",
                    text: "Harap lengkapi semua field yang diperlukan.",
                    icon: "warning"
                });
                return; // Keluar dari fungsi jika form tidak valid
            }

            // Jika valid, tampilkan SweetAlert
            Swal.fire({
                title: "Apakah Anda Sudah Yakin?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Ya"
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: "Pemesanan Berhasil!",
                        text: "Pesanan anda sedang diproses.",
                        icon: "success"
                    }).then(() => {
                        // Mengembalikan form ke kondisi default
                        form.reset();
                    });
                }
            });
        });
    </script>

    <script>$('.carousel').carousel()</script>
</body>
</html>