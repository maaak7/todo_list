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
            Axios.post(APP_BASE_URL + '/tasks/create', payload.data)
                .then(response => {
                    payload.callback(response.data);
                }).catch(err => {
                console.log(err);
            });
        },

        CHANGE_STATUS: (context, payload) => {
            Axios.post(APP_BASE_URL + '/tasks/change_status', {task_id: payload.taskID})
                .then(response => {
                    console.log(response.data);
                }).catch(err => {
                console.log(err);
            });
        },
    }
};
