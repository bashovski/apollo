require('./bootstrap');

window.Vue = require('vue');

import store from './store'
import Navbar from "./components/Navbar";
import Jumbotron from './components/Jumbotron.vue';
import Search from "./components/Search";
import RecentProperties from "./components/RecentProperties";
import WhyUs from "./components/WhyUs";
import Login from "./components/Login";
import Register from "./components/Register";
import MyAccountNav from "./components/MyAccountNav";
import MyAccountProfile from "./components/MyAccountProfile";
import MyAccountProperties from "./components/MyAccountProperties";
import MyAccountPrivateMessages from "./components/MyAccountPrivateMessages";
import MyAccountHistory from "./components/MyAccountHistory";
import MyAccountSettings from "./components/MyAccountSettings";
import MyAccountStatistics from "./components/MyAccountStatistics";
import PlaceProperty from "./components/PlaceProperty";

const app = new Vue({
    el: '#app',
    components: {
        store,
        Navbar,
        Jumbotron,
        Search,
        RecentProperties,
        WhyUs,
        Login,
        Register,
        MyAccountNav,
        MyAccountProfile,
        MyAccountProperties,
        MyAccountPrivateMessages,
        MyAccountHistory,
        MyAccountSettings,
        MyAccountStatistics,
        PlaceProperty
    }
});
