// Event listener for the form submission with SweetAlert validation
document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector("form"); // Mengambil form pertama di halaman
    const submitButton = document.querySelector("#submit");

    // Cek apakah form dan tombol submit ditemukan
    if (!form || !submitButton) {
        console.error("Form or submit button not found!"); // Log jika form atau tombol tidak ditemukan
        return;
    }

    // Tambahkan event listener ke tombol submit
    submitButton.addEventListener("click", (event) => {
        console.log("Submit button clicked"); // Log ketika tombol diklik

        // Cek apakah form valid
        console.log("Checking form validity...");
        if (!form.checkValidity()) {
            // Jika tidak valid, hentikan submit dan tampilkan pesan kesalahan
            event.preventDefault();
            console.log("Form is invalid"); // Log jika form tidak valid
            Swal.fire({
                title: "Perhatian!",
                text: "Harap lengkapi semua field yang diperlukan.",
                icon: "warning"
            });
        } else {
            // Jika valid, submit form
            console.log("Form is valid, submitting..."); // Log sebelum submit
        }
    });
});

// Script for formatting currency input
function formatCurrency(input) {
    let value = input.value.replace(/[^0-9]/g, ''); // Hanya angka
    input.value = value.replace(/\B(?=(\d{3})+(?!\d))/g, "."); // Format ribuan
}

// Function for confirming the deletion of various types of data
function confirmDelete(id, type) {
    const messages = {
        'budaya': 'Data Budaya ini akan dihapus beserta semua foto terkait!',
        'prima': 'Data Produk Prima ini akan dihapus beserta semua foto terkait!',
        'preneur': 'Data Produk Preneur ini akan dihapus beserta semua foto terkait!',
        'wisata': 'Data Wisata ini akan dihapus beserta semua foto terkait!',
        'agenda': 'Agenda ini akan dihapus!',
        'feedback': 'Feedback ini akan dihapus!',
        'admin': 'Admin ini akan dihapus!',
    };

    const message = messages[type] || 'Data ini akan dihapus!';
    console.log("Delete confirmation message:", message);

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
            console.log("Confirmed deletion for ID:", id);
            document.getElementById(`delete-form-${id}`).submit();
        } else {
            console.log("Deletion cancelled");
        }
    });
}

// Display success or error alerts after deletion
document.addEventListener('DOMContentLoaded', function () {
    const successElement = document.querySelector('[data-success]');
    const errorElement = document.querySelector('[data-error]');
    
    if (successElement) {
        const successMessage = successElement.getAttribute('data-success');
        console.log("Success message found:", successMessage);
        if (successMessage) {
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: successMessage,
            });
        }
    }

    if (errorElement) {
        const errorMessage = errorElement.getAttribute('data-error');
        console.log("Error message found:", errorMessage);
        if (errorMessage) {
            Swal.fire({
                icon: 'error',
                title: 'Gagal!',
                text: errorMessage,
            });
        }
    }
});
