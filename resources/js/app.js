require('./bootstrap');

window.Vue = require('vue');

import Navbar from "./components/Navbar";
import Jumbotron from './components/Jumbotron.vue';
import Search from "./components/Search";
import RecentProperties from "./components/RecentProperties";
import WhyUs from "./components/WhyUs";

const app = new Vue({
    el: '#app',
    components: {
        Navbar,
        Jumbotron,
        Search,
        RecentProperties,
        WhyUs
    }
});
