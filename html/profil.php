<?php
include '../traitement_php/profil_traitment.php';
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
        <form class="form2" action="" method="post">
            <h1>Vous etes sur le point de modifier vos informations <?php echo $_SESSION["login"]; ?></h1>
            <h3 style="color: red;">
                <? if ($re == true) {
                    echo  "vos information ont été modifier avec succès";
                } else {
                    echo "veuillez réessayer vos modifications";
                } ?></h3>
            <table class="form-input">
                <tr>
                    <td>
                        <label>Identifiant</label>
                        <input type="text" name="newlogin" value='<?php echo $login ?>' />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Email</label>
                        <input type="text" name="newmail"  value="<?php echo $_SESSION['mail'] ?>"   />
                    </td>
                </tr>
                    <td>
                        <label>Nouveau mot de passe</label>
                        <input type="password" name="newpass" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Confirmation nouveau mot de passe</label>
                        <input type="password" name="newpass2" />
                    </td>
                </tr>
                <tr>
                    <td align="center">
                        <button type="submit" name="modifier">Modifier</button>

                    </td>

                </tr>
            </table>
                <?php 
                if(isset($_SESSION['affichage'])){
                    echo $_SESSION['affichage'];
                }
                ?>
        </form>
    </main>

    <?php include("../footer/footer.php"); ?>
</body>

</html>
