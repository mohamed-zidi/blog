<?php
include '../traitement_php/connexion_traitement.php';
session_start();
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
    <div class="retour">
<button class="buttonform" onclick="window.location.href='../index.php'">Retourner à l'acceuil</button>
    </div>
    <main id="formcenter">
        <form class="form" action="../traitement_php/connexion_traitement.php" method="post">
            <h1 class="h_1">Connectez-vous à votre<br> compte Cuisinella</h1>
            <div>
                <label for="connexion">Entrez votre login : </label><br>
                <input type="text" name="loginconnexion" id="loginconnexion" required>
            </div>

            <div>
                <label for="mdpconnexion" class="form-label">Votre mot de passe :</label><br>
                <input type="password" name="mdpconnexion" id="mdpconnexion" required>
            </div>
            <div align="center">
                <input type="submit" value="Se connecter" name="connexion">
            </div>
            <?php if (isset($_SESSION['erreur'])) { ?>

                <p>
                    <?php echo $_SESSION['erreur'];
                    unset($_SESSION['erreur']);
                    ?>
                <?php } ?>
                </p>
                <p align="center">Pour nous rejoindre. <a class="connect-here" href="../html/inscription.php">Créer un compte</a></p>
        </form>
    </main>
    <p class="copy">Copyright©2021 Cuisinella. Tous droits réservés.</p>
</body>

</html>