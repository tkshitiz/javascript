<template>

  <div>
    <!-- preserving the input value -->
    <keep-alive> 
    <component v-bind:is="msg"></component>
    </keep-alive>
    <!-- preserving the input value -->

    <button v-on:click="msg='student-form'">Student form</button>
    <button v-on:click="msg='employee-form'">Employee form</button>
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
