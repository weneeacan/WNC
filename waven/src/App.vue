<template>
  <!-- <router-view /> -->
  <!-- router-view顯示頁面 -->
  <div id="App">
    <!-- <router-link to="/">Home</router-link> |
    <router-link to="/about">About</router-link>|
    <router-link to="/Weather">Weather</router-link>|
    <router-link to="/Calculator">Calculator</router-link> -->
    <!-- router-link 變成一個<a> 點下去可連結到某個.vue -->
    <router-view />
  </div>
</template>
<script>
  export default {
    data() {
      return {};
    },
  };
</script>
<style scoped>
  * {
    margin: 0;
    padding: 0;
    overflow-x: hidden;
    height: 100%;
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background: rgb(233, 233, 233);
    z-index: -999;
  }
</style>