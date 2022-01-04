<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/blog.css" />
    <title>Blog Cuisinella</title>
</head>

<body>
    <?php include("header/header.php"); ?>
    <img src="https://zupimages.net/up/22/01/46s5.png" alt=""  style="width:100%;" />
    <main>
        <section >
            <h1 class="h-1">ARTICLES</h1>
            <div class="header" align="center">
            <div>
                <h3 class="h-3">ENTREE</h3>
                <p class="particle">le blog culinaire pour les gourmands et les amoureux de la cuisine Francaise </p>
            </div>
            <div>
                <h3 class="h-3">PLAT</h3>
                <p class="particle">le blog culinaire pour les gourmands et les amoureux de la cuisine Francaise </p>
            </div>
            <div>
                <h3 class="h-3">DESSERT</h3>
                <p class="particle">le blog culinaire pour les gourmands et les amoureux de la cuisine Francaise </p>
            </div>
        </div>
        </section>
    </main>
    <div class="haut-de-page">
        <a href="#"><img src="https://zupimages.net/up/21/41/nngc.png"></a>
    </div>
    <?php include("footer/footer.php"); ?>
</body>

</html>