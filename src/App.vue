<template>

  <div>
    <p>
    <router-link to="/">Home</router-link>
    <router-link to="/about">About</router-link>
    <router-link to="/contact">Contact</router-link>
    <router-link to="/services">Services</router-link>
    </p>
    <p>
      <showblogs></showblogs>
    </p>

    <router-view></router-view>
  </div>
</template>

<script>

import ShowBlogs from './components/ShowBlogs'
export default{
components:{
  'showblogs':ShowBlogs
},
  data() {
    return {  

    }
  },
  methods:
  {
      
   
  }

}
</script>

<style scoped>
h3{
  color:rgb(24, 20, 20);
  font-size:30px
}
</style>
