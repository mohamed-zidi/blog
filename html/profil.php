<?php
include '../traitement_php/profil_traitment.php';
// echo $_SESSION['mail'];
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
    <?php include '../header/header.php'; ?>
    <main id="formcenter">
        <form class="form2" action="../traitement_php/profil_traitment.php" method="post">
        <?php if(isset($_SESSION['affichage'])){ ?>
        
        <p class="affichage-erreur"><?php echo $_SESSION['affichage']; ?></p>

        <?php } ?>
            <div class="modification-form1">
            <b><label for="newlogin">Entrez votre login:</label></b><br>
            <input type="text" name="oldlogin" id="oldlogin">

            <b><label for="newlogin">Entrez votre nouveau login:</label>
            <input type="text" name="newlogin" id="newlogin">
            <input type="submit" value="Valider"  name="btn_profil">
            </div>
            <div class="modification-form2">
            <b><label for="newmdp">Entrez votre mot de passe:</label></b>
            <input type="password" name="oldmdp" id="oldmdp">

            <b><label for="newmdp">Entrez votre nouveau mot de passe:</label></b>
            <input type="password" name="newmdp" id="newmdp">

            <b><label for="newmdp2">Confirmez votre nouveau mot de passe:</label></b>
            <input type="password" name="newmdp2" id="newmdp2">

            <input type="submit" value="Valider" name="btn_password">
            </div>
            <div class="modification-form3">
            <b><label for="oldmail">Entrez votre mail:</label></b>
            <input type="email" name="oldmail" id="oldmail">

            <label for="newmail">Entrez votre nouveau mail:</label>
            <input type="email" name="newmail" id="newmail">


            <input type="submit" value="Valider" name="btn_mail">
            </div>


        </form>


    </main>

    <?php include("../footer/footer.php"); ?>
</body>
</html>
