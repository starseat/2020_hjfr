function goGroupItem(item) {
    alert('goGroupItem - ' + item);
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
});

