/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import BatchContentComponent from './components/home/body/content/BatchContentComponent.vue'
import LanguageContentComponent from './components/home/body/content/LanguageContentComponent.vue'


Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('home-component', require('./components/home/HomeComponent.vue').default);

const routes = [
    { path: '/batch', component: BatchContentComponent},
    { path: '/language', component: LanguageContentComponent},
]
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});

const router = new VueRouter({
    routes,
    linkActiveClass: "active",
    mode: "history"
});

export default router;

