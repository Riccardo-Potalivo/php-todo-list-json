const { createApp } = Vue;

createApp({
  data() {
    return {
      apiUrl: "server.php",
      todoList: [],
      newTask: "",
    };
  },

  methods: {
    readList() {
      axios.get(this.apiUrl).then((res) => {
        // console.log(res.data[0].text);
        this.todoList = res.data;
      });
    },

    addTask() {
      console.log(this.newTask);

      if (this.newTask === "") {
        return;
      }

      const task = new FormData();
      task.append("addtask", this.newTask);
      task.append("done", false);

      axios.post(this.apiUrl, task).then((res) => {
        console.log(res.data[0].text);
        this.todoList = res.data;
      });
    },
  },

  mounted() {
    this.readList();
  },
}).mount("#app");
