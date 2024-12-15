<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk</title>
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
    <link rel="stylesheet" href="{{ asset('themewagon/css/detail.min.css') }}">
    <link rel="stylesheet" href="{{ asset('themewagon/css/detail.css') }}">
    

</head>
<body>

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
                <div class="banner-overlay"></div>
                <div class="banner-text">Detail Produk</div>

                @if(isset($gambar_banner) && file_exists(public_path('storage/' . $gambar_banner)))
                        <img src="{{ asset('storage/' . $gambar_banner) }}" alt="Banner" class="banner-image">
                    @else
                        <img src="{{ asset('themewagon/img/desabudaya/banner.jpg') }}" alt="Banner" class="banner-image">
                    @endif

                    
                <!-- breadcrumb Start-->
                    <div class="breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="{{ url('/desapreneur') }}">Desa Preneur</a></li>
                                <li class="breadcrumb-item"><a href="#">Detail Produk</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>  
                </div>
<!-- Banner End -->

<!-- Content -->
<div class="container py-5">
    <div class="row">
        <!-- Bagian Gambar Produk -->
        <div class="col-md-6">
            <div id="carousel-slide{{ $preneur->id }}" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner" >
                    @php
                        // Ambil data foto slider dari database seperti logika Budaya
                        $fotoSlider = $preneur->foto_slider ?? [];
                    @endphp

                    @if (!empty($fotoSlider))
                        @foreach ($fotoSlider as $index => $foto)
                            <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                            <img src="{{ asset('storage/' . $foto) }}" class="d-block w-100 rounded" alt="Foto Slider {{ $index + 1 }}" style="object-fit: cover;">
                            </div>
                        @endforeach
                    @else
                        <div class="carousel-item active">
                            <img src="{{ asset('storage/uploads/desapreneur/default.jpg') }}" class="d-block w-100 rounded" alt="Default Foto Produk">
                        </div>
                    @endif
                </div>

    <!-- Tombol navigasi slider -->
    <button class="carousel-control-prev" type="button" data-bs-target="#carousel-slide{{ $preneur->id }}" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carousel-slide{{ $preneur->id }}" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
    </button>
</div>
</div>

        <!-- Bagian Detail Produk -->
        <div class="col-md-6">
            <div class="product-details">
                <h2 class="fw-bold mb-3">{{ $preneur->nama_produk }}</h2>
                <p class="text-success fw-bold h4 mb-3">Rp {{ $preneur->harga_produk }}</p>
                <p class="text-muted">{{ $preneur->deskripsi }}</p>

                <!-- Input Jumlah 
                <div class="mt-4">
                    <label for="quantity" class="form-label">Jumlah</label>
                    <input type="number" id="quantity" class="form-control w-50" min="1" value="1">
                </div>-->

                <!-- Tombol -->
                <!--<div class="mt-4">
                    <button 
                        class="btn btn-primary me-2" 
                        id="detailBtn" 
                        data-product-id="{{ $preneur->id }}" 
                        data-product-name="{{ $preneur->nama_produk }}" 
                        data-product-price="{{ $preneur->harga_produk ?? '0' }}" 
                        data-product-quantity="1">
                        Detail Pesanan-->
                    <!-- Chatbox 
                    <div id="chatbox-container" style="position: fixed; bottom: 20px; right: 20px; width: 300px; z-index: 1000;">
                        <div id="chatbox-header" style="background-color: #007bff; color: white; padding: 10px; cursor: pointer; border-radius: 5px 5px 0 0;">
                            Chat Pesanan
                        </div>
                        <div id="chatbox-body" style="display: none; border: 1px solid #ccc; background: white; max-height: 400px; overflow-y: auto; box-shadow: 0 4px 8px rgba(0,0,0,0.2);">
                            <div style="padding: 10px;">
                                <h3>Detail Pesanan</h3>
                                <p>Nama Produk: <span id="productName"></span></p>
                                <p>Harga per Unit: <span id="productPrice"></span></p>
                                <p>Jumlah: <span id="productQuantity"></span></p>
                                <p>Total Harga: <span id="totalPrice"></span></p>
                            </div>
                        </div>
                    </div>
                    </button>-->
                    <!-- Tombol Lanjut ke WhatsApp -->
                   <!-- Tombol dengan data produk dari model preneur -->
                    <button id="whatsappBtn" 
                        data-nama_produk="{{ $preneur->nama_produk }}" 
                        data-harga_produk="Rp {{ $preneur->harga_produk }}" 
                        data-nomor_whatsapp="{{ $preneur->nomor_whatsapp }}">
                        Pesan via WhatsApp
                    </button>

                </div>
            </div>
        </div>
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

<!--? Search model Begin
<div class="search-model-box">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-btn">+</div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Searching key.....">
        </form>
    </div>
</div> -->
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

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('themewagon/js/whatsapp.js') }}"></script>
<script src="{{ asset('themewagon/js/detail.js') }}"></script>


<script>
document.addEventListener('DOMContentLoaded', () => {
    const detailBtn = document.getElementById('detailBtn');
    const chatBox = document.getElementById('chatBox');
    const closeChat = document.getElementById('closeChat');
    const productNameSpan = document.getElementById('productName');
    const productPriceSpan = document.getElementById('productPrice');
    const productQuantitySpan = document.getElementById('productQuantity');
    const totalPriceSpan = document.getElementById('totalPrice');
    const whatsappBtn = document.getElementById('whatsappBtn'); // Tombol untuk WhatsApp

    // Data Produk untuk WhatsApp
    let productData = {
        name: '',
        price: 0,
        quantity: 1,
        totalPrice: 0
    };

    // Menangani klik Detail Pesanan
    if (detailBtn) {
        detailBtn.addEventListener('click', () => {
            const productName = detailBtn.getAttribute('data-product-name');
            const productPrice = parseInt(detailBtn.getAttribute('data-product-price').replace(/\D/g, '')) || 0;
            const productQuantity = parseInt(document.getElementById('quantity').value) || 1;
            const totalPrice = productPrice * productQuantity;

            // Update objek productData
            productData = {
                name: productName,
                price: productPrice,
                quantity: productQuantity,
                totalPrice: totalPrice
            };

            // Update tampilan detail pesanan
            productNameSpan.textContent = productName;
            productPriceSpan.textContent = 'Rp ' + productPrice.toLocaleString('id-ID');
            productQuantitySpan.textContent = productQuantity;
            totalPriceSpan.textContent = 'Rp ' + totalPrice.toLocaleString('id-ID');

            // Tampilkan chatBox
            chatBox.style.display = 'block';
        });
    }

    // Menangani klik tombol Close pada chatBox
    if (closeChat) {
        closeChat.addEventListener('click', () => {
            chatBox.style.display = 'none';
        });
    }

    // Menangani klik Tombol Lanjut ke WhatsApp
    if (whatsappBtn) {
        whatsappBtn.addEventListener('click', () => {
            if (!productData.name) {
                alert('Silakan pilih produk terlebih dahulu!');
                return;
            }

            // Buat pesan WhatsApp
            const message = `Halo, saya ingin memesan produk berikut:
            - Nama Produk: ${productData.name}
            - Harga: Rp ${productData.price.toLocaleString('id-ID')}
            - Jumlah: ${productData.quantity}
            - Total Harga: Rp ${productData.totalPrice.toLocaleString('id-ID')}`;

            // Redirect ke WhatsApp dengan pesan yang sudah dikirim
            const whatsappURL = `https://wa.me/62XXXXXXXXX?text=${encodeURIComponent(message)}`;
            window.open(whatsappURL, '_blank');
        });
    }
});
</script>




</body>
</html>