
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

 require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

 Vue.component('lz-navbar', require('./components/Navbar.vue'));
 Vue.component('lz-section', require('./components/Section.vue'));
 Vue.component('lz-image', require('./components/Image.vue'));
 Vue.component('lz-gallery', require('./components/Gallery.vue'));
 Vue.component('lz-footer', require('./components/Footer.vue'));
 Vue.component('lz-card', require('./components/Card.vue'));

 const app = new Vue({
 	el: '#app'
 });
