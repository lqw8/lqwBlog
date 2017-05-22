import Vue from 'vue';

require('./bootstrap');
//noinspection JSUnresolvedVariable
import App from './App.vue';

import router from './router';

import httpPlugin from './plugins/http';

import ElementUI from 'element-ui';
//引入element-ui的默认CSS样式
import 'element-ui/lib/theme-default/index.css';

Vue.use(httpPlugin);
Vue.use(ElementUI);
Vue.config.productionTip = false;

const app = new Vue({
    el: '#app',
    template:'<app></app>',
    components:{ App },
    router
});
