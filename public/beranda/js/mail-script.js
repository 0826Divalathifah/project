    // -------   Mail Send ajax

     $(document).ready(function() {
        var form = $('#myForm'); // contact form
        var submit = $('.submit-btn'); // submit button
        var alert = $('.alert-msg'); // alert div for show alert message

        // form submit event
        form.on('submit', function(e) {
            e.preventDefault(); // prevent default form submit

            $.ajax({
                url: 'mail.php', // form action url
                type: 'POST', // form submit method get/post
                dataType: 'html', // request type html/json/xml
                data: form.serialize(), // serialize form data
                beforeSend: function() {
                    alert.fadeOut();
                    submit.html('Sending....'); // change submit button text
                },
                success: function(data) {
                    alert.html(data).fadeIn(); // fade in response data
                    form.trigger('reset'); // reset form
                    submit.attr("style", "display: none !important");; // reset submit button text
                },
                error: function(e) {
                    console.log(e)
                }
            });
        });
    });

    //script slider galler
    $(document).ready(function(){
        $(".gallery-slider").owlCarousel({
            items: 3, // Jumlah gambar yang ditampilkan
            loop: true, // Looping slider
            margin: 10,
            nav: true, // Menampilkan tombol next/prev
            dots: false, // Menyembunyikan dots navigasi
            autoplay: true, // Gambar bergulir secara otomatis
            autoplayTimeout: 3000, // Durasi autoplay
            responsive: {
                0: {
                    items: 1 // Tampilan mobile, satu gambar
                },
                600: {
                    items: 2 // Tampilan tablet, dua gambar
                },
                1000: {
                    items: 3 // Tampilan desktop, tiga gambar
                }
            }
        });
    });

