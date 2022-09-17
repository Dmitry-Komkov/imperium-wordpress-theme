import '../scss/cup.scss';
import { closeButton } from './common/promo-bar';
import Menu from './menu';

document.addEventListener('DOMContentLoaded', function () {
  const menu = new Menu();
  closeButton();
})