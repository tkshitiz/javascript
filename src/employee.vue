<template>
  <div>
    <h3> Employee name:</h3>
       <ul>
            <li v-for="emp in employee">
                {{emp}}
            </li>
        </ul>
  </div>
</template>
<script>

export default {

  name: 'app',
  data () {
    return {
      
      msg: 'Welcome to employee vue',
      employee:['kshtiiz thapa','harsith thapa','katuwal thapa']

    }
  }
}
</script>


<style>

</style>

