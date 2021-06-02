function goGroupItem(item) {
    location.href = './' + item + '.php';
}

$(document).ready(function() {
    var is_mobile = isMobile();

    $(window).scroll(function () {
        var height = $(document).scrollTop();
        if(height > 10) {            
            $('#hjfr-navbar-section').css({ backgroundColor: 'rgba(255, 255, 255, 1)' });
        }
        else {
            $('#hjfr-navbar-section').css({ backgroundColor: 'rgba(255, 255, 255, 0)' });
        }

        if(is_mobile) {
            viewMainTextForMobile();
        }
    });

    
    if(is_mobile) {
        $('#hjfr-main-section-pc').hide();
        $('#hjfr-main-section-mobile').show();

        $('#hjfr-main-section').css({
            'background-image': 'url("")', 
            'padding': 0
        });

        placeMainTextForMobile();
    }
    else {
        fullMain();
    }

    placeMainTextForMobile();
    $(window).resize(function() { 
        if(is_mobile) {
            placeMainTextForMobile();
            viewMainTextForMobile();
        }
        else {
            fullMain();
        }
        
    });

    
});

function fullMain() {
    var minusHeight = $('#hjfr-navbar-section').outerHeight();
    
    if(window.innerWidth < 990) {
        minusHeight -= 14;
    }
    $('#hjfr-main').css({height: window.innerHeight - minusHeight });
}

function isMobile() {
    var isRet = false;
    var filter = "win16|win32|win64|mac";
    if(navigator.platform) {
        if(filter.indexOf(navigator.platform.toLowerCase()) < 0) {
            isRet = true;
        }
    }

    return isRet;
}

function placeMainTextForMobile() {
    $('#hjfr-main-contents-box-mobile').css({
        'position': 'fixed', 
        //'top': Math.max(0, (($(window).height() - $(this).outerHeight()) / 2) + $(window).scrollTop()) + 'px', 
        //'left': Math.max(0, (($(window).width() - $(this).outerWidth()) / 2) + $(window).scrollLeft()) + 'px'
        'top': ( (window.innerHeight / 2) - ($('#hjfr-main-contents-box-mobile').height() / 2) )+ 'px', 
        'left': ( (window.innerWidth / 2) - ($('#hjfr-main-contents-box-mobile').width() / 2) ) + 'px', 
    });
}

function viewMainTextForMobile() {
    var mobileMainImageHeight = $('#hjfr-main-section-mobile-backimg').height();

    var windowScrollTop = $(window).scrollTop();
    if(windowScrollTop > Math.max(mobileMainImageHeight/3)) {
        $('#hjfr-main-contents-box-mobile').hide();
    }
    else {
        $('#hjfr-main-contents-box-mobile').fadeIn();
        //$('#hjfr-main-contents-box-mobile').slideDown();
    }
}