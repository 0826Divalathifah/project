 // Detail produk yang akan dibeli (data ini bisa diambil dari server atau dinamis tergantung pada barang yang dipilih)
 var productDetails = {
    name: "Nama Produk",
    price: "Rp 150.000",
    quantity: 1
};

// Menampilkan chat box ketika tombol Beli diklik
document.getElementById("beliBtn").addEventListener("click", function() {
    // Mengisi detail pesanan secara dinamis
    document.getElementById("productName").textContent = productDetails.name;
    document.getElementById("productPrice").textContent = productDetails.price;
    document.getElementById("productQuantity").textContent = productDetails.quantity;

    // Menampilkan chat box
    document.getElementById("chatBox").style.display = "block";
});

// Menutup chat box ketika tombol Close diklik
document.getElementById("closeChat").addEventListener("click", function() {
    document.getElementById("chatBox").style.display = "none";
});