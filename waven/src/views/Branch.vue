<template>
  <!-- <router-view /> -->
  <!-- router-view顯示頁面 -->
  <div id="Branch">
    <router-link to="/">Home</router-link> |
    <router-link to="/about">About</router-link>|
    <router-link to="/Weather">Weather</router-link>|
    <router-link to="/Calculator">Calculator</router-link>
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
  box-sizing: border-box;
}
</style>
