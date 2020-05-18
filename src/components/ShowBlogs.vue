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
  
  // *********************Locally-defined-filter-format********************************//
  //  filters:{
  //    makeUpperCase: function(value)
  //    {
  //       return value.toUpperCase();
  //    },

  //    contentSnippet :function(value)
  //    {
  //       return value.slice(0,100)+"...";
  //    }
  //  }
   // *********************end-of Locally-defined-filter-format********************************//
}

</script>

<style scoped>
h3{
  color:red;
  font-size:30px
}
</style>
