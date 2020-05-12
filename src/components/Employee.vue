<template>

  <div>
      Employee: {{message}}
  </div>
</template>

<script>
import {EventBus} from '../main'
export default{
 
  data () { 
    return {  
       message:"Default message"
    }
  },
  methods:
  {
    
  },

// *******************Receiving data from Student.vue****************//
  mounted(){
      EventBus.$on("emittedData",data=>{
       this.message=data 
      })
  }
}

</script>

<style scoped>
h3{
  color:red;
  font-size:30px
}
</style>
