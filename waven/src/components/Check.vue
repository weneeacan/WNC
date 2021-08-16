<template>
  <div class="row">

    <div class="main pt-3 rounded">

      <div class="d-flex justify-content-center">
        <span class="msg border p-5 rounded">{{ msg }}</span>
      </div>

      <div class="d-flex justify-content-center">
        <button type="button" class="YESBTN btn btn-primary p-3 m-5">好啊</button>
        <button type="button" class="YESBTN btn btn-danger p-3 m-5">接受</button>
      </div>
    </div>

  </div>
</template>

<script>
  export default {
    name: "Check",
    props: {
      msg: String,
    },
  };
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
  .msg {
    background: #6cebf0;
    font-size: 25px;
    box-shadow: 3px 3px 12px rgb(168, 168, 166)
  }

  .YESBTN {
    font-size: 50px;
    box-shadow: 3px 3px 12px rgb(168, 168, 166)
  }

  .main {
    position: absolute;
    top: 10%;
    left: 25%;
    background-color: rgba(235, 140, 31, 0.959);
    box-sizing: content-box;
    width: 50%;
    height: 50%;
    /* border-bottom: rgb(138, 135, 135) solid 4px; */
    box-shadow: 3px 3px 12px rgb(168, 168, 166)
  }
</style>