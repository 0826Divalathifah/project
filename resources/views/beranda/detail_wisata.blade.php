<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Detail Wisata</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('themewagon/img/favicon.ico') }}">

    <!--  CSS here -->
    <link rel="stylesheet" href="{{ asset('themewagon/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('themewagon/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('themewagon/css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('themewagon/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('themewagon/css/progressbar_barfiller.css') }}">
    <link rel="stylesheet" href="{{ asset('themewagon/css/gijgo.css') }}">
    <link rel="stylesheet" href="{{ asset('themewagon/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('themewagon/css/animated-headline.css') }}">
    <link rel="stylesheet" href="{{ asset('themewagon/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('themewagon/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('themewagon/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('themewagon/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('themewagon/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('themewagon/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('themewagon/css/detail.css') }}">
    <link rel="stylesheet" href="{{ asset('themewagon/css/search.css') }}">
    
    
    
</head>
<body class="full-wrapper">
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                <img src="{{ asset('themewagon/img/logo/logo Kabupaten Sleman.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
<header>
    <!-- Header Start -->
    <div class="header-area">
        <div class="main-header header-sticky">
            <div class="container-fluid">
                <div class="menu-wrapper d-flex align-items-center justify-content-between">
                    <div class="header-left d-flex align-items-center">
                        <!-- Logo -->
                        <!-- Logo -->
                        <div class="logo">
                            <a href="{{ url('/') }}">
                                <img src="{{ asset('themewagon/img/logo/logo_header.png') }}" alt="Logo Kabupaten Sleman" style="width: 97 px; height: 70px;">
                                </a></div>
                        <!-- Main-menu -->
                        <div class="main-menu d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a href="{{ url('/') }}">Beranda</a></li>
                                    <li><a href="#">Desa Mandiri Budaya</a>
                                        <ul class="submenu">
                                            <li><a href="{{ url('/desabudaya') }}">Desa Budaya </a></li>
                                            <li><a href="{{ url('/desaprima') }}">Desa Prima</a></li>
                                            <li><a href="{{ url('/desapreneur') }}">Desa Preneur</a></li>
                                            <li><a href="{{ url('/desawisata') }}">Desa Wisata</a></li>
                                        </ul>
                                    <li>   
                                    <li><a href="{{ url('/about') }}">Tentang Kami</a></li>
                                    <li><a href="{{ url('/contact') }}">Kontak</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="header-right1 d-flex align-items-center">
    <!-- Social -->
    <div class="header-social d-none d-md-block">
        <a href="https://sinduharjosid.slemankab.go.id/first"><i class="fas fa-globe"></i></a>
        <a href="https://www.instagram.com/kalurahan_sinduharjo?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><i class="fab fa-instagram"></i></a>
        <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
    </div>

    <!-- Search Box -->
    <div class="search d-none d-md-block ml-4">
        <div class="nav-search search-switch" id="search-toggle">
            <i class="ti-search"></i>
        </div>
    </div>
</div>

<!-- Hidden Search Form -->
<div id="search-container" class="d-none mt-3">
    <div class="input-group" style="max-width: 300px; margin: 0 auto;">
        <input type="text" id="search-input" class="form-control" placeholder="Cari kata..." aria-label="Search">
        <button id="search-btn" class="btn btn-primary ml-2">Cari</button>
    </div>
    <div class="navigation-buttons mt-2 text-center">
        <button id="prev-result" class="btn btn-sm btn-outline-secondary">&uarr; Sebelumnya</button>
        <button id="next-result" class="btn btn-sm btn-outline-secondary">&darr; Berikutnya</button>
    </div>
</div>

                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <!-- header end -->
    <main id="content">
       <!-- listing Area Start -->
       <div class="category-area">
            <div class="container">
            <div class="row">
            
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        

        <div class="banner-container">
            <div class="banner-overlay"></div>
            <div class="banner-text">Detail Wisata</div>

            @if(isset($gambar_banner) && file_exists(public_path('storage/' . $gambar_banner)))
                    <img src="{{ asset('storage/' . $gambar_banner) }}" alt="Banner" class="banner-image">
                @else
                    <img src="{{ asset('themewagon/img/desabudaya/banner.jpg') }}" alt="Banner" class="banner-image">
                @endif
                
            <!-- breadcrumb Start-->
            <div class="breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Beranda</a></li>
                        <li class="breadcrumb-item"><a href="#">Detail</a></li>
                    </ol>
                </nav>
            </div>
        </div>
        
