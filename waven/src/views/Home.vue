<template>
  <div id="Home" class="Home">
    <div class="row">
      <div class="container-fluid">
        <Navbar class="Navbar" />
        <div class="">

          <div class="d-felx text-center text-dark fs-1 my-2">
            GIVEME-19 免費給我個人資料平台登記
          </div>
          <hr />
          <div class="d-felx text-center text-danger fs-4 mt-3">
            【重要通知】設計階段中，還沒連後端。
          </div>
        </div>
        <Check class="Check" />
        <Footer class="Footer"></Footer>
      </div>
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
        lan: "ch"
      };
    },
    created() {
    },
    mounted() {

    },
  };
</script>
<style scoped>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  .Home {
    height: 100%;

  }

  hr {
    width: 60%;
    margin-left: 20%;
    color: black;
    height: 3;
  }
</style>