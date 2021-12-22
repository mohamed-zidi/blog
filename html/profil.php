<?php
include '../traitement_php/profil_traitment.php';

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
        <form action="../traitement_php/profil_traitment.php" method="post">

            <label for="newlogin">Entrez votre login:</label>
            <input type="text" name="oldlogin" id="oldlogin">

            <label for="newlogin">Entrez votre nouveau login:</label>
            <input type="text" name="newlogin" id="newlogin">


            <input type="submit" value="Valider"  name="btn_profil">

        </form>

        <form action="../traitement_php/profil_traitment.php" method="post">

            <label for="newmdp">Entrez votre mot de passe:</label>
            <input type="password" name="oldmdp" id="oldmdp">

            <label for="newmdp">Entrez votre nouveau mot de passe:</label>
            <input type="password" name="newmdp" id="newmdp">

            <label for="newmdp2">Confirmez votre nouveau mot de passe:</label>
            <input type="password" name="newmdp2" id="newmdp2">

            <input type="submit" value="Valider" name="btn_password">

        </form>

        <form action="../traitement_php/profil_traitment.php" method="post">

            <label for="oldmail">Entrez votre mail:</label>
            <input type="email" name="oldmail" id="oldmail">

            <label for="newmail">Entrez votre nouveau mail:</label>
            <input type="email" name="newmail" id="newmail">


            <input type="submit" value="Valider" name="btn_mail">

        </form>


        <?php if(isset($_SESSION['affichage'])){ ?>

        <p> <?php echo $_SESSION['affichage']; 
                  unset($_SESSION['affichage']);  
            ?>
        </p>

        <?php } ?>

    </main>
</body>
</html>