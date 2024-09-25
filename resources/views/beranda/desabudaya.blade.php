<!doctype html>
<html class="no-js" lang="zxx">
<head>
<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Desa Budaya</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('themewagon/img/favicon.ico') }}">

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap4" />

    <!-- Bootstrap CSS -->
    <link href="{{ asset('furni/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('furni/css/tiny-slider.css') }}" rel="stylesheet">
    <link href="{{ asset('furni/css/style.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">


        <!-- CSS themewagon -->
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
                <img src="{{ asset('themewagon/img/logo/logo Kabupaten Sleman.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader End -->
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
                                <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
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
        <!-- header end -->
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
            height: 600px;
            background: url('{{ asset('themewagon/img/desabudaya/banner.jpg') }}') no-repeat center center/cover;
            margin-bottom: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .banner-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            pointer-events: none; /* Membuat overlay tidak memblokir interaksi */
        }

        .banner-content {
            position: relative;
            z-index: 2; /* Pastikan ini berada di atas overlay */
            text-align: center;
        }

        .banner-text {
            font-size: 48px;
            font-weight: bold;
            z-index: 3; 
            letter-spacing: 3px;
            text-transform: uppercase;
            text-shadow: 3px 3px 5px rgba(0, 0, 0, 0.7);
            margin-top: 100px;
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
            <div class="banner-text">Desa Budaya</div>

            <!-- Breadcrumb Start -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('desabudaya') }}">Desa Budaya</a></li>
                </ol>
            </nav>
            <!-- Breadcrumb End -->
        </div>


<style>
        /* Mengatur layout agar video dan deskripsi berada berdampingan */
        .content-section {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px;
    margin-bottom: 30px;
    background-color: #f7f7f7;
    gap: 10px; /* Menambahkan gap agar elemen tidak terlalu menempel */
    flex-wrap: wrap; /* Supaya elemen bisa otomatis wrap di layar kecil */
}

.description-container {
    flex: 1;
    max-width: 70%; /* Ukuran deskripsi 50% dari lebar kontainer */
    padding: 20px;
}

.description-container h1 {
    font-size: 30px;
    color: #e84c3d; /* Warna merah oranye untuk judul */
    font-family: "Great Vibes";
    text-align: center;
    margin-top: 30px;
    margin-bottom: 30px;
}

.description-container h2 {
    font-size: 30px;
    color: #333; /* Warna untuk sub judul */
    font-weight: bold;
    text-align: center;
    font-family: "cursive";
    margin-bottom: 20px;
}

.description-container p {
    font-size: 16px;
    line-height: 1.8;
    color: #555; /* Warna untuk deskripsi */
}

/* Kontainer video */
.video-container {
    flex: 1;
    max-width: 50%;
    padding: 20px;
}

.video-container video {
    width: 100%; /* Video akan mengisi kontainer secara penuh */
    height: auto;
}

/* Untuk responsif, di layar kecil deskripsi dan video akan disusun secara vertikal */
@media (max-width: 768px) {
    .content-section {
        flex-direction: column;
        text-align: center;
    }

    .video-container, .description-container {
        max-width: 100%; /* Membuat kontainer video dan deskripsi 100% di layar kecil */
        padding: 10px;
    }

    .description-container h1, .description-container h2 {
        font-size: 24px; /* Sesuaikan ukuran font untuk layar kecil */
    }

    .description-container p {
        font-size: 14px; /* Sesuaikan ukuran font deskripsi */
    }
}

    </style>
</head>
<body>



<div class="content-section" data-aos="fade-up" data-aos-duration="1000">
<div data-aos="fade-left"
     data-aos-anchor="#example-anchor"
     data-aos-offset="500"
     data-aos-duration="500">
</div>
    <div class="location-img" style="overflow: hidden;">
        <img src="{{ asset('themewagon/img/desabudaya/gunungan1.jpg') }}" alt="" style="width: 100%; height: 400px;">
    </div>

    <!-- Bagian untuk deskripsi budaya di samping video -->
    <div class="description-container" data-aos="fade-in" data-aos-duration="1500">
        <h1 class="welcome-text">Selamat Datang di Website Desa Budaya</h1>
        <h2>Saatnya memulai petualangan Anda</h2>
        <p>DESA BUDAYA adalah wahana sekelompok manusia yang melakukan aktivitas budaya yang mengekspresikan sistem kepercayaan (religi), sistem kesenian, sistem mata pencaharian, sistem teknologi, sistem komunikasi, sistem sosial, dan sistem lingkungan, tata ruang, dan arsitektur.</p>
    </div>
</div>

 



    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f7f7f7;
            padding: 20px;
        }

        .container {
            display: flex;
            justify-content: space-between;
            gap: 20px;
        }

        .card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 30%;
            text-align: center;
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card img {
            width: 100%;
            height: auto;
        }

        .card-content {
            padding: 20px;
        }

        .card-content h2 {
            font-size: 2rem;
            color: #e84c3d;
            margin-bottom: 10px;
        }

        .card-content h3 {
            font-size: 1.2rem;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .card-content p {
            font-size: 0.9rem;
            color: #555;
        }

        /* Responsive Layout */
        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                gap: 10px;
            }

            .card {
                width: 100%;
            }
        }
    </style>
