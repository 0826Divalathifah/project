function openChat() {
    document.getElementById("chatBox").style.display = "block";
 }
 
 function sendWhatsAppMessage() {
    let message = document.getElementById("chatInput").value;
    let number = "085777773040"; // Ganti dengan nomor WhatsApp yang dituju
    let url = `https://wa.me/${number}?text=${encodeURIComponent(message)}`;
    window.open(url, '_blank');
 }
 

 // Fungsi untuk konfirmasi detail pesanan sebelum mengirim ke WhatsApp
 function confirmOrderDetails() {
   var message = "Produk: " + productDetails.name + "\n" +
                 "Harga: " + productDetails.price + "\n" +
                 "Jumlah: " + productDetails.quantity;
   var confirmation = confirm("Apakah detail pesanan Anda sudah benar?\n\n" + message);
   if (confirmation) {
       sendWhatsAppMessage(message);
   }
}

// Fungsi untuk mengirim pesan ke WhatsApp
function sendWhatsAppMessage(message) {
   var phoneNumber = "628123456789"; // Ganti dengan nomor WhatsApp tujuan
   var url = "https://wa.me/" + phoneNumber + "?text=" + encodeURIComponent(message);
   window.open(url, "_blank");
}



