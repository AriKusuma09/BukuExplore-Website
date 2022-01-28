// // Scroll fade
// let navbarMenu = function () {
//     const navbarCollapse = document.querySelector('#Navbar');

//     if (!navbarCollapse) {
//         return;
//     }

//     if (window.scrollY <= 200) {
//         navbarCollapse.classList.remove('navbar-fade')
//     } else {
//         navbarCollapse.classList.add('navbar-fade')
//     }

// };

// navbarMenu();

// document.addEventListener('scroll', navbarMenu);


// Spinner
const loadSpinner = document.querySelector('.spinner');
const navbarLost = document.querySelector('#Navbar');

    window.addEventListener('load', loaderFunction)
    function loaderFunction(){
        navbarLost.classList.remove('d-none');
        loadSpinner.classList.add('disappear')
    }


// // Swiper
// var swiper = new Swiper(".mySwiper", {
//     slidesPerView: 3,
//     spaceBetween: 30,
//     freeMode: true,
//     pagination: {
//         el: ".swiper-pagination",
//         clickable: true,
//     },
//     breakpoints: {
//         640: {
//           slidesPerView: 1,
//           spaceBetween: 5,
//         },
//         768: {
//           slidesPerView: 2,
//           spaceBetween: 40,
//         },
//         1024: {
//           slidesPerView: 4,
//           spaceBetween: 50,
//         },
//       },
// });


// membuat efek ketika website di scroll
window.addEventListener('scroll', effect);

function effect() {
    let efek = document.querySelectorAll('.effect');

    for( let i = 0; i < efek.length; i++ ) {

        let windowHeight = window.innerHeight;
        let effectTop = efek[i].getBoundingClientRect().top;
        let effectPoint = 150;

        if ( effectTop < windowHeight - effectPoint ) {
            efek[i].classList.add('active');
        } else {
            efek[i].classList.remove('active');
        }
    }
}





// quantitiy

// setting default attribute to disabled of minus button
document.querySelector(".minus-btn").setAttribute("disabled", "disabled");

// taking value to increment decrement input value
var valueCount

// plus button
document.querySelector(".plus-btn").addEventListener("click", function(){
    // getting value of input
    valueCount = document.getElementById("quantity").value;

    // input value increment by 1
    valueCount++;

    // setting increment input value
    document.getElementById("quantity").value = valueCount;

    if(valueCount > 1) {
        document.querySelector(".minus-btn").removeAttribute("disabled");
        document.querySelector(".minus-btn").classList.remove("disabled");
    }
})

// minus button
document.querySelector(".minus-btn").addEventListener("click", function(){
    // getting value of input
    valueCount = document.getElementById("quantity").value;

    // input value decrement by 1
    valueCount--;

    // setting increment input value
    document.getElementById("quantity").value = valueCount;

    if (valueCount == 1) 
    {
        document.querySelector(".minus-btn").setAttribute("disabled", "disabled")
    }
})



// Lainnya Slider
var swiper = new Swiper(".mySwiper", {
    slidesPerView: 4,
    spaceBetween: 30,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
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




