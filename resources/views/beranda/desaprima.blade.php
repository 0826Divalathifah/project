<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Desa Prima</title>
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
                         <div class="logo">
                            <a href="{{ url('/') }}">
                                <img src="{{ asset('themewagon/img/logo/logo_header.png') }}" alt="Logo Kabupaten Sleman" style="width: 97 px; height: 70px;">
                                </a> </div>
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
            <div class="banner-text">Desa Prima</div>

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

        <div class="row">
            <!--? Left content -->
            <div class="col-xl-3 col-lg-3 col-md-4 ">
                <!-- Job Category Listing start -->
                <div class="category-listing mb-50">
                    <!-- single one -->
                    <div class="single-listing">
                        <!-- Select City items start -->
                        <div class="select-job-items2">
                                    <select name="select2" id="categorySelect" onchange="navigateToSection()">
                                        <option value="">--Pilih Kategori--</option>
                                        <option value="makanan">Makanan dan Minuman</option>
                                        <option value="kerajinan">Kerajinan dan Aksesoris</option>
                                    </select>
                                </div>
                    </div>
                </div>
                <!-- Job Category Listing End -->
                </div>
                <!--?  Right content -->
                <div class="col-xl-9 col-lg-9 col-md-8 ">

       
</head>
<body>
    <!-- Makanan Section -->
    <div id="makanan" class="slider">
        <div class="card">
            <img src="{{ asset('themewagon/img/desaprima/produk1.jpeg') }}" alt="Briza Brownies">
            <div class="card-body">
                <h5 class="card-title"><a href="{{ url('/detail_produk') }}">Briza Brownies</a></h5>
                <span style="color: #FF5733;">Rp 35.000 - Rp 100.000</span>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="{{ url('/detail_produk') }}" class="btn">Selengkapnya</a>
            </div>                                                                                              
        </div>

        <div class="card">
            <img src="..." alt="Produk 2">
            <div class="card-body">
                <h5 class="card-title"><a href="{{ url('/detail_produk') }}">Produk 2</a></h5>
                <span style="color: #FF5733;">Rp 35.000 - Rp 100.000</span>
                <p class="card-text">Deskripsi singkat produk 2.</p>
                <a href="{{ url('/detail_produk') }}" class="btn">Selengkapnya</a>
            </div>
        </div>

        <div class="card">
            <img src="..." alt="Produk 3">
            <div class="card-body">
                <h5 class="card-title"><a href="{{ url('/detail_produk') }}">Produk 3</a></h5>
                <span style="color: #FF5733;">Rp 35.000 - Rp 100.000</span>
                <p class="card-text">Deskripsi singkat produk 3.</p>
                <a href="{{ url('/detail_produk') }}" class="btn">Selengkapnya</a>
            </div>
        </div>
    </div>

     <!-- Kerajinan section -->
     <div id="kerajinan" class="slider">
        <div class="card">
            <img src="{{ asset('themewagon/img/desaprima/produk1.jpeg') }}" alt="Briza Brownies">
            <div class="card-body">
                <h5 class="card-title"><a href="{{ url('/detail_produk') }}">Briza Brownies</a></h5>
                <span style="color: #FF5733;">Rp 35.000 - Rp 100.000</span>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="{{ url('/detail_produk') }}" class="btn">Selengkapnya</a>
            </div>                                                                                              
        </div>

        <div class="card">
            <img src="..." alt="Produk 2">
            <div class="card-body">
                <h5 class="card-title"><a href="{{ url('/detail_produk') }}">Produk 2</a></h5>
                <span style="color: #FF5733;">Rp 35.000 - Rp 100.000</span>
                <p class="card-text">Deskripsi singkat produk 2.</p>
                <a href="{{ url('/detail_produk') }}" class="btn">Selengkapnya</a>
            </div>
        </div>

        <div class="card">
            <img src="..." alt="Produk 3">
            <div class="card-body">
                <h5 class="card-title"><a href="{{ url('/detail_produk') }}">Produk 3</a></h5>
                <span style="color: #FF5733;">Rp 35.000 - Rp 100.000</span>
                <p class="card-text">Deskripsi singkat produk 3.</p>
                <a href="{{ url('/detail_produk') }}" class="btn">Selengkapnya</a>
            </div>
        </div>
    </div>

        <!-- Custom Styles for Card Slider -->

        <script>
            function navigateToSection() {
                var selectedCategory = document.getElementById("categorySelect").value;
                
                if (selectedCategory === "makanan") {
                    document.getElementById("makanan").scrollIntoView({ behavior: "smooth" });
                } else if (selectedCategory === "kerajinan") {
                    document.getElementById("kerajinan").scrollIntoView({ behavior: "smooth" });
                }
            }
        </script>
<!-- listing-area Area End -->
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

</body>
</html>