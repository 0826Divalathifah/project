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

    // Jika valid, tampilkan SweetAlert
    Swal.fire({
        title: "Apakah Anda Sudah Yakin?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Ya"
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire({
                title: "Pemesanan Berhasil!",
                text: "Pesanan anda sedang diproses.",
                icon: "success"
            }).then(() => {
                // Mengembalikan form ke kondisi default
                form.reset();
            });
        }
    });
});

// Script for formatting currency input
function formatCurrency(input) {
    let value = input.value.replace(/\D/g, '');
    if (value) {
        value = Number(value).toLocaleString('id-ID');
        input.value = value;
    }
}

// penghapusan pada tambah agenda
function confirmDelete(agendaName) {
        Swal.fire({
            title: "Apakah Anda yakin?",
            text: "Anda akan menghapus agenda: " + agendaName,
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Ya, Hapus!"
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    title: "Agenda Dihapus!",
                    text: "Agenda " + agendaName + " telah dihapus.",
                    icon: "success"
                });
                // Logika penghapusan bisa ditambahkan di sini, seperti menghapus data dari server
            }
        });
    }
