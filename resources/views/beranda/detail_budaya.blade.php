<!doctype html>

<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Detail Budaya</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('beranda/img/favicon.ico') }}">

    <!--  CSS here -->
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
    <link rel="stylesheet" href="{{ asset('beranda/css/calendar.css') }}">
    <link rel="stylesheet" href="{{ asset('beranda/css/whatsapp.css') }}">

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
    <!-- Preloader end -->

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
                                    <li>
                                        <a href="#">Desa Mandiri Budaya</a>
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
                        <!-- Search Box 
                        <div class="search d-none d-md-block">
                            <ul class="d-flex align-items-center">
                                <li class="mr-15">
                                    <div class="nav-search search-switch">
                                        <i class="ti-search"></i>
                                    </div>
                                </li>
                            </ul>
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
    </div>
    <!-- Header End -->
</header>


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
                @if(isset($homepageData->gambar_banner))
                    <img src="{{ asset('storage/' . $homepageData->gambar_banner) }}" alt="Banner" class="banner-image">
                @else
                <!-- Gambar default jika gambar_banner tidak tersedia -->
                    <img src="{{ asset('beranda/img/desabudaya/banner.jpg') }}" alt="Banner" class="banner-image">
                    @endif
                <div class="banner-overlay"></div> <!-- Overlay -->
                <div class="banner-text">Detail Budaya</div> <!-- Teks di atas gambar -->
                    
                <!-- breadcrumb Start-->
                    <div class="breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="{{ url('/desabudaya') }}">Desa Budaya</a></li>
                                <li class="breadcrumb-item"><a href="#">Detail budaya</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>  
                </div>    
    
    <div class="container-fluid">
    <div class="row">
        <!-- Bagian Video -->
        <div class="col-lg-8">
            <div class="video-container">
                @if(isset($embed_youtube_link) && !empty($embed_youtube_link))
                    <iframe src="{{ $embed_youtube_link }}"
                            title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen
                            style="width: 100%; height: 370px; object-fit: cover;">
                    </iframe>
                @else
                    <p>Video tidak tersedia.</p>
                @endif
            </div>

            <!-- Carousel Slider -->
            <div class="row mt-4">
                <div class="col-lg-12">
                    <div id="photoGallery" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            @php
                                $fotoSlider = $budaya->foto_slider ?? [];
                            @endphp
                            @if (!empty($fotoSlider))
                                @foreach (array_chunk($fotoSlider, 3) as $index => $fotoGroup)
                                    <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                        <div class="row">
                                            @foreach ($fotoGroup as $foto)
                                                <div class="col-4">
                                                    <img src="{{ asset('storage/' . $foto) }}" alt="Foto Slider" class="d-block w-100" style="height: 300px; object-fit: cover;">
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <p class="text-center">Tidak ada foto slider yang tersedia.</p>
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

            <!-- Kisaran Harga -->
            @if(!empty($budaya->harga_min) || !empty($budaya->harga_max))
                <div class="price-range mt-5">
                    <h2>Kisaran Harga</h2>
                    <p>
                        @if(!empty($budaya->harga_min) && !empty($budaya->harga_max))
                            Rp {{ number_format($budaya->harga_min, 0, ',', '.') }} - Rp {{ number_format($budaya->harga_max, 0, ',', '.') }}
                        @elseif(!empty($budaya->harga_min))
                            Mulai dari Rp {{ number_format($budaya->harga_min, 0, ',', '.') }}
                        @elseif(!empty($budaya->harga_max))
                            Hingga Rp {{ number_format($budaya->harga_max, 0, ',', '.') }}
                        @endif
                    </p>
                </div>
            @endif

            <!-- Deskripsi -->
            @if(!empty($budaya->deskripsi))
                <div class="description mt-5">
                    <h2>Description</h2>
                    <p>{{ $budaya->deskripsi }}</p>
                </div>
            @else
                <div class="description mt-5">
                    <p>Deskripsi tidak tersedia.</p>
                </div>
            @endif
        </div>

        <!-- Kalender Jadwal -->
        <div class="col-lg-4 col-md-12">
            <div id="calendar-container" class="card p-4 shadow-sm">
                <div class="calendar-navigation d-flex justify-content-between align-items-center mb-3">
                    <button id="prev-month" class="btn btn-outline-secondary btn-sm">&lsaquo;&lsaquo;</button>
                    <h4 id="month-year" class="mb-0"></h4>
                    <button id="next-month" class="btn btn-outline-secondary btn-sm">&rsaquo;&rsaquo;</button>
                </div>

                <div id="calendar" class="row g-2"></div>

                <!-- Detail Jadwal di dalam kotak kalender -->
                <div id="event-description" class="mt-4 p-3 bg-light border rounded shadow-sm">
                    <h5>Detail Jadwal:</h5>
                    <p id="event-detail" class="text-muted">Klik pada tanggal yang memiliki tanda (*) untuk melihat detail acara.</p>
                </div>
            </div>

            <!-- Tombol Pesan Sekarang dengan lebar penuh -->
            <button id="pesanSekarangBtn" style="background-color: green; color: white; border: none; width: 100%; padding: 10px 20px; font-size: 16px; cursor: pointer; border-radius: 5px; margin-top: 20px;">
                Pesan Sekarang
            </button>

            <!-- WhatsApp Chat Box -->
            <div id="chatBox" style="display: none; margin-top: 20px; border: 1px solid #ddd; padding: 20px; border-radius: 10px; position: relative; width: 300px;">
                <div id="chatHeader" style="display: flex; justify-content: space-between; align-items: center;">
                    <h3 style="margin: 0;">Kirim Pesanan Anda!</h3>
                    <span id="closeChat" style="cursor: pointer; font-size: 20px; font-weight: bold; color: red;">&times;</span>
                </div>
                <textarea id="chatInput" placeholder="Ketik pesan disini" style="width: 100%; padding: 10px; border-radius: 5px; margin-bottom: 10px;"></textarea>
                <button onclick="sendWhatsAppMessage()" style="background-color: purple; color: white; border: none; padding: 10px 20px; font-size: 16px; cursor: pointer; border-radius: 5px;">
                    Kirim
                </button>
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
<!--? Search model Begin -->
<div class="search-model-box">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-btn">+</div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Searching key.....">
        </form>
    </div>
</div>

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

<!-- calendar js -->
<script>
    const agenda = @json($agenda);
</script>
<script src="{{ asset('beranda/js/calendar.js') }}"></script>

<!-- whatsapp js -->
<script src="{{ asset('beranda/js/whatsapp.js') }}"></script>

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

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
    // Menampilkan chat box ketika tombol Pesan Sekarang diklik
    document.getElementById("pesanSekarangBtn").addEventListener("click", function() {
        document.getElementById("chatBox").style.display = "block";
    });

    // Menutup chat box ketika tombol Close diklik
    document.getElementById("closeChat").addEventListener("click", function() {
        document.getElementById("chatBox").style.display = "none";
    });

    function sendWhatsAppMessage() {
        var phoneNumber = "{{ $budaya->nomor_whatsapp }}"; // Nomor WhatsApp dari database
        var message = document.getElementById("chatInput").value;

        if (message.trim() === "") {
            alert("Pesan tidak boleh kosong.");
        } else {
            var url = "https://wa.me/" + phoneNumber + "?text=" + encodeURIComponent(message);
            window.open(url, "_blank");
        }
    }
</script>
<script>$('.carousel').carousel()</script>

</body>
</html>
