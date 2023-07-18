export default {
  register(context_selector = 'body', methods) {
    let context_el = document.querySelector(context_selector);
    let hamburger = context_el.querySelector('.js-hamburger');

    if (hamburger) {
      hamburger.addEventListener('click', function() {
        hamburger.classList.toggle('is-active'); 
        context_el.classList.toggle('is-menu-open'); 
        if (methods.onToggle) {
          methods.onToggle();
        }
        if (methods.onOpen && context_el.classList.contains('is-menu-open')) {
          methods.onOpen();
        }
        if (methods.onClose && !context_el.classList.contains('is-menu-open')) {
          methods.onClose();
        }
      });
    }
  },
};