$bars = $('.fa-bars');
$circle = $('.fa-circle');
$times = $('.fa-times');
$list = $('#menu-list');

$times.hide();
$list.hide();

$(window).resize(function() {
    if ($(window).width() < 1500) {
        $('address').prepend($bars).prepend($circle).prepend($times);
    } else {
        $('header nav').append($bars).append($circle).append($times);
    }
}).resize(); // trigger resize event initially


$bars.click(function () {
    $circle.addClass('open');
    $('#menu').addClass('opened');
    $bars.hide();
    $times.show();
    $list.slideToggle();
});

$times.click(function () {
    $circle.removeClass('open');
    $('#menu').removeClass('opened');
    $list.hide();
    $times.hide();
    $bars.show();

});