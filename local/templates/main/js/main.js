let navbarHeight = $('#header').height(); // outerHeight(true);

// Panel bitrix
if ($('#bx-panel').length) {
    $('#header').css({
        'top':'auto',
        'z-index':'999',
    });
    $('#leftNavbar').removeClass('top-0');
    $('#leftNavbar').css({'top': navbarHeight});
};

// main
$('main').css({'margin-top': navbarHeight});

// left navbar
// if(window.location.href !== "/") {
    $('div.col.position-relative').css('display', 'none');
    //$('header').addClass('offset-lg-2 col-lg-10');
    //$('main').addClass('offset-lg-2 col-lg-10');
    //$('footer').addClass('offset-lg-2 col-lg-10');
// };

// swiper
let swiper = new Swiper('#homeSlider .swiper-container', {
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