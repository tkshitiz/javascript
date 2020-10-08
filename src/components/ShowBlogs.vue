<template>

  <div>
   <h3>Show Blogs:</h3>
     <div v-for="blog in blogs">
     <router-link v-bind:to="'/blog'+'/'+blog.id">{{blog.title}}</router-link>     
       <p>{{blog.body}}</p>
       </div>  
  </div>
</template> 
<script>
export default{

  data () { 
    return {  
       blogs:[],
    }   
  },
 
   created(){
   this.$http.get("https://jsonplaceholder.typicode.com/posts").then(function(data)
      {
         console.log(data)
        this.blogs=data.body.slice(0,5)
      });
   },
  
  
}

</script>

<style scoped>
h3{
  color:red;
  font-size:30px
}
</style>
