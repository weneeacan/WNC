<template>
  <div id="app">
    <label for="firstname">Firstname</label>
    <input type="text" name="firstname" v-model="firstName" />
    <label for="lastname">Lasttname</label>
    <input type="text" name="lastname" v-model="lastName" />
    <h2>{{ fullName }}</h2>
    <h2>{{ fullName }}</h2>
    <h2>{{ fullName }}</h2>
    <h2>{{ fullName }}</h2>
    <h3>{{ getFullName() }}</h3>
    <h3>{{ getFullName() }}</h3>
    <h3>{{ getFullName() }}</h3>
  </div>
</template>
<script>
export default {
  // computed 用在data屬性中，資料的延伸操作上(比方說將原本沒排序的陣列排序)
  // methods 用在事件觸發的handler或是在vue實體中的函數上
  name: "Computed",
  data() {
    return {
      firstName: "",
      lastName: "",
    };
  },
  methods: {
    getFullName() {
      return `${this.firstName} ${this.lastName}`;
    },
  },
  computed: {
    fullName() {
      return this.firstName + " " + this.lastName;
    },
  },
};
</script>

<style scope>
</style>