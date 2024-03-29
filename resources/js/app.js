 /**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

window.Swal = require('sweetalert2');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))
//import axios from './axios';
//import VueRouter from  'vue-router';
//import router from './router'

import VueRouter from 'vue-router'
  
Vue.use(VueRouter)
   
const routes = [
  { path: '/', component: require('./components/Pages/LoginPage.vue').default },
  { path: '/register', component: require('./components/Pages/Register.vue').default },
  { path: '/dashboard', component: require('./components/Pages/Dashboard.vue').default }
]
  
const router = new VueRouter({
  routes 
})

// Vue.component('example-component', require('./components/main.vue').default);
// Vue.component('login-component', require('./components/Pages/LoginPage.vue').default);
// Vue.component('register-component', require('./components/Pages/Register.vue').default);
// Vue.component('user-component', require('./components/Pages/Dashboard.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.$prototype.$axios = axios;

const app = new Vue({
    el: '#app',
    router,
});
