export default () => {
  const langSwitch = document.querySelector('.js-language-switcher');
  if (langSwitch) {
    langSwitch.addEventListener('click', () => {
      if (!document.body.classList.contains('is-lang-switch-open')) {
        document.body.classList.add('is-lang-switch-open');
      } else {
        document.body.classList.remove('is-lang-switch-open');
      }
    });
  }
}