<div class="container mt-5">
    <!-- Detail Wisata -->
    <div class="row">
        <div class="col-md-6">
            <!-- Gambar Wisata -->
            <div class="detail-img">
                @if(!empty($wisata->foto_card))
                    <!-- Jika ada foto pada database -->
                    <img src="{{ asset('storage/' . $wisata->foto_card) }}" alt="{{ $wisata->nama_wisata }}" class="img-fluid rounded">
                @else
                    <!-- Jika foto tidak tersedia, gunakan gambar default -->
                    <img src="{{ asset('themewagon/img/desawisata/wisata2.jpg') }}" alt="Gambar Tidak Tersedia" class="img-fluid rounded">
                @endif
            </div>
        </div>
        <div class="col-md-6">
            <!-- Deskripsi Singkat -->
            <h2 class="text-primary">{{ $wisata->nama_wisata }}</h2>
            <p class="lead">
                {{ $wisata->deskripsi }}
            </p>
    
            <!-- Informasi Harga -->
            <h4 class="mt-4">Harga Masuk</h4>
            <p class="lead">
                Rp {{ $wisata->harga_masuk }} / orang 
            </p>

            <!-- Waktu Kunjung -->
            <h4 class="mt-4">Waktu Kunjung</h4>
            <p class="lead">
                @if($wisata->waktu_kunjung)
                    @foreach(json_decode($wisata->waktu_kunjung) as $waktu)
                        {{ $waktu->hari }}: {{ $waktu->jam_buka }} - {{ $waktu->jam_tutup }}<br>
                    @endforeach
                @else
                    Tidak ada informasi waktu kunjung.
                @endif
            </p>

            <!-- Alamat Desa Wisata -->
            <h4 class="mt-4">Alamat</h4>
            <p class="lead">
                {{ $wisata->alamat }}
            </p>
        </div>
    </div>

<!-- Menampilkan Brosur Wisata -->
@if(!empty($wisata->brosur))
    <div class="row mt-5">
        <div class="col-12">
            <h3 class="text-center">Brosur Wisata</h3>
        </div>
        <div class="col-12 text-center">
            <div 
                style="width: 100%; max-height: 300px; overflow-y: auto; border: 1px solid #ddd; padding: 10px; border-radius: 5px;">
                <img 
                    src="{{ asset('storage/' . $wisata->brosur) }}" 
                    alt="Brosur Wisata" 
                    style="width: 100%; height: auto; display: block;">
            </div>
        </div>
    </div>
@endif



            <!-- Galeri Foto Slider -->
            <div class="row mt-5">
                <div class="col-12">
                    <h3 class="text-center">Galeri Foto</h3>
                </div>
                <div class="col-12">
                    <div id="photoGallery" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            @php
                                $fotoGaleri = json_decode($wisata->foto_wisata, true) ?? []; // Ambil data foto_wisata dan decode
                            @endphp
                            @if (!empty($fotoGaleri))
                                @foreach (array_chunk($fotoGaleri, 3) as $index => $fotoGroup)
                                    <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                        <div class="row">
                                            @foreach ($fotoGroup as $foto)
                                                <div class="col-4">
                                                    <img src="{{ asset('storage/' . $foto) }}" class="d-block w-100" alt="Galeri Foto" style="height: 300px; object-fit: cover;">
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <p class="text-center">Tidak ada foto yang tersedia di galeri.</p>
                            @endif
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#photoGallery" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#photoGallery" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer>
    <!-- Footer Start -->
    <div class="footer-area footer-padding">
        <div class="container-fluid">
            <div class="row d-flex justify-content-around">
                <!-- Logo and Social Media -->
                <div class="col-xl-3 col-lg-3 col-md-8 col-sm-8 d-flex justify-content-center">
                    <div class="single-footer-caption mb-50">
                        <!-- Logo -->
                        <div class="footer-logo mb-35" style="text-align: right;">
                            <a href="{{ url('/') }}">
                                <img src="{{ asset('themewagon/img/logo/logo_footer.png') }}" alt="Logo Kelurahan Sinduharjo" style="width: 400px; height: 120px;">
                            </a>
                        </div>
                        <!-- Social Media Icons -->
                        <div class="footer-social">
                            <a href="https://sinduharjosid.slemankab.go.id/first" class="mr-2"><i class="fas fa-globe"></i></a>
                            <a href="https://www.instagram.com/kalurahan_sinduharjo" class="mr-2"><i class="fab fa-instagram"></i></a>
                            <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>

                        <!-- Quick Links -->
                        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Link</h4>
                                    <ul>
                                        <li><a href="{{ url('/desabudaya') }}">Desa Budaya</a></li>
                                        <li><a href="{{ url('/desaprima') }}">Desa Prima</a></li>
                                        <li><a href="{{ url('/desapreneur') }}">Desa Preneur</a></li>
                                        <li><a href="{{ url('/desawisata') }}">Desa Wisata</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                <!-- Contact Info -->
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4">
                    <div class="single-footer-caption mb-35" style= "text-align: left;">
                        <div class="footer-tittle">
                            <h4>Kontak</h4>
                            <ul>
                                <li><a href="#">(0274) 882723</a></li>
                                <li><a href="#">sinduharjo@gmail.com</a></li>
                                <li><a href="#">Jalan Kaliurang Km 10.5, Gentan, Ngaglik, Sleman, Yogyakarta</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer-Bottom Area -->
    <div class="footer-bottom-area">
        <div class="container">
            <div class="footer-border">
                <div class="row d-flex align-items-center">
                    <div class="col-xl-12">
                        <div class="footer-copy-right text-center">
                            <p>
                                Copyright &copy; <script>document.write(new Date().getFullYear());</script>
                                All rights reserved | Kalurahan Sinduharjo
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->
</footer>
<!--? Search model Begin -->
<div class="search-model-box">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-btn">+</div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Searching key.....">
        </form>
    </div>
