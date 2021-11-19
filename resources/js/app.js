require('./bootstrap');
require('./components')



import SimpleLightboxEsm from "simplelightbox/dist/simple-lightbox.esm";

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();


new SimpleLightboxEsm('.gallery a', {
  spinner: true,
  fadeSpeed: 200,
  animationSpeed: 100,
  loop: true
})
