document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('form');

    // Bagian untuk menghapus Foto Card
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

    // Bagian untuk menghapus Foto Slider dan Foto Card
    document.querySelectorAll('.remove-photo').forEach(button => {
        button.addEventListener('click', function () {
            const foto = this.getAttribute('data-foto');
            const parent = this.closest('.photo-preview');
            parent.remove();

            const deleteInput = document.createElement('input');
            deleteInput.type = 'hidden';
            deleteInput.name = 'hapus_foto_slider[]';
            deleteInput.value = foto;
            form.appendChild(deleteInput);
        });
    });
});

document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('form');

    // Event listener untuk tombol hapus foto wisata
    document.querySelectorAll('.remove-photo').forEach(button => {
        button.addEventListener('click', function () {
            const foto = this.getAttribute('data-foto'); // Ambil data foto
            const parent = this.closest('.photo-preview'); // Ambil elemen container foto

            // Hapus elemen foto dari tampilan
            if (parent) parent.remove();

            // Tambahkan input hidden untuk menandai foto sebagai "dihapus"
            const deleteInput = document.createElement('input');
            deleteInput.type = 'hidden';
            deleteInput.name = 'hapus_foto_wisata[]';
            deleteInput.value = foto;
            form.appendChild(deleteInput);
        });
    });
});