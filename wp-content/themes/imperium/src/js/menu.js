const menuToggler = document.querySelector('.menu-toggler');
menuToggler.addEventListener('click', () => toggleMenu(menuToggler));

const menuLinks = document.querySelectorAll('.menu__list a');
menuLinks.forEach( link => {
  link.addEventListener('click', () => toggleMenu(menuToggler))
});

const navContainer = document.querySelector('.navbar__container');

function toggleMenu(toggler) {
  let elToToggle = document.querySelector(`.${toggler.dataset.toggle}`);
  elToToggle.classList.toggle('show');
  navContainer.classList.toggle('active');
}