var app = new Vue({

    el: "#root",

    data: {

        database: [],

        authors: [],

        selectedArtist: "",
    },

    mounted() {

        axios

        .get("server.php")

        .then((result) => {

            this.database= result.data;

            this.database.forEach(element => {

                if (!this.authors.includes(element.author)) {

                    this.authors.push(element.author)
                }
            });
        });
    }
});