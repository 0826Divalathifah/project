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
