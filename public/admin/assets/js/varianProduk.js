document.addEventListener('DOMContentLoaded', function() {
    let variantIndex = 0;  // Menentukan indeks varian

    // Event Listener untuk tombol tambah varian
    document.getElementById('addVariantBtn').addEventListener('click', function() {
        addVariant();
    });

    function addVariant() {
        variantIndex++;
        const varianContainer = document.getElementById('varianContainer');
        
        // Membuat div untuk menampung input varian
        const varianDiv = document.createElement('div');
        varianDiv.classList.add('input-group', 'mb-3');
        varianDiv.setAttribute('id', `varian-${variantIndex}`);
        
        // Input nama dan harga varian
        varianDiv.innerHTML = `
            <input type="text" name="varian[]" class="form-control" placeholder="Nama Varian" required>
            <input type="number" name="varian_harga[]" class="form-control" placeholder="Harga Varian" required>
            <button type="button" class="btn btn-danger" onclick="removeVariant(${variantIndex})">Hapus Varian</button>
        `;

        varianContainer.appendChild(varianDiv);
    }

    // Fungsi untuk menghapus varian
    window.removeVariant = function(index) {
        const varianDiv = document.getElementById(`varian-${index}`);
        varianDiv.remove();  // Menghapus input varian
    };
});
