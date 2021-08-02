<template>
  <div class="container">
    <Header/>

    <router-view></router-view>

  </div>
</template>

<script>
import Header from './components/Header';
//import Card from './components/Card'; 

export default {
    name: 'App',
    components: {
       Header
    },
}
</script>

<style lang="scss">
</style>