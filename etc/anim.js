$(window).on('load', function(e) {
    $('.preloader').addClass('complete');
    setTimeout(function(){
        $('.preloader').remove();
    }, 2000);
    setTimeout(function(){
        $("#monitor").toggleClass('toggled');
    }, 600);
    setTimeout(function(){
        // $("#cursor").toggleClass('toggled');
        let cursor = $("#cursor");
        cursor.animate({opacity: '1', top: '65vh', left: '38vw'}, "slow");
        cursor.animate({top: '60vh', left: '25vw'}, "slow");
    }, 1000);
});