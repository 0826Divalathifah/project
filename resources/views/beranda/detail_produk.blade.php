<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
        }

        .product-details {
            margin-top: 20px;
        }

        .product-img {
            width: 90%;
            height: 250px;
        }

        .btn-buy {
            background-color: #5e2ced;
            color: #fff;
            font-weight: bold;
        }

        .btn-buy:hover {
            background-color: #471bb0;
        }

        .product-title {
            font-size: 2rem;
            font-weight: bold;
        }

        .price {
            color: #5e2ced;
            font-size: 1.5rem;
            font-weight: bold;
        }

        .product-description {
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="container product-details">
    <div class="row">
        <!-- Product Image Slider -->
        <div class="col-md-6">
            <div id="productImageCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('themewagon/img/desaprima/produk1.jpeg') }}" class="d-block product-img" alt="Produk 1">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('themewagon/img/desaprima/produk2.jpeg') }}" class="d-block product-img" alt="Produk 2">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('themewagon/img/desaprima/produk3.jpeg') }}" class="d-block product-img" alt="Produk 3">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#productImageCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#productImageCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        
        <!-- Product Info -->
        <div class="col-md-6">
            <h1 class="product-title">Briza Brownis</h1>
            <p class="price">Rp 35.000 - Rp 100.000</p>


            <div class="sizes">
                <h5>Varian:</h5>
                <select class="form-select w-50">
                    <option>Coklat</option>
                    <option>Keju</option>
                </select>
            </div>

            <!-- Description Section -->
            <div class="description-section mt-4">
                <p><b>Produk dari kelompok</b> : Sindu Jaya Kreatif</p>
                <p><b>Alamat</b> : Jalan Kaliurang</p>
            </div>

            <button class="btn btn-buy mt-4">Beli Sekarang</button>
        </div>
    </div>

    <!-- Product Description -->
    <div class="product-description mt-5">
        <h4>Product Description</h4>
        <p>
            Dibuat dengan coklat yang berkualitas
        </p>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
