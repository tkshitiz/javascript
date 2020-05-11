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
    <ul>
      <li v-for="student in students">
         {{student}}
      </li>
    </ul>
    <h3>Content ko:</h3>
    <button v-on:click="deleteStudent">Delete Student</button>
    <h3>Simple Message: {{someMessage}}</h3>
  </div>
</template>

<script>
export default{
  // props:["name","myplaylist","laptopName"],
  props:{
    someMessage:{
      type:String
    },

    students:{
       type:Array
    },

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
  },

    methods:{
       deleteStudent:function(){
         this.students.pop();
       }
      }
}

</script>

<style scoped>
h3{
  color:blue;
  font-size:30px
}
</style>
