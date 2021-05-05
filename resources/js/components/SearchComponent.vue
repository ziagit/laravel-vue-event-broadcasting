<template>
  <div>
    Search component
    <form>
      <input type="text" v-model="keyword" />
      <ul v-if="togal">
        <li v-for="list in result" :key="list.id" @click="select(list)">
          <!-- saround the bellow line with {{}} -->
          list.title 
        </li>
      </ul>
    </form>
  </div>
</template>
<script>
import axios from "axios";
export default {
  data: () => ({
    keyword: null,
    result: [],
    togal: false,
    key:null,
  }),
  watch: {
    keyword(after, before) {
      this.search();
    },
  },
  methods: {
    search() {
        axios
          .get("http://localhost:8000/api/search", {
            params: {
              keyword: this.keyword,
            },
          })
          .then((res) => {
            this.togal = true;
            this.result = res.data.data;
            console.log("response", res.data.data);
          })
          .catch((err) => console.log(err));
    },
    select(data) {
      this.keyword = data.title;
      this.togal = false;
    },
  },
};
</script>
<style scoped lang="scss">
input {
  min-width: 200px;
  min-height: 30px;
  border: 1px solid #000;
}
ul {
  background: #fff;
  padding: 5px;
  cursor: pointer;
  margin-top: 2px;
  box-shadow: 0px 4px 7px 0px;
  li {
    list-style-type: none;
  }
  li:hover {
    background: #ddd;
  }
}
</style>