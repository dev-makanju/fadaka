const menuBtn = document.querySelector('.logo__wrapper');
const hamburger = document.querySelector('.menu-nav__services__wrapper');
const menuNav = document.querySelector('.menu-btn.navbar');
const Nav = document.querySelector('.menu-btn__wrapps');
const navItems = document.querySelectorAll('.menu-nav__items');


let showMenu = false;

menuBtn.addEventListener('click' , togglemenu );

function togglemenu(){
    if(!showMenu){
        hamburger.classList.add('open');
        menuNav.classList.add('open');
        Nav.classList.add('open')
        navItems.forEach(item => item.classList.add('open'));
        showMenu = true;
    }else{
        hamburger.classList.remove('open');
        menuNav.classList.remove('open');
        Nav.classList.remove('open');
        navItems.forEach(item => item.classList.remove('open'));
        showMenu = false;;
    }
}