</head>
<body>
<div class="form-group">
    <label for="selectcategory">Data Budaya</label>
    <select class="form-select" id="selectcategory">
        <option value="">--Pilih Kategori--</option>
        <option value="kesenian">Kesenian</option>
        <option value="adat">Adat Istiadat</option>
    </select>
</div>

        

    <div class="content-section" data-aos="fade-up" data-aos-duration="1000">
    <div class="container">

        <!-- Flexbox container for alignment -->
        <div class="card-container" style="display: flex; justify-content: space-between; flex-wrap: wrap; gap: 20px;">
            
            <!-- Card Seni Pertunjukan-->
            <div class="card" id="kesenian-card" style="flex: 1; min-width: 300px;">
                <img src="https://via.placeholder.com/300x150" alt="Desa Budaya">
                <div class="card-content">
                    <h2><a href="{{ url('/detail_budaya') }}">Seni Pertunjukan</a></h2>
                    <h3>Desa Budaya Banjarharjo</h3>
                    <p>Jalan Sentolo Muntilan KM 20, Ngrajun, Banjarharo, Kealibawang, Kulon Progo - Kodepos 55672</p>
                </div>
            </div>

            <div class="card" id="kesenian-card" style="flex: 1; min-width: 300px;">
                <img src="https://via.placeholder.com/300x150" alt="Desa Budaya">
                <div class="card-content">
                    <h2><a href="{{ url('/detail_budaya') }}">Seni Pertunjukan</a></h2>
                    <h3>Desa Budaya Banjarharjo</h3>
                    <p>Jalan Sentolo Muntilan KM 20, Ngrajun, Banjarharo, Kealibawang, Kulon Progo - Kodepos 55672</p>
                </div>
            </div>

            <div class="card" id="kesenian-card" style="flex: 1; min-width: 300px;">
                <img src="https://via.placeholder.com/300x150" alt="Desa Budaya">
                <div class="card-content">
                    <h2><a href="{{ url('/detail_budaya') }}">Seni Pertunjukan</a></h2>
                    <h3>Desa Budaya Banjarharjo</h3>
                    <p>Jalan Sentolo Muntilan KM 20, Ngrajun, Banjarharo, Kealibawang, Kulon Progo - Kodepos 55672</p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="content-section" data-aos="fade-up" data-aos-duration="1000">
    <div class="container">

        <!-- Flexbox container for alignment -->
        <div class="card-container" style="display: flex; justify-content: space-between; flex-wrap: wrap; gap: 20px;">
            
            <!-- Card Adat-->
            <div class="card" id="adat-card" style="flex: 1; min-width: 300px;">
                <img src="https://via.placeholder.com/300x150" alt="Desa Budaya">
                <div class="card-content">
                    <h2><a href="{{ url('/detail_budaya') }}">Adat Istiadat</a></h2>
                    <h3>Desa Budaya Banjarharjo</h3>
                    <p>Jalan Sentolo Muntilan KM 20, Ngrajun, Banjarharo, Kealibawang, Kulon Progo - Kodepos 55672</p>
                </div>
            </div>

            <div class="card" id="adat-card" style="flex: 1; min-width: 300px;">
                <img src="https://via.placeholder.com/300x150" alt="Desa Budaya">
                <div class="card-content">
                    <h2><a href="{{ url('/detail_budaya') }}">Adat Istiadat</a></h2>
                    <h3>Desa Budaya Banjarharjo</h3>
                    <p>Jalan Sentolo Muntilan KM 20, Ngrajun, Banjarharo, Kealibawang, Kulon Progo - Kodepos 55672</p>
                </div>
            </div>

            <div class="card" id="adat-card" style="flex: 1; min-width: 300px;">
                <img src="https://via.placeholder.com/300x150" alt="Desa Budaya">
                <div class="card-content">
                    <h2><a href="{{ url('/detail_budaya') }}">Adat Istiadat</a></h2>
                    <h3>Desa Budaya Banjarharjo</h3>
                    <p>Jalan Sentolo Muntilan KM 20, Ngrajun, Banjarharo, Kealibawang, Kulon Progo - Kodepos 55672</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('selectcategory').addEventListener('change', 'function'() {
        const selectedCategory = this.value;

        if (selectedCategory === 'kesenian') {
            document.getElementById('kesenian-card').scrollIntoView({ behavior: 'smooth', block: 'start' });
        } else if (selectedCategory === 'adat') {
            document.getElementById('adat-card').scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    });
</script>


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

<script src="{{ asset('furni/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('furni/js/tiny-slider.js') }}"></script>
<script src="{{ asset('furni/js/custom.js') }}"></script>


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

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
        AOS.init();
</script>
</body>
</html>