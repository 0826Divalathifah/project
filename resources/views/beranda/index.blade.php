<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Desa Mandiri Budaya</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('themewagon/img/favicon.ico') }}">

    <!-- CSS here -->
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

    
</head>
<body class="full-wrapper">
    <!-- ? Preloader Start -->
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
    <!-- Preloader Start-->
    <header>
        <!-- Header Start -->
        <div class="header-area ">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="menu-wrapper d-flex align-items-center justify-content-between">
                        <div class="header-left d-flex align-items-center">
                            <!-- Logo -->
                            <div class="logo">
                            <a href="{{ url('/') }}">
                                <img src="{{ asset('themewagon/img/logo/logo kabupaten Sleman.png') }}" alt="Logo Kabupaten Sleman" style="width: 65px; height: auto;">
                                </a>

                            </div>
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
                                <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                                <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                                 <!-- Ikon Login dan Sign Up -->
                                 <a href="/login"><i class="fas fa-sign-in-alt"></i></a>
                                <a href="/signup"><i class="fas fa-user-plus"></i></a>
                            </div>

                           
                            <!-- Search Box -->
                            <!--<div class="header-search d-flex align-items-center" >
                            <form class="search-form" method="GET" action="http://127.0.0.1:8000/search">
                                 <div class="form-floating mb-0">
                                    <input id="search-form" type="text" class="form-control" name="keyword" value="" placeholder="Search">
                                    
                                </div>
                            </form>
                            </div>-->
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
        <!--? Hero Area Start-->
        <div class="container-fluid">
            <div class="slider-area">
                <!-- Mobile Device Show Menu-->
                <div class="header-right2 d-flex align-items-center">
                    <!-- Social -->
                    <div class="header-social  d-block d-md-none">
                    <a href="https://sinduharjosid.slemankab.go.id/first"><i class="fas fa-globe"></i></a>
                    <a href="https://www.instagram.com/kalurahan_sinduharjo?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><i class="fab fa-instagram"></i></a>
                    <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                    <!-- Ikon Login dan Sign Up -->
                     
                    <a href="/login"><i class="fas fa-sign-in-alt"></i></a>
                    <a href="/signup"><i class="fas fa-user-plus"></i></a>
                    </div>
                    <!-- Search Box -->
                    <!--<div class="header-search d-block d-md-none" >
                            <form class="search-form" method="GET" action="http://127.0.0.1:8000/search">
                                 <div class="form-floating mb-0">
                                    <input id="search-form" type="text" class="form-control" name="keyword" value="" placeholder="Search">
                                    
                                </div>
                            </form>
                    </div>-->
                </div>
                <!-- /End mobile  Menu-->

                <div class="slider-active dot-style fullwidth-slider">
                    <!-- Single -->
                    <div class="single-slider hero-overly slider-height d-flex align-items-center"
                        style="background-image: url('{{ asset('themewagon/img/hero/slider.jpg') }}'); 
                                background-size: cover; 
                                background-position: center; 
                                background-repeat: no-repeat; 
                                height: 300px;">

                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-8 col-lg-9">
                                    <!-- Hero Caption -->
                                    <div class="hero__caption">
                                        <h1>DESA<br>MANDIRI<br>BUDAYA</h1>
                                        <a href="{{ url('/desabudaya') }}" class="btn">Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single -->
                    <div class="single-slider hero-overly slider-height d-flex align-items-center"
                        style="background-image: url('{{ asset('themewagon/img/hero/slider.jpg') }}');
                                background-size: cover; 
                                background-position: center; 
                                background-repeat: no-repeat; 
                                height: 300px;">

                    <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-8 col-lg-9">
                                    <!-- Hero Caption -->
                                    <div class="hero__caption">
                                        <h1>DESA<br>MANDIRI<br>BUDAYA</h1>
                                        <a href="{{ url('/desabudaya') }}" class="btn">Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
            </div>
        </div>
       
