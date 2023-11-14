// Aparecer primera alerta----------------------------------------------------------

function alerta(){
    let alert = document.getElementById('alerta');
    alert.style.display= 'block';
} 

//Script de swiper----------------------------------------------------------------
var swiper = new Swiper(".mySwiper", {
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
    delay: 2500,
    disableOnInteraction: false,
    },
    pagination: {
    el: ".swiper-pagination",
    clickable: true,
    },
    navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
    },
});

// Script de AOS

AOS.init();






