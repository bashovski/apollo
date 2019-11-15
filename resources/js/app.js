require('./bootstrap');

window.Vue = require('vue');

import Jumbotron from './components/Jumbotron.vue';
import Search from "./components/Search";

const app = new Vue({
    el: '#app',
    components: {
        Jumbotron,
        Search
    }
});
