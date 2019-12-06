import Vue from 'vue';
import Vuex from 'vuex';
import categoriesStore from './categories-store';
import toastsStore from './toasts-store';

Vue.use(Vuex);

export const store = new Vuex.Store({
    state: {},
    getters : {},
    mutations: {},
    actions:{},

    modules : {
        categoriesStore,
        toastsStore
    }
});
