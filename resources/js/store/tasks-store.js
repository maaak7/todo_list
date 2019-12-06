import Axios from "axios";

export default {
    namespaced: true,

    state: {
        tasks: [],
    },
    getters: {
        TASKS: state => {
            return state.tasks;
        },
    },
    mutations: {
        SET_TASKS(state, payload) {
            state.tasks = payload;
        },
    },
    actions: {
        GET: async (context, payload) => {
            Axios
                .get(APP_BASE_URL + '/tasks/get')
                .then(response => {
                    context.commit('SET_TASKS', response.data);
                }).catch((err) => {
                console.log(err);
            });
        },

        CREATE: (context, payload) => {
            console.log('CREATE task store');
            Axios.post(APP_BASE_URL + '/tasks/create', payload.data)
                .then(response => {
                    console.log(response.data);
                    payload.callback(response.data);
                }).catch(err => {
                console.log(err);
            });
        },
    }
};
