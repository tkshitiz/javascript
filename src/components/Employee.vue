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
          <label><input type="checkbox" v-model="employee.posts" value="Developer">Developer</label>
          <label><input type="checkbox" v-model="employee.posts" value="Designer">Designer</label>
          <label><input type="checkbox" v-model="employee.posts" value="CEO">CEO</label>
          <label><input type="checkbox" v-model="employee.posts" value="Tester">Tester</label>
         </p>
             
         <p>
           <input type="radio" value="Male" v-model="employee.gender">Male
           <input type="radio" value="Female" v-model="employee.gender">Female
         </p>
         <p>
           <select v-model="employee.level">
             <option v-for="level in levels">{{level}}</option>
           </select>
         </p>
         <p>
        <button>Submit</button>
        </p>
       </form>
       <div>
          <H3>Employee details preview</H3>
          <p>Employee name : {{ employee.name }}</p>
          <p>Company name  : {{ employee.companyName }}</p>
          <p>Moblie No     : {{ employee.mobileNo }}</p> 
           <p>Gender: {{employee.gender}}</p>

           <h3>Employee Occupation:</h3>
          <ul>
            <li v-for="post in employee.posts">{{post}}</li>
          </ul>
         <h3>employee level: <span style="color:black;">{{ employee.level}}</span></h3>
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
             mobileNo:"",
             posts:[],
             gender:""
             
           },
           levels:["Football","singing","dancing","swimming"]  
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
