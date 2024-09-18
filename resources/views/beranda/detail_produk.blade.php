<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Detail</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        .product-detail {
            background-color: #fff;
            border-radius: 15px;
            display: flex;
            flex-wrap: wrap;
            max-width: 1000px;
            padding: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .product-images {
            width: 45%; /* Adjust width for images */
            margin-right: 20px;
        }

        .product-images img {
            width: 100%;
            height: auto;
            max-width: 300px; /* Limit max width for larger screens */
            border-radius: 10px;
            object-fit: contain; /* Ensure the image fits properly */
        }

        .product-info {
            width: 50%; /* Adjust width for product info */
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

        /* Responsive Design */
        @media (max-width: 1024px) {
            .product-images {
                width: 50%; /* Slightly wider on tablet size */
            }

            .product-info {
                width: 100%;
                margin-top: 20px;
            }
        }

        @media (max-width: 768px) {
            .product-detail {
                flex-direction: column;
                align-items: center;
            }

            .product-images, .product-info {
                width: 100%;
                margin: 0;
            }

            .product-images img {
                width: 90%; /* Make image smaller on mobile */
                max-width: 250px; /* Limit max width */
                height: auto;
            }

            .product-info {
                margin-top: 20px;
                text-align: center; /* Center text for mobile */
            }
        }

        @media (max-width: 480px) {
            .product-images img {
                width: 80%; /* Reduce image size further for smaller screens */
                max-width: 200px; /* Limit max width */
            }

            .product-info {
                font-size: 14px; /* Smaller text size on very small screens */
            }

            .product-info button {
                width: 100%;
                padding: 8px;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <div class="product-detail">
        <!-- Product Images Slider -->
        <div class="product-images">
            <div><img src="{{ asset('themewagon/img/desaprima/produk1.jpeg') }}" alt="Produk 1"></div>
            <div><img src="{{ asset('themewagon/img/desaprima/produk2.jpeg') }}" alt="Produk 2"></div>
            <div><img src="{{ asset('themewagon/img/desaprima/produk3.jpeg') }}" alt="Produk 3"></div>
        </div>

        <!-- Product Information -->
        <div class="product-info">
            <h3> Briza Brownies </h3>
            <h2>Coklat</h2>
            <p class="price">Rp 100.000</p>
            <p>Adidas Footwear</p>
            <div class="description">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
            </div>
            <button><a href="{{ url('/transaksi') }}">Beli</a></button>
        </div>
    </div>
</div>

<!-- Slick Slider Script -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script>
    $(document).ready(function(){
        $('.product-images').slick({
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 1,
            slidesToScroll: 1,
            prevArrow: '<button class="slick-prev"><i class="fas fa-chevron-left"></i></button>',
            nextArrow: '<button class="slick-next"><i class="fas fa-chevron-right"></i></button>',
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        arrows: false,
                        dots: true
                    }
                }
            ]
        });
    });
</script>

</body>
</html>
