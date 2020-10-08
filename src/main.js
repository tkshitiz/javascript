import Vue from 'vue'
import App from './App.vue'
import VueResource from 'vue-resource'
import VueRouter from 'vue-router'
import Routes from './routes'
import VueAxios from 'vue-axios'
import axios from 'axios'


Vue.use(VueAxios,axios);
Vue.prototype.$axios=axios;
Vue.use(VueResource);

const router =new VueRouter({
  routes: Routes,
  
  //******/ FOR REMOVING THE HASH IN THE URL SECTION*****//
  mode:"history"
})

new Vue({
  el: '#app',
  render: h => h(App),
  router: router,

})



