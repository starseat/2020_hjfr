$(document).ready(function() {
    $(window).scroll(function () {
        var height = $(document).scrollTop();
        if(height > 10) {            
            $('#hjfr-navbar-section').css({ backgroundColor: 'white' });
        }
        else {
            $('#hjfr-navbar-section').css({ backgroundColor: 'white' });
        }
    });
});

var swiper_option = {
    centeredSlides: true,
    lazy: true,
    loop: true,
    autoplay: {
        delay: 2500,
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
}
