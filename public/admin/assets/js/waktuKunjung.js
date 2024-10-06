document.addEventListener('DOMContentLoaded', function () {
    const waktuKunjungWrapper = document.getElementById('waktuKunjungWrapper');
    const addWaktuKunjung = document.getElementById('addWaktuKunjung');

    // Event listener untuk menambahkan input waktu kunjung baru
    addWaktuKunjung.addEventListener('click', function () {
        // Tambah input waktu kunjung baru
        const waktuKunjung = document.createElement('div');
        waktuKunjung.classList.add('input-group', 'mb-3', 'waktu-kunjung');

        waktuKunjung.innerHTML = `
            <select class="form-control me-2 hari-select" name="hari[]" required>
                <option value="">Pilih Hari</option>
                <option value="Setiap Hari">Setiap Hari</option>
                <option value="Senin">Senin</option>
                <option value="Selasa">Selasa</option>
                <option value="Rabu">Rabu</option>
                <option value="Kamis">Kamis</option>
                <option value="Jumat">Jumat</option>
                <option value="Sabtu">Sabtu</option>
                <option value="Minggu">Minggu</option>
            </select>
            <input type="time" class="form-control me-2" name="jam_mulai[]" required>
            <span class="input-group-text">s/d</span>
            <input type="time" class="form-control ms-2" name="jam_selesai[]" required>
            <button type="button" class="btn btn-danger btn-sm ms-2 removeWaktuKunjung">Hapus</button>
        `;

        waktuKunjungWrapper.appendChild(waktuKunjung);
    });

    // Delegasi event listener untuk menghapus input waktu kunjung
    waktuKunjungWrapper.addEventListener('click', function (e) {
        if (e.target.classList.contains('removeWaktuKunjung')) {
            // Hapus elemen parent dari tombol yang ditekan
            e.target.parentElement.remove();
        }
    });

    // Fungsi untuk memantau pilihan "Setiap Hari"
    waktuKunjungWrapper.addEventListener('change', function (e) {
        if (e.target.classList.contains('hari-select')) {
            const hariSelect = e.target;
            if (hariSelect.value === 'Setiap Hari') {
                // Nonaktifkan dropdown hari lain jika "Setiap Hari" dipilih
                const allSelects = document.querySelectorAll('.hari-select');
                allSelects.forEach(select => {
                    if (select !== hariSelect) {
                        select.disabled = true;
                    }
                });
            } else {
                // Aktifkan kembali dropdown hari lain jika bukan "Setiap Hari" yang dipilih
                const allSelects = document.querySelectorAll('.hari-select');
                allSelects.forEach(select => {
                    select.disabled = false;
                });
            }
        }
    });
});
