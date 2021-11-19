require('./bootstrap');
import SimpleLightboxEsm from "simplelightbox/dist/simple-lightbox.esm";

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();


new SimpleLightboxEsm('.gallery a', {})
