<template>

  <div>
      <h3>Employee form:</h3>
       <form action="">
         <p> 
           <label for="name">Name:</label>
           <input type="text" name="txtEmployeeName">
         </p>

          <p> 
           <label for="officeName">Company Name:</label>
           <input type="text" name="txtCompanyName">  
         </p>

          <p> 
           <label for="mobileNo">mobileNo:</label>
           <input type="text" name="txtEmployeemobileNo">
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
       message:"Default message"
    }
  },
  methods:
  {
    
  },
  
}

</script>

<style scoped>
h3{
  color:red;
  font-size:30px
}
</style>
