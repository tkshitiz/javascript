<template>

  <div>
      <h2>{{message}}</h2>
      <button v-on:click="updateFromChild">update from child</button>
  </div>
</template>

<script>
export default{
  props:["message"],
 
  data () { 
    return {  
       
    }
  },
  methods:
  {
     updateFromChild:function()
     {
      //  this.message="updated from child"
      this.$emit("updateParentVariable"," value updated from child");
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
