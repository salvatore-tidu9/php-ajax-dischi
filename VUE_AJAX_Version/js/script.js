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

            this.filterAuthors();
        });
    },

    methods: {

        filterAuthors() {

            axios

            .get("server.php?listAuthors=true")

            .then((result) => {

                this.authors = result.data;
            });
        }
    }
});