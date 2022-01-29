'use strict';
// Spinner
const loadSpinner = document.querySelector('.spinner');
const navbarLost = document.querySelector('#Navbar');
// NatsuX: Loader
function loaderFunction(){
    navbarLost.classList.remove('d-none');
    loadSpinner.classList.add('disappear');
}
window.addEventListener('load', loaderFunction);

// membuat efek ketika website di scroll
function effect() {
    let efek = document.querySelectorAll('.effect');

    for( let i = 0; i < efek.length; i++ ) {

        let windowHeight = window.innerHeight;
        let effectTop = efek[i].getBoundingClientRect().top;
        let effectPoint = 150;

		// NatsuX: make the effect run once when the page is view
        if ( effectTop < windowHeight - effectPoint ) {
            efek[i].classList.add('active');
        }
    }
}
// NatsuX: Run the Effect function on scroll events
window.addEventListener('scroll', effect);

// quantitiy <-- NatsuX: WTH is this?

// setting default attribute to disabled of minus button
/* NatsuX: because there's no element call "minus-btn" in the HTML, lets comment this for a moment
   so the browser is not yelling due to missing elements
document.querySelector('.minus-btn').setAttribute('disabled', 'disabled');
 */

/*
// taking value to increment decrement input value
let valueCount;
// plus button
document.querySelector('.plus-btn').addEventListener('click', function(){
    // getting value of input
    valueCount = document.getElementById('quantity').value;

    // input value increment by 1
    valueCount++;

    // setting increment input value
    document.getElementById('quantity').value = valueCount;

    if(valueCount > 1) {
        document.querySelector('.minus-btn').removeAttribute('disabled');
        document.querySelector('.minus-btn').classList.remove('disabled');
    }
});

// minus button
document.querySelector('.minus-btn').addEventListener('click', function(){
    // getting value of input
    valueCount = document.getElementById('quantity').value;

    // input value decrement by 1
    valueCount--;

    // setting increment input value
    document.getElementById('quantity').value = valueCount;

    if (valueCount === 1)
    {
        document.querySelector('.minus-btn').setAttribute('disabled', 'disabled');
    }
});
 */


// Lainnya Slider
const swiper = new Swiper('.mySwiper', {
    slidesPerView: 4,
    spaceBetween: 30,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    breakpoints: {
        640: {
          slidesPerView: 1,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 40,
        },
        1024: {
          slidesPerView: 4,
          spaceBetween: 50,
        },
    },
});




