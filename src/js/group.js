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
    //roundLengths: true, //일반 해상도 화면에서 텍스트가 흐려지는 것을 방지하기 위해 슬라이드 너비와 높이 값을 반올림
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
