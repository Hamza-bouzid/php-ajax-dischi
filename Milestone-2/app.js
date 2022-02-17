let app = new Vue({
  el: "#app",
  data: {
    arrayDischi: [],
  },

  mounted() {
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
});
