<!doctype html>
<html class="no-js" lang="zxx">
<head>
<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Desa Budaya</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('beranda/img/favicon.ico') }}">

    <!-- CSS boostrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('beranda/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('beranda/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('beranda/css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('beranda/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('beranda/css/progressbar_barfiller.css') }}">
    <link rel="stylesheet" href="{{ asset('beranda/css/gijgo.css') }}">
    <link rel="stylesheet" href="{{ asset('beranda/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('beranda/css/animated-headline.css') }}">
    <link rel="stylesheet" href="{{ asset('beranda/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('beranda/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('beranda/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('beranda/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('beranda/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('beranda/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('beranda/css/desabudaya.css') }}">


    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
</head>


<body class="full-wrapper">
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                <img src="{{ asset('beranda/img/logo/logo Kabupaten Sleman.png') }}" alt="">
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
                        <div class="logo">
                            <a href="{{ url('/') }}">
                                <img src="{{ asset('beranda/img/logo/logo_header.png') }}" alt="Logo Kabupaten Sleman" style="width: 97 px; height: 70px;">
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
                            <a href="https://www.instagram.com/kalurahan_sinduharjo?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><i class="fab fa-instagram"></i></a>
                            <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
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
<div class="container">
    <div class="category-area">
        <div class="row">   
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">  
            <div class="banner-container">
                <!-- Mobile Device Show Menu-->
                <div class="header-right2 d-flex align-items-center">
                    <!-- Social -->
                    <div class="header-social  d-block d-md-none">
                    <a href="https://sinduharjosid.slemankab.go.id/first"><i class="fas fa-globe"></i></a>
                    <a href="https://www.instagram.com/kalurahan_sinduharjo?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><i class="fab fa-instagram"></i></a>
                    <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                    <!-- Ikon Login dan Sign Up -->
                    </div>
                </div>
                <div class="banner-overlay"></div>
                <div class="banner-text">Desa Budaya</div>

                @if(isset($gambar_banner) && file_exists(public_path('storage/' . $gambar_banner)))
                    <img src="{{ asset('storage/' . $gambar_banner) }}" alt="Banner" class="banner-image">
                @else
                    <img src="{{ asset('beranda/img/desabudaya/banner.jpg') }}" alt="Banner" class="banner-image">
                @endif

                <!-- breadcrumb Start-->
                <div class="breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Beranda</a></li>
                            <li class="breadcrumb-item"><a href="#">Desa Budaya</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="content-section" data-aos="fade-up" data-aos-duration="1000">
        <div class="card custom-card">
            <div class="location-img">
            @if(isset($gambar_welcome) && file_exists(public_path('storage/' . $gambar_welcome)))
                <img src="{{ asset('storage/' . $gambar_welcome) }}" alt="Desa Budaya">
            @else
                <img src="{{ asset('public/default/defaultbudaya.png') }}" alt="Desa Budaya">
            @endif
        </div>

        <div class="card-body">
            <h3 class="card-title">Selamat Datang di Website Desa Budaya</h3>
            <p class="card-text">
            {{ $deskripsi_welcome }}
            </p>
        </div>
    </div>
</div>

</div>
</div>
</div>
</div>


<div class="carousel-container">
    @foreach($budaya as $item)
    <div class="carousel-card">
    @if($item->foto_card)
    <img src="{{ asset('storage/' . $item->foto_card) }}" alt="{{ $item->nama_budaya }}" class="card-img-top">
    @else
        <img src="{{ asset('beranda/img/desabudaya/banner.jpg') }}" alt="Gambar Tidak Tersedia" class="card-img-top">
    @endif

        <h3><a href="{{ url('/detail_budaya/' . $item->id) }}">{{ $item->nama_budaya }}</a></h3>
        <p>{{ $item->nama_desa_budaya }}</p>
        <p>{{ $item->alamat }}</p>
    </div>
    @endforeach
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
                                <img src="{{ asset('beranda/img/logo/logo_footer.png') }}" alt="Logo Kelurahan Sinduharjo" style="width: 400px; height: 120px;">
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
                                <li><a href="#">kalurahansinduharjo@gmail.com</a></li>
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


<!-- Scroll Up -->
<div id="back-top" >
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>

<!-- JS here -->
<!-- Jquery, Popper, Bootstrap -->
<script src="{{ asset('beranda/js/vendor/modernizr-3.5.0.min.js') }}"></script>
<script src="{{ asset('beranda/js/vendor/jquery-1.12.4.min.js') }}"></script>
<script src="{{ asset('beranda/js/popper.min.js') }}"></script>
<script src="{{ asset('beranda/js/bootstrap.min.js') }}"></script>


<!-- Slick-slider , Owl-Carousel ,slick-nav -->
<script src="{{ asset('beranda/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('beranda/js/slick.min.js') }}"></script>
<script src="{{ asset('beranda/js/jquery.slicknav.min.js') }}"></script>

<!-- One Page, Animated-HeadLin, Date Picker -->
<script src="{{ asset('berandajs/wow.min.js') }}"></script>
<script src="{{ asset('beranda/js/animated.headline.js') }}"></script>
<script src="{{ asset('beranda/js/jquery.magnific-popup.js') }}"></script>
<script src="{{ asset('beranda/js/gijgo.min.js') }}"></script>


<!-- Nice-select, sticky,Progress -->
<script src="{{ asset('beranda/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('beranda/js/jquery.sticky.js') }}"></script>
<script src="{{ asset('beranda/js/jquery.barfiller.js') }}"></script>

<!-- counter , waypoint,Hover Direction -->
<script src="{{ asset('beranda/js/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('beranda/js/waypoints.min.js') }}"></script>
<script src="{{ asset('beranda/js/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('beranda/js/hover-direction-snake.min.js') }}"></script>

<!-- contact js -->
<script src="{{ asset('beranda/js/contact.js') }}"></script>
<script src="{{ asset('beranda/js/jquery.form.js') }}"></script>
<script src="{{ asset('beranda/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('beranda/js/mail-script.js') }}"></script>
<script src="{{ asset('beranda/js/jquery.ajaxchimp.min.js') }}"></script>

<!-- Jquery Plugins, main Jquery -->	
<script src="{{ asset('beranda/js/plugins.js') }}"></script>
<script src="{{ asset('beranda/js/main.js') }}"></script>


<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
        AOS.init();
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>
