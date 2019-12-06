import Axios from "axios";

export default {
    namespaced: true,

    state: {
        currentPage: 'list',
        categories: [],
        category: null,
    },
    getters: {
        CURRENT_PAGE: state => {
            return state.currentPage;
        },
        CATEGORIES: state => {
            return state.categories;
        },
        CATEGORY: state => {
            return state.category;
        },
    },
    mutations: {
        CHANGE_CURRENT_PAGE(state, page) {
            state.currentPage = page;
        },
        SET_CATEGORIES(state, payload) {
            state.categories = payload;
        },
        SET_CATEGORY(state, payload) {
            state.category = payload;
        },
    },
    actions: {
        GET: async (context, payload) => {
            Axios
                .get(APP_BASE_URL + '/categories/get')
                .then(response => {
                    context.commit('SET_CATEGORIES', response.data);
                }).catch((err) => {
                console.log(err);
            });
        },

        CREATE: (context, payload) => {
            Axios.post(APP_BASE_URL + '/categories/create', payload)
                .then(response => {
                    console.log(response.data);
                    payload.callback(response.data);
                }).catch(err => {
                console.log(err);
            });
        },
    }
};
