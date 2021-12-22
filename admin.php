<?php

session_start();
$bdd = new PDO('mysql:host=localhost;dbname=blog', 'root', '');


$req = $bdd->query('SELECT * FROM utilisateurs');
$Req = $bdd->query('SELECT * FROM categories');
$rEq = $bdd->query('SELECT * FROM articles');
$reQ = $bdd->query('SELECT * FROM commentaires');
$REQ = $bdd->query('SELECT * FROM droits');
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="blog.css" />
    <title>Livre-or</title>
</head>

<body>
    <?php include("headerblog.php"); ?>
    <main>
        <div>
            <h1 class="tarr"> BIENVENUE SUR VOTRE TABLEAU DE BORD ADMIN</h1>
        </div>  <section>
<h2 class="h2admin">Droits</h2>
        <table class="table">
            <thead>
                <tr>
                    <th class="th">ID</th>
                    <th class="th">NOM</th>
                    <th class="th">MODIFIER</th>
                    <th class="th">SUPPRIMER</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($rows = $REQ->fetch()) {
                    echo "<tr><th>$rows[id]</th>";
                    echo "<th>$rows[nom]</th>";
                    echo "<th><a href=\"modifierdroits.php?id=$rows[id]\">modifier</a></th>";
                    echo "<th><a href=\"supprimerdroits.php?id=$rows[id]\">supprimer</a></th></tr>";
                }
                ?>
            </tbody>
        </table>
        <button class="button" type="submit" name="connexion"><a href="creerdroits.php?id=<?php $rows['id'];?>\">Créer</a></button>
    </section>
        <section>
<h2 class="h2admin">Utilisateurs</h2>
        <table class="table">
            <thead>
                <tr>
                    <th class="th">ID</th>
                    <th class="th">LOGIN</th>
                    <th class="th">PASSWORD</th>
                    <th class="th">EMAIL</th>
                    <th class="th">ID_DROIT</th>
                    <th class="th">MODIFIER DROIT</th>
                    <th class="th">SUPPRIMER</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($rows = $req->fetch()) {
                    echo "<tr><th>$rows[id]</th>";
                    echo "<th>$rows[login]</th>";
                    echo "<th>$rows[password]</th>";
                    echo "<th>$rows[email]</th>";
                    echo "<th>$rows[id_droits]</th>";
                    echo "<th><a href=\"modifieruser.php?id=$rows[id]\">modifier</a></th>";
                    echo "<th><a href=\"supprimeruser.php?id=$rows[id]\">supprimer</a></th></tr>";
                }
                ?>
            </tbody>
        </table>
        <button class="button" type="submit" name="connexion"><a href="creeruser.php?id=<?php $rows['id'];?>\">Créer</a></button>
    </section>
    <section>
<h2 class="h2admin">Categories</h2>
        <table class="table">
            <thead>
                <tr>
                    <th class="th">ID</th>
                    <th class="th">NOM</th>
                    <th class="th">MODIFIER</th>
                    <th class="th">SUPPRIMER</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($rows = $Req->fetch()) {
                    echo "<tr><th>$rows[id]</th>";
                    echo "<th>$rows[nom]</th>";
                    echo "<th><a href=\"modifiercategorie.php?id=$rows[id]\">modifier</a></th>";
                    echo "<th><a href=\"supprimercategorie.php?id=$rows[id]\">supprimer</a></th></tr>";
                }
                ?>
            </tbody>
        </table>
        <button class="button" type="submit" name="connexion"><a href="creercategorie.php?id=<?php $rows['id'];?>\">Créer</a></button>
    </section>
        <section>
<h2 class="h2admin">Articles</h2>
        <table class="table">
            <thead>
                <tr>
                    <th class="th">ID</th>
                    <th class="th">ARTICLE</th>
                    <th class="th">ID_UTILISATEUR</th>
                    <th class="th">ID_CATEGORIE</th>
                    <th class="th">DATE</th>
                    <th class="th">MODIFIER</th>
                    <th class="th">SUPPRIMER</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($rows = $rEq->fetch()) {
                    echo "<tr><th>$rows[id]</th>";
                    echo "<th>$rows[article]</th>";
                    echo "<th>$rows[id_utilisateur]</th>";
                    echo "<th>$rows[id_categorie]</th>";
                    echo "<th>$rows[date]</th>";
                    echo "<th><a href=\"modifierprofil.php?id=$rows[id]\">modifier</a></th>";
                    echo "<th><a href=\"supprimerprofil.php?id=$rows[id]\">supprimer</a></th></tr>";
                }
                ?>
            </tbody>
        </table>
        <button class="button" type="submit" name="connexion"><a href="">Créer</a></button>
    </section>
        <section>
<h2 class="h2admin">Commentaires</h2>
        <table class="table">
            <thead>
                <tr>
                    <th class="th">ID</th>
                    <th class="th">COMMENTAIRE</th>
                    <th class="th">ID_ARTICLE</th>
                    <th class="th">ID_UTILISATEUR</th>
                    <th class="th">DATE</th>
                    <th class="th">MODIFIER</th>
                    <th class="th">SUPPRIMER</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($rows = $reQ->fetch()) {
                    echo "<tr><th>$rows[id]</th>";
                    echo "<th>$rows[commentaire]</th>";
                    echo "<th>$rows[id_article]</th>";
                    echo "<th>$rows[id_utilisateur]</th>";
                    echo "<th>$rows[date]</th>";
                    echo "<th><a href=\"modifier.php?id=$rows[id]\">modifier</a></th>";
                    echo "<th><a href=\"supprimerprofil.php?id=$rows[id]\">supprimer</a></th></tr>";
                }
                ?>
            </tbody>
        </table>
        <button class="button" type="submit" name="connexion"><a href="">Créer</a></button>
    </section>
  
    </main>
    <div class="haut-de-page">
        <a href="#"><img src="https://zupimages.net/up/21/41/nngc.png"></a>
    </div>
    <?php include("footerblog.php"); ?>
</body>

</html>