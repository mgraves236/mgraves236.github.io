$bars = $('.fa-bars');
$circle = $('.fa-circle');

$(window).resize(function() {
    if ($(window).width() < 1000) {
        $('address').prepend($bars);
        $('address').prepend($circle);
        //$('.fa-circle').hide();
    } else {
        $('header nav').append($bars);
        $('header nav').append($circle);
        //$('.fa-circle').show();
    }
}).resize(); // trigger resize event initially





$('.fa-bars').click(function () {
    if ($(window).width() < 1000) {
        $('.fa-circle').show();
    }
    $('.fa-circle').toggleClass('open');
});