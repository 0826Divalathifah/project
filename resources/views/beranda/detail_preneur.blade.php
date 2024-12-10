@extends('beranda.layouts.app') 

@section('title', 'Detail Produk')

@section('content')
<div class="container py-5">
    <div class="row">
        <!-- Bagian Gambar Produk -->
        <div class="col-md-6">
            <div id="carousel-slide{{ $preneur->id }}" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @php
                        // Ambil data foto slider dari database seperti logika Budaya
                        $fotoSlider = $preneur->foto_slider ?? [];
                    @endphp

                    @if (!empty($fotoSlider))
                        @foreach ($fotoSlider as $index => $foto)
                            <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                <img src="{{ asset('storage/' . $foto) }}" class="d-block w-100 rounded" alt="Foto Slider {{ $index + 1 }}">
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
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carousel-slide{{ $preneur->id }}" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

        <!-- Bagian Detail Produk -->
        <div class="col-md-6">
            <div class="product-details">
                <h2 class="fw-bold mb-3">{{ $preneur->nama_produk }}</h2>
                <p class="text-success fw-bold h4 mb-3">{{ $preneur->harga_produk }}</p>
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
                        data-nama_produk="{{ $preneur->nama_produk }}" 
                        data-harga_produk="{{ $preneur->harga_produk }}" 
                        data-nomor_whatsapp="{{ $preneur->nomor_whatsapp }}">
                        Pesan via WhatsApp
                    </button>

                </div>
            </div>
        </div>
        </div>
    </div>
</div>


@include('beranda.partials.footer')
@include('beranda.partials.scripts')


</body>
</html>

