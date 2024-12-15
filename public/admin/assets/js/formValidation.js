// Event listener for the form submission with SweetAlert validation
document.querySelector("#submit").addEventListener("click", () => {
    const form = document.querySelector("#formTambah");
    // Cek apakah form valid
    if (!form.checkValidity()) {
        // Jika tidak valid, tampilkan pesan kesalahan
        Swal.fire({
            title: "Perhatian!",
            text: "Harap lengkapi semua field yang diperlukan.",
            icon: "warning"
        });
        return; // Keluar dari fungsi jika form tidak valid
    }

});

// Script for formatting currency input
function formatCurrency(input) {
    let value = input.value.replace(/\D/g, '');
    if (value) {
        value = Number(value).toLocaleString('id-ID');
        input.value = value;
    }
}

//penghapus data setiap desa
// Function for confirming the deletion of various types of data
function confirmDelete(id, type) {
    // Determining the message based on the type of data
    const messages = {
        'budaya': 'Data Budaya ini akan dihapus beserta semua foto terkait!',
        'prima': 'Data Produk Prima ini akan dihapus beserta semua foto terkait!',
        'preneur': 'Data Produk Preneur ini akan dihapus beserta semua foto terkait!',
        'wisata': 'Data Wisata ini akan dihapus beserta semua foto terkait!',
        'agenda': 'Agenda ini akan dihapus!',
        'feedback': 'Feedback ini akan dihapus!',
        'admin': 'Admin ini akan dihapus!',
    };

    // Get the message based on the type
    const message = messages[type] || 'Data ini akan dihapus!';

    // Display confirmation alert with SweetAlert
    Swal.fire({
        title: 'Apakah Anda yakin?',
        text: message,
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Hapus',
        cancelButtonText: 'Batal',
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {
            // Submit the form based on the ID
            document.getElementById(`delete-form-${id}`).submit();
        }
    });
}

// If the deletion is successful, display success alert
document.addEventListener('DOMContentLoaded', function () {
    const successElement = document.querySelector('[data-success]');
    const errorElement = document.querySelector('[data-error]');
    
    if (successElement) {
        const successMessage = successElement.getAttribute('data-success');
        if (successMessage) {
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: successMessage,
            });
        }
    }

    // If the deletion failed, display error alert
    if (errorElement) {
        const errorMessage = errorElement.getAttribute('data-error');
        if (errorMessage) {
            Swal.fire({
                icon: 'error',
                title: 'Gagal!',
                text: errorMessage,
            });
        }
    }
});