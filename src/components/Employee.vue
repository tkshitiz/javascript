<template>

  <div>
      <h3>Employee form:</h3>
       <form action="">
         <p> 
           <label for="name">Name:</label>
           <input type="text" v-model.lazy="employee.name" name="txtEmployeeName">
         </p>

          <p>
           <label for="officeName">Company Name:</label>
           <input type="text" v-model.lazy="employee.companyName" name="txtCompanyName">  
         </p>

          <p> 
           <label for="mobileNo">mobileNo:</label>
           <input type="text" v-model.lazy="employee.mobileNo" name="txtEmployeemobileNo">
         </p>
         <p>
          <button>Submit</button>
          </p>
       </form>
       <div>
          <H3>Employee details preview</H3>
          <p>Employee name: {{employee.name}}</p>
          <p>Company name: {{employee.companyName}}</p>
          <p>Moblie No: {{employee.mobileNo}}</p> 
       </div>
  </div>


</template>

<script>

export default{
 
  data () { 
    return {  
             employee:{
             name:"",
             companyName:"",
             mobileNo:""
           }  
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
