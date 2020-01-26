require('./bootstrap');

window.Vue = require('vue');

import store from './store'
import Navbar from "./components/Navbar/Navbar";
import Jumbotron from './components/Jumbotron/Jumbotron.vue';
import Search from "./components/Search/Search";
import RecentProperties from "./components/RecentProperties/RecentProperties";
import WhyUs from "./components/WhyUs/WhyUs";
import Login from "./components/Login/Login";
import Register from "./components/Register/Register";
import MyAccountNav from "./components/MyAccount/Nav";
import MyAccountProfile from "./components/MyAccount/Profile";
import MyAccountProperties from "./components/MyAccount/Properties";
import MyAccountPrivateMessages from "./components/MyAccount/PrivateMessages";
import MyAccountHistory from "./components/MyAccount/History";
import MyAccountSettings from "./components/MyAccount/Settings";
import MyAccountStatistics from "./components/MyAccount/Statistics";
import PlaceProperty from "./components/PlaceProperty/PlaceProperty";

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
