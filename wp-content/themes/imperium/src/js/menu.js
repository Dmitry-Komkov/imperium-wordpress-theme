export default class Menu {
  constructor() {
    this.menuToggler = document.querySelector('.menu-toggler');
    this.menuLinks = document.querySelectorAll('.menu__list a');
    this.navContainer = document.querySelector('.navbar__container');

    this.bindEvents();
  }

  toggleMenu(toggler) {
    let elToToggle = document.querySelector(`.${toggler.dataset.toggle}`);
    elToToggle.classList.toggle('show');
    this.navContainer.classList.toggle('active');
  }

  bindEvents() {
    this.menuToggler.addEventListener('click', () => this.toggleMenu(this.menuToggler));

    this.menuLinks.forEach( link => {
      link.addEventListener('click', () => this.toggleMenu(menuToggler))
    });
  }
}