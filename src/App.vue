<template>

  <div>
    
     <student v-bind:message="msg" v-on:updateParentVariable="updateValueFn($event)"></student>
  </div>
</template>

<script>
import Student from './components/Student.vue'
export default {
components:{
  "student": Student
},
  data () {
    return {  
         msg: "Passing data from Parent to Child component"
    }
  },
  methods:
  {
     updateValueFn:function(updatedValue)
     {
         this.msg=updatedValue
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
