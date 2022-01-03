<?php
session_start();
include '../blog/connexion_bdd/connexion-bdd.php';
include '../blog/articles-traitement.php';

$check = $bdd->query("SELECT * FROM categories");
$check->execute(array());
$row = $check->rowCount();
$data = $check->fetchAll(PDO::FETCH_ASSOC);

if (isset($_GET['appliquer'])) {

    if (!empty($_GET['categorie'])) {

        $categorie = $_GET['categorie'];

        $firstOfPage = ($current - 1) * $perPage;
        $reqarticles = $bdd->query("SELECT * FROM articles WHERE id_categorie = '$categorie' ORDER BY id DESC LIMIT $firstOfPage,$perPage ");
        $reqarticles->execute(array());
        $row = $reqarticles->rowCount();
        $datta = $reqarticles->fetchAll(PDO::FETCH_ASSOC);
  
    }
    foreach ($datta as $key) {
        "<p>" . $key['article'] . "</p>";

        $article = $key['article'];
    }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="../blog/css/blog.css">
</head>

<body>
    <header>

 <?php include '../blog/header/header.php'; ?>
     
    </header>

    <form method="GET">
        <label>Trier les articles par catégorie :</label>
        <select name="categorie" id="categorie">
            <?php foreach ($data as $categorie) { ?>

                <option value="<?php echo $categorie['id']; ?>"> <?php echo $categorie['nom']; ?> </option>

            <?php  } ?>
        </select>
        <button type="submit" name="appliquer" value="1">Appliquer</button><br><br>

        <?php
        if (isset($_GET['appliquer']) == true) {
            echo $article;
        }
        ?>

    </form>

    <main>
        <article>
            <div class="articles">
                <?php
                foreach ($reqarticles as $key) {
                    echo "<p>  $key[article]</p>";
                }
                ?>
            </div>
        </article>
        <ul class="pagination">
            <li class="<?php if ($current == '1') {
                            echo "disabled";
                        } ?>"><a href="articles.php?p=<?php if ($current != '1') {
                                                            echo $current - 1;
                                                        } else {
                                                            echo $current;
                                                        } ?>">&laquo;</a></li>
            <?php
            for ($i = 1; $i <= $nbPage; $i++) {
                if ($i == $current) {
            ?>
                    <li class="active"><a href="?p=<?php echo $i ?>"><?php echo $i ?> </a></li>
                <?php
                } else {
                ?>
                    <li><a href="?p=<?php echo $i ?>"><?php echo $i ?> </a></li>
            <?php
                }
            }
            ?>
            <li class="<?php if ($current == $nbPage) {
                            echo "disabled";
                        } ?>"><a href="articles.php?p=<?php if ($current != $nbPage) {
                                                            echo $current + 1;
                                                        } else {
                                                            echo $current;
                                                        } ?>">&raquo;</a></li>
        </ul>
    </main>


    <footer>
        <?php include '../blog/footer/footer.php'; ?>
    </footer>
</body>

</html>