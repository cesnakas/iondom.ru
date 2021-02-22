// navigation
/*
let scrolled;
window.onscroll = function() {
    scrolled = window.pageYOffset || document.documentElement.scrollTop;
    if (scrolled > 160) {
        $('#header').addClass('fixed-top');
        // $('#catalog-nav').addClass('fixed-top shadow');
    } else {
        $('#header').removeClass('fixed-top');
        // $('#catalog-nav').removeClass('fixed-top shadow');
    }
};
*/
// main
let navbarHeight = $('#header').outerHeight(true);
$('main').css({'margin-top': navbarHeight});
/*
$(window).resize(function() {
    $('main').css({'margin-top': navbarHeight});
});
*/

// left navbar
$('div.col.position-relative').css('display','none')
$('header').addClass('offset-lg-2 col-lg-10');
$('main').addClass('offset-lg-2 col-lg-10');
$('footer').addClass('offset-lg-2 col-lg-10');

// swiper
var swiper = new Swiper('#homeSlider .swiper-container', {
    loop: true,
    autoplay: {
        delay: 5500,
        disableOnInteraction: false,
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});