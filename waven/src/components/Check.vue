<template>
  <div class="row">

    <div class="main pt-3 rounded ">

      <div class="d-flex justify-content-center">
        <span class="msg border p-5 rounded">請 預約/查詢 給我您的個資</span>
      </div>

      <div class="d-flex justify-content-center">
        <router-link to="/Plate" type="button" class="YESBTN btn btn-primary p-3 m-5">查詢</router-link>
        <router-link to="/Plate" type="button" class="YESBTN btn btn-danger p-3 m-5">預約</router-link>
      </div>
    </div>
  </div>

</template>

<script>
  export default {
    name: "Check",
    // props: {
    //   msg: String,
    // },
  };
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
  .msg {
    background: #6cebf0;
    font-size: 25px;
    box-shadow: 3px 3px 12px rgb(168, 168, 166);
    margin-top: 20px;
  }

  .YESBTN {
    font-size: 50px;
    box-shadow: 3px 3px 12px rgb(168, 168, 166)
  }

  .main {
    position: relative;
    top: 50%;
    left: 25%;
    background-color: rgba(235, 140, 31, 0.959);
    width: 50%;
    height: 350px;
    box-shadow: 3px 3px 12px rgb(168, 168, 166);
    margin-bottom: 5px;
    padding-bottom: 10%;

  }
</style>