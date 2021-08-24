require('./bootstrap');
require('./jquery-360.min.js');

// require('./yandexMap');
import Vue from 'vue'

Vue.component('app-component', require('./components/AppComponent.vue').default);
Vue.component('yandex-map', require('./components/YandexMapComponent.vue').default);
Vue.component('prop-component', require('./components/PropComponent.vue').default);

const app = new Vue({
    el: '#app'
});