const state = {
    selectedNavItem: 0,
    navItemStyles: ['', '', '', '', '', '']
};

const getters = {
    getSelectedNavItem(state) {
        return state.selectedNavItem;
    }
};

const actions = {
    selectNavItem({commit}, item) {
        //state.selectedNavItem = item;
        console.log('state call');
    }
};

const mutations = {
};

export default {
    state,
    getters,
    actions,
    mutations
};
