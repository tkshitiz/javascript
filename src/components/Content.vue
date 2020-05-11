<template>

  <div>
    {{laptopName}} and {{name}}

    <ul>
        <li v-for="playlist in myplaylist">
            <a v-bind:href="playlist.url" v-bind:title="playlist.title" v-bind:name="playlist.name" target="_blank">
                {{playlist.name}}
            </a>
           
        </li>
    </ul>
  </div>
</template>

<script>
export default{
  // props:["name","myplaylist","laptopName"],
  props:{
    name:{
      type:String,
      default:"Default name"
      
    },
    
    myplaylist:{
      type:Array
    },
  
    laptopName:{
      type:String
    },
  
    
  },
  data () {
    return {  
       
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
