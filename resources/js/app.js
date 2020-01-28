require('./bootstrap');

window.Vue = require('vue');

import store from './store'
import Navbar from "./layouts/Navbar/Navbar";
import ApolloFooter from './layouts/Footer/Footer';
import Jumbotron from './pages/Jumbotron/Jumbotron.vue';
import Search from "./pages/Search/Search";
import RecentProperties from "./pages/RecentProperties/RecentProperties";
import WhyUs from "./pages/WhyUs/WhyUs";
import Login from "./pages/Login/Login";
import Register from "./pages/Register/Register";
import MyAccountNav from "./pages/MyAccount/Nav";
import MyAccountProfile from "./pages/MyAccount/Profile";
import MyAccountProperties from "./pages/MyAccount/Properties";
import MyAccountPrivateMessages from "./pages/MyAccount/PrivateMessages";
import MyAccountHistory from "./pages/MyAccount/History";
import MyAccountSettings from "./pages/MyAccount/Settings";
import MyAccountStatistics from "./pages/MyAccount/Statistics";
import PlaceProperty from "./pages/PlaceProperty/PlaceProperty";
import MyProperties from "./pages/MyProperties/MyProperties";

const app = new Vue({
    el: '#app',
    components: {
        store,
        Navbar,
        ApolloFooter,
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
        PlaceProperty,
        MyProperties
    }
});
