const state = {
    selectedNavItem: 0,
    viewStyles: ['', 'display: none', 'display: none', 'display: none', 'display: none', 'display: none']
};

const getters = {
    getSelectedNavItem(state) {
        return state.selectedNavItem;
    }
};

const actions = {
    selectNavItem({commit}, item) {
        commit('setSelectedNavItem', item);
    }
};

const mutations = {
    updateView(item) {

    },
    setSelectedNavItem(state, item) {
        state.selectedNavItem = item;
        state.viewStyles = state.viewStyles.map( i => 'display: none' );
        state.viewStyles[item] = '';
    }
};

export default {
    state,
    getters,
    actions,
    mutations
};
