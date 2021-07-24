let $container = $('.container');
$container = $container.add('.container2');
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
observer.observe(document.querySelector('.container2'));