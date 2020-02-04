const state = {
    selectedProperty: null,
};

const getters = {
    getSelectedProperty() {
        return state.selectedProperty;
    }
};

const actions = {
    selectProperty({commit}, property) {
        commit('setSelectedProperty', property);
    }
};

const mutations = {
    setSelectedProperty(state, property) {
        console.log(property);
        state.selectedProperty = property;
    }
};

export default {
    state,
    getters,
    actions,
    mutations
};
