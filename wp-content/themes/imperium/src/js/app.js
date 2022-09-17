/* eslint-disable */
import '../scss/app.scss';

import ScrollReveal from 'ScrollReveal';

// Your JS Code goes here

import Swiper, {
  Navigation,
  Pagination,
  Zoom
} from 'swiper';
import { closeButton } from './common/promo-bar';
import Menu from './menu';
Swiper.use([Navigation, Pagination, Zoom]);

document.addEventListener('DOMContentLoaded', function () {

      const menu = new Menu();

      closeButton();
  
      const ua = navigator.userAgent;
      let chromeAgent = ua.indexOf("Chrome") > -1;
      let safariAgent = ua.indexOf("Safari") > -1;
      if ((chromeAgent) && (safariAgent)) safariAgent = false;
  
      function detectSafary() {
        if (!safariAgent) {
          /* Анимация */
  
          ScrollReveal().reveal('.main-screen', {
            distance: '500px',
            origin: 'left',
            duration: 1000,
            delay: 600,
            easing: 'ease-in-out',
            mobile: false,
          });
        
          ScrollReveal().reveal('#sale', {
            distance: '300px',
            origin: 'right',
            duration: 500,
            delay: 600,
            mobile: false,
          });
        
          ScrollReveal().reveal('.advantage-box', {
            distance: '200px',
            origin: 'left',
            duration: 1000,
            interval: 100,
            delay: 600,
            easing: 'ease-in-out',
            mobile: false,
          });
        
          ScrollReveal().reveal('.left-anim-item', {
            distance: '500px',
            origin: 'left',
            duration: 1000,
            delay: 600,
            easing: 'ease-out',
            mobile: false,
          });
          ScrollReveal().reveal('.right-anim-item', {
            distance: '500px',
            origin: 'right',
            duration: 1000,
            delay: 600,
            easing: 'ease-out',
            mobile: false,
          });
          ScrollReveal().reveal('#tab-3', {
            distance: '0px',
            duration: 1000,
            delay: 1200,
            mobile: false,
          });
          ScrollReveal().reveal('.cards-panel__item', {
            distance: '200px',
            origin: 'top',
            duration: 1000,
            interval: 200,
            delay: 200,
            easing: 'ease-in-out',
            mobile: false,
          });
          const progWrapper = document.querySelector('#programs .wrapper');
          ScrollReveal().reveal( progWrapper, {
            distance: '500px',
            origin: 'top',
            duration: 1000,
            delay: 500,
            mobile: false,
          });
          ScrollReveal().reveal('.trainers-swiper', {
            distance: '0px',
            origin: 'top',
            duration: 500,
            delay: 200,
            easing: 'ease-in-out',
            mobile: false,
          });
          ScrollReveal().reveal('.trainers__description', {
            distance: '500px',
            origin: 'right',
            duration: 1000,
            delay: 1000,
            easing: 'ease-in-out',
            mobile: false,
          });
          ScrollReveal().reveal('.free-training__form', {
            distance: '500px',
            origin: 'left',
            duration: 1000,
            delay: 500,
            easing: 'ease-in-out',
            mobile: false,
          });
          ScrollReveal().reveal('.video-container', {
            distance: '500px',
            origin: 'right',
            duration: 1000,
            delay: 500,
            easing: 'ease-in-out',
            mobile: false,
          });
          ScrollReveal().reveal('.schedule-container', {
            distance: '500px',
            origin: 'bottom',
            duration: 1000,
            delay: 100,
            easing: 'ease-in-out',
            mobile: false,
          });
          ScrollReveal().reveal('.info__outer', {
            distance: '0px',
            origin: 'bottom',
            duration: 700,
            delay: 100,
            easing: 'ease-in-out',
            mobile: false,
          });
          ScrollReveal().reveal('.contacts__info', {
            distance: '500px',
            origin: 'left',
            duration: 700,
            delay: 100,
            easing: 'ease-in-out',
            mobile: false,
          });
          ScrollReveal().reveal('.contacts__map', {
            distance: '500px',
            origin: 'right',
            duration: 700,
            delay: 100,
            easing: 'ease-in-out',
            mobile: false,
          });
  
          /* Конец Анимация */
        }
      }
  
      detectSafary();
      
      // /* Общие переменные */
  
      const body = document.body;
  
      function getCoords(elem) {
        let box = elem.getBoundingClientRect();
      
        return {
          top: box.top + pageYOffset,
          left: box.left + pageXOffset
        };
      }
  
      // /* Конец Общие переменные */
  
      /* Переключение между абонементами */
      const cardsPanelItems = document.querySelectorAll('.cards-panel__item');
      const singleTabs = document.querySelectorAll('.single-tab');
  
      function changeTab(panelItem) {
        cardsPanelItems.forEach((item) => {
          item.classList.remove('active');
        });
        singleTabs.forEach((item) => {
          item.classList.remove('active');
        });
        panelItem.classList.add('active');
        const elemId = panelItem.dataset.tab;
        document.querySelector(`#${elemId}`).classList.add('active');
      }
      cardsPanelItems.forEach((item) => {
        item.addEventListener('click', () => changeTab(item));
      });
      /* Конец модуля */
  
      /* Slider фитнес программ */
      const programsSwiper = new Swiper('.programs-swiper', {
        slidesPerView: 4,
        slidesPerGroup: 4,
        speed: 1000,
        spaceBetween: 30,
        navigation: {
          nextEl: '.programs-button-next',
          prevEl: '.programs-button-prev',
        },
        pagination: {
          el: '.programs-pagination',
          clickable: true,
        },
        breakpoints: {
          320: {
            slidesPerView: 1,
            slidesPerGroup: 1,
          },
          768: {
            slidesPerView: 2,
            slidesPerGroup: 1,
          },
          992: {
            slidesPerView: 3,
            slidesPerGroup: 1,
          },
          1200: {
            slidesPerView: 4,
            slidesPerGroup: 1,
          }
        }
      });
  
      /* Конец Slider фитнес программ */
  
      const programsSection = document.querySelector('#programs');
  
      window.addEventListener('scroll', callModalOnce)
  
      function callModalOnce() {
        if (window.pageYOffset > (getCoords(programsSection).top - 100)) {
          openModal('modal-sale');
          window.removeEventListener('scroll', callModalOnce);
        }
      }
      
  
      /* Slider тренеров */
  
      // Переменные описания тренеров
      let descrWrapper = document.querySelector('.trainers__description .description-wrapper');
      let trainerName = descrWrapper.querySelector('.name');
      let trainerDirection = descrWrapper.querySelector('.direction span');
      let trainerWorkExp = descrWrapper.querySelector('.work-experience span');
      let trainerShortDesc = descrWrapper.querySelector('.short-description');
  
      const trainersSlider = new Swiper('.trainers-swiper', {
        slidesPerView: 5,
        spaceBetween: 30,
        centeredSlides: true,
        init: false,
        loop: true,
        navigation: {
          nextEl: '.trainers-button-next',
          prevEl: '.trainers-button-prev',
        },
        breakpoints: {
          320: {
            slidesPerView: 1,
          },
          768: {
            slidesPerView: 3,
          },
          1200: {
            slidesPerView: 5,
          }
        }
      });
  
      const allSlides = Array.from(trainersSlider.slides);

      //Прослушка событий сладера
      trainersSlider.on('init', sliderReady);
      trainersSlider.init();
      trainersSlider.on('transitionEnd', sliderReady);
      trainersSlider.on('sliderMove', deleteClassesOfSlides);
  
      trainersSlider.update();
  
  
  
      // Делаем массив из действующих слайдов
      function computeActiveSlide() {
        let activeSlide = document.querySelector(`.trainers-slide.swiper-slide-active`);
        return activeSlide;
      }
      // Удаляем дополнительные классы из слайдера
      function deleteClassesOfSlides() {
        allSlides.forEach(slide => {
          slide.style.transform = 'scale(1)';
        })
      }
  
  
      // Меняем описание тренера
  
      function changeDescription(active) {
        trainerName.textContent = document.querySelector(`.trainers-slide[data-trainer-id='${active}'] .trainer-name`).textContent;
        trainerDirection.textContent = document.querySelector(`.trainers-slide[data-trainer-id='${active}'] .trainer-napravlenie`).textContent;
        trainerWorkExp.textContent = document.querySelector(`.trainers-slide[data-trainer-id='${active}'] .trainer-stazh`).textContent;
        trainerShortDesc.innerHTML = document.querySelector(`.trainers-slide[data-trainer-id='${active}'] .trainer-shortdesc`).textContent;
      }
  
      // Функция, вызываемая при инициализации сладера
      function sliderReady() {
        allSlides.forEach(slide => {
          slide.style.transform = '';
        });
        let activeSlide = computeActiveSlide();
        let activeTrainer = activeSlide.dataset.trainerId;
        changeDescription(activeTrainer);
      }
  
      /* Конец Slider тренеров */
  
      /* Слайдер для галереи фото клуба */
  
      const gallerySlider = new Swiper('.gallery-swiper-container', {
        slidesPerView: 4,
        spaceBetween: 0,
        autoHeight: true,
        navigation: {
          prevEl: '.gallery-button-prev',
          nextEl: '.gallery-button-next'
        },
        breakpoints: {
          320: {
            slidesPerView: 1,
          },
          768: {
            slidesPerView: 2,
          },
          992: {
            slidesPerView: 4,
          },
        }
      });
  
      // /* Конец Слайдер для галереи фото клуба */
  
      // /* Модальное окно */
  
      const galleryModal = document.querySelector('#modal-gallery');
      const galleryModalToggles = document.querySelectorAll('.gallery-slide[data-call="modal-gallery"]');
      const closeBtns = document.querySelectorAll('.close');
      const galleryModalImg = document.querySelector('.modal-gallery__img');
      const galleryModalBtnPrev = document.querySelector('.gallery-modal-button-prev');
      const galleryModalBtnNext = document.querySelector('.gallery-modal-button-next');
      const gallerySwiperContainer = document.querySelector('.gallery-swiper-container');
      const gallerySlidesCount = Array.from(gallerySlider.slides).length;
  
      // Добавление прослушки События для каждого слайда
      galleryModalToggles.forEach((item, idx) => {
        item.setAttribute('data-slide-index', idx)
        item.addEventListener('click', () => openModal(item.dataset.call, item.dataset.imgModal, item.dataset.slideIndex))
      });
      closeBtns.forEach(item => {
  
        item.addEventListener('click', () => closeModal(item.dataset.close))
      });
  
      window.addEventListener('click', (e) => {
        let activeModal = document.querySelector('.modal.active');
        if (e.target == activeModal) closeModal(activeModal.id);
      });
  
      // Открыть модальное окно
      function openModal(id, src, idx) {
        let modal = document.querySelector(`#${id}`);
        modal.classList.add('active');
        body.style.overflow = 'hidden';
        if (src && idx) {
          galleryModalImg.src = src;
          galleryModalImg.setAttribute('data-slide-index', `${idx}`);
        }
      }
  
      //Закрыть модальное окно
      function closeModal(modal) {
        let modalBox = document.querySelector(`#${modal}`);
        modalBox.classList.remove('active');
        body.style.overflow = '';
      }
  
      // Закрыть окно при клике вне модального окна
      window.addEventListener('click', (event) => {
        if (event.target == galleryModal) closeModal('modal-gallery')
      });
  
      // Перелистывание слайдов через кнопки
      galleryModalBtnPrev.addEventListener('click', prevGallerySlide);
      galleryModalBtnNext.addEventListener('click', nextGallerySlide);
  
      // Следующий слайд в модальном окне
      function prevGallerySlide() {
        let currentIdx = galleryModalImg.dataset.slideIndex;
        if (currentIdx == 0) currentIdx = +gallerySlidesCount;
        let nextElemSrc = gallerySwiperContainer.querySelector(`.gallery-slide[data-slide-index="${+currentIdx - 1}"]`).dataset.imgModal;
        galleryModalImg.src = nextElemSrc;
        galleryModalImg.dataset.slideIndex = +currentIdx - 1;
      }
  
      //Предыдущий слайд в модальном окне
      function nextGallerySlide() {
        let currentIdx = galleryModalImg.dataset.slideIndex;
        if (currentIdx == +gallerySlidesCount - 1) currentIdx = -1;
        let nextElemSrc = gallerySwiperContainer.querySelector(`.gallery-slide[data-slide-index="${+currentIdx + 1}"]`).dataset.imgModal;
        galleryModalImg.src = nextElemSrc;
        galleryModalImg.dataset.slideIndex = +currentIdx + 1;
      }
  
  
      const openCbModalBtns = document.querySelectorAll('*[data-call="modal-callback"]');
      openCbModalBtns.forEach(item => {
        item.addEventListener('click', () => openModal(item.dataset.call));
      })
  
      const openSaleModalBtns = document.querySelectorAll('*[data-call="modal-sale"]');
      openSaleModalBtns.forEach(item => {
        item.addEventListener('click', () => openModal(item.dataset.call));
      })
  
      const openTrainerModalBtns = document.querySelectorAll('*[data-call="modal-trainer"]');
      let trainerImgBox = document.querySelector('.trainer__img-box');
      let trainerNameBox = document.querySelector('.trainer__name-box p');
      let trainerDescBox = document.querySelector('.trainer__desc-box p');
      let trainerInputHidden = document.querySelector('#trainer-to-buy');
  
  
      function openModalTrainer(modalId, trainerId) {
        let modal = document.querySelector(`#${modalId}`);
        let imgSrc = document.querySelector(`.trainers-slide[data-trainer-id='${trainerId}'] .img-src`).textContent
        modal.classList.add('active');
        body.style.overflow = 'hidden';
        trainerImgBox.style.backgroundImage = `url(${imgSrc})`;
        trainerNameBox.innerHTML = document.querySelector(`.trainers-slide[data-trainer-id='${trainerId}'] .trainer-name`).textContent;
        trainerDescBox.innerHTML = document.querySelector(`.trainers-slide[data-trainer-id='${trainerId}'] .trainer-fulldesc`).innerHTML;
        trainerInputHidden.value = document.querySelector(`.trainers-slide[data-trainer-id='${trainerId}'] .trainer-name`).textContent;
      }
  
      openTrainerModalBtns.forEach(item => {
        item.addEventListener('click', () => openModalTrainer(item.dataset.call, item.dataset.trainerId));
      })
  
      // Расписание
  
      const openScheduleBtn = document.querySelector('*[data-call="modal-schedule"]');
      openScheduleBtn.addEventListener('click', () => openModal(openScheduleBtn.dataset.call));
  
      // Модальное окно с картами клуба
  
      const openCardModalBtns = document.querySelectorAll('*[data-call="modal-card"]');
      openCardModalBtns.forEach(btn => {
        btn.addEventListener('click', () => openCardModal(btn.dataset.call, btn.dataset.period));
      })
  
      const modalCardPeriodText = document.querySelector('#modal-card .period');
      const modalCardPeriodInput = document.querySelector('#card-period');
  
      function openCardModal(id, period) {
        let modal = document.querySelector(`#${id}`);
        modal.classList.add('active');
        body.style.overflow = 'hidden';
        modalCardPeriodText.textContent = period;
        modalCardPeriodInput.value = period;
      }
  
      /* Конец Модальное окно */

  /* Конец Модальное окно */
});
