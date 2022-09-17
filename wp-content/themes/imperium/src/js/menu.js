export default class Menu {
  constructor() {
    this.menuToggler = document.querySelector('.menu-toggler');
    this.targetSelector = this.menuToggler.dataset.target;
    this.$target = document.querySelector(`${this.targetSelector}`);
    this.menuLinks = document.querySelectorAll('.menu__list a');
    this.navContainer = document.querySelector('.navigation-box');

    this.bindEvents();
  }

  toggleMenu(toggler) {
    this.$target.classList.toggle('active');
    // let elToToggle = document.querySelector(`.${toggler.dataset.toggle}`);
    // elToToggle.classList.toggle('show');
    // this.navContainer.classList.toggle('active');
  }

  bindEvents() {
    this.menuToggler.addEventListener('click', () => this.toggleMenu(this.menuToggler));

    this.menuLinks.forEach( link => {
      link.addEventListener('click', () => this.toggleMenu(menuToggler))
    });
  }
}