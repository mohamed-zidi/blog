<?php
session_start();

include 'connexion_bdd/connexion-bdd.php';

$reqarticles = $bdd->query("SELECT * FROM articles ORDER BY id DESC  LIMIT 0,3 ");
$reqarticles->execute(array());
$row = $reqarticles->rowCount();
$datta = $reqarticles->fetchAll(PDO::FETCH_ASSOC);

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
    <?php include("header/header_index.php"); ?>
    <img src="https://zupimages.net/up/22/01/46s5.png" alt="" style="width:100%;" />
    <main>
        <section>
            <h1 class="h-1">ARTICLES</h1>
            <div class="header" align="center">
                <article >
                <div class="articles-1">
                        <?php
                        foreach ($datta as $key) {?>
                            <div class="article-1">
                           <?php  echo "<p>$key[article]</p>";?>
                          </div>
                        <?php } ?>
                  </div>
                    <div class="articles-2">
                        <?php
                        foreach ($datta as $key) {
                            echo "<p>$key[date]</p>";
                        }
                        ?>
                    </div>
                    <p class="suite-art"><a href="html/articles.php">Voir la suite ...<a></p>
                </article>
            </div>
        </section>
    </main>
    <div class="haut-de-page">
        <a href="#"><img src="https://zupimages.net/up/21/41/nngc.png"></a>
    </div>
    <?php include("footer/footer_index.php"); ?>
</body>

</html>