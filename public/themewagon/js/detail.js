//js untuk corousel gambar nya
document.addEventListener("DOMContentLoaded", function() {
    let currentIndex = 0;

    function showSlide(index) {
        const slides = document.querySelectorAll('.carousel-slide');
        const wrapper = document.getElementById('carouselWrapper');

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

    window.nextSlide = function() {
        showSlide(currentIndex + 1);
    }

    window.prevSlide = function() {
        showSlide(currentIndex - 1);
    }
});





// Menampilkan chat box ketika tombol Detail Pesanan diklik
document.getElementById("detailBtn").addEventListener("click", function() {
    // Mengambil detail produk dari data attribute
    const productName = this.getAttribute('data-product-name');
    const productPrice = parseFloat(this.getAttribute('data-product-price'));

    // Mengambil jumlah pesanan
    const quantity = parseInt(document.getElementById("quantity").value);

    // Mengambil topping yang dipilih
    const toppingSelect = document.getElementById("topping");
    const selectedToppings = Array.from(toppingSelect.selectedOptions).map(option => option.value).join(", ");

    // Menghitung total harga
    const totalPrice = 'Rp ' + (productPrice * quantity).toLocaleString('id-ID', { minimumFractionDigits: 2 });

    // Mengisi detail pesanan secara dinamis
    document.getElementById("productName").textContent = productName;
    document.getElementById("productPrice").textContent = 'Rp ' + productPrice.toLocaleString('id-ID', { minimumFractionDigits: 2 });
    document.getElementById("productQuantity").textContent = quantity;
    document.getElementById("productTopping").textContent = selectedToppings || "Tidak ada topping";
    document.getElementById("totalPrice").textContent = totalPrice;

    // Menampilkan chat box
    document.getElementById("chatBox").style.display = "block";
});

// Menutup chat box ketika tombol close diklik
document.getElementById("closeChat").addEventListener("click", function() {
    document.getElementById("chatBox").style.display = "none";
});

// Mengirim pesan ke WhatsApp ketika tombol Simpan dan Lanjutkan ke WhatsApp diklik
document.getElementById("whatsappBtn").addEventListener("click", function() {
    // Mengambil data pesanan yang sudah ditampilkan di chat box
    const productName = document.getElementById("productName").textContent;
    const productPrice = document.getElementById("productPrice").textContent;
    const quantity = document.getElementById("productQuantity").textContent;
    const toppings = document.getElementById("productTopping").textContent;
    const totalPrice = document.getElementById("totalPrice").textContent;

    // Membuat pesan untuk WhatsApp
    const message = `Halo, saya ingin memesan:\n` +
                    `Nama Produk: ${productName}\n` +
                    `Harga: ${productPrice}\n` +
                    `Jumlah: ${quantity}\n` +
                    `Topping: ${toppings}\n` +
                    `Total Harga: ${totalPrice}`;

    // Ganti '628xxxxxxxxxx' dengan nomor WhatsApp penjual
    const whatsappURL = `https://wa.me/628xxxxxxxxxx?text=${encodeURIComponent(message)}`;

    // Buka WhatsApp dengan pesan
    window.open(whatsappURL, '_blank');
});

// Menutup chat box ketika tombol Close diklik
document.getElementById("closeChat").addEventListener("click", function() {
    document.getElementById("chatBox").style.display = "none";
});