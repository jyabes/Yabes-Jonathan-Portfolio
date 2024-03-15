document.addEventListener('DOMContentLoaded', function () {
    const arrowLink = document.querySelector('.arrow-link');
    arrowLink.addEventListener('click', function (event) {
        event.preventDefault();
        const targetElement = document.documentElement;
        targetElement.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
});
