/**
 *  FRONT OFFICE
 */

window.Vue = require('vue');

// INIT VUE MAIN INSTANCE
import App from './App.vue';

const root = new Vue({
    el: '#root',
    render: h => h(App)
});