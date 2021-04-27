<?php
include __DIR__. '/database.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- GOOGLE FONTS NOTO SANS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <!-- STYLESHEET CSS -->
    <link rel="stylesheet" href="css/styles.css">
    <title>PHP Ajax Dischi</title>
</head>

<body class="">

    <header>
        <div class="main-wrapper">
            <img class="logo" src="img/spotify_logo.svg" alt="">
        </div>
    </header>

    <main>
        <div class="main-wrapper">
            <div class="album-container">
                
                <?php
                    foreach ($database as $album) { ?>

                    <div class="album-item">
                        <div class="album-poster">
                            <img src="<?php echo $album['poster']?>" alt="">
                        </div>
                        
                        <div class="album-info">
                            <h2><?php echo $album['title']?></h2>
                            <h4 class="margin-30"><?php echo $album['year']?></h4>
                            <h3><?php echo $album['author']?></h3>
                        </div>
                    </div>
                <?php 
                    } 
                ?>

            </div>
        </div>
    </main>

</body>

</html>