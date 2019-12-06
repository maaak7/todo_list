import Vue from 'vue';
import Vuex from 'vuex';
import categoriesStore from './categories-store';
import tasksStore from './tasks-store';
import toastsStore from './toasts-store';

Vue.use(Vuex);

export const store = new Vuex.Store({
    state: {},
    getters : {},
    mutations: {},
    actions:{},

    modules : {
        categoriesStore,
        tasksStore,
        toastsStore,
    }
});
