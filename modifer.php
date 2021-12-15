<?php
session_start();

$bdd = new PDO('mysql:host=localhost;dbname=blog', 'root', '');

if (isset($_SESSION['login'])) {

    $userid = $_GET['id'];
    var_dump($_GET);

    $req = $bdd->query("UPDATE `utilisateurs` SET login='$_POST[login]', password= '$_POST[login]', email = '$_POST[email]' WHERE id = '$userid'");
    $req->execute(array());
    $rows = $req->fetch();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <main>
        <div align="center">
            <div>
                <h1 class="h1-">Vous etes sur le point de modifier les informations de l'utilisateurs <?php echo $userlogin; ?></h1>
                <form class="form" method="POST">
                    <table class="form-inpute">
                        <tr>
                        <tr>
                            <td>
                                <label>Identifiant</label>
                                <input type="text" name="login" id="newlogin" value="<?php echo $_Get['login']; ?>" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Nom</label>
                                <input type="text" name="login" id="newlogin" value="<?php echo $_Get['login']; ?>" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Ancien mot de passe</label>
                                <input type="password" name="password" id="password" placeholder="Ancien mot de passe" minlength="8" required />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Nouveau mot de passe</label>
                                <input type="password" name="newmdp" id="newmdp placeholder=" Nouveau mot de passe" required />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Confirmer mot de passe</label>
                                <input type="password" name="newmdp2" id="newmdp2 placeholder=" Confirmer mot de passe" required />
                            </td>
                        </tr>
                        <tr>
                            <td align="center">
                                <button class="button" type="submit" name="modifier">Modifier</button>
                            </td>
                        </tr>
                    </table>
                </form>
                <?php if (isset($changelogin)) { ?>
                    <p> <?php echo $changelogin; ?> </p>

                <?php } elseif (isset($changemdp)) { ?>

                    <p> <?php echo $changemdp; ?> </p>

                <?php } ?>

    </main>
</body>

</html>