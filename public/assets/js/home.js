document.documentElement.classList.add('js-enabled');

document.addEventListener('DOMContentLoaded', function () {
    const revealElements = document.querySelectorAll('.reveal');

    const revealObserver = new IntersectionObserver(
        function (entries, observer) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('reveal-visible');
                    observer.unobserve(entry.target);
                }
            });
        },
        {
            threshold: 0.1,
        }
    );

    revealElements.forEach(function (element) {
        revealObserver.observe(element);
    });

    const navbar = document.querySelector('.navbar');
    const navbarToggle = document.querySelector('.navbar-toggle');
    const navbarMenu = document.querySelector('.navbar-menu');
    const navbarLinks = document.querySelectorAll('.navbar-menu a');
    const scrollTopButton = document.querySelector('.scroll-top');

    function handleScroll() {
        const isScrolled = window.scrollY > 40;

        navbar?.classList.toggle('navbar-scrolled', isScrolled);
        scrollTopButton?.classList.toggle('visible', window.scrollY > 500);
    }

    navbarToggle?.addEventListener('click', function () {
        navbarMenu?.classList.toggle('open');
    });

    navbarLinks.forEach(function (link) {
        link.addEventListener('click', function () {
            navbarMenu?.classList.remove('open');
        });
    });

    scrollTopButton?.addEventListener('click', function () {
        window.scrollTo({
            top: 0,
            behavior: 'smooth',
        });
    });

    window.addEventListener('scroll', handleScroll);

    handleScroll();
});