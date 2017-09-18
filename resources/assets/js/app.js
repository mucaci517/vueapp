require('./bootstrap');
window.Vue = require('vue');

/*
  Element UI
 */
import ElementUI from 'element-ui'
import locale from 'element-ui/lib/locale/lang/ja'
import 'element-ui/lib/theme-default/index.css'
Vue.use(ElementUI, {locale})

Vue.component('main-contents', require('./components/MainContents.vue'))

const app = new Vue({
    el: '#app'
});