<!-- Popular Items End -->
<!--? New Arrival Start -->
<div class="new-arrival">
<style>
        .justified-text {
            text-align: justify;
            font-size: 18px; /* Ubah ukuran teks sesuai kebutuhan, misalnya 18px */
            line-height: 1.6; /* Menambahkan jarak antar baris untuk meningkatkan keterbacaan */
        }
    </style>
        <div class="container">
            <p class="justified-text">
                Desa Mandiri Budaya (DMB) adalah desa yang memiliki potensi, inovasi, dan kemandirian untuk mengembangkan nilai-nilai budaya lokal. Program ini melibatkan warga untuk aktif berpartisipasi, sehingga disebut mandiri. DMB menggabungkan empat pilar utama: Desa Wisata, Desa Preneur, Desa Prima, dan Desa Budaya, dan didasarkan pada Peraturan Daerah Istimewa (Perdais) No. 3 Tahun 2017 tentang Pemeliharaan dan Pengembangan Kebudayaan.
                <br><br>
                Kalurahan Sinduharjo, Kabupaten Sleman, DI Yogyakarta, ditetapkan sebagai DMB berdasarkan Keputusan Gubernur DIY No. 262/KEP/2016. Untuk mendukung keberhasilannya, diperlukan pendampingan dan pelatihan bagi masyarakat oleh Dinas Pariwisata DIY (Dinpar DIY) dan akademisi. Pelatihan ini meliputi materi tentang pengenalan USP, pemasaran digital, pengemasan paket wisata, analisis keuangan, dan SOP untuk kelestarian desa wisata.
                <br><br>
                Tujuan dari program ini adalah agar masyarakat memiliki pengetahuan yang cukup untuk melestarikan, melindungi, mengembangkan, dan memanfaatkan budaya lokal, sehingga Desa Sinduharjo dapat terus mengedepankan keunikannya dan menjadi DMB yang berkelanjutan dan kompetitif di sektor pariwisata.
            </p>
        </div>

        <!-- Section tittle -->
         <!-- <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-10">
                <div class="section-tittle mb-60 text-center wow fadeInUp" data-wow-duration="2s" data-wow-delay=".2s">
                    <h2>Desa<br>Budaya<<br>Mandiri</h2>
                </div>
            </div>
        </div> -->
        


<!--? collection -->

<div class="new-arrival">
    <section class="collection section-bg2 section-padding30 section-over1 ml-15 mr-15" data-background="{{ asset('themewagon/img/gallery/gallery3.jpg') }}">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-9">
                    <div class="single-question text-center">
                        <h2 class="wow fadeInUp" data-wow-duration="2s" data-wow-delay=".1s">Desa Budaya</h2>
                        <a href="{{ url('/desabudaya') }}" class="btn wow fadeInUp" data-wow-duration="2s" data-wow-delay=".4s">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<div class="new-arrival">
    <section class="collection section-bg2 section-padding30 section-over1 ml-15 mr-15" data-background="{{ asset('themewagon/img/gallery/gallery2.jpg') }}">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-9">
                    <div class="single-question text-center">
                        <h2 class="wow fadeInUp" data-wow-duration="2s" data-wow-delay=".1s">Desa Prima</h2>
                        <a href="{{ url('/desaprima') }}" class="btn wow fadeInUp" data-wow-duration="2s" data-wow-delay=".4s">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<div class="new-arrival">
    <section class="collection section-bg2 section-padding30 section-over1 ml-15 mr-15" data-background="{{ asset('themewagon/img/gallery/galery1.jpg') }}">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-9">
                    <div class="single-question text-center">
                        <h2 class="wow fadeInUp" data-wow-duration="2s" data-wow-delay=".1s">Desa Preneur</h2>
                        <a href="{{ url('/desapreneur') }}" class="btn wow fadeInUp" data-wow-duration="2s" data-wow-delay=".4s">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<div class="new-arrival">
    <section class="collection section-bg2 section-padding30 section-over1 ml-15 mr-15" data-background="{{ asset('themewagon/img/gallery/gallery4.jpg') }}">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-9">
                    <div class="single-question text-center">
                        <h2 class="wow fadeInUp" data-wow-duration="2s" data-wow-delay=".1s">Desa Wisata</h2>
                        <a href="{{ url('/desawisata') }}" class="btn wow fadeInUp" data-wow-duration="2s" data-wow-delay=".4s">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- End collection -->

