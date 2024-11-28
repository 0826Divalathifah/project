document.addEventListener('DOMContentLoaded', function () {
    // Handle tombol Tanggapi
    document.querySelectorAll('.tanggapi-btn').forEach(function (button) {
        button.addEventListener('click', function () {
            const feedbackId = this.dataset.feedbackId;

            // Simulasi menandai feedback sebagai ditanggapi
            this.classList.remove('btn-primary');
            this.classList.add('btn-secondary');
            this.textContent = 'Sudah Ditanggapi';
            this.disabled = true;

            // Jika ingin menyimpan status ini ke server, gunakan AJAX di sini
            console.log(`Feedback ID ${feedbackId} ditandai sebagai sudah ditanggapi.`);
        });
    });
});

// Handle tombol Hapus
function hapusFeedback(button) {
    const feedbackId = button.dataset.feedbackId;

    if (confirm('Apakah Anda yakin ingin menghapus masukan ini?')) {
        // Hapus baris feedback dari tabel
        button.closest('tr').remove();

        // Jika ingin menyimpan penghapusan ke server, gunakan AJAX di sini
        console.log(`Feedback ID ${feedbackId} dihapus.`);
    }
}
