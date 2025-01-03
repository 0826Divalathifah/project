document.addEventListener('DOMContentLoaded', function () {
    // Fungsi untuk menangani pengiriman form
    function handleSubmit(event) {
        event.preventDefault(); // Mencegah reload halaman

        // Ambil nilai input form
        const name = document.getElementById('name').value.trim();
        const email = document.getElementById('email').value.trim();
        const message = document.getElementById('message').value.trim();

        // Validasi hanya untuk kolom message (wajib diisi)
        if (!message) {
            Swal.fire({
                icon: 'warning',
                title: 'Pesan Kosong!',
                text: 'Harap isi pesan sebelum mengirim!',
            });
            return;
        }

        // Validasi email jika diisi
        if (email && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
            Swal.fire({
                icon: 'error',
                title: 'Email Tidak Valid!',
                text: 'Mohon masukkan alamat email yang valid!',
            });
            return;
        }

        // Siapkan data untuk dikirim
        const formData = new FormData(document.getElementById('contactForm'));

        // Kirim data ke server menggunakan fetch
        fetch('/simpanFeedback', {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
                'Accept': 'application/json',
            },
            body: formData,
        })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                if (data.success) {
                    // Tampilkan pesan sukses
                    Swal.fire({
                        icon: 'success',
                        title: 'Terima Kasih!',
                        text: 'Pesan Anda telah berhasil dikirim!',
                    });

                    // Reset form setelah sukses
                    document.getElementById('contactForm').reset();
                } else {
                    // Tampilkan pesan error dari server
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops!',
                        text: 'Terjadi kesalahan. Mohon coba lagi.',
                    });
                }
            })
            .catch(error => {
                // Tangani error dari server
                Swal.fire({
                    icon: 'error',
                    title: 'Oops!',
                    text: 'Terjadi kesalahan server. Mohon coba lagi.',
                });
                console.error('Error:', error);
            });
    }

    // Langsung pasang fungsi handleSubmit ke form
    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', handleSubmit);
    } else {
        console.error('Form tidak ditemukan!');
    }
});