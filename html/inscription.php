<?php
session_start();
include '../traitement_php/inscription_traitement.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/blog.css">
    <title>Document</title>
</head>

<body>

    <main id="formcenter">
        <form action="" method="post">
            <h1 class="h_1">Créer votre compte <br> Cuisinella</h1>
            <div>
                <label for="login">Ajoutez votre login</label>
                <input type="text" name="login" id="login" required>
            </div>
            <div>
                <label for="mail"> Ajoutez votre email</label>
                <input type="email" name="mail" id="mail" required>
            </div>
            <div>
                <label for="mdp">Entrez votre mot de passe:</label>
                <input type="password" name="mdp" id="mdp" required>
            </div>
            <div>
                <label for="mdp2">Confirmez votre mot de passe:</label>
                <input type="password" name="mdp2" id="mdp2" required>
            </div>
            <div align="center">
                <input type="submit" value="S'inscrire" name="valider">
            </div>
        </form>


        <?php if (isset($_SESSION['affichage'])) { ?>

            <p>
                <?php
                echo $_SESSION['affichage'];
                unset($_SESSION['affichage']);
                ?>
            </p>
        <?php } ?>
    </main>
    <p class="copy">Copyright©2021 Cuisinella. Tous droits réservés.</p>
</body>

</html>


