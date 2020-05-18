<template>

  <div>
   <h3>Listing Blogs:</h3>
       <div v-for="blog in blogs">
              <h3>{{blog.title | makeUpperCase}}</h3>
              <p>{{blog.body | contentSnippet}}</p>              
       </div>
  </div>
</template> 
<script>
// ******************************LOCALLY DEFINED MIXINS***************************************************//
import Filters from '../Mixins/Filters'
export default{
mixins:[Filters],
// ******************************LOCALLY DEFINED MIXINS***************************************************//
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
