import Vue from 'vue'
import App from './App.vue'
import student from './student.vue'
import VueResource from 'vue-resource'


/****************** VUE RESOURCES FOR HTTP REQUEST*************************/ 
Vue.use(VueResource)
/****************** VUE RESOURCES FOR HTTP REQUEST*************************/ 


new Vue({
  el: '#app',
  render: h => h(App)
})
