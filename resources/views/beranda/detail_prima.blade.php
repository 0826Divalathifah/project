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
<div class="container py-5">
    <div class="row">
        <!-- Bagian Gambar Produk -->
        <div class="col-md-6">
            <div id="carousel-slide{{ $produk->id }}" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
    @php
        // Decode JSON jika data dalam format string
        $foto_produk = is_array($produk->foto_produk) ? $produk->foto_produk : json_decode($produk->foto_produk, true);
    @endphp

    @if (!empty($foto_produk) && is_array($foto_produk))
        @foreach ($foto_produk as $key => $file_path)
            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                @if (Storage::exists($file_path)) 
                    <!-- Gunakan Storage::url untuk memastikan path benar -->
                    <img src="{{ Storage::url($file_path) }}" class="d-block w-100 rounded" alt="Foto Produk {{ $key + 1 }}">
                @else
                    <p class="text-muted">Foto tidak ditemukan: {{ $file_path }}</p>
                @endif
            </div>
        @endforeach
    @else
        <div class="carousel-item active">
            <img src="{{ asset('storage/uploads/desapreneur/default.jpg') }}" class="d-block w-100 rounded" alt="Default Foto Produk">
        </div>
    @endif
</div>

                <!-- Tombol navigasi slider -->
                <button class="carousel-control-prev" type="button" data-bs-target="#carousel-slide{{ $produk->id }}" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carousel-slide{{ $produk->id }}" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <!-- Bagian Detail Produk -->
        <div class="col-md-6">
            <div class="product-details">
                <h2 class="fw-bold mb-3">{{ $produk->nama_produk }}</h2>
                <p class="text-success fw-bold h4 mb-3">{{ $produk->harga_produk }}</p>
                <p class="text-muted">{{ $produk->deskripsi }}</p>

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
                        data-product-id="{{ $produk->id }}" 
                        data-product-name="{{ $produk->nama_produk }}" 
                        data-product-price="{{ $produk->harga_produk ?? '0' }}" 
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
                   <!-- Tombol dengan data produk dari model Prima -->
                    <button id="whatsappBtn" 
                        data-nama_produk="{{ $produk->nama_produk }}" 
                        data-harga_produk="{{ $produk->harga_produk }}" 
                        data-nomor_whatsapp="{{ $produk->nomor_whatsapp }}">
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
