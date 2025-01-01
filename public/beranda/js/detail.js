// JS untuk Carousel Gambar
document.addEventListener("DOMContentLoaded", function () {
    let currentIndex = 0;

    function showSlide(index) {
        const slides = document.querySelectorAll(".carousel-slide");
        const wrapper = document.getElementById("carouselWrapper");

        if (slides.length === 0 || !wrapper) return; // Validasi elemen

        if (index >= slides.length) {
            currentIndex = 0;
        } else if (index < 0) {
            currentIndex = slides.length - 1;
        } else {
            currentIndex = index;
        }

        // Pindah posisi wrapper sesuai dengan index slide
        wrapper.style.transform = `translateX(-${currentIndex * 100}%)`;
    }

    window.nextSlide = function () {
        showSlide(currentIndex + 1);
    };

    window.prevSlide = function () {
        showSlide(currentIndex - 1);
    };

    // Tombol WhatsApp
    const whatsappButton = document.getElementById("whatsappBtn");
    if (whatsappButton) {
        whatsappButton.addEventListener("click", function () {
            const namaProduk = this.getAttribute("data-nama_produk") || "Produk tidak tersedia";
            const hargaProduk = this.getAttribute("data-harga_produk") || "Harga tidak tersedia";
            const nomorWA = this.getAttribute("data-nomor_whatsapp");

            // Validasi nomor WhatsApp
            if (!nomorWA) return;

            // Membuat pesan WhatsApp
            const message = `Halo, saya ingin membeli:\n` +
                `Produk: ${namaProduk}\n` +
                `Harga: ${hargaProduk}`;
            const url = `https://wa.me/${nomorWA}?text=${encodeURIComponent(message)}`;

            // Buka link WhatsApp
            window.open(url, "_blank");
        });
    }
});
