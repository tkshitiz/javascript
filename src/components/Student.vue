<template>

  <div>
      
      <button v-on:click="passData()">click here to send data</button>
  </div>
</template>

<script>
import {EventBus} from '../main'
export default{
 
  data () { 
    return {  
       
    }
  },
  methods:
  {
     passData:function()
     {
      // console.log("this is a simple message.")
      EventBus.$emit("emittedData","this is a simple message.")
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
