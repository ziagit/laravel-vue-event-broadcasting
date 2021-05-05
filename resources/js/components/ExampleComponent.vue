<template>
  <div class="container">
    <form @submit.prevent="submit">
      <input type="text" v-model="form.title" />
      <input type="text" v-model="form.body" />
      <input type="submit" Value="Upload" />
    </form>
    <ul>
      <h3>List of posts here</h3>
      <li v-for="post in posts" :key="post.id">
        <span>{{post.title}}</span> : <span>{{post.body}}</span>
      </li>
    </ul>
  </div>
</template>
  <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script>
import axios from "axios";
export default {
  data: () => ({
    form: {
      title: null,
      body: null,
    },
    posts:[]
  }),
  created() {

  },
  mounted() {
    let $vm = this;
    Pusher.logToConsole = true;
    var pusher = new Pusher("3f2f3fb45b19fc192e64", {
      cluster: "mt1",
    });
    var channel = pusher.subscribe("my-channel");
    channel.bind("my-event", (e) => {
      $vm.posts.push(e.post);
      console.log("post created: ", e.post);
    });
  },
  methods: {
    submit() {
      axios
        .post("http://localhost:8000/api/upload", this.form)
        .then((res) => {
          console.log("Response", res.data);
        })
        .catch((err) => console.log(err));
    },
  },
};
</script>
