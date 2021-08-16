<template>
  <div class="home">
    <!-- <img alt="Vue logo" src="../assets/logo.png" /> -->
    <Check msg="請給我您的個資" />
    <Footer></Footer>
  </div>
</template>

<script>
  // @ is an alias to /src
  import Check from "@/components/Check.vue";
  import Footer from "@/components/Footer.vue";
  import Navbar from "@/components/Navbar.vue";
  export default {
    name: "Home",
    components: {
      Check, Footer, Navbar
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