<template>

  <div>
   <h2>INDIVIDUAL BLOG:</h2>
      <h3>{{blog.title}}</h3>
       <p>{{blog.body}}</p>
      
  </div>
</template> 
<script>
export default{

  data () { 
    return {
        id: this.$route.params.id,    
       blog:{},
    }   
  },
 
   created(){
   this.$http.get("https://jsonplaceholder.typicode.com/posts/"+this.id).then(function(data)
      {
         
        this.blog=data.body
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