</main>

<footer>
    <!-- Footer Start -->
    <div class="footer-area footer-padding">
        <div class="container-fluid">
            <div class="row d-flex justify-content-around"> 
                <div class="col-xl-3 col-lg-3 col-md-8 col-sm-8">
                    <div class="single-footer-caption mb-50">
                        <!-- Logo -->
                        <div class="footer-logo mb-35">
                            <a href="{{ url('/') }}">
                                <img src="{{ asset('themewagon/img/logo/logo1.png') }}" alt="Logo Kelurahan Sinduharjo" style="width: 400px; height: 150px;">
                            </a>
                        </div>
            
                        <!-- Social Media Icons -->
                        <div class="footer-social">
                            <a href="https://sinduharjosid.slemankab.go.id/first"><i class="fas fa-globe"></i></a>
                            <a href="https://www.instagram.com/kalurahan_sinduharjo"><i class="fab fa-instagram"></i></a>
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
                    <div class="single-footer-caption mb-50">
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


<!-- Search Model Begin -->
<div class="search-model-box">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-btn">+</div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Searching key...">
        </form>
    </div>
</div>
<!-- Search Model End -->

<!-- Scroll Up -->
<div id="back-top">
    <a title="Go to Top" href="#"><i class="fas fa-level-up-alt"></i></a>
</div>

<!-- JS here -->
<!-- jQuery, Popper, Bootstrap -->
<script src="{{ asset('themewagon/js/vendor/modernizr-3.5.0.min.js') }}"></script>
<script src="{{ asset('themewagon/js/vendor/jquery-1.12.4.min.js') }}"></script>
<script src="{{ asset('themewagon/js/popper.min.js') }}"></script>
<script src="{{ asset('themewagon/js/bootstrap.min.js') }}"></script>

<!-- Slick-slider, Owl-Carousel, Slick-nav -->
<script src="{{ asset('themewagon/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('themewagon/js/slick.min.js') }}"></script>
<script src="{{ asset('themewagon/js/jquery.slicknav.min.js') }}"></script>

<!-- One Page, Animated Headline, Date Picker -->
<script src="{{ asset('themewagon/js/wow.min.js') }}"></script>
<script src="{{ asset('themewagon/js/animated.headline.js') }}"></script>
<script src="{{ asset('themewagon/js/jquery.magnific-popup.js') }}"></script>
<script src="{{ asset('themewagon/js/gijgo.min.js') }}"></script>

<!-- Nice-select, Sticky, Progress -->
<script src="{{ asset('themewagon/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('themewagon/js/jquery.sticky.js') }}"></script>
<script src="{{ asset('themewagon/js/jquery.barfiller.js') }}"></script>

<!-- Counter, Waypoint, Hover Direction -->
<script src="{{ asset('themewagon/js/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('themewagon/js/waypoints.min.js') }}"></script>
<script src="{{ asset('themewagon/js/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('themewagon/js/hover-direction-snake.min.js') }}"></script>

<!-- Contact JS -->
<script src="{{ asset('themewagon/js/contact.js') }}"></script>
<script src="{{ asset('themewagon/js/jquery.form.js') }}"></script>
<script src="{{ asset('themewagon/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('themewagon/js/mail-script.js') }}"></script>
<script src="{{ asset('themewagon/js/jquery.ajaxchimp.min.js') }}"></script>

<!-- jQuery Plugins, Main jQuery -->
<script src="{{ asset('themewagon/js/plugins.js') }}"></script>
<script src="{{ asset('themewagon/js/main.js') }}"></script>

</body>
</html>
