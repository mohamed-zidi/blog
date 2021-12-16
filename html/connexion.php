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
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>

<body>

    <?php include '../header/header.php'; ?>

    <main>
    <form action="../traitement_php/connexion_traitement.php" method="post">

    <div>
    <label for="connexion" >Entrez votre login : </label>
    <input type="text" name="loginconnexion" id="loginconnexion">
    </div>

    <div>
    <label for="mdpconnexion" class="form-label">Votre mot de passe :</label>
    <input type="password" name="mdpconnexion" id="mdpconnexion">
    </div>

    <input type="submit" value="Se connecter" name="connexion">

    </form>


    <?php if(isset($_SESSION['erreur'])){ ?>

    <p> <?php echo $_SESSION['erreur']; ?> </p>

    <?php } ?>
    </main>

</body>
</html>