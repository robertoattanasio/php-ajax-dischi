<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- AXIOS LIBRARY -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous"></script>

    <!-- VUE JS -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12"></script> -->

    <!-- GOOGLE FONTS NOTO SANS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <!-- STYLESHEET CSS -->
    <link rel="stylesheet" href="css/styles.css">
    <title>PHP Ajax Dischi</title>
</head>

<body class="">
    <div id="root">

        <?php 
        include __DIR__.'/partials/header.php';
        ?>

        <main>
            <div class="main-wrapper">
                <div class="album-container">

                    <div class="album-item" v-for="album in albumList">
                        <div class="album-poster">
                            <img :src="album.poster" alt="">
                        </div>

                        <div class="album-info">
                            <h2>{{album.title}}</h2>
                            <h4 class="margin-30">{{album.year}}</h4>
                            <h3>{{album.author}}</h3>
                        </div>
                    </div>
                </div>
                
            </div>
        </main>
    </div>

    <script src="js/main.js"></script>
</body>

</html>