<template>

  <div>
  <h2>Students List</h2>
  <ul>
      <li v-for="student in students">{{student}}</li>
  </ul>
    <h3>Simple Message: {{someMessage}}</h3>
  </div>
</template>

<script>
export default{
  
  props:{
   
    someMessage:{
      type:String
    },

   students:{
       type:Array
   } 
  },
  data () {
    return {  
       
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
