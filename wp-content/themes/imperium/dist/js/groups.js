'use strict';

function closeButton() {
  var $buttons = document.querySelectorAll('.close-button');
  $buttons.forEach(function (button) {
    var targetSelector = button.dataset.close;
    var $target = document.querySelector(targetSelector);
    button.addEventListener('click', function () {
      $target.classList.add('closed');
    });
  });
}

function _classCallCheck(instance, Constructor) {
  if (!(instance instanceof Constructor)) {
    throw new TypeError("Cannot call a class as a function");
  }
}

function _defineProperties(target, props) {
  for (var i = 0; i < props.length; i++) {
    var descriptor = props[i];
    descriptor.enumerable = descriptor.enumerable || false;
    descriptor.configurable = true;
    if ("value" in descriptor) descriptor.writable = true;
    Object.defineProperty(target, descriptor.key, descriptor);
  }
}

function _createClass(Constructor, protoProps, staticProps) {
  if (protoProps) _defineProperties(Constructor.prototype, protoProps);
  if (staticProps) _defineProperties(Constructor, staticProps);
  Object.defineProperty(Constructor, "prototype", {
    writable: false
  });
  return Constructor;
}

var Menu = /*#__PURE__*/function () {
  function Menu() {
    _classCallCheck(this, Menu);

    this.menuToggler = document.querySelector('.menu-toggler');
    this.targetSelector = this.menuToggler.dataset.target;
    this.$target = document.querySelector("".concat(this.targetSelector));
    this.menuLinks = document.querySelectorAll('.menu__list a');
    this.navContainer = document.querySelector('.navigation-box');
    this.bindEvents();
  }

  _createClass(Menu, [{
    key: "toggleMenu",
    value: function toggleMenu(toggler) {
      this.$target.classList.toggle('active'); // let elToToggle = document.querySelector(`.${toggler.dataset.toggle}`);
      // elToToggle.classList.toggle('show');
      // this.navContainer.classList.toggle('active');
    }
  }, {
    key: "bindEvents",
    value: function bindEvents() {
      var _this = this;

      this.menuToggler.addEventListener('click', function () {
        return _this.toggleMenu(_this.menuToggler);
      });
      this.menuLinks.forEach(function (link) {
        link.addEventListener('click', function () {
          return _this.toggleMenu(menuToggler);
        });
      });
    }
  }]);

  return Menu;
}();

document.addEventListener('DOMContentLoaded', function () {
  new Menu();
  closeButton();
});
