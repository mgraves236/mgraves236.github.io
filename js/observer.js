let $container = $('.container');
const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
          $container.addClass('container-animation');
            return; // if we added the class, exit the function
        }

        // We're not intersecting, so remove the class!
        $container.removeClass('container-animation');
    });
});

observer.observe(document.querySelector('.container'));

$('.container2').addClass('container-animation');