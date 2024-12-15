function updateDateTime() {
    const now = new Date();
    const formattedDate = now.toLocaleDateString('id-ID', {
        year: 'numeric',
        month: 'long',
        day: 'numeric',
    });
    const formattedTime = now.toLocaleTimeString('id-ID');
    document.getElementById('currentDateTime').textContent = `${formattedDate} ${formattedTime}`;
}

    // Perbarui waktu setiap detik
    setInterval(updateDateTime, 1000);

    // Panggil sekali saat halaman pertama kali dimuat
    updateDateTime();