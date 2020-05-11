<template>

  <div>
     <h3><msgheader></msgheader></h3>
     <student v-bind:some-message="someMessage"  v-bind:students="students"></student>
     <playlist v-bind:some-message="someMessage" v-bind:students="students" name="kshitiz thapa" laptop-name="dell inspiron" v-bind:myplaylist="playlists"></playlist>
  </div>
</template>

<script>
import Header  from './components/Header.vue'
import Content from './components/Content.vue'
import Student from './components/Student.vue'
export default {
components:{
  "msgheader":Header,
  "playlist":Content,
  "student": Student
},
  data () {
    return {  
       playlists:[
            {
            name:'vue js',
            url:'https://vuejs.org/',
            title:'vue'
            },

             {
            name:'react js',
            url:'https://reactjs.org/',
            title:'react'
            },

             {
            name:'angular js',
            url:'https://angularjs.org/',
            title:'angular'
            }
        ],
        students:[
          "Kshitiz Thapa",
          "Shruti Gautam",
          "thapa kshitiz",
          "gautam shruti"
          
        ],
        someMessage: "Simple Message Defined here"

    }
  }
}
</script>

<style scoped>
h3{
  color:red;
  font-size:30px
}
</style>
