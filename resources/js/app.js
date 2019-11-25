import './bootstrap';
import Vue from 'vue';
import App from './App.vue';
import BootstrapVue from 'bootstrap-vue';
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'
import Routes from './routes/main';
// import VueI18n from 'vue-i18n';
// import i18n from './plugins/i18n';
// import axios from 'axios';
// import VueAxios from 'vue-axios';
// import Vuetify from 'vuetify';
// import {store} from './store/store';
// import VoerroTagsInput from '@voerro/vue-tagsinput';
// import Cleave from 'vue-cleave-component';

Vue.prototype.$url = window.location.protocol + '//' + window.location.host;

// window.Vue = require('vue/types');
// Vue.use(VueI18n);
Vue.use(BootstrapVue);
// Vue.use(Cleave);
// Vue.component('tags-input', VoerroTagsInput);
// Vue.use(VueAxios, axios);
// Vue.use(Vuetify, {
//     icons: {
//         iconfont: 'md'
//     }
// });

const app = new Vue({
    el: '#app',
    // i18n,
    // store,
    router: Routes,
    render: h => h(App)
});

export default app;
