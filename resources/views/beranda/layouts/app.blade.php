<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Desa Mandiri Budaya')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('themewagon/img/favicon.ico') }}">
    @include('beranda.partials.styles') <!-- Panggil file CSS -->

</head>
<body>
    @include('beranda.partials.header') <!-- Header -->

    <main>
        @yield('content') <!-- Konten halaman -->
    </main>

    @include('beranda.partials.footer') <!-- Footer -->

    <!-- Scroll Up -->
    <div id="back-top">
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    @include('beranda.partials.scripts') <!-- Panggil file JS -->
</body>
</html>
