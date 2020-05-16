<template>

  <div>
  
       <h3>Employee form:</h3>
       <form action="">
         <p> 
           <label for="title">Title:</label>
           <input type="text" v-model.lazy="blog.title">
         </p>

          <p>
           <label for="description">Description:</label>
           <input type="text" v-model.lazy="blog.description">  
          </p>
      
         <p>
          <button v-on:click.prevent="postBlog">submit</button>
        </p>
       </form>
       <div>
          <H3> Details preview</H3>
          <p>Title : {{ blog.title }}</p>
          <p>Description  : {{ blog.description}}</p>
          

        </div>    

  </div>
</template>

<script>

export default{

  data() {
    return {  
         blog:{
              title:'',    
              description:'',
              user:''            
           },
    }
  },
  methods:
  {
      postBlog:function()
    {
      this.$http.post("https://jsonplaceholder.typicode.com/posts",{
        title:this.blog.title,
        body:this.blog.description,
        userID: this.blog.user
      }).then(function(data)
      {
        console.log(data);
      });
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
