import Axios from "axios";

export default {
    namespaced: true,

    state: {
        toast: null,
    },
    getters: {
        TOAST: state => {
            return state.toast;
        },
    },
    mutations: {
        SET_TOAST(state, payload) {
            state.toast = payload;
        },
    },
};
