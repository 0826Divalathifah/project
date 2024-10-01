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

    <style>
        body {3e
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        /* Footer Styling */
        .footer {
            background-color: #343a40;
            color: white;
            padding: 20px 0;
            text-align: center;
        }

        .footer a {
            color: white;
            margin: 0 10px;
            text-decoration: none;
            font-size: 18px;
        }

        .footer a:hover {
            color: #17a2b8;
        }

        /* Product Details Styling */
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .product-detail {
            background-color: #fff;
            border-radius: 15px;
            display: flex;
            max-width: 1000px;
            padding: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .product-images {
            width: 50%;
            margin-right: 20px;
        }

        .product-images img {
            width: 90%;
            height: 250px;
            border-radius: 10px;
        }

        .product-info {
            width: 50%;
        }

        .product-info h2 {
            color: #444;
        }

        .product-info h3 {
            color: #888;
            font-weight: normal;
        }

        .product-info .price {
            font-size: 24px;
            color: #333;
            margin: 10px 0;
        }

        .product-info .description {
            margin: 15px 0;
            color: #777;
        }

        .product-info button {
            background-color: #17a2b8;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .product-info button:hover {
            background-color: #138496;
        }

        .social-icons {
            margin-top: 20px;
        }

        .social-icons a {
            color: #555;
            margin-right: 10px;
            font-size: 18px;
        }

        .social-icons a:hover {
            color: #000;
        }

        /* Header Styling */
        .header-area {
            background-color: white; /* Set background to white */
            padding: 10px 0;
        }

        .header-area a {
            color: black;
            text-decoration: none;
        }

        .main-menu ul {
            list-style-type: none;
            padding: 0;
        }

        .main-menu ul li {
            display: inline-block;
            margin-right: 20px;
        }

        .main-menu ul li a {
            color: black;
            font-weight: bold;
        }

        .header-social a {
            color: black;
            margin-left: 10px;
        }

        .header-social a:hover {
            color: black;
        }

        .header-area.sticky {
            position: sticky;
            top: 0;
            z-index: 1000;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>
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
                                <img src="{{ asset('themewagon/img/logo/logo_header.png') }}" alt="Logo Kabupaten Sleman" style="width: 97px; height: 70px;">
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
        <div class="product-images">
            <div><img src="{{ asset('themewagon/img/desaprima/produk1.jpeg') }}" alt=""></div>
            <div><img src="{{ asset('themewagon/img/desaprima/produk2.jpeg') }}" alt=""></div>
            <div><img src="{{ asset('themewagon/img/desaprima/produk3.jpeg') }}" alt=""></div>
        </div>

        <!-- Product Information -->
        <div class="product-info">
            <h3>KART GOODS</h3>
            <h2>Sea Blue & White</h2>
            <p class="price">$62.50</p>
            <p>Adidas Footwear</p>
            <div class="description">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
            </div>
            <button>BUY</button>
            
            <!-- Social Media Icons -->
            <div class="social-icons">
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-pinterest"></i></a>
                <a href="#"><i class="fab fa-facebook"></i></a>
            </div>
        </div>
    </div>
</div>

<!-- Footer Start -->
<div class="footer">
    <p>Follow us on</p>
    <a href="#"><i class="fab fa-twitter"></i></a>
    <a href="#"><i class="fab fa-pinterest"></i></a>
    <a href="#"><i class="fab fa-facebook"></i></a>
</div>
<!-- Footer End -->

<!-- JS -->
<script src="{{ asset('themewagon/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('themewagon/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('themewagon/js/slick.min.js') }}"></script>
<script>
    $(document).ready(function(){
        $('.product-images').slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1
        });
    });
</script>

</body>
</html>