</div>


<!-- Search model end -->
<!-- Scroll Up -->
<div id="back-top" >
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>


   





<!-- JS here -->
<!-- Jquery, Popper, Bootstrap -->
<script src="{{ asset('themewagon/js/vendor/modernizr-3.5.0.min.js') }}"></script>
<script src="{{ asset('themewagon/js/vendor/jquery-1.12.4.min.js') }}"></script>
<script src="{{ asset('themewagon/js/popper.min.js') }}"></script>
<script src="{{ asset('themewagon/js/bootstrap.min.js') }}"></script>


<!-- Slick-slider , Owl-Carousel ,slick-nav -->
<script src="{{ asset('themewagon/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('themewagon/js/slick.min.js') }}"></script>
<script src="{{ asset('themewagon/js/jquery.slicknav.min.js') }}"></script>

<!-- One Page, Animated-HeadLin, Date Picker -->
<script src="{{ asset('themewagonjs/wow.min.js') }}"></script>
<script src="{{ asset('themewagon/js/animated.headline.js') }}"></script>
<script src="{{ asset('themewagon/js/jquery.magnific-popup.js') }}"></script>
<script src="{{ asset('themewagon/js/gijgo.min.js') }}"></script>

<!-- calendar js -->
<script src="{{ asset('themewagon/js/calendar.js') }}"></script>

<!-- search js -->
<script src="{{ asset('themewagon/js/search.js') }}"></script>

<!-- whatsapp js -->
<script src="{{ asset('themewagon/js/whatsapp.js') }}"></script>

<!-- Nice-select, sticky,Progress -->
<script src="{{ asset('themewagon/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('themewagon/js/jquery.sticky.js') }}"></script>
<script src="{{ asset('themewagon/js/jquery.barfiller.js') }}"></script>

<!-- counter , waypoint,Hover Direction -->
<script src="{{ asset('themewagon/js/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('themewagon/js/waypoints.min.js') }}"></script>
<script src="{{ asset('themewagon/js/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('themewagon/js/hover-direction-snake.min.js') }}"></script>

<!-- contact js -->
<script src="{{ asset('themewagon/js/contact.js') }}"></script>
<script src="{{ asset('themewagon/js/jquery.form.js') }}"></script>
<script src="{{ asset('themewagon/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('themewagon/js/mail-script.js') }}"></script>
<script src="{{ asset('themewagon/js/jquery.ajaxchimp.min.js') }}"></script>

<!-- Jquery Plugins, main Jquery -->	
<script src="{{ asset('themewagon/js/plugins.js') }}"></script>
<script src="{{ asset('themewagon/js/main.js') }}"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<!--<script>
    document.querySelector("#pesansekarang").addEventListener("click", () => {
        const form = document.querySelector("#formPemesanan");

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
</script> -->

<script>$('.carousel').carousel()</script>

</body>
</html>
