$(document).ready(function(){
    // Banner Carousel
    $('.banner').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        dots:false,
        items:1,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true
    });

    // Services Carousel
    $('.service-slide').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        dots: false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    });

    // Solution Carousel - E-commerce
    $('.sol-slide').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        dots: false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }
    });

    // Solution Carousel - Healthcare
    $('.soll-slide').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        dots: false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:2
            }
        }
    });

    // Testimonial Carousel
    $('.testimonial-carousel').owlCarousel({
        loop:true,
        margin:30,
        nav:true,
        dots: false,
        responsive:{
            0:{
                items:1
            },
            768:{
                items:2
            },
            1000:{
                items:2
            }
        }
    });
});

// Navbar scroll effect
const navEl = document.querySelector('.navbar');
if (navEl) {
    window.addEventListener('scroll', () => {
        if (window.scrollY >= 56) {
            navEl.classList.add('navbar-scrolled');
        } else if (window.scrollY < 56) {
            navEl.classList.remove('navbar-scrolled');
        }
    });
}

// Initialize AOS
AOS.init();

// Custom category dropdown logic (if it exists on the page)
const categoryButton = document.getElementById('selected-category-button');
const categorySelect = document.getElementById('category-select');

if (categoryButton && categorySelect) {
    categoryButton.addEventListener('click', function() {
        categorySelect.classList.toggle('visible');
    });

    categorySelect.addEventListener('change', function() {
        const selectedCategory = this.value;
        categoryButton.innerHTML = 
            `${selectedCategory} <i class="fa-solid fa-angle-down"></i>`;
        this.classList.remove('visible'); // Hide dropdown after selection
    });
}
