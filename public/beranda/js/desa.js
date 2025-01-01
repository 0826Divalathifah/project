/*corousel desa preneur*/

    $(document).ready(function(){
        $('.slider').slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: true,
            arrows: true,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    });


//desa budaya//
let currentSlide = 0;
const visibleCards = 3; // Jumlah card yang terlihat per slide
const slideContainer = document.querySelector('.carousel-slide');
const cards = document.querySelectorAll('.card');
const dots = document.querySelectorAll('.dot');
const cardWidth = document.querySelector('.card').offsetWidth; // Lebar card + margin

function moveToSlide(slideIndex) {
  const maxSlide = Math.ceil(cards.length / visibleCards) - 1;
  currentSlide = slideIndex;

  if (currentSlide < 0) {
    currentSlide = 0;
  } else if (currentSlide > maxSlide) {
    currentSlide = maxSlide;
  }

  // Geser carousel ke slide yang benar
  slideContainer.style.transform = `translateX(${-currentSlide * cardWidth * visibleCards}px)`;

  // Perbarui tampilan dot yang aktif
  dots.forEach((dot, index) => {
    dot.classList.toggle('active', index === currentSlide);
  });
}

// Set slide pertama aktif
moveToSlide(0);

// Event listener untuk resize
window.addEventListener('resize', () => {
  slideContainer.style.transform = `translateX(${-currentSlide * cardWidth * visibleCards}px)`;
});
