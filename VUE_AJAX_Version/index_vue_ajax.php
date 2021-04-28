<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
    <title>Document</title>
</head>

<body>

    <div id="root">

        <!-- -----HEADER----- -->

        <header>

            <img src="img/spotify_logo.png" alt="">

            <div class="artist_filter">

                <select v-model= "selectedArtist">

                    <option value="">All artists</option>

                    <option v-for="author in authors">{{author}}</option>

                </select>

            </div>    

        </header>

        <!-- -----MAIN----- -->

        <main>

            <div class="main_container">

                <div class="disc_item" v-for="element in database" v-if="selectedArtist == element.author || selectedArtist == ''">

                    <img class="cover" :src="element.poster" alt="">

                    <h3 class="title">{{element.title}}</h3>

                    <span class="author">{{element.author}}</span>

                    <span class="year">{{element.year}}</span>

                </div>

            </div>

        </main>

    </div>


    <script src="js/script.js"></script>

</body>

</html>