import Vue from 'vue'
import App from './App.vue'
import student from './student.vue'
import VueResource from 'vue-resource'


/****************** VUE RESOURCES FOR HTTP REQUEST*************************/ 
Vue.use(VueResource)
/****************** VUE RESOURCES FOR HTTP REQUEST*************************/ 

/****************** GLOBALLY DEFINED FILTER-OBJECT*************************/ 
Vue.filter("makeUpperCase",function(value){
   return value.toUpperCase()
}),

Vue.filter("contentSnippet",function(value){
  return value.slice(0,70)
}),
/****************** GLOBALLY DEFINED FILTER-OBJECT*************************/ 



new Vue({
  el: '#app',
  render: h => h(App)
})
