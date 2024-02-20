
const menu_btn=document.querySelector('.hamburger');
const mobile_menu=document.querySelector('.mobile-nav');

menu_btn.addEventListener('click', function() {
    console.log('Hamburger Clicked!');
    menu_btn.classList.toggle('is-active');
    mobile_menu.classList.toggle('is-active');
});

// PLAYER
const player = new Plyr('video');

