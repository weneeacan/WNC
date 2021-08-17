<template>
  <div class="home row">
    <div class="container-fluid">
      <Navbar title="GIVEME-19 免費給我個人資料平台" />
      <!-- <img alt="Vue logo" src="../assets/logo.png" /> -->
      <Check msg="請給我您的個資" />
      <Footer class="footer"></Footer>
    </div>
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
    data() {
      return {
      }
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