function goGroupItem(item) {
    location.href = './' + item + '.html';
}

$(document).ready(function() {
    $(window).scroll(function () {
        var height = $(document).scrollTop();
        if(height > 10) {            
            $('#hjfr-navbar-section').css({ backgroundColor: 'rgba(255, 255, 255, 1)' });
        }
        else {
            $('#hjfr-navbar-section').css({ backgroundColor: 'rgba(255, 255, 255, 0)' });
        }
    });

    fullMain();
    $(window).resize(function() { fullMain(); });
});

function fullMain() {
    var minusHeight = $('#hjfr-navbar-section').outerHeight();
    if(window.innerWidth < 990) {
        minusHeight = 82;
    }
    $('#hjfr-main').css({height: window.innerHeight - minusHeight });
}

