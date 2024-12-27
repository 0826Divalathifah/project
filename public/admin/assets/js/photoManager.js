document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('form');

    // Mengelola checkbox untuk hapus Foto Card
    const deleteCheckbox = document.querySelector('input[name="hapus_foto_card"]');
    if (deleteCheckbox) {
        deleteCheckbox.addEventListener('change', function () {
            let deleteInput = form.querySelector('input[type="hidden"][name="hapus_foto_card"]');
            if (deleteCheckbox.checked) {
                if (!deleteInput) {
                    deleteInput = document.createElement('input');
                    deleteInput.type = 'hidden';
                    deleteInput.name = 'hapus_foto_card';
                    deleteInput.value = '1';
                    form.appendChild(deleteInput);
                }
            } else {
                if (deleteInput) {
                    deleteInput.remove();
                }
            }
        });
    }

    // Mengelola tombol hapus foto slider
    document.querySelectorAll('.remove-photo').forEach(button => {
        button.addEventListener('click', function () {
            const foto = this.getAttribute('data-foto');
            const parent = this.closest('.photo-preview');

            // Hapus elemen foto dari DOM
            if (parent) {
                parent.remove();
            }

            // Tambahkan input tersembunyi untuk menghapus foto di backend
            const deleteInput = document.createElement('input');
            deleteInput.type = 'hidden';
            deleteInput.name = 'hapus_foto_slider[]';  // Pastikan nama array konsisten
            deleteInput.value = foto;
            form.appendChild(deleteInput);
        });
    });
});
