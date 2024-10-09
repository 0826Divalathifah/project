function openChat() {
    document.getElementById("chatBox").style.display = "block";
 }
 
 function sendWhatsAppMessage() {
    let message = document.getElementById("chatInput").value;
    let number = "085777773040"; // Ganti dengan nomor WhatsApp yang dituju
    let url = `https://wa.me/${number}?text=${encodeURIComponent(message)}`;
    window.open(url, '_blank');
 }
 