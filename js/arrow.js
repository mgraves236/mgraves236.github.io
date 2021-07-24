$(function() {
    setTimeout('animateArrow()');
});

function animateArrow() {
    $('#down').animate({
        'top': '-=0.05em'
    }, 1000).animate({
        'top': '+=0.05em'
    }, 1000);
    setTimeout('animateArrow()', 1600);
}
