export default () => {
  const anchorStartingWithHash = document.querySelectorAll('a[href^="#"]');
  anchorStartingWithHash && anchorStartingWithHash.forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      e.preventDefault();
      if (e.currentTarget.getAttribute('href') !== '#') {
          document.querySelector(e.currentTarget.getAttribute('href')).scrollIntoView({
              behavior: 'smooth',
          });
        } 
    });
  });

  const emptyAnchors = document.querySelectorAll('a[href="#"]');
  emptyAnchors && emptyAnchors.forEach(el => {
      el.addEventListener('click', ev => {
          ev.preventDefault();
      })
  });

  if (is_touch_enabled()) {
    document.body.classList.add('is-touchable');
  } else {
      document.body.classList.add('is-not-touchable');
  }

  //Lettura viewport
  let vw = document.body.clientWidth * 0.01;
  let vh = window.screen.availHeight * 0.01;
  document.documentElement.style.setProperty('--vw', `${vw}px`);
  document.documentElement.style.setProperty('--vh', `${vh}px`);


  window.addEventListener('resize', () => {
      // We execute the same script as before
      vw = document.body.clientWidth * 0.01;  
      document.documentElement.style.setProperty('--vw', `${vw}px`);
      vh = window.screen.availHeight * 0.01;
      document.documentElement.style.setProperty('--vh', `${vh}px`);
  });

  // Listen for new scroll events, here we debounce our `storeScroll` function
  document.addEventListener('scroll', debounce(storeScroll), { passive: true });

  // Update scroll position for first time
  storeScroll();

}

const is_touch_enabled = () => { 
  return ( 'ontouchstart' in window ) ||  
      ( navigator.maxTouchPoints > 0 ) ||  
      ( navigator.msMaxTouchPoints > 0 ); 
}

// The debounce function receives our function as a parameter
const debounce = (fn) => {
    
  // This holds the requestAnimationFrame reference, so we can cancel it if we wish
  let frame;

  // The debounce function returns a new function that can receive a variable number of arguments
  return (...params) => {
      
      // If the frame variable has been defined, clear it now, and queue for next frame
      if (frame) { 
      cancelAnimationFrame(frame);
      }

      // Queue our function call for the next frame
      frame = requestAnimationFrame(() => {
      
      // Call our function and pass any params we received
      fn(...params);
      });

  }
};

// Reads out the scroll position and stores it in the data attribute
// so we can use it in our stylesheets
const storeScroll = () => {
  let scrollPos = window.scrollY || window.scrollTop || document.getElementsByTagName("html")[0].scrollTop;
  document.documentElement.dataset.scroll = scrollPos;

  checkScrollPosition(scrollPos);
}

const checkScrollPosition = (scrollPos) => {
  if (scrollPos >= 50) {
      document.querySelector('body').classList.add('is-scrolled');
  } else {
      document.querySelector('body').classList.remove('is-scrolled');
  }
}