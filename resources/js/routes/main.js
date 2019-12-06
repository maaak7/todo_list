import Vue from 'vue';
import VueRouter from 'vue-router';

import Home from '../views/Home';
import Tasks from '../views/tasks/Main';
import TasksList from '../views/tasks/List';

Vue.use(VueRouter);

const DEFAULT_TITLE = 'TODO List';

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            component: Home,
            name: 'home',
            meta: {
                title: 'Головна'
            }
        },
        {
            path: '/tasks',
            component: Tasks,
            children: [{
                path: '/',
                name: 'tasks',
                component: TasksList,
                meta: {
                    title: 'Tasks list'
                }
            }],
        }
    ]
});

router.beforeEach((to, from, next) => {
    document.title = to.meta.title ? to.meta.title + ' | ' + DEFAULT_TITLE : DEFAULT_TITLE;
    next()
});

export default router;
