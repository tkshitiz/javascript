import Vue from 'vue'
import App from './App.vue'
import student from './student.vue'


/******************Global-Variable*************************/  
Vue.component("student",student);

/******************Global-Variable*************************/  

/******************Global instance-to-pass-receive-data*************************/  
export const EventBus=new Vue();
/******************Global instance-to-pass-receive-data*************************/  

new Vue({
  el: '#app',
  render: h => h(App)
})
