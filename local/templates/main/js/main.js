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

// menu
$('div.col.position-relative').css('display', 'none');

// left navbar
$('#leftNavbar').hide();
if (location.href.indexOf('/security-systems/') > 1) {
    $('header').addClass('offset-lg-3 col-lg-9');
    $('.navbar-brand').addClass('d-none');
    $('div.me-3').addClass('d-none');
    $('main').addClass('offset-lg-3 col-lg-9');
    $('footer').addClass('offset-lg-3 col-lg-9');
    $('#leftNavbar').addClass('col-lg-3').show();
};

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