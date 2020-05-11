<template>
  <div>
    <h3>Students name</h3>
      <ul>
        <li v-for="student in students">{{student}}</li>
       
      </ul>
  </div>
</template>

<script>
export default {
  name: 'app',
  data () {
    return {
      students:['student 1','student 2','student 3','student 4','student 5']
     
    }
  }

 
}
</script>
