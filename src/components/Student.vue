<template>

  <div>
   <h3>Student form:</h3>
       <form action="">
         <p> 
           <label for="name">Name:</label>
           <input type="text" name="txtStudentName">
         </p>

          <p> 
           <label for="class">Class:</label>
           <input type="text" name="txtStudentClass">  
         </p>

          <p> 
           <label for="mobileNo">mobileNo:</label>
           <input type="text" name="txtStudentmobileNo">
         </p>
         <p>
          <button>Submit</button>
          </p>
       </form>
  </div>
</template>

<script>
export default{
 
  data () { 
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
