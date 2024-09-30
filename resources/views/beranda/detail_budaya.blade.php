<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Detail Budaya</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    
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
                        <div class="search d-none d-md-block">
                            <ul class="d-flex align-items-center">
                                <li class="mr-15">
                                    <div class="nav-search search-switch">
                                        <i class="ti-search"></i>
                                    </div>
                                </li>
                            </ul>
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
    <main>
       <!-- listing Area Start -->
       <div class="category-area">
            <div class="container">
            <div class="row">
            
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
        /* Styling for the banner */
        .banner-container {
            position: relative;
            text-align: center;
            color: white;
            width: 200%; /* Lebarkan hingga penuh ke samping */
            height: 600px; /* Tetap 500px untuk tinggi */
            background: url('{{ asset('themewagon/img/desabudaya/banner.jpg') }}') no-repeat center center/cover;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            margin-bottom: 60px;
        }

        .banner-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5); /* Overlay semi-transparan hitam */
        }

        .banner-content {
            position: relative;
            z-index: 2;
            text-align: center;
        }

        .banner-text {
            position: relative;
            z-index: 2;
            font-size: 48px;
            font-weight: bold;
            letter-spacing: 3px;
            text-transform: uppercase;
            text-shadow: 3px 3px 5px rgba(0, 0, 0, 0.7);
            margin-top: 100px; /* To vertically center text */
        }
        @media screen and (max-width: 768px) {
            .banner-container {
                width: 100%; /* Tetap penuh pada layar kecil */
                height: 300px; /* Kurangi tinggi untuk layar lebih kecil */
            }

            .banner-text {
                font-size: 36px; /* Ukuran teks lebih kecil di layar mobile */
            }
        }


        .breadcrumb {
            margin-top: 20px;
            font-size: 18px;
            color: #ffffff;
        }

        .breadcrumb-item a {
            color: #ffffff;
            text-decoration: none;
            z-index: 3; /* Pastikan link memiliki z-index yang lebih tinggi */
            position: relative; /* Penting untuk memastikan z-index bekerja */
        }

        .breadcrumb-item a:hover {
            color: #ffffff;
            text-decoration: underline;
        }

        
    </style>

        <div class="banner-container">
            <div class="banner-overlay"></div>
            <div class="banner-text">Desa Preneur</div>

            <!-- breadcrumb Start-->
            <div class="breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Beranda</a></li>
                        <li class="breadcrumb-item"><a href="#">Desa Prima</a></li>
                    </ol>
                </nav>
            </div>
        </div>
        
       
        <div class="container">
    <div class="row">
        <!-- Bagian Video -->
        <div class="col-lg-8">
            <div class="video-container">
                <iframe src="https://www.youtube.com/embed/MEfE4vI1b2c" 
                    title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen
                    style="width: 80%; height: 370px;">
                </iframe>
            </div>
            
            <!-- Carousel Slider di Sebelah Kiri dengan 4 Foto per Slide -->
            <div class="col-lg-12">
            <div id="carouselExampleIndicators" class="carousel slide mt-4" data-bs-ride="carousel" style="width: 80%; margin: 0 auto; transform: translateX(-10%);">

        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row">
                    <div class="col-3">
                        <img src="{{ asset('themewagon/img/gallery/gallery1.jpg') }}" class="d-block w-100" alt="Slide 1" style="width: 100%; height: auto;">
                    </div>
                    <div class="col-3">
                        <img src="{{ asset('themewagon/img/gallery/gallery2.jpg') }}" class="d-block w-100" alt="Slide 2" style="width: 100%; height: auto;">
                    </div>
                    <div class="col-3">
                        <img src="{{ asset('themewagon/img/gallery/gallery3.jpg') }}" class="d-block w-100" alt="Slide 3" style="width: 100%; height: auto;">
                    </div>
                    <div class="col-3">
                        <img src="{{ asset('themewagon/img/gallery/gallery4.jpg') }}" class="d-block w-100" alt="Slide 4" style="width: 100%; height: auto;">
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row">
                <div class="col-3">
                        <img src="{{ asset('themewagon/img/gallery/gallery1.jpg') }}" class="d-block w-100" alt="Slide 1" style="width: 100%; height: auto;">
                    </div>
                    <div class="col-3">
                        <img src="{{ asset('themewagon/img/gallery/gallery2.jpg') }}" class="d-block w-100" alt="Slide 2" style="width: 100%; height: auto;">
                    </div>
                    <div class="col-3">
                        <img src="{{ asset('themewagon/img/gallery/gallery3.jpg') }}" class="d-block w-100" alt="Slide 3" style="width: 100%; height: auto;">
                    </div>
                    <div class="col-3">
                        <img src="{{ asset('themewagon/img/gallery/gallery4.jpg') }}" class="d-block w-100" alt="Slide 4" style="width: 100%; height: auto;">
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>
    </div>
</div>


            <!-- Deskripsi di Bawah Carousel -->
            <div class="description mt-4">
                <h2>Description</h2>
                <p>Ini adalah deskripsi video atau produk yang ingin dijelaskan. Kamu dapat menambahkan informasi penting terkait dengan konten yang ada di video ini, seperti detail produk atau layanan yang ingin ditonjolkan.</p>
            </div>
        </div>

        <!-- Bagian Form Pemesanan -->
        <div class="col-lg-4">
            <h2>Formulir Pemesanan</h2>
            <form id="formPemesanan" action="#" method="POST">
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" id="name" name="name" class="form-control" placeholder="Masukkan nama Anda" required>
                </div>

                <div class="form-group">
                    <label for="phone">Nomor Telepon</label>
                    <input type="text" id="phone" name="phone" class="form-control" placeholder="Masukkan nomor telepon Anda" required>
                </div>

                <!-- Input Tanggal Booking -->
                <div class="form-group">
                    <label for="booking-date">Tanggal Booking</label>
                    <input type="date" id="booking-date" name="booking-date" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="address">Alamat </label>
                    <textarea id="address" name="address" class="form-control" rows="3" placeholder="Masukkan alamat pengiriman" required></textarea>
                </div>

                <button type="button" id="pesansekarang" class="btn btn-primary">Pesan Sekarang</button>
            </form>

            <!-- Bagian Peta di Bawah Form -->
            <div class="map mt-4">
                <h2>Lokasi Kami</h2>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126918.25923728208!2d106.68942910865508!3d-6.229746486445747!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3e4c5a3c553%3A0x401fef807deff9f!2sJakarta!5e0!3m2!1sen!2sid!4v1632991446681!5m2!1sen!2sid" 
                    width="100%" 
                    height="200" 
                    margin-bottom= "30px"
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy"></iframe>
            </div>
        </div>
    </div>
</div>

<style>
    .video-container {
        margin-bottom: 20px;
    }
    .description {
        margin-top: 20px;
    }
    .form-group {
        margin-bottom: 15px;
    }
    .btn-primary {
        background-color: #9F78FF;
        border: none;
        padding: 20px 20px;
        border-radius: 5px;
        color: white;
        cursor: pointer;
    }
    .btn-primary:hover {
        background-color: #8764db;
    }
</style>

        <!--  Details End -->


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

<script>
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
</script>

<script>$('.carousel').carousel()</script>

</body>
</html>