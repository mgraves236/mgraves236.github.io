const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        const $container = $('.container');

        if (entry.isIntersecting) {
            console.log('inter');
          $container.addClass('container-animation');
            return; // if we added the class, exit the function
        }

        // We're not intersecting, so remove the class!
        $container.removeClass('container-animation');
    });
});

observer.observe(document.querySelector('.container'));