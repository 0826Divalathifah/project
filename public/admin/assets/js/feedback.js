document.addEventListener('DOMContentLoaded', function () {
    // Handle tombol Tanggapi / Sudah Ditanggapi (toggle)
    document.querySelectorAll('.tanggapi-btn').forEach(function (button) {
        button.addEventListener('click', function () {
            const feedbackId = this.dataset.feedbackId;
            const isResponded = this.dataset.responded === "1"; // Cek jika sudah ditanggapi

            // Jika tombol "Tanggapi" yang pertama kali diklik
            if (!isResponded) {
                // Ubah tampilan tombol menjadi "Sudah Ditanggapi"
                this.classList.remove('btn-primary');
                this.classList.add('btn-inverse-primary'); // Menggunakan btn-inverse-primary
                this.textContent = 'Sudah Ditanggapi';
                this.dataset.responded = "1"; // Update data-responded menjadi 1
            } else {
                // Kembalikan tampilan tombol ke "Tanggapi"
                this.classList.remove('btn-inverse-primary'); // Menghapus btn-inverse-primary
                this.classList.add('btn-primary'); // Menggunakan btn-primary
                this.textContent = 'Tanggapi';
                this.dataset.responded = "0"; // Update data-responded menjadi 0
            }

            // Kirim status ke server untuk menandai atau mengembalikan status tanggapan
            fetch(`/adminkalurahan/respond/${feedbackId}`, {
                method: 'PATCH', // Menggunakan PATCH untuk update status
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    is_responded: !isResponded, // Toggle nilai is_responded
                })
            })
            .then(response => response.json())
            .then(data => {
                if (!data.success) {
                    alert('Gagal mengupdate status tanggapan.');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Terjadi kesalahan saat mencoba mengupdate status tanggapan.');
            });
        });
    });

    // Handle tombol Hapus menggunakan SweetAlert
    document.querySelectorAll('.hapus-btn').forEach(function (button) {
        button.addEventListener('click', function () {
            const feedbackId = this.dataset.feedbackId; // Pastikan menggunakan feedbackId
    
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: 'Masukan ini akan dihapus!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Ya, Hapus!',
                cancelButtonText: 'Batal',
            }).then((result) => {
                if (result.isConfirmed) {
                    // Kirim permintaan penghapusan ke server menggunakan AJAX
                    fetch(`/adminkalurahan/delete/${feedbackId}`, {
                        method: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                        },
                    })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                Swal.fire(
                                    'Dihapus!',
                                    'Feedback telah dihapus.',
                                    'success'
                                );
                                // Hapus baris feedback dari tabel UI
                                this.closest('tr').remove();
                            } else {
                                Swal.fire(
                                    'Gagal!',
                                    'Feedback gagal dihapus.',
                                    'error'
                                );
                            }
                        })
                        .catch(error => {
                            console.error('Error:', error);
                            Swal.fire(
                                'Terjadi Kesalahan!',
                                'Terjadi kesalahan saat menghapus.',
                                'error'
                            );
                        });
                }
            });
        });
    });
        
});