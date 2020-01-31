import Vue from 'vue';
import Vuex from 'vuex';
import myAccount from './modules/myAccount';
import myProperties from "./modules/myProperties";

Vue.use(Vuex);

const debug = process.env.NODE_ENV !== 'production';

export default new Vuex.Store({
    modules: {
        myAccount,
        myProperties
    },
    strict: debug,
})
