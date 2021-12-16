<?php
include '../traitement_php/inscription_traitement.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>
<body>

    <?php include '../header/header.php'; ?>

    <main>
        <form action="../traitement_php/inscription_traitement.php" method="post">
            <label for="login">Ajoutez votre login</label>
            <input type="text" name="login" id="login">

            <label for="mail"> Ajoutez votre email</label>
            <input type="email" name="mail" id="mail">

            <label for="mdp">Entrez votre mot de passe:</label>
            <input type="password" name="mdp" id="mdp">

            <label for="mdp2">Confirmez votre mot de passe:</label>
            <input type="password" name="mdp2" id="mdp2">

            <input type="submit" value="S'inscrire" name="valider">

    </form>
</body>
</html>