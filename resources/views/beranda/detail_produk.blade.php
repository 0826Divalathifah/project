<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Detail</title>

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
<body>

<!-- Header Start -->
<header>
    <div class="header-area">
        <div class="main-header header-sticky">
            <div class="container-fluid">
                <div class="menu-wrapper d-flex align-items-center justify-content-between">
                    <div class="header-left d-flex align-items-center">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="{{ url('/') }}">
                                <img src="{{ asset('themewagon/img/logo/logo_header.png') }}" alt="Logo Kabupaten Sleman" style="width: 200px; height: 70px;">
                            </a>
                        </div>
                        <!-- Main-menu -->
                        <div class="main-menu d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a href="{{ url('/') }}">Beranda</a></li>
                                    <li><a href="#">Desa Mandiri Budaya</a>
                                        <ul class="submenu">
                                            <li><a href="{{ url('/desabudaya') }}">Desa Budaya</a></li>
                                            <li><a href="{{ url('/desaprima') }}">Desa Prima</a></li>
                                            <li><a href="{{ url('/desapreneur') }}">Desa Preneur</a></li>
                                            <li><a href="{{ url('/desawisata') }}">Desa Wisata</a></li>
                                        </ul>
                                    </li>
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
</header>
<!-- Header End -->
<div class="container">
        <div class="product-detail">
            <!-- Product Images Slider -->
            <div class="image-slider">
            <div class="slide"><img src="{{ asset('themewagon/img/desaprima/produk1.jpeg') }}" alt="Produk 1"></div>
            <div class="slide"><img src="{{ asset('themewagon/img/desaprima/produk1.jpeg') }}" alt="Produk 2"></div>
            <div class="slide"><img src="{{ asset('themewagon/img/desaprima/produk1.jpeg') }}" alt="Produk 3"></div>
        </div>
      

    <!-- Product Information -->
    <div class="product-info">
        <h2>Briza Brownies</h2>
        <p class="price">Rp 30.000</p>
        <p>Adidas Footwear</p>
        <div class="description">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
        </div>
        
        <div class="flavor-selection">
            <label for="flavors">Pilih Rasa:</label>
            <select id="flavors">
                <option value="coklat">Coklat</option>
                <option value="vanila">Vanila</option>
                <option value="stroberi">Stroberi</option>
                <option value="keju">Keju</option>
                <option value="matcha">Matcha</option>
            </select>
        </div>
            <button>BELI</button>
        </div>
    </div>
</div>





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
    </footer>

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
