import Vue from 'vue';
import VueRouter from 'vue-router';

import Home from '../views/Home';
import Categories from '../views/categories/Main';
import CategoriesList from '../views/categories/List';
import CreateCategory from '../views/categories/Create';
import EditCategory from '../views/categories/Edit';

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
            path: '/categories',
            component: Categories,
            children: [{
                path: 'list',
                name: 'categories_list',
                component: CategoriesList,
                meta: {
                    title: 'Список категорій'
                }
            }, {
                path: 'create',
                name: 'create_category',
                component: CreateCategory,
                meta: {
                    title: 'Створення категорії'
                }
            }, {
                path: 'edit/:id',
                name: 'edit_category',
                component: EditCategory,
                meta: {
                    title: 'Редагування категорії'
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
