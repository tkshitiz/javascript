<template>

  <div>
      <employee-form></employee-form>
  </div>
</template>

<script>
import Student from './components/Student.vue'
import Employee from './components/Employee.vue'
export default {
components:{
  "student-form": Student,
  "employee-form": Employee
},
  data () {
    return {  
        msg:"student-form"
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
