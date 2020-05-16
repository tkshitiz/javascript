<template>

  <div>
    <show-blogs></show-blogs>
     
  </div>
</template>

<script>
import ShowBlogs from './components/ShowBlogs.vue'

export default{
components:{
"show-blogs":ShowBlogs
},
  data() {
    return {  

    }
  },
  methods:
  {
      
   
  }

}
</script>

<style scoped>
h3{
  color:red;
  font-size:30px
}
</style>
