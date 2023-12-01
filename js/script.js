const { createApp } = Vue;

createApp({
  data() {
    return {
      apiUrl: "server.php",
      todoList: [],
    };
  },

  methods: {
    readList() {
      axios.get(this.apiUrl).then((res) => {
        console.log(res.data[0].text);
        this.todoList = res.data;
      });
    },
  },

  mounted() {
    this.readList();
  },
}).mount("#app");
