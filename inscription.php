<?php
include '../traitement_php/inscription_traitement.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include '../header/header.php'; ?>
    <main class="main-connexion">
        <div class="center">
            <h1>Inscription</h1>
            <form action="../traitement_php/inscription_traitement.php" method="post">
                <div class="txt_field">
                    <input type="text" name="login" id="login">
                    <label for="login">Votre login</label>
                    <span></span>
                    <label for="login">Votre login</label>
                </div>

                <div class="txt_field">
                    <input type="email" name="mail" id="mail">
                    <span></span>
                    <label for="mail"> Votre email</label>
                </div>

                <div class="txt_field">
                    <input type="password" name="mdp" id="mdp">
                    <span></span>
                    <label for="mdp">Votre mot de passe:</label>
                </div>

                <div class="txt_field">
                    <input type="password" name="mdp2" id="mdp2">
                    <span></span>
                    <label for="mdp2">Confirmez votre mot de passe:</label>
                </div>

                <input type="submit" value="S'inscrire" name="valider">
                <div class="signup_link">Vous avez déjà un compte? <a href="connexion.php">Se connecter</a></div>
            </form>
        </div>
    </main>
    <?php include '../footer/footer.php'; ?>
</body>

</html>