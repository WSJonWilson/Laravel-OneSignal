require('./bootstrap');
import App from './App.vue';
    window.Vue = require('vue');
    import ElementUI from 'element-ui';
    import 'element-ui/lib/theme-chalk/index.css';

    Vue.use(ElementUI);
    const app = new Vue({
        el: '#app',
        render: h => h(App),
    });
