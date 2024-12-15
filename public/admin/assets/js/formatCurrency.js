function formatCurrency(input) {
    // Hapus semua karakter kecuali angka
    let value = input.value.replace(/[^0-9]/g, '');

    // Tambahkan titik sebagai pemisah ribuan
    value = value.replace(/\B(?=(\d{3})+(?!\d))/g, '.');

    // Masukkan kembali ke input
    input.value = value;
}