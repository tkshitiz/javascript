<template>

  <div>
    <student-form>
      {{msg}}
        <div slot="form-header">
          <h3>Student form</h3>
        </div>

        <div slot="form-elements">
          <p><input type="text" placeholder="enter name"></p>
          <p><input type="email" placeholder="enter email"></p>
        </div>

        <div slot="form-button">
          <button v-on:click="submitDetails()">Submit</button>
        </div>

         <div slot="form-footer">
          <p>This is form footer.</p>
        </div>
      </student-form>
    
  </div>
</template>

<script>
import Student from './components/Student.vue'
export default {
components:{
  "student-form": Student 
},
  data () {
    return {  
        msg:"Passing data from parent to child"
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
