var app = new Vue({

    el: "#root",

    data: {

        albumsDatabase: [],

        authors: [],

        selectedAuthor: "",
    },

    mounted() {

        this.getAlbums();

        this.getAuthors();
    },

    methods: {

        getAlbums: function() {

            axios 

            .get("server.php?call=allAlbums")

            .then(result => {

                this.albumsDatabase = result.data;
            });
        },

        getAuthors: function() {

            axios 

            .get("server.php?call=allAuthors")

            .then(result => {

                this.authors = result.data;
            });
        },

        getFilteredAuthors: function() {

            axios 

            .get("server.php?call=filteredAuthors&author=" + this.selectedAuthor)

            .then(result => {

                this.albumsDatabase = result.data;
            });
        }
    }
});