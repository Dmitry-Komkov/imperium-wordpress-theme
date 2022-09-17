export function closeButton() {
  const $buttons = document.querySelectorAll('.close-button');

  $buttons.forEach((button) => {
    const targetSelector = button.dataset.close
    const $target = document.querySelector(targetSelector);

    button.addEventListener('click', () => {
      $target.classList.add('closed');
    })
  })
}