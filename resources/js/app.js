/**
 *  FRONT OFFICE
 */

window.Vue = require('vue');
window.axios = require('axios');

// INIT VUE MAIN INSTANCE
import App from './App.vue';

const root = new Vue({
    el: '#root',
    render: h => h(App)
});