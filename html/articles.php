<?php

session_start();
include '../connexion_bdd/connexion-bdd.php';
include '../traitement_php/articles-traitement.php';


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="../css/blog.css">
</head>

<body>
    <header>

        <?php include '../header/header.php'; ?>

    </header>
    
    <h1 class="titre-articles">Tous les articles du blog</h1>
    <form class="select-categorie" method="POST">
        <img class="icone-tri" src="https://zupimages.net/up/22/02/rjz6.png">
        <label class="tri-categorie">Trier les articles par catégorie :</label>
        <select name="categorie" id="categorie">
        <option></option>

            <?php foreach ($data as $key => $categorie) { ?>



                <option value="<?= $categorie['id']; ?>"> <?= $categorie['nom']; ?> </option>

            <?php  } ?>

        </select>

        <button class="button-appliquer" type="submit" name="appliquer" value="appliquer">Appliquer</button>

        <?php



        ?>

    </form>

    <main>
        <article>
            <?php


            if (isset($_POST['appliquer']) || isset($_GET['categorie'])) { ?>

                <form action="" method="post">
                    <button class="button-quitter" type="submit" name="retour" value="retour">Revenir aux articles</button>
                </form>



                <?php
                foreach ($articles2 as $article2) {
                ?>
                    <div class="wrapper">
                        <?= $article2['article']; ?>

                    </div>
                <?php
                }

                ?>
                <div class="pagination-flex">
                <?php
                if ($current_page2 != '1') {
                ?>
                    <!-- <div class="pagination-flex"> -->
                    <!-- <div class="taille-pagination"> -->
                    <li class="espace-pagination1"><a id="linka" href="articles.php?page=<?= $current_page2 - 1 ?>&categorie=<?= $id_cat ?>">Précédente</a></li>

                <?php }

                ?>

                <!-- <div class="pagination-flex"> -->
                <?php for ($page2 = 1; $page2 <= $pages2; $page2++) : ?>
                    <?php if ($page2 != $current_page2) : ?>
                        <li> <a id="linka" href="articles.php?p=<?= $page2 ?>&categorie=<?= $id_cat ?>"><?= $page2 ?></a></li>
                    <?php endif ?>
                <?php endfor ?>
                <!-- </div> -->
                <?php
                if ($current_page2 != $pages2 && $current_page2 <= $pages2) {
                ?>
                    <li class="espace-pagination2"><a id="linka" href="articles.php?page=<?= $current_page2 + 1 ?>&categorie=<?= $id_cat ?>">Suivante</a> </li>

                <?php }
                ?>

             </div>
        </article>

        <?php } else {

                // echo $pages;
                foreach ($articles as $article) {
        ?>
            <div class="wrapper">
                <?= $article['article']; ?>
            </div>

        <?php
                }

        ?>
        </div>
        <div class="pagination-flex">
        <?php

                if ($current_page != '1') {
        ?>
                <li class="espace-pagination1"><a id="linka" href="articles.php?page=<?= $current_page - 1 ?>">Précédente</a></li>

            <?php }

            ?>
            <!-- <div class="taille-pagination"> -->
            <?php for ($page = 1; $page <= $pages; $page++) : ?>
                <?php if ($page != $current_page) : ?>
                    <li> <a id="linka" href="articles.php?page=<?= $page ?>"><?= $page ?></a></li>
                <?php endif ?>
            <?php endfor ?>
            <!-- </div> -->
            <?php
                if ($current_page != $pages) {
            ?>
                <li class="espace-pagination2"><a id="linka" href="articles.php?page=<?= $current_page + 1 ?>">Suivante</a> </li>

            <?php }
            ?>
        <?php } ?>
            </div>

    </main>


    <footer>
        <?php include '../footer/footer.php'; ?>
    </footer>
</body>

</html>