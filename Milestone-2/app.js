let app = new Vue({
  el: "#app",
  data: {
    arrayDischi: [],
    search: "",
  },

  methods: {
    filtroDischi: function () {
      axios
        .get(`http://localhost:8888/Boolean/php-ajax-dischi/Milestone-2/database.php?genere=${this.search}`)
        .then((response) => {
          // handle success

          this.arrayDischi = response.data;
          console.log(this.arrayDischi);
          this.search = "";
        })
        .catch((error) => {
          // handle error
          console.log(error);
        });
    },

    getDischi: function () {
      axios
        .get("http://localhost:8888/Boolean/php-ajax-dischi/Milestone-2/database.php")
        .then((response) => {
          // handle success

          this.arrayDischi = response.data;
          console.log(this.arrayDischi);
        })
        .catch((error) => {
          // handle error
          console.log(error);
        });
    },
  },

  mounted() {
    this.getDischi();
  },
});
