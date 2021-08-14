<template>
  <div>
    <h2>{{ storeState }}</h2>
  </div>
</template>

<script>
// import { emitter } from "@/main.js";
// import { emitter } from "@/EventBus.js"; // 引入EventBus實體
import { store } from "@/store.js";
export default {
  data() {
    return {
      storeState: store.state.numbers,
    };
  },
  methods: {
    // handleAddNumber() {
    //   emitter.on("addNumber", (payload) => {
    //     this.numbers.push(payload);
    //   });
    // },
  },
  created() {
    // this.handleAddNumber(); // 在建立時就開始監聽
  },
};
</script>