const desktopNav = document.getElementById('desktop-nav');
const mobileMenu = document.querySelector('.mobile-nav');
const menuBtn = document.querySelector('.hamburger');

menuBtn.addEventListener('click', function () {
    desktopNav.classList.toggle('is-active'); // Toggle desktop navigation visibility
    mobileMenu.classList.toggle('is-active'); // Toggle mobile menu visibility
    menuBtn.classList.toggle('is-active'); // Toggle hamburger button state
});





// PLAYER
const player = new Plyr('video');



(() => {

    gsap.registerPlugin(SplitText);

    const split = new SplitText('.intro', {type: 'chars'});

    const typingText =  gsap.timeline()
    .from(split.chars, {
        duration: .04,
        autoAlpha: 0,
        stagger: {
            each: .02
        }
    });

})();



// your-scripts.js
document.addEventListener("DOMContentLoaded", function () {
    console.log("DOMContentLoaded event triggered");
    // Hide the preloader when the content is fully loaded
    document.querySelector('.preloader').style.display = 'none';
});



