document.addEventListener('DOMContentLoaded', function () {
    let kunjungIndex = 0; // Menentukan indeks untuk waktu kunjung
    const waktuKunjungWrapper = document.getElementById('waktuKunjungWrapper');
    const addWaktuKunjung = document.getElementById('addWaktuKunjung');

    // Event listener untuk menambahkan input waktu kunjung baru
    addWaktuKunjung.addEventListener('click', function () {
        kunjungIndex++;

        // Tambah input waktu kunjung baru
        const waktuKunjung = document.createElement('div');
        waktuKunjung.classList.add('input-group', 'mb-3', 'waktu-kunjung');
        waktuKunjung.setAttribute('id', `kunjung-${kunjungIndex}`);

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
            <input type="time" class="form-control me-2" name="jam_buka[]" required>
            <span class="input-group-text">s/d</span>
            <input type="time" class="form-control ms-2" name="jam_tutup[]" required>
            <button type="button" class="btn btn-danger btn-sm ms-2 removeWaktuKunjung">Hapus</button>
        `;

        waktuKunjungWrapper.appendChild(waktuKunjung);
    });

    // Delegasi event listener untuk menghapus input waktu kunjung
    waktuKunjungWrapper.addEventListener('click', function (e) {
        if (e.target.classList.contains('removeWaktuKunjung')) {
            e.target.closest('.waktu-kunjung').remove();
        }
    });

    // Fungsi untuk memantau pilihan "Setiap Hari"
    waktuKunjungWrapper.addEventListener('change', function (e) {
        if (e.target.classList.contains('hari-select')) {
            const hariSelect = e.target;
            const allSelects = document.querySelectorAll('.hari-select');
            if (hariSelect.value === 'Setiap Hari') {
                allSelects.forEach(select => {
                    if (select !== hariSelect) {
                        select.disabled = true;
                        select.value = '';
                    }
                });
            } else {
                const isEveryDaySelected = Array.from(allSelects).some(select => select.value === 'Setiap Hari');
                if (!isEveryDaySelected) {
                    allSelects.forEach(select => select.disabled = false);
                }
            }
        }
    });
});