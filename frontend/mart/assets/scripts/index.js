const HIDDEN = 'hidden';
const topHamburger = document.querySelector('.top-nav__hamburger');
const topNavContact = document.querySelector('.top-nav__contact');
const topNavList = document.querySelector('.top-nav__list ');

topHamburger.addEventListener( 'click', toggleTopClass );

function toggleTopClass() {
    topNavContact.classList.toggle(HIDDEN);
    topNavList.classList.toggle(HIDDEN);
}

const mainHamburger = document.querySelector('.main-nav__hamburger');
const mainList = document.querySelector('.main-nav__list');

mainHamburger.addEventListener( 'click', toggleMainCLass );

function toggleMainCLass() {
    mainList.classList.toggle(HIDDEN);
}