<template>

  <div>
     <h3><msgheader></msgheader></h3>
     <playlist  name="kshitiz thapa" laptop-name="dell inspiron" v-bind:myplaylist="playlists"></playlist>
  </div>
</template>

<script>
import Header  from './components/Header.vue'
import Content from './components/Content.vue'
export default {
components:{
  "msgheader":Header,
  "playlist":Content
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
        ]

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